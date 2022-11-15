<?php
namespace Avadhesh\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		// $resultPage = $this->_pageFactory->create();
         //$resultPage->addHandle('helloworld_index_index'); //loads the layout of module_custom_customlayout.xml file with its name
         //return $resultPage;
	   return $this->_pageFactory->create();
	}
	/*public function execute()
	{
		echo "Hello World";
		exit;
	}*/
}
