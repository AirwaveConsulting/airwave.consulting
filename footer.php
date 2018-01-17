<?php
// Airwave Consulting WordPress theme
// Designed by Lucas Lower @ AirwaveConsult.com
// the FOOTER.PHP file
?>

<!-- the Footer -->
<footer id="pagefooter">
    <div class="inner">
        Copyright &copy; 2016 - <?php echo date('Y'); ?> Airwave Consulting. All rights reserved.
<br>
Proudly powered by <a href="wordpress.org">WordPress</a>.
    </div>
</footer>

<!-- end of SECTION.CONTENT -->
</section>

<!-- end of SECTION.PAGE -->
</section>

<script type="text/javascript">
$('#mobileclick').click(function(){
    if($('nav.mobile ul').css('max-height') == '0px'){
        $('nav.mobile ul').css('max-height', '999px');
    }
    else{
        $('nav.mobile ul').css('max-height', '0px');
    }
});
</script>
<!-- wordpress footer stuff -->
<?php wp_footer(); ?>

</body>
</html>
