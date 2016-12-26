<?php

class SiteController
{
    public function actionIndex($page = 1)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts($page);

        $total =Product::getTotalLatestProduct();

        $pagination = new Pagination($total,$page,Product::SHOW_BY_DEFAULT,'page-');
        
        require_once(ROOT. '/views/site/index.php');
        
        return true;
    }
    public function actionCategory($categoryId,$page = 1)
    {

        $categories = array();
        $categories = Category::getCategoriesList();
        
        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId,$page);

        $total = Product::getTotalProductsInCategory($categoryId);
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
        require_once(ROOT. '/views/product/category.php');
        
        return true;
    }
    

}