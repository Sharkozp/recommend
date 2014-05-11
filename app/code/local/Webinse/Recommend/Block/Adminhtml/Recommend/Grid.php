<?php

/**
 * Description of Tabs
 *
 * @author sharko
 */
class Webinse_Recommend_Block_Adminhtml_Recommend_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    protected function _prepareCollection() {
        $collection = Mage::getModel('recommend/model')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns() {

        $helper = Mage::helper('recommend');

//        $this->addColumn('in_category', array(
//            'header_css_class' => 'a-center',
//            'type' => 'checkbox',
//            'name' => 'in_category',
//            'values' => $this->_getSelectedProducts(),
//            'align' => 'center',
//            'index' => 'entity_id'
//        ));

        $this->addColumn('recommend_id', array(
            'header' => $helper->__('Recommed ID'),
            'index' => 'recommend_id'
        ));

        $this->addColumn('entity_id', array(
            'header' => $helper->__('Product ID'),
            'index' => 'entity_id',
            'type' => 'text',
        ));

        $this->addColumn('sort_order', array(
            'header' => $helper->__('Sort Order'),
            'index' => 'sort_order',
            'type' => 'text',
        ));

        return parent::_prepareColumns();
    }

//    protected function _getSelectedProducts() {
//        $products = $this->getRequest()->getPost('selected_products');
//        if (is_null($products)) {
//         //   $products = $this->getCategory()->getProductsPosition();
//    //        return array_keys($products);
//        }
//        return $products;
//    }
    
     public function getRowUrl($item) {
        return $this->getUrl('*/*/edit', array('id' => $item->getId()));
    }

}
