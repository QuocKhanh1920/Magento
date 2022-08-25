<?php

namespace Htcmage\Faq\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action
{
     protected $_pageFactory;
     protected $_postFactory;

     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Htcmage\Faq\Model\PostFactory $postFactory
     ) {
          $this->_pageFactory = $pageFactory;
          $this->_postFactory = $postFactory;
          return parent::__construct($context);
     }

     public function execute()
     {
          if ($this->getRequest()->getPostValue()) {
               $input = $this->getRequest()->getPostValue();
               $postData = $this->_postFactory->create();
               if (isset($input['Id'])) {
                    $id = $input['Id'];
               } else {
                    $id = 0;
               }
               for ($i = 1; $i <= 30; $i += 5) {
                    if ($id != 0) {
                         $postData->load($id);
                         $postData->addData($input);
                         $postData->save();
                    } else {
                         $postData->setData($input)->save();
                    }
               }
               $this->messageManager->addSuccessMessage("Data added successfully!");
               return $this->_redirect('faq/index/insert');
          }
          return $this->_redirect('faq/index/insert');
     }
}
