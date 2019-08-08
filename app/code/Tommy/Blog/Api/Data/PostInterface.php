<?php
namespace Tommy\Blog\Api\Data;

interface PostInterface{
    const POST_ID = 'post_id';
    const TITLE   = 'title';
    const CONTENT = 'content';
    const CREATED_AT = 'created_id';

    public function getId();
    public function getTitle();
    public function getContent();
    public function getCreatedAt();

     public function setId($id);
    public function setTitle($title);
    public function setContent($content);
    public function setCreatedAt($created_at);

    
}