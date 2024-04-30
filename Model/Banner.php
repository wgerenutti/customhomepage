<?php

namespace Wgerenutti\CustomHomePage\Model;

use Magento\Framework\Model\AbstractModel;

class Banner extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Wgerenutti\CustomHomePage\Model\ResourceModel\Banner');
    }
}
