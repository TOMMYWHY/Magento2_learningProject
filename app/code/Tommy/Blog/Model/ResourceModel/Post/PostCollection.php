<?php
namespace Tommy\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class PostCollection extends AbstractCollection{
    protected function _construct()
    {
        $this->_init('Tommy\Blog\Model\Post','Tommy\Blog\Model\ResourceModel\Post');
    }
}