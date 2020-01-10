<?php
namespace AHT\AddAtributeOrder\Model\Checkout;

class LayoutProcessorPlugin
{
    /**
     * @param \Magento\Checkout\Block\Checkout\LayoutProcessor $subject
     * @param array $jsLayout
     * @return array
     */

     public function afterProcess(
         \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
         array $jsLayout
     )
     {
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
            ['shippingAddress']['children']['shippingAdditional'] = [
                'component' => 'uiComponent',
                'displayArea' => 'shippingAdditional',
                'children' => [
                    'order_by' => [
                        'component' => 'Magento_Ui/js/form/element/abstract',
                        'config' => [
                            'customScope' => 'shippingAddress',
                            'template' => 'ui/form/field',
                            'elementTmpl' => 'ui/form/element/input',
                            'options' => [],
                        ],
                        'dataScope' => 'shippingAddress.order_by',
                        'label' => 'Order by',
                        'provider' => 'checkoutProvider',
                        'visible' => true,
                        'validation' => false, //['required-entry' => $this->_helper->getConfigIsFieldRequired()],
                        'sortOrder' => 200,
                    ]
                ],
            ];
         return $jsLayout;
     }
}