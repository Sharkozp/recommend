<?php

/**
 * Description of IndexController
 *
 * @author sharko
 */
class Webinse_Recommend_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        $this->loadLayout()->renderLayout();
    }
}
