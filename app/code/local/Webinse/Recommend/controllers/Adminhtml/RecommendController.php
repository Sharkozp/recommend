<?php

/**
 * Description of RecommendController
 *
 * @author sharko
 */
class Webinse_Recommend_Adminhtml_RecommendController extends Mage_Adminhtml_Controller_Action {

    public function indexAction() {
        
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('recommend/adminhtml_recommend'));
        $this->renderLayout();
       // $test = Mage::getModel("recommend/model");
       // var_dump( Mage::getResourceModel("recommend/model"));
    }
    
     public function newAction() {
        $this->_forward('edit');
    }
    
     public function editAction() {
        $id = (int) $this->getRequest()->getParam('id');
        $model = Mage::getModel('recommend/model');
        $data = Mage::getSingleton('adminhtml/session')->getFormData();
        
        if($data){
            $model->setData($data)->setId($id);
        } else {
            $model->load($id);
        }
        Mage::register('recommend_data', $model);

        $this->loadLayout()
                //->_setActiveMenu('webinse')
                ->_addContent($this->getLayout()->createBlock('recommend/adminhtml_recommend_edit'))
                ->renderLayout();
    }
    
    public function saveAction() {
        $postData = $this->getRequest()->getPost();
        if ($postData) {
            try {
                Mage::getModel('recommend/model')
                        ->setData($postData)
                        ->setId($this->getRequest()->getParam('id'))
                        ->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('recommend')->__('Record successfully saved'));
                $this->_redirect('*/*/');
                return;
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            }
        }
        $this->_redirect('*/*/');
    }

    public function deleteAction() {
        $id = $this->getRequest()->getParam('id');
        if ($id) {
            try {
                Mage::getModel('recommend/model')->setId($id)->delete();
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('recommend')->__('Record was deleted successfully'));
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $id));
            }
        }
        $this->_redirect('*/*/');
    }

}
