<?php
namespace AHT\AddAtributeOrder\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup,ModuleContextInterface $context)
    {
        $installer=$setup;
        $installer->startSetup();

        $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'order_by',
            [
                'type'=>'text',
                'nullable'=>false,
                'comment'=>'Order by author'
            ]
        );

        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order'),
            'order_by',
            [
                'type'=>'text',
                'nullable'=>false,
                'comment'=>'Order by author'
            ]
        );

        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order_grid'),
            'order_by',
            [
                'type'=>'text',
                'nullable'=>false,
                'comment'=>'Order by author'
            ]
        );


        $installer->endSetup();
    }
}