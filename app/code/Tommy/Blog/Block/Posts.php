<?php

namespace Tommy\Blog\Block;

use Tommy\Blog\Model\Post;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Tommy\Blog\Model\ResourceModel\Post\Collection as PostCollection;
use \Tommy\Blog\Model\ResourceModel\Post\PostCollectionFactory as PostCollectionFactory;
//PostCollectionFactory auto created by framework

class Posts extends Template
{
    protected $_postCollectionFactory = null;

    public function __construct(
        Context $context,
        PostCollectionFactory $postCollectionFactory,
        array $data = []
    ) {
        $this->_postCollectionFactory = $postCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getPosts(){
        $postCollection = $this->_postCollectionFactory->create();
        $postCollection->addFieldToSelect('*')->load();
        return $postCollection->getItems();
    }

    public function getPostUrl(Post $post){
        return '/blog/post/view/id'.$post->getId();
    }

}
