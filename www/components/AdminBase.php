<?php
/**
 * Created by PhpStorm.
 * User: Tofik
 * Date: 07.01.2017
 * Time: 22:30
 */
abstract class AdminBase
{
   public static function checkAdmin()
   {
       $userId = User::checkLogged();

       $user= User::getUserById($userId);

       if ($user['role']=='admin'){
           return true;
       }
       die('poshel von');
   }
}