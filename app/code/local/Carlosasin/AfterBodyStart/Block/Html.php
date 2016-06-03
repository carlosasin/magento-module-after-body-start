<?php
class Carlosasin_AfterBodyStart_Block_Html extends Mage_Core_Block_Template
{
    public function getAfterBodyStart()
    {
        if (empty($this->_data['after_body_start'])) {
            $this->_data['after_body_start'] = Mage::getStoreConfig('design/header/after_body_start');
        }
        return $this->_data['after_body_start'];
    }
}