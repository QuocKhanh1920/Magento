<?php
namespace Magento2\HelloWorld\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Magento2\HelloWorld\Model\Post', 'Magento2\HelloWorld\Model\ResourceModel\Post');
	}

}