<?php

/**
 * Description of Collection
 *
 * @author sharko
 */
class Webinse_Recommend_Model_Resource_Model_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {

    protected function _construct() {
        $this->_init('recommend/model');
    }

}
