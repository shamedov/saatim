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
         $result = false;
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

     public function actionLogin()
     {
         $email = '';
         $password = '';

         if(isset($_POST['submit'])){
             $email = $_POST['email'];
             $password = $_POST['password'];

             $errors = false;

             if(!User::checkEmail($email)){
                 $errors[] = 'неплавил email))';
             }
             if(!User::checkPassword($password)){
                 $errors[] = 'неплавил parol))';
             }

             //проверяем сущ ли пользователь
             $userId = User::checkUserData($email,$password);

             if($userId == false){
                 $errors[] = 'данные не верные';
             }else{
                 User::auth($userId);
                 header("Location: /cabinet/");
             }
         }
         require_once (ROOT . '/views/user/login.php');

         return true;
     }
     public function actionLogout()
     {
         unset($_SESSION['user']);
         header("Location: /");

     }

 }