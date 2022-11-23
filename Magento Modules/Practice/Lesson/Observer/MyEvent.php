<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Practice\Lesson\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class MyEvent implements ObserverInterface
{
    protected $messageManager;

    public function __construct(
        \Magento\Framework\Message\ManagerInterface $messageManager,
    ) {
        $this->messageManager = $messageManager;
    }

    public function execute(Observer $observer)
    {
        $customer = $observer->getEvent()->getCustomer();
        $name = $customer->getName();
        $message = "Login Successful. Welcome $name";
        $this->messageManager->addSuccessMessage($message);
    }
}
