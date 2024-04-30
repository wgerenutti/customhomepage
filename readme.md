# CustomHomePage

O módulo CustomHomePage é uma extensão do Magento 2 que permite personalizar a página inicial da loja com banners e carrosséis de produtos.

## Instalação

Você pode instalar este módulo usando o Composer. Certifique-se de que o Composer está instalado em seu sistema e execute o seguinte comando na raiz do seu projeto Magento:

`composer config repositories.wgerenutti/customhomepage vcs git@github.com:wgerenutti/customhomepage.git` 
`composer require wgerenutti/customhomepage:^1`

Após a instalação bem-sucedida, execute os comandos de atualização do Magento para habilitar o módulo:

`php bin/magento module:enable Wgerenutti_CustomHomePage`
`php bin/magento setup:upgrade` 
`php bin/magento cache:clean`

## Objetivos do Módulo

O objetivo principal do CustomHomePage é permitir que os usuários personalizem a página inicial da loja com banners e carrosséis de produtos. Isso oferece aos administradores da loja uma maneira rápida e fácil de personalizar a aparência de suas lojas.

## Funcionalidades Futuras

No futuro, planejo adicionar a capacidade de fazer upload de imagens para os banners diretamente do painel de administração. Isso permitirá que os administradores da loja atualizem facilmente os banners sem a necessidade de alterar o código ou acessar o servidor.

----------

# CustomHomePage

The CustomHomePage module is a Magento 2 extension that allows you to customize the homepage of the store with banners and product carousels.

## Installation

You can install this module using Composer. Make sure Composer is installed on your system and run the following command in the root of your Magento project:

`composer config repositories.wgerenutti/customhomepage vcs git@github.com:wgerenutti/customhomepage.git`  
`composer require wgerenutti/customhomepage:^1`

## Objectives of the Module

The main objective of CustomHomePage is to allow users to customize the homepage of the store with banners and product carousels. This provides store administrators with a quick and easy way to customize the appearance of their stores.

## Future Features

In the future, I plan to add the ability to upload images for the banners directly from the admin panel. This will allow store administrators to easily update the banners without the need to change the code or access the server.
