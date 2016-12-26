<?php
/**
 * Created by PhpStorm.
 * User: Tofik
 * Date: 25.12.2016
 * Time: 23:46
 */
 class UserController
 {
     public function actionRegister()
     {
         $name='';
         $password='';
         $email='';
         if (isset($_POST['submit'])){
             $name=$_POST['name'];
             $password=$_POST['password'];
             $email=$_POST['email'];

             $errors = false;

             if (!User::checkName($name)){
                 $errors[]='имя не менее 2-х';
             }

             if (!User::checkEmail($email)){
                 $errors[]='email not';
             }

             if (!User::checkPassword($password)){
                 $errors[]='password not';
             }

             if (User::checkEmailExists($email)){
                 $errors[]='email uje yest';
             }
             if ($errors == false){
                $result = User::register($name,$email,$password);
             }
         }
         require_once (ROOT.'/views/user/register.php');

         return true;
     }
 }