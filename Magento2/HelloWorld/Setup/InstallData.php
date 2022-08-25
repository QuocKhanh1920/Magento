<?php

namespace Magento2\HelloWorld\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_postFactory;

	public function __construct(\Magento2\HelloWorld\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
			'height' => "1m39 - 1m43",
			'weight' => "30 - 35kg",
			'product_price' => "40000",

			// [
			// 	'height' => "1m55 - 1m59",
			// 	'weight' => "40 - 44kg",
			// 	'product_price' => "80000",
			// ],

			// [
			// 	'height' => "1m60 - 1m64",
			// 	'weight' => "45 - 55kg",
			// 	'product_price' => "100000",
			// ],

			// [
			// 	'height' => "1m65 - 1m69",
			// 	'weight' => "56 - 65kg",
			// 	'product_price' => "120000",
			// ],

			// [
			// 	'height' => "1m70 - 1m74",
			// 	'weight' => "66 - 74kg",
			// 	'product_price' => "140000",
			// ],

			// [
			// 	'height' => "1m75 - 1m79",
			// 	'weight' => "75 - 82kg",
			// 	'product_price' => "160000",
			// ],

		];
		$post = $this->_postFactory->create();
		$post->addData($data)->save();
	}
}
