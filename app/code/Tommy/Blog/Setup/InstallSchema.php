<?php
namespace Tommy\Blog\Setup;

use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

class InstallSchema  implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $tableName = $setup->getTable('tommy_blog_post');
        if($setup->getConnection()->isTableExists($tableName) != true){
            $table = $setup->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'post_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity'=> true,'unsigned'=>true,'nullable'=>false,'primary'=>true],
                    'ID'
                )
                ->addColumn(
                    'title',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable'=>false],
                    'title'
                )
                ->addColumn(
                    'content',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable'=>false],
                    'content'
                )
                ->addColumn(
                    'created_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable'=>false,'default'=>Table::TIMESTAMP_INIT],
                    'timeStamp'
                )
                ->setComment('Tommy Blog Post');

                $setup->getConnection()->createTable($table);
        }
        $setup->endSetup();
    }
}

