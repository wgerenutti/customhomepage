<?php

namespace Wgerenutti\CustomHomePage\Block;

class HowItWorks extends \Magento\Framework\View\Element\Template
{
    public function getSteps()
    {
        return [
            [
                'icon' => 'menu-icon.png',
                'title' => 'Navegue pelo cardápio',
                'description' => 'Escolha os produtos que mais lhe atraem no nosso cardápio.'
            ],
            [
                'icon' => 'shopping-bag-icon.png',
                'title' => 'Monte seu Combo',
                'description' => 'Escolha seus produtos favoritos para criar combos.'
            ],
            [
                'icon' => 'calendar-icon.png',
                'title' => 'Agende sua entrega',
                'description' => 'Veja no calendário quais dias estão disponíveis para receber sua compra.'
            ],
            [
                'icon' => 'box-icon.png',
                'title' => 'Fácil, zero estresse',
                'description' => 'Prepare-se para momentos prazerosos sem preocupações.'
            ]
        ];
    }
}
