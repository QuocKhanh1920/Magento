<?php

namespace Practice\Lesson\Model\ResourceModel;


class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	) {
		parent::__construct($context);
	}

	protected function _construct()
	{
		$this->_init('practice_lesson_post', 'id');
	}

	public function insertData($data)
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST["name"];

			$content = $_POST["content"];

			$connection = $this->getConnection();
			$tableName = $this->getMainTable();
			$sql = "Insert Into " . $tableName . " (name, content) Values ('".$name."','".$content."')";
			$connection->query($sql);
		}
	}
}
