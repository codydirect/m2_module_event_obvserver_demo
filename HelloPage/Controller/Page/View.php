<?php /**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Learning\HelloPage\Controller\Page;

use Magento\Framework\Event\ObserverInterface;


class View extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
//    protected $resultJsonFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

    /**
     * View  page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $textDisplay = new \Magento\Framework\DataObject(array('text' => 'Lorem ipsum'));

        // First parameter is eventName and must match name attribute on event tag in etc/events.xml
        $this->_eventManager->dispatch('learning_helloworld_example', ['text' => $textDisplay]);

        echo 'Event should have fired 🤞';
    }
}
