<?php
namespace Tommy\Blog\Setup;

// use \Magento\Framework\DB\Ddl\Table;
// use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if(version_compare($context->getVersion(),'0.1.3')<0){
            $tableName = $setup->getTable('tommy_blog_post');
            $data =[
                [
                    'title'=>'post1 title',
                    'content'=>'content 1111'
                ],
                [
                    'title'=>'post2 title',
                    'content'=>'content 22222'
                ]
            ];
            $setup->getConnection()->insertMultiple($tableName,$data);
        }

        $setup->endSetup();
    }
}