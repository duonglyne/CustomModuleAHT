<?php

namespace AHT\AddAtributeOrder\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{


    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->addColumn(
            $setup->getTable('quote'),
            'order_by',
            [
                'type' => 'text',
                'nullable' => false,
                'comment' => 'Order By',
            ]
        );

        $setup->getConnection()->addColumn(
            $setup->getTable('sales_order'),
            'order_by',
            [
                'type' => 'text',
                'nullable' => false,
                'comment' => 'Order By',
            ]
        );

        $setup->getConnection()->addColumn(
            $setup->getTable('sales_order_grid'),
            'order_by',
            [
                'type' => 'text',
                'nullable' => false,
                'comment' => 'Order By',
            ]
        );

        $setup->endSetup();
    }
}
