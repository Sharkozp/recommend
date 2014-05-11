<?php

/**
 * Description of Model
 *
 * @author sharko
 */
class Webinse_Recommend_Model_Resource_Model extends Mage_Core_Model_Resource_Db_Abstract {
    protected function _construct() {
        $this->_init("recommend/resource_table", "recommend_id");
    }

}
