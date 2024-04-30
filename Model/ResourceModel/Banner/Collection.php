<?php

namespace Wgerenutti\CustomHomePage\Model\ResourceModel\Banner;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'banner_id';
    protected $_eventPrefix = 'wgerenutti_customhomepage_banner_collection';
    protected $_eventObject = 'banner_collection';

    protected function _construct()
    {
        $this->_init('Wgerenutti\CustomHomePage\Model\Banner', 'Wgerenutti\CustomHomePage\Model\ResourceModel\Banner');
    }
}
