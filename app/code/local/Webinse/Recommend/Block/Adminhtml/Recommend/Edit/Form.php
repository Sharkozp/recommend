<?php

/**
 * Description of Form
 *
 * @author adikij
 */
class Webinse_Recommend_Block_Adminhtml_Recommend_Edit_Form extends Mage_Adminhtml_Block_Widget_Form {

    protected function _prepareForm() {
        $helper = Mage::helper('recommend');
        $model = Mage::registry('recommend_data');
        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl('*/*/save', array(
                'id' => $this->getRequest()->getParam('id')
            )),
            'method' => 'post',
        ));
        $form->setUseContainer(true);
        $this->setForm($form);
        $fieldset = $form->addFieldset('recommend_form', array('legend' => 'recommend information'));
        $fieldset->addField('entity_id', 'text', array(
            'label' => 'Product ID',
            'class' => 'required-entry validate-digits',
            'required' => true,
            'name' => 'entity_id',
        ));
        $fieldset->addField('sort_order', 'text', array(
            'label' => 'Sort order',
            'class' => 'required-entry validate-digits',
            'required' => true,
            'name' => 'sort_order',
        ));
        if ($model) {
            $form->setValues(Mage::registry('recommend_data')->getData());
        }
        $this->setForm($form);
        return parent::_prepareForm();
    }

}
