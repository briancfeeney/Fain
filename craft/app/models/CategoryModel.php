<?php
namespace Craft;

/**
 * Category model class.
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://buildwithcraft.com/license Craft License Agreement
 * @see       http://buildwithcraft.com
 * @package   craft.app.models
 * @since     2.0
 */
class CategoryModel extends BaseElementModel
{
	// Properties
	// =========================================================================

	/**
	 * @var string
	 */
	protected $elementType = ElementType::Category;

	// Public Methods
	// =========================================================================

	/**
	 * Returns the field layout used by this element.
	 *
	 * @return FieldLayoutModel|null
	 */
	public function getFieldLayout()
	{
		$group = $this->getGroup();

		if ($group)
		{
			return $group->getFieldLayout();
		}
	}

	/**
	 * Returns the URL format used to generate this element's URL.
	 *
	 * @return string|null
	 */
	public function getUrlFormat()
	{
		$group = $this->getGroup();

		if ($group && $group->hasUrls)
		{
			$groupLocales = $group->getLocales();

			if (isset($groupLocales[$this->locale]))
			{
				if ($this->level > 1)
				{
					return $groupLocales[$this->locale]->nestedUrlFormat;
				}
				else
				{
					return $groupLocales[$this->locale]->urlFormat;
				}
			}
		}
	}

	/**
	 * Returns whether the current user can edit the element.
	 *
	 * @return bool
	 */
	public function isEditable()
	{
		return craft()->userSession->checkPermission('editCategories:'.$this->groupId);
	}

	/**
	 * Returns the category's group.
	 *
	 * @return CategoryGroupModel|null
	 */
	public function getGroup()
	{
		if ($this->groupId)
		{
			return craft()->categories->getGroupById($this->groupId);
		}
	}

	// Protected Methods
	// =========================================================================

	/**
	 * @return array
	 */
	protected function defineAttributes()
	{
		return array_merge(parent::defineAttributes(), array(
			'groupId' => AttributeType::Number,
		));
	}
}
