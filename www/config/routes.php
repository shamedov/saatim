<?php 
    return array(
        
        'product/([0-9]+)'=>'product/view/$1',
        
        'category/([0-9]+)'=>'site/category/$1',
        'index.php' =>'site/index',//actionIndex в SiteController
        '^$'=>'site/index',

        );

 ?>