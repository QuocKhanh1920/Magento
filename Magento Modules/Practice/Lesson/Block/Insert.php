<?php

namespace Practice\Lesson\Block;

use Magento\Framework\View\Element\Template;

class Insert extends Template
{
    protected $_pageFactory;

    public function __construct(
         \Magento\Framework\View\Element\Template\Context $context,
         \Magento\Framework\View\Result\PageFactory $pageFactory
    ){
         $this->_pageFactory = $pageFactory;
         return parent::__construct($context);
    }

    public function execute()
    {
         return $this->_pageFactory->create();
    }
}