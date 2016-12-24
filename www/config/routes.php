<?php 
    return array(
        
        'product/([0-9]+)'=>'product/view/$1',

        'category/([0-9]+)/page-([0-9]+)'=>'site/category/$1/$2',//actionCategory v SiteController
        'category/([0-9]+)'=>'site/category/$1',
        'index.php' =>'site/index',//actionIndex в SiteController
        'page-([0-9]+)'=>'site/index/$1',
        '^$'=>'site/index',

        );

 ?>