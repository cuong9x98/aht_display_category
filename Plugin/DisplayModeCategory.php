<?php

namespace AHT\DisplayCategory\Plugin;

use Magento\Framework\View\Element\Template;

class DisplayModeCategory
{
    protected $_registry;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry
    )
    {
        $this->_registry = $registry;

    }

    public function getCurrentCategory()
    {
        return $this->_registry->registry('current_category');
    }

    public function afterGetMode(\Magento\Catalog\Block\Product\ListProduct $subject,$result){
        if ($currentCategory = $this->getCurrentCategory()) {
            return $currentCategory->getShowMode();
        }
        return $result;
    }

}
