<?php

namespace Wgerenutti\CustomHomePage\Block;

class BannerGrid extends \Magento\Framework\View\Element\Template
{
    protected $_bannerFactory;
    protected $_categoryFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Wgerenutti\CustomHomePage\Model\BannerFactory $bannerFactory,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        array $data = []
    ) {
        $this->_bannerFactory = $bannerFactory;
        $this->_categoryFactory = $categoryFactory;
        parent::__construct($context, $data);
    }

    public function getCategoryUrl()
    {
        $categories = $this->_categoryFactory->create()->getCollection()->addAttributeToSelect('*');
        $randomCategory = $categories->getItems()[array_rand($categories->getItems())];
        return $randomCategory->getUrl();
    }

    public function getBanners()
    {
        $categoryUrl = $this->getCategoryUrl();

        return [
            ['image' => $this->getViewFileUrl('Wgerenutti_CustomHomePage::images/banner_grid1.jpg'), 'url' => $categoryUrl],
            ['image' => $this->getViewFileUrl('Wgerenutti_CustomHomePage::images/banner_grid2.jpg'), 'url' => $categoryUrl],
            ['image' => $this->getViewFileUrl('Wgerenutti_CustomHomePage::images/banner_grid3.jpg'), 'url' => $categoryUrl],
            ['image' => $this->getViewFileUrl('Wgerenutti_CustomHomePage::images/banner_grid4.jpg'), 'url' => $categoryUrl],
            ['image' => $this->getViewFileUrl('Wgerenutti_CustomHomePage::images/banner_grid5.jpg'), 'url' => $categoryUrl]
        ];
    }
}
