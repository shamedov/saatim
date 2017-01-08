<?php include ROOT.'/views/layouts/header.php'; ?>
<!-- фото и часы-->
<div class="col-md-12 clock">

</div>


</section>
<!-- общий центр. меню категрий и контент-->
<section  id="centre">

    <section class="container">
        <section class="row">
            <!-- меню категрий-->
            <section id="category" class="col-md-3">
                <div class="col-md-push-2 col-md-7 categoryLogo">
                    <img src="/template/assets/_img/Levi's_logo.png" >
                </div>
                <div class="clearfix"></div>
                <ul>
                    <?php foreach ($categories as $categoryItem): ?>
                        <a href="/category/<?php echo $categoryItem['id']; ?>" >
                            <li>
                                <?php echo $categoryItem['name']; ?>
                            </li>
                        </a>
                    <?php endforeach; ?>
                </ul>
            </section>
            <section id="content" class="pull-right col-md-9">
                <div class="features_items">
                    <h2 class="title text-center">Корзина</h2>


                    <?php if ($result): ?>

                        <p>Заказ оформлен. Мы Вам перезвоним.</p>

                    <?php else: ?>

                        <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, грн.</p><br/>

                        <div class="col-sm-4">
                            <?php if (isset($errors) && is_array($errors)): ?>
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li> - <?php echo $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                            <div class="login-form">
                                <form action="#" method="post">

                                    <p>Ваша имя</p>
                                    <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                    <p>Номер телефона</p>
                                    <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>

                                    <p>Комментарий к заказу</p>
                                    <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>"/>

                                    <br/>
                                    <br/>
                                    <input type="submit" name="submit" class="btn btn-default" value="Оформить" />
                                </form>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>
                <div class="clearfix"></div>
            </section>
            <!--end-->
        </section>

        <!--end-->
    </section>

    <div class="clearfix"></div>
</section>
</section>
<!-- end-->
<?php include (ROOT.'/views/layouts/footer.php'); ?>
