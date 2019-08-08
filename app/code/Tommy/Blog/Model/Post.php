<?php

namespace Tommy\Blog\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Tommy\Blog\Api\Data\PostInterface;

class Post extends AbstractModel implements IdentityInterface, PostInterface
{
    const CACHE_TAG = 'tommy_blog_post';
    protected function _construct()
    {
        $this->_init('Tommy\Blog\Model\ResourceModel\Post');
    }
    //getter
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    public function getId()
    {
        return $this->getData(self::POST_ID);
    }
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }


    //setter
    public function setId($value)
    {
        return $this->setData(self::POST_ID);
    }
    public function setContent($content)
    {
        return $this->setData(self::CONTENT);
    }
    public function setTitle($title)
    {
        return $this->setData(self::TITLE);
    }
    public function setCreatedAt($created_at)
    {
        return $this->setData(self::CREATED_AT);
    }
}
