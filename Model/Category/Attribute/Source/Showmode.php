<?php
namespace AHT\DisplayCategory\Model\Category\Attribute\Source;

class Showmode extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['value' => \Magento\Catalog\Helper\Product\ProductList::VIEW_MODE_LIST, 'label' => __('YES')],
                ['value' => \Magento\Catalog\Helper\Product\ProductList::VIEW_MODE_GRID, 'label' => __('NO')],
            ];
        }
        return $this->_options;
    }
}