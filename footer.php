<!-- Start footer -->
<footer id="footer-container<?php if(of_get_option('footer_columns') == 'footer0col') {echo "_no_footer";}?>">
<?php if(of_get_option('footer_columns') == 'footer0col') {}else{?>
    <div class="footer-columns">
        <div class="row">
            <?php if(of_get_option('footer_columns') == 'footer2col' || of_get_option('footer_columns') == 'footer3col') {?>
            <div class="<?php if(of_get_option('footer_columns') == 'footer2col'){echo "six columns";}elseif(of_get_option('footer_columns') == 'footer3col'){echo "four columns";}?>"><?php if (is_active_sidebar('footer1-sidebar')) : dynamic_sidebar('footer1-sidebar'); endif; ?></div>
            <div class="<?php if(of_get_option('footer_columns') == 'footer2col'){echo "six columns";}elseif(of_get_option('footer_columns') == 'footer3col'){echo "four columns";}?>"><?php if (is_active_sidebar('footer2-sidebar')) : dynamic_sidebar('footer2-sidebar'); endif; ?></div>
            <?php }?>
            <?php if(of_get_option('footer_columns') == 'footer1col' || of_get_option('footer_columns') == 'footer3col') {?>
            <div class="<?php if(of_get_option('footer_columns') == 'footer1col'){echo "twelve columns";}elseif(of_get_option('footer_columns') == 'footer3col'){echo "four columns";}?>"><?php if (is_active_sidebar('footer3-sidebar')) : dynamic_sidebar('footer3-sidebar'); endif; ?></div>
     		<?php }?>
        </div>
    </div>
    <?php }?>
    <div class="footer-bottom">
        <div class="row">
            <div class="six columns footer-left"> <?php echo of_get_option('copyright'); ?></div>
            <div class="six columns footer-right">                  
                    <?php $footer_menu = array('theme_location' => 'Footer_Menu', 'depth' => 1, 'container' => false, 'menu_class' => 'menu-footer', 'menu_id' => '', 'fallback_cb' => false ); ?>
                    <?php wp_nav_menu($footer_menu); ?>             
             </div>
        </div>  
    </div>
<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83701012-1', 'auto');
  ga('send', 'pageview');</script>
<!-- Begin Facebook Chat -->
<div id='fb-root'></div>
<script>
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- End Facebook Chat -->
<?php endif; ?>
<script>
(function($) { $(document).ready(function(){ $( '#khanhho-minimize' ).click( function() { if( $( '#khanhho-facebook' ).css( 'opacity' ) == 0 ) { $( '#khanhho-facebook' ).css( 'opacity', 1 ); $( '.khanhho-messages' ).animate( { right: '0' } ).animate( { bottom: '0' } ); } else { $( '.khanhho-messages' ).animate( { bottom: '-300px' } ).animate( { right: '-50px' }, 400, function(){ $( '#khanhho-facebook' ).css( 'opacity', 0 ) } ); } } ) }); })(jQuery);
</script>
</footer>
<!-- End footer -->
<?php
$tracking_code = of_get_option('google_analytics_code');
if (!empty($tracking_code)) {
    echo '<script>' . $tracking_code . '</script>';
}
?>
<?php
wp_footer();
?>
</div>
<div id="go-top"><a href="#go-top"><i class="fa fa-chevron-up"></i></a></div>
</body>
</html>