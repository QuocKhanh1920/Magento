<?php

namespace Magento2\HelloWorld\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use \Magento2\HelloWorld\Model\ResourceModel\Post\CollectionFactory as ViewCollectionFactory;

class Helloworld extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_viewCollectionFactory = null;

    /**
     * Constructor
     *
     * @param Context $context
     * @param ViewCollectionFactory $viewCollectionFactory
     * @param array $data
     */

    public function __construct(
        Context $context,
        
        ViewCollectionFactory $viewCollectionFactory,
        
        array $data = []
    ) {
        $this->_viewCollectionFactory  = $viewCollectionFactory;
        
        parent::__construct($context, $data);
    }

    /**
     * @return Post[]
     */
    public function getCollection()
    {
        /** @var ViewCollection $viewCollection */
        $viewCollection = $this->_viewCollectionFactory ->create();
        $viewCollection->addFieldToSelect('*')->load();
        return $viewCollection->getItems();
    }

    public function getTitle()
    {
        return '<h2>Welcome</h2>';
    }

    public function getGreeting()
    {
        return '<h2>Is this your first time?</h2>';
    }
}
