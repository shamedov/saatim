
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
                        <!--end-->

                        <!-- контент-->
                        <section id="content" class="pull-right col-md-9">
                            <?php foreach ($latestProducts as $product): ?>
                                <div class="col-md-4 product">
                                    <div class="psaat text-center">
                                        <a href="/product/<?php echo $product['id']; ?>" >
                                            <div>
                                                <img src="template/assets/_img/1product.jpg">
                                            </div>
                                        </a>
                                        <div>
                                            <a href ="/product/<?php echo $product['id']; ?>">
                                                <h5>
                                                    <?php echo $product['name']?>
                                                </h5>
                                            </a>
                                            <h3><?php echo $product['price'] ?>azn</h3>
                                            <button>sebete at</button>
                                        </div>
                                    </div>

                                </div>
                            <?php endforeach; ?>
                            <div class="clearfix"></div>
                            <div><?php echo $pagination->get();?></div>
                        </section>

                        <!--end-->
                    </section>
                    <div class="clearfix"></div>
                </section>
            </section>
            <!-- end-->

     <?php include ROOT.'/views/layouts/footer.php'; ?>      