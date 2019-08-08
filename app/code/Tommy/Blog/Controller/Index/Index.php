<?php

namespace Tommy\Blog\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends  Action {
    protected $_resultPageFactory;
    protected $_postFactory;

    public function __construct(Context $context, 
    PageFactory $pageFactory,
    \Tommy\Blog\Model\PostFactory $postFactory)
    {
        parent::__construct($context);
        $this->_resultPageFactory =$pageFactory;
        $this->_postFactory = $postFactory;

    }
    public function execute()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        foreach($collection as $item){
			echo "<pre>";
			print_r($item->getData());
			echo "</pre>";
		}
		exit();
		return $this->_pageFactory->create();

        // $resultPage = $this->_resultPageFactory->create();
        // return $resultPage;
    }
}