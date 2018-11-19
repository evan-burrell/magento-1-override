<?php

class EB_Override_Model_Catalog_Product extends Mage_Catalog_Model_Product
{
    protected function _afterLoad()
    {
        $config = Mage::getStoreConfig('eb_settings/module/override');
        if ($config) {
            $this->setName("Hijacked!!! " . $this->getName());
        }
        return parent::_afterLoad();
    }
}
