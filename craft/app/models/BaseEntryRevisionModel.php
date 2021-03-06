<?php
namespace Craft;

craft()->requireEdition(Craft::Client);

/**
 * Class BaseEntryRevisionModel
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://buildwithcraft.com/license Craft License Agreement
 * @see       http://buildwithcraft.com
 * @package   craft.app.models
 * @since     1.3
 */
class BaseEntryRevisionModel extends EntryModel
{
	// Public Methods
	// =========================================================================

	/**
	 * Sets the revision content.
	 *
	 * @param array $content
	 *
	 * @return null
	 */
	public function setContentFromRevision($content)
	{
		// Swap the field IDs with handles
		$contentByFieldHandles = array();

		foreach ($content as $fieldId => $value)
		{
			$field = craft()->fields->getFieldById($fieldId);

			if ($field)
			{
				$contentByFieldHandles[$field->handle] = $value;
			}
		}

		// Set the values and prep them
		$this->setContentFromPost($contentByFieldHandles);
	}

	/**
	 * Returns the draft's creator.
	 *
	 * @return UserModel|null
	 */
	public function getCreator()
	{
		return craft()->users->getUserById($this->creatorId);
	}

	/**
	 * Returns the element's full URL.
	 *
	 * @return string
	 */
	public function getUrl()
	{
		if ($this->uri === null)
		{
			ElementHelper::setUniqueUri($this);
		}

		return parent::getUrl();
	}

	// Protected Methods
	// =========================================================================

	/**
	 * @return array
	 */
	protected function defineAttributes()
	{
		return array_merge(parent::defineAttributes(), array(
			'creatorId'   => AttributeType::Number,
			'dateUpdated' => AttributeType::DateTime,
			'dateCreated' => AttributeType::DateTime,
		));
	}
}
