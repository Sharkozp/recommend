<?php

/**
 * Description of Edit
 *
 * @author adikij
 */
class Webinse_Recommend_Block_Adminhtml_Recommend_Edit extends Mage_Adminhtml_Block_Widget_Form_Container {

    public function __construct() {
        parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'recommend';
        $this->_controller = 'adminhtml_recommend';
    }

    public function getHeaderText() {
        if (Mage::registry('recommend_data') && Mage::registry('recommend_data')->getId()) {
            return Mage::helper('recommend')->__('Edit record with id: %d', 
               //     $this->htmlEscape(Mage::registry('recommend_data')->getName()),
                    $this->htmlEscape(Mage::registry('recommend_data')->getId()));
        } else {
            return Mage::helper('recommend')->__('Add record');
        }
    }

}
