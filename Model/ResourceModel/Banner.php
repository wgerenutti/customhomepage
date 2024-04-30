<?php

namespace Wgerenutti\CustomHomePage\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Banner extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('banner_table', 'banner_id');
    }
}
