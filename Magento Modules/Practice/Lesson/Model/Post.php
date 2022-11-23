<?php

namespace Practice\Lesson\Model;

class Post extends \Magento\Framework\Model\AbstractModel
{

    protected function _construct()
    {
        $this->_init('Practice\Lesson\Model\ResourceModel\Post');
    }

    public function insertDataByResource($data)
    {
        $resourse = $this->getResource();
        $resourse->insertData($data);
    }
}
