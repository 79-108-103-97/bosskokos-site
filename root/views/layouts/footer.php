<footer></footer>
</div>
<script src="//<?php echo $_SERVER['SERVER_NAME'];?>/template/jquery/jquery.min.js"></script> <!-- top -->
<script>
    $(document).ready(function () {
        $('.nav-menu_item-dropdown').click(function (event) {
            event.preventDefault();
            if ($(this).parent('.nav-menu_item').hasClass('show')) {
                $(this).parent('.nav-menu_item').removeClass('show');
            } else {
                $(this).parent('.nav-menu_item').addClass('show');
            }
        });
        $('.show-nav-mobile').click(function(){
            if($('.nav-show').hasClass('nav-to-show')){
                $('.nav-show').removeClass('nav-to-show');
            } else{
                $('.nav-show').addClass('nav-to-show');
            }
        });
    });
</script>
</body>
</html>