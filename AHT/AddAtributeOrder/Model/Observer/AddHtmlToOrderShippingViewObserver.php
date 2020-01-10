<?php
namespace AHT\AddAtributeOrder\Model\Observer;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;

class AddHtmlToOrderShippingViewObserver implements ObserverInterface
{
    protected $_objectManager;

    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager
    )
    {
        $this->_objectManager=$objectManager;
    }

    public function execute(EventObserver $observer)
    {
        //->Check the right block we need to add our custom block
        //->get block name
        //->get order: $block->getOrder();
        //->get orderby in order : $order->getOrderBy();
        //create empty block->fill data in this
        if($observer->getElementName()=='order_shipping_view')
        {
            $orderShippingViewBlock=$observer->getLayout()->getBlock($observer->getElementName());
            $order=$orderShippingViewBlock->getOrder();
            $orderByNewBlock=$this->_objectManager->create('Magento\Framework\View\Element\Template');
            $orderByNewBlock->setOrderBy($order->getOrderBy());
            $orderByNewBlock->setTemplate('AHT_AddAtributeOrder::order_shipping_info.phtml');
            $html=$observer->getTransport()->getOutput().$orderByNewBlock->toHtml();
            $observer->getTransport()->setOutput($html);
        }
    }
}