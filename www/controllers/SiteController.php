<?php
include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';
class SiteController
{
    public function actionIndex($page = 1)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts($page);
        
        require_once(ROOT. '/views/site/index.php');
        
        return true;
    }
    public function actionCategory($categoryId,$page = 1)
    {

        $categories = array();
        $categories = Category::getCategoriesList();
        
        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId,$page);
        
        require_once(ROOT. '/views/product/category.php');
        
        return true;
    }
    

}