<?php

namespace Practice\Lesson\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Practice\Lesson\Model\Post', 'Practice\Lesson\Model\ResourceModel\Post');
    }

    // public function getModel($data) {
    //     $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    //     $this->_objectManager = $objectManager;
    //     $model = $this->_objectManager->create('Practice\Lesson\Model\Post');
    //     $model->insertDataByResource($data);
    // }
} 
