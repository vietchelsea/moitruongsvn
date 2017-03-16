<?php
header("Content-type: text/css; charset: UTF-8");
require_once( '../../../wp-load.php' );
    $heading_font = of_get_option('title_google_font');
	$body_font = of_get_option('p_font');
    if($body_font == '' || $body_font == 'arial' || $body_font == 'verdana' || $body_font == 'trebuchet' || $body_font == 'georgia' || $body_font == 'times' || $body_font == 'tahoma' || $body_font == 'helvetica') {
    } else {
	    $font = $body_font;
    $font = explode(',', $font['face']);
    $font = $font[0];
    $font = str_replace(" ", "+", $font);
 	echo '@import url(http://fonts.googleapis.com/css?family='.$font.');';
    }
    if($heading_font == '' || $heading_font == 'arial' || $heading_font == 'verdana' || $heading_font == 'trebuchet' || $heading_font == 'georgia' || $heading_font == 'times' || $heading_font == 'tahoma' || $heading_font == 'helvetica') {
    } else {
	    $font = $heading_font;
    $font = explode(',', $font['face']);
    $font = $font[0];
    $font = str_replace(" ", "+", $font);
 	echo '@import url(http://fonts.googleapis.com/css?family='.$font.');';
    }

$color = of_get_option('theme_color');
if (!empty($color)) { ?>
.tickerfloat,
.grid.caption_header,
.item_slide_caption .post-meta.meta-main-img,
.widget-title h2,
#sidebar table thead,
.footer_carousel .link-more:hover,
footer table thead,
.tagcloud a:hover,
.tag-cat a:hover,
.widget-title span,
.sf-menu > li > a span.border-menu,
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
.mejs-controls .mejs-time-rail .mejs-time-current, .pagination .current.box, .pagination > a:hover, .pagination>span:hover, .pagination>span, .score-review span, .review_bar-content, .total_review_bar-content, .btn.default, #go-top a, .meta-category i, .footer_carousel:hover .link-more, .meta-category-slider a, .meta-category-slider i, .feature-item:hover .inside, .score-review-small, .btn.default.read_more:hover, .header_top_wrapper, html ul.tabs li.active, html ul.tabs li.active a, html ul.tabs li.active a:hover, html ul.tabs1 li.active, html ul.tabs1 li.active a, html ul.tabs1 li.active a:hover, html ul.hover_tab_post_large li.active, html ul.hover_tab_post_large li.active a, html ul.hover_tab_post_large li.active a:hover, .pagination-more div a:hover{background-color: <?php echo $color;?> !important;}
.meta-category-small a{background-color: <?php echo $color;?>;}
.item_slide_caption .overlay_icon, .feature-item .overlay_icon, #prepost:hover, #nextpost:hover, #prepost:hover, .btn.default:hover, .footer_carousel:hover .read_more_footer, .tickerfloat i, .btn.default.read_more{color: <?php echo $color;?>;}
.main-menu{border-bottom: 6px solid <?php echo $color;?>;} 	
.btn.default:hover, .btn.default.read_more{border:1px solid <?php echo $color;?>; background: none !important;}	
ul.tabs, ul.tabs1, ul.hover_tab_post_large{border-bottom: 2px solid <?php echo $color;?>;}		
.woocommerce ul.products li.product .star-rating span, .woocommerce ul.products li.product .star-rating span{color: <?php echo esc_attr($color);?>;}    
.woocommerce.widget .ui-slider .ui-slider-handle, .woocommerce .product .onsale{background: none <?php echo esc_attr($color);?>;}
.woocommerce #content nav.woocommerce-pagination ul li a:focus, .woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li a:focus, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li span.current, .woocommerce-page nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li span.current, .woocommerce #content nav.woocommerce-pagination ul li a, .woocommerce #content nav.woocommerce-pagination ul li span, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span, .woocommerce-page #content nav.woocommerce-pagination ul li a, .woocommerce-page #content nav.woocommerce-pagination ul li span, .woocommerce-page nav.woocommerce-pagination ul li a, .woocommerce-page nav.woocommerce-pagination ul li span,
.woocommerce .widget_price_filter .price_slider_amount .button:hover, .woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
.woocommerce #content input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-page #content input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page input.button:hover, 
.woocommerce #content div.product form.cart .button:hover, .woocommerce div.product form.cart .button:hover, .woocommerce-page #content div.product form.cart .button:hover, .woocommerce-page div.product form.cart .button:hover,
.woocommerce #content input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce-page #content input.button.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce-page a.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce-page input.button.alt:hover,
#searchsubmit:hover, .bbp-login-form .bbp-submit-wrapper .button:hover, #bbp_search_submit:hover, #bbp_topic_submit:hover, .bbp-submit-wrapper .button:hover
{
    background: <?php echo esc_attr($color);?>;
}
.woocommerce #content nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce-page #content nav.woocommerce-pagination ul li a, .woocommerce-page nav.woocommerce-pagination ul li a{
    background: #222;
}
.woocommerce a.added_to_cart, .woocommerce-page a.added_to_cart{ color: <?php echo esc_attr($color);?>;}
  
