<?php
namespace AHT\AddAttributeProduct\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	private $eavSetupFactory;

	public function __construct(EavSetupFactory $eavSetupFactory)
	{
		$this->eavSetupFactory = $eavSetupFactory;
	}
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$setup->startSetup();
		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		// Textfild Attribute
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'attribute_custom_1',
			[
				'type' => 'varchar',
				'backend' => '',
				'frontend' => '',
				'label' => 'Attribute Custom 1',
				'input' => 'text',
				'class' => '',
				'source' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// Textarea Attribute
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'attribute_custom_2',
			[
				'type' => 'text',
				'backend' => '',
				'frontend' => '',
				'label' => 'Attribute Custom 2',
				'input' => 'textarea',
				'class' => '',
				'source' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		//Textarea with 'wysiwyg' Attribute
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'attribute_custom_3',
			[
				'type' => 'text',
				'backend' => '',
				'frontend' => '',
				'label' => 'Attribute Custom 3',
				'input' => 'textarea',
				'class' => '',
				'source' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'wysiwyg_enabled'      => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		//Dropdown Attribute
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'attribute_custom_4',
			[
				'type' => 'text',
				'backend' => '',
				'frontend' => '',
				'label' => 'Attribute Custom 4',
				'input' => 'select',
				'option' => array('values' => array('Option 1', 'Option 2', 'Option 3')),
				'class' => '',
				'source' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'wysiwyg_enabled' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		//Mutiselect Attribute
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'attribute_custom_5',
			[
				'type' => 'text',
				'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
				'frontend' => '',
				'label' => 'Attribute Custom 5',
				'input' => 'multiselect',
				'option' => ['values' => [
					'Option 1',
					'Option 2',
					'Option 3',
					],
				],
				'class' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'wysiwyg_enabled'      => false,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		//Boolean Attribute
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'attribute_custom_6',
			[
				'type' => 'int',
				'backend' => '',
				'frontend' => '',
				'label' => 'Attribute Custom 6',
				'input' => 'boolean',
				'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
				'class' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);
		$setup->endSetup();
	}
}
