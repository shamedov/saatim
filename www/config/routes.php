<?php 
    return array(
        
        'product/([0-9]+)'=>'product/view/$1',

        'category/([0-9]+)/page-([0-9]+)'=>'site/category/$1/$2',//actionCategory v SiteController
        'category/([0-9]+)'=>'site/category/$1',

        'index.php' =>'site/index',//actionIndex в SiteController

        'user/register'=>'user/register',
        'user/login'=>'user/login',
        'user/logout'=>'user/logout',
        'page-([0-9]+)'=>'site/index/$1',

        'cart/checkout' => 'cart/checkout', // actionCheckOut в CartController
        'cart/delete/([0-9]+)'=>'cart/delete/$1',
        'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController
        'cart/addAjax/([0-9]+)'=>'cart/addAjax/$1',
        'cart'=>'cart/index',

        // Управление товарами:
        'admin/product/create' => 'adminProduct/create',
        'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
        'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
        'admin/product' => 'adminProduct/index',

        'admin'=>'admin/index',

        'cabinet/edit'=>'cabinet/edit',
        'cabinet'=>'cabinet/index',

        '^$'=>'site/index',

        );

 ?>