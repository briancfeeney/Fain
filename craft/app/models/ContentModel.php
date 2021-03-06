<?php
namespace Craft;

/**
 * Entry content model class.
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://buildwithcraft.com/license Craft License Agreement
 * @see       http://buildwithcraft.com
 * @package   craft.app.models
 * @since     2.0
 */
class ContentModel extends BaseModel
{
	// Properties
	// =========================================================================

	/**
	 * @var
	 */
	private $_requiredFields;

	/**
	 * @var
	 */
	private $_attributeConfigs;

	// Public Methods
	// =========================================================================

	/**
	 * Returns this model's normalized attribute configs.
	 *
	 * @return array
	 */
	public function getAttributeConfigs()
	{
		if (!isset($this->_attributeConfigs))
		{
			$this->_attributeConfigs = parent::getAttributeConfigs();
		}

		return $this->_attributeConfigs;
	}

	/**
	 * Sets the required fields.
	 *
	 * @param array $requiredFields
	 *
	 * @return null
	 */
	public function setRequiredFields($requiredFields)
	{
		$this->_requiredFields = $requiredFields;

		// Have the attributes already been defined?
		if (isset($this->_attributeConfigs))
		{
			foreach (craft()->fields->getAllFields() as $field)
			{
				if (in_array($field->id, $this->_requiredFields) && isset($this->_attributeConfigs[$field->handle]))
				{
					$this->_attributeConfigs[$field->handle]['required'] = true;
				}
			}

			if (in_array('title', $this->_requiredFields))
			{
				$this->_attributeConfigs['title']['required'] = true;
			}
		}
	}

	/**
	 * Validates the custom fields.
	 *
	 * @param array|null $attributes
	 * @param bool       $clearErrors
	 *
	 * @return bool
	 */
	public function validate($attributes = null, $clearErrors = true)
	{
		$validates = parent::validate($attributes, $clearErrors);

		foreach (craft()->fields->getAllFields() as $field)
		{
			$handle = $field->handle;

			if (is_array($attributes) && !in_array($handle, $attributes))
			{
				continue;
			}

			$value = $this->getAttribute($handle);

			// Don't worry about blank values. Those will already be caught by required field validation.
			if ($value)
			{
				$fieldType = $field->getFieldType();

				if ($fieldType)
				{
					$errors = $fieldType->validate($value);

					if ($errors !== true)
					{
						if (is_string($errors))
						{
							$this->addError($handle, $errors);
						}
						else if (is_array($errors))
						{
							foreach ($errors as $error)
							{
								$this->addError($handle, $error);
							}
						}

						$validates = false;
					}
				}
			}
		}

		return $validates;
	}

	// Protected Methods
	// =========================================================================

	/**
	 * @return array
	 */
	protected function defineAttributes()
	{
		$requiredTitle = (isset($this->_requiredFields) && in_array('title', $this->_requiredFields));

		$attributes = array(
			'id'        => AttributeType::Number,
			'elementId' => AttributeType::Number,
			'locale'    => array(AttributeType::Locale, 'default' => craft()->i18n->getPrimarySiteLocaleId()),
			'title'     => array(AttributeType::String, 'required' => $requiredTitle, 'maxLength' => 255),
		);

		if (craft()->isInstalled() && !craft()->isConsole())
		{
			foreach (craft()->fields->getAllFields() as $field)
			{
				$fieldType = $field->getFieldType();

				if ($fieldType)
				{
					$attributeConfig = $fieldType->defineContentAttribute();
				}

				// Default to Mixed
				if (!$fieldType || !$attributeConfig)
				{
					$attributeConfig = AttributeType::Mixed;
				}

				$attributeConfig = ModelHelper::normalizeAttributeConfig($attributeConfig);
				$attributeConfig['label'] = $field->name;

				if (isset($this->_requiredFields) && in_array($field->id, $this->_requiredFields))
				{
					$attributeConfig['required'] = true;
				}

				$attributes[$field->handle] = $attributeConfig;
			}
		}

		return $attributes;
	}
}
