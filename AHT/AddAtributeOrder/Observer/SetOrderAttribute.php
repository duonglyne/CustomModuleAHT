<?php


namespace AHT\AddAtributeOrder\Observer;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;


/**
 * 
 * @package AHT\AddAtributeOrder\Observer
 */
class SaveOrderByToOrderObserver implements ObserverInterface
{
    /**
     * @var \Magento\Framework\QuoteFactory
     */

    protected $quoteFactory;

    protected $logger;


    public function __construct(
        \Magento\Quote\Model\QuoteFactory $quoteFactory,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->quoteFactory = $quoteFactory;
        $this->logger = $logger;
    }

    /**
     * @param EventObserver $observer
     * @return $this
     */
    public function execute(EventObserver $observer)
    {  
        $this->logger->info("orDie");
        $order = $observer->getOrder();
        $quote = $this->quoteFactory->create()->load($order->getQuoteId());
        $order->setOrderBy($quote->getOrderBy());

        return $this;
    }

}