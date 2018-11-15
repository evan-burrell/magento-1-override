<?php

class EB_Override_Model_Catalog_Product extends Mage_Catalog_Model_Product
{
    protected function _afterLoad()
    {
        $this->setName("Hijacked!!! " . $this->getName());
        return parent::_afterLoad();
    }
}
