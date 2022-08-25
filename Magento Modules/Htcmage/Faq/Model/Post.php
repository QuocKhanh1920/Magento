<?php

namespace Htcmage\Faq\Model;

class Post extends \Magento\Framework\Model\AbstractModel
{
	protected function _construct()
	{
		$this->_init('Htcmage\Faq\Model\ResourceModel\Post');
	}
}
