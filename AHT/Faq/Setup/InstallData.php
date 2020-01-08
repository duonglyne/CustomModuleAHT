<?php
namespace AHT\Faq\Setup;

use Magento\Cms\Model\BlockFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	private $blockFactory;

	public function __construct(BlockFactory $blockFactory)
	{
		$this->blockFactory = $blockFactory;
	}
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$cmsBlockData = [
            'title' => 'CMS Block for Faq',
            'identifier' => 'faq-block',
            'content' => "<h3>Hello my name is cms block for faq, nice to meet you</h3>",
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];
        $this->blockFactory->create()->setData($cmsBlockData)->save();
    }
}
