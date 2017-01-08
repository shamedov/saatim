
             <section id="footer" class= "col-md-12">

            </section>	
	</section>

	<script src="/template/assets/js/jquery-3.1.0.min.js"></script>
	<script src="/template/assets/js/index.js"></script>
             <script>
                 $(document).ready(function(){
                     $(".add-to-cart").click(function () {
                         var id = $(this).attr("data-id");
                         $.post("/cart/addAjax/"+id, {}, function (data) {
                             $("#cart-count").html(data);
                         });
                         return false;
                     });
                 });
             </script>
</body>
</html>
