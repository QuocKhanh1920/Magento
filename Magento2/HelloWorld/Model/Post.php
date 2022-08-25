<?php

namespace Magento2\HelloWorld\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Magento2\HelloWorld\Api\Data\ViewInterface;

/**
 * Class File
 * @package Magento2\HelloWorld\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */


class Post extends AbstractModel implements ViewInterface, IdentityInterface
{
	/**
	 * Cache tag
	 */
	const CACHE_TAG = 'magento2_helloworld_post';

	/**
	 * Post Initialization
	 * @return void
	 */

	protected function _construct()
	{
		$this->_init('Magento2\HelloWorld\Model\ResourceModel\Post');
	}

	/**
	 * Get Height
	 *
	 * @return string|null
	 */
	public function getHeight()
	{
		return $this->getData(self::HEIGHT);
	}

	/**
	 * Get Weight
	 *
	 * @return string|null
	 */
	public function getWeight()
	{
		return $this->getData(self::WEIGHT);
	}

	/**
	 * Get Product Price
	 *
	 * @return string|null
	 */
	public function getProductPrice()
	{
		return $this->getData(self::PRODUCT_PRICE);
	}

	/**
	 * Get ID
	 *
	 * @return int|null
	 */
	public function getId()
	{
		return $this->getData(self::ID);
	}

	/**
	 * Return identities
	 * @return string[]
	 */
	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	/**
	 * Set TitHeightle
	 *
	 * @param string $height
	 * @return $this
	 */
	public function setHeight($height)
	{
		return $this->setData(self::HEIGHT, $height);
	}

	/**
	 * Set Content
	 *
	 * @param string $weight
	 * @return $this
	 */
	public function setWeight($weight)
	{
		return $this->setData(self::WEIGHT, $weight);
	}

	/**
	 * Set Product Price
	 *
	 * @param string $productPrice
	 * @return $this
	 */
	public function setProductPrice($productPrice)
	{
		return $this->setData(self::PRODUCT_PRICE, $productPrice);
	}

	/**
	 * Set ID
	 *
	 * @param int $id
	 * @return $this
	 */
	public function setId($id)
	{
		return $this->setData(self::ID, $id);
	}
}
