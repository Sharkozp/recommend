<?php

/**
 * Description of Recommend
 *
 * @author sharko
 */
class Webinse_Recommend_Block_Recommend extends Mage_Core_Block_Template {

    public function getAllRecords() {
        return Mage::getModel('recommend/model')
                        ->getCollection()
                        ->setOrder('sort_order', 'ASC')
                        ->setPageSize($this->getQuantityProduct());
    }

    public function getBlockTitle() {
        return Mage::getStoreConfig('configuration_section/main_group/name');
    }

    private function getQuantityProduct() {
        return Mage::getStoreConfig('configuration_section/main_group/quantity');
    }

    public function getProduct($id) {
        return Mage::getModel("catalog/product")->load($id);
    }

    public function getPrice($price) {
        return Mage::helper('core')->currency($price, TRUE, FALSE);
    }

}
