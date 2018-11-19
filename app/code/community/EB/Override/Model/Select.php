<?php

class EB_Override_Model_Select
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => '1',
                'label' => 'Yes',
            ),
            array(
                'value' => '0',
                'label' => 'No',
            )
        );
    }
}