.widget-title h2, h3.widget-title span, .carousel_post_home_wrapper .medium-two-columns:hover .image-post-title{background: <?php echo esc_attr($color);?>; color: #fff;}

.post_link_type .overlay_icon.fa{ color: <?php echo esc_attr($color);?>; border:2px solid <?php echo esc_attr($color);?>;}
.post_link_type .link_type, .post_link_type .link_type a{ color: <?php echo esc_attr($color);?>; border:1px solid <?php echo esc_attr($color);?>;}
.post_link_type .overlay_icon.fa:hover, .post_link_type .link_type a:hover{background:<?php echo esc_attr($color);?>;}
.meta_carousel_post, html ul.tabs li.active a{ background:<?php echo esc_attr($color);?>;}
<?php } ?>
.menu_post_feature ul.hover_tab_post_large li.active a, .menu_post_feature ul.hover_tab_post_large li.active, html ul.hover_tab_post_large li.active a:hover{ background-color: #2C3242 !important;}
<?php if(of_get_option('theme_link_color')){?>
.post_content a, .page.type-page a{ color: <?php echo esc_attr(of_get_option('theme_link_color'));?>;}
<?php }?>

<?php if(of_get_option('theme_link_hover_color')){?>
.post_content a:hover, .page.type-page a:hover{ color: <?php echo esc_attr(of_get_option('theme_link_hover_color'));?>;}
<?php }?>

<?php 
if(of_get_option('full_or_boxed_layout')!= 'full_image_option'){
if(of_get_option('background_body_option')!= 'big_image'){
if(of_get_option('background_body_option')== 'pattern'){
echo "body{background:url(img/pattern/pattern_use/".of_get_option('background_parttern').".png);}";	
}elseif(of_get_option('background_body_option')== 'color'){
echo "body{background:".of_get_option('background_color').";}";	
}}}?>

<?php if(of_get_option('border_color_1')){?>.sf-menu > li.color-1 > a span.border-menu{background: <?php echo of_get_option('border_color_1');?> !important;}<?php }?>
<?php if(of_get_option('border_color_2')){?>.sf-menu > li.color-2 > a span.border-menu{background: <?php echo of_get_option('border_color_2');?> !important;}<?php }?>
<?php if(of_get_option('border_color_3')){?>.sf-menu > li.color-3 > a span.border-menu{background: <?php echo of_get_option('border_color_3');?> !important;}<?php }?>
<?php if(of_get_option('border_color_4')){?>.sf-menu > li.color-4 > a span.border-menu{background: <?php echo of_get_option('border_color_4');?> !important;}<?php }?>
<?php if(of_get_option('border_color_5')){?>.sf-menu > li.color-5 > a span.border-menu{background: <?php echo of_get_option('border_color_5');?> !important;}<?php }?>
<?php if(of_get_option('border_color_6')){?>.sf-menu > li.color-6 > a span.border-menu{background: <?php echo of_get_option('border_color_6');?> !important;}<?php }?>
<?php if(of_get_option('border_color_7')){?>.sf-menu > li.color-7 > a span.border-menu{background: <?php echo of_get_option('border_color_7');?> !important;}<?php }?>
<?php if(of_get_option('border_color_8')){?>.sf-menu > li.color-8 > a span.border-menu{background: <?php echo of_get_option('border_color_8');?> !important;}<?php }?>
<?php if(of_get_option('border_color_9')){?>.sf-menu > li.color-9 > a span.border-menu{background: <?php echo of_get_option('border_color_9');?> !important;}<?php }?>
<?php if(of_get_option('border_color_10')){?>.sf-menu > li.color-10 > a span.border-menu{background: <?php echo of_get_option('border_color_10');?> !important;}<?php }?>
        
<?php if ($heading_font['face'] != 'none') {?>
.sf-top-menu li a,
#mainmenu li > a,
.item_slide_caption .post-meta.meta-main-img, .feature-post-list .post-meta.meta-main-img, .footer_carousel .meta-comment, .post-meta.meta-main-img,.item_slide_caption h1 a,  .tickerfloat, .box-1 .inside h3, .detailholder.medium h3, .feature-post-list .feature-post-title, .widget-title h2, .image-post-title, .grid.caption_header h3, ul.tabs li a, ul.tabs1 li a, ul.hover_tab_post_large li a, h1, h2, h3, h4, h5, h6, .carousel_title, .postnav a{font-family:<?php echo $heading_font['face'];?> !important;}   
<?php }?> 
<?php if ($body_font['face'] != 'none') {?>
body, p, #ticker a, #search_block_top #search_query_top, .tagcloud a, .btn.default.read_more{font-family:<?php echo $body_font['face'];?> !important; font-size:<?php echo $body_font['size'];?>; font-weight:<?php echo $body_font['style'];?> !important;}   
<?php }?>            

<?php if(of_get_option('image_hover_disable')){?>
.feature-item:hover img, .feature-post-list .feature-image-link img:hover {
-webkit-transform: scale(1) rotate(0deg);
-moz-transform: scale(1) rotate(0deg);
-o-transform: scale(1 rotate(0deg));
transform: scale(1) rotate(0deg);
}
<?php }?> 

<?php echo of_get_option('custom_style');
if (!empty($color)) {
?>
@media only screen and (min-width: 768px) and (max-width: 959px) {
ul.tabs, ul.tabs1{background-color: #222 !important;}
html ul.tabs li.active, html ul.tabs li.active a, html ul.tabs li.active a:hover, html ul.tabs1 li.active, html ul.tabs1 li.active a, html ul.tabs1 li.active a:hover{ background: <?php echo $color;?> !important;}
}

@media only screen and (max-width:767px) {
ul.tabs, ul.tabs1{background-color: #222 !important;}
html ul.tabs li.active, html ul.tabs li.active a, html ul.tabs li.active a:hover, html ul.tabs1 li.active, html ul.tabs1 li.active a, html ul.tabs1 li.active a:hover{ background: <?php echo $color;?> !important;}
}

@media only screen and (min-width:480px) and (max-width:767px) {
ul.tabs, ul.tabs1{background-color: #222 !important;}
html ul.tabs li.active, html ul.tabs li.active a, html ul.tabs li.active a:hover, html ul.tabs1 li.active, html ul.tabs1 li.active a, html ul.tabs1 li.active a:hover{ background: <?php echo $color;?> !important;}
}
<?php }?>