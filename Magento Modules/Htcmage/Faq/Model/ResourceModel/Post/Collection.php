<?php

namespace Htcmage\Faq\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Htcmage\Faq\Model\Post', 'Htcmage\Faq\Model\ResourceModel\Post');
	}
}
