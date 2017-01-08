<?php include (ROOT.'/views/layouts/header.php'); ?>
</section>
    <div class="col-md-7 oneProductView">
            <div class=" text-center">
                <a href="#" >
                    <div>
                            <img src="/template/assets/_img/1product.jpg">

                    </div>
                </a>
            </div>

            </div>
            <div class="col-md-5 productInfo">
                <h1><?php echo $product['name']; ?></h1>
                <p>	
                   <?php echo $product['description']; ?> 
                </p>
                <h5><?php echo $product['price']; ?></h5>
            </div>
            <button class="add-to-cart" data-id = "<?php echo $product['id'];?>">sebete at</button>
<?php include (ROOT.'/views/layouts/footer.php'); ?>