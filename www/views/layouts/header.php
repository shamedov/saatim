
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/template/assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/template/assets/reset.css">
        <link rel="stylesheet" type="text/css" href="/template/assets/css/index.css">
        <link rel="stylesheet" href="/template/font-awesome-4.6.3/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<section id="main">

            <section id="header" class="container col-md-12">

                    <!-- меню навигации и инфо-->
                    <div class="topNav">
                        <nav class="navbar navbar-inverse navInfo">
                            <div class="logo">
                                <a href="/">
                                    <img src="/template/assets/_img/Levi's_logo.png">
                                </a>
                            </div>

                             <ul>
                               <li><a href="/">home</a></li>
                               <li><a href="#">contacts</a></li>
                               <li><a href="#">we are</a></li>
                             </ul>

                             <ul class="pull-right">
                                 <?php if(isset($_SESSION['user'])):?>
                                     <li><a href="/cabinet">Akkaunt</a></li>
                                     <li><a href="/user/logout">log Out</a></li>
                                 <?php else: ?>
                                     <li><a href="/user/login">sign in</a></li>
                                    <li><a href="/user/register">registration</a></li>
                                 <?php endif; ?>
                                 <li><a href="/cart">sebet <span id="cart-count">(<?php echo Cart::countItems();?>)</span></a></li>
                             </ul>

                             <form method="POST" class="search">
                                <input type="text" placeholder="search" class="pull-right">
                             </form>

                        </nav>
                    </div>
                    <!--end-->
                    <div class="clearfix"></div>
                   
