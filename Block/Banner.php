<?php

namespace Wgerenutti\CustomHomePage\Block;

class Banner extends \Magento\Framework\View\Element\Template
{
    protected $_bannerFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Wgerenutti\CustomHomePage\Model\BannerFactory $bannerFactory,
        array $data = []
    ) {
        $this->_bannerFactory = $bannerFactory;
        parent::__construct($context, $data);
    }

    public function getBanners()
    {
        return [
            $this->getViewFileUrl('Wgerenutti_CustomHomePage::images/banner1.jpg'),
            $this->getViewFileUrl('Wgerenutti_CustomHomePage::images/banner2.jpg'),
            $this->getViewFileUrl('Wgerenutti_CustomHomePage::images/banner3.jpg')
        ];
    }
}
