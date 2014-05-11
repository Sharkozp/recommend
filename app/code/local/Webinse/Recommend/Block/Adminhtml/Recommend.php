<?php

/**
 * Description of Block
 *
 * @author sharko
 */
class Webinse_Recommend_Block_Adminhtml_Recommend extends Mage_Adminhtml_Block_Widget_Grid_Container {

    protected function _construct()
    {
        parent::_construct();

        $helper = Mage::helper('recommend');
        $this->_blockGroup = 'recommend';
        $this->_controller = 'adminhtml_recommend';

        $this->_headerText = $helper->__('Recommended Product Management');
        $this->_addButtonLabel = $helper->__('Add new product');
    }
}
