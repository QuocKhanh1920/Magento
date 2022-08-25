<?php

namespace Htcmage\Faq\Block;

use Magento\Framework\View\Element\Template;
use Htcmage\Faq\Model\PostFactory;

class Index extends Template
{
     public function __construct(
          Template\Context $context,
          PostFactory $postFactory
     ) {
          parent::__construct($context);
          $this->_postFactory = $postFactory;
     }
}
