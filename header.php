<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if !(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
      <!-- Basic Page Needs
  	  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="msvalidate.01" content="089273EA6C06201294342FF0893A5DB5" />
    <title><?php bloginfo('name'); ?></title>
	<meta property="og:description" content="Công Ty TNHH Tư Vấn QLTN và Môi Trường SVN tên viết tắt “Môi Trường SVN” là doanh nghiệp chuyên tư vấn thủ tục pháp lý, hồ sơ môi trường; thiết kế, thi công" />
	<meta name="keywords" content="Môi trường SVN, môi trường, dịch vụ môi trường, giấy tờ môi trường, dịch vụ pháp lý môi trường, tài nguyên môi trường, báo cáo môi trường, tư vấn môi trường, tư vấn thủ tục môi trường, thủ tục pháp lý môi trường, thủ tục môi trường, bảo vệ môi trường, báo cáo giám sát môi trường, báo cáo giám sát môi trường định kỳ, ĐTM, đánh giá tác động môi trường, lập đề án bảo vôi môi trường, đăng ký chủ nguồn thải, cam kết bảo vệ môi trường, đề án bảo vệ môi trường, đề án bảo vệ môi trường chi tiết, đề án bảo vệ môi trường đơn giản, gia hạn giấy đăng ký khai thác nước ngầm, cấp mới giấy phép khai thác nước ngầm, báo cáo xả thải, báo cáo hoàn thành, hồ sơ xin phép xả thải, lập sổ chủ nguồn chất thải, sổ chủ nguồn chất thải nguy hại, khai thác nước dưới đất, đề án xả thải, năng lực khai thác nước dưới đất, năng lực lập đề án xả thải, hệ thống xử lý nước thải, thiết kế thi công hệ thống xử lý nước thải, xử lý khí thải, xử lý nước cấp, bơm các loại, bơm cho hệ thống nước thải, thiết kế hệ thống nước thải mini, nước thải sinh hoạt, nước thải công nghiệp, xử lý nước thải công nghiệp, công nghệ xanh bảo vệ môi trường, bể xử lý nước thải, hút bùn cho hệ thống nước thải, cong ty moi truong, tu van lap bao cao quan ly chat thai nguy hai,bao cao giam sat moi truong dinh ky 2016, BCGS, file báo cáo giám sát, lap bao cao giam sat Go Vap, cong ty moi truong Go Vap, de an don gian, de an chi tiet, khai thac nuoc ngam, ho so xa thai, dich vu tu van moi truong, so chu nguon chat thai nguy hai, danh gia tac dong moi truong cho chung cu, danh gia tac dong moi truong cho du an truong hoc, danh gia tac dong moi truong chon ha hang khach san, lap ho so moi truong, moi truong SVN, luat moi truong, ho so moi truong can thiet" />
	<meta property="og:site_name" content="Công ty môi trường SVN chuyên tư vấn thực hiện hồ sơ môi trường (báo cáo giám sát, đề án, kế hoạch bảo vệ môi trường) thiết kế thi công hệ thống xử lý nước thải " />
    <meta name='revisit-after' content='1 days' />
	<meta name="geo.placename" content="Gò Vấp, Hồ Chí Minh, Việt Nam" />
	<meta name="geo.position" content="10.838678;106.665290" />
	<meta name="geo.region" content="VN-HCM" />
	<meta name="ICBM" content="10.838678;106.665290" />
		<!-- Mobile Specific Metas
  		================================================== -->
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicons
        ================================================== -->
		<link rel="alternate" href="http://moitruongsvn.com" hreflang="vi-vn" />
        <?php $favor_icon = of_get_option('favicon_uploader'); ?>
            <link rel="shortcut icon" href="<?php if (!empty($favor_icon)){echo $favor_icon;}else{echo get_template_directory_uri().'/img/favicon.png';} ?>" type="image/x-icon" />       
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>    
<?php if (! is_404() ) { 			
			$thumbnail_id = get_post_thumbnail_id();
			if( !empty($thumbnail_id) ){
				$thumbnail = wp_get_attachment_image_src( $thumbnail_id , '440x280' );
				echo '<meta property="og:image" content="' . $thumbnail[0] . '"/>';		
			}		
		}
wp_head(); ?>
<!-- end head -->
</head>
<body <?php body_class();?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php if(of_get_option('full_or_boxed_layout')!= 'full_image_option'){
if(of_get_option('background_body_option')== 'big_image'){?>
<img alt="full screen background image" src="<?php echo of_get_option('background_large_image');?>" id="full-screen-background-image" />
<?php }}?>
<div id="content_nav">
        <div id="nav">
		<?php $top_menu = array('theme_location' => 'Top_Menu', 'container' => '', 'menu_class' => 'menu-top-menu-sf', 'menu_id' => '', 'fallback_cb' => false); wp_nav_menu($top_menu);?>
    	<?php $main_menu = array('theme_location' => 'Main_Menu', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'fallback_cb' => false, 'link_after'=>'<span class="border-menu"></span>'); wp_nav_menu($main_menu);?>
   </div>
    </div>    
<?php if(of_get_option('full_or_boxed_layout') == 'box_image_option'){ if(of_get_option('background_option') == 'background_image'){?>
<div class="full-background"><img  src="<?php echo of_get_option('background_large_image');?>" alt="" /></div>
<?php }}?>
<div id="sb-site" class="<?php if(of_get_option('full_or_boxed_layout') == 'full_image_option'){echo "body_wraper_full";}else{echo "body_wraper_box";}?>">      			
<!-- Start header -->
<header class="header-wraper">
<div class="header_top_wrapper">
<?php $main_top = array('theme_location' => 'Top_Menu', 'container' => '', 'menu_class' => 'sf-top-menu', 'menu_id' => 'menu-top', 'fallback_cb' => false);?>
	<div class="row <?php if($main_top == "" || !of_get_option('disable_top_menu')==0){echo "no-top";}?>">
		<div class="six columns header-top-left-bar">
		  <a class="open toggle-lef sb-toggle-left navbar-left" href="#nav">
						<div class="navicon-line"></div>
						<div class="navicon-line"></div>
						<div class="navicon-line"></div>
						</a>
		<?php if(!of_get_option('disable_top_menu')==1){?>
		<div class="mainmenu"> 
		<?php wp_nav_menu($main_top);?>
		<div class="clearfix"></div>
		</div>
		<?php }?>
		</div>
		<div class="six columns header-top-right-bar">
		<?php if(!of_get_option('disable_top_search')==1){?>
			<div id="search_block_top">
				<form id="searchbox" action="<?php echo home_url(); ?>" method="GET" role="search">
					<p>
						<input type="text" id="search_query_top" name="s" class="search_query ac_input" value="" placeholder="<?php _e('Nhập nội dung', 'jelly_text_main'); ?>">
						<a class="button_search" href="javascript:document.getElementById('searchbox').submit();"></a>
					</p>
				</form>
				<span>Search</span>
				<div class="clearfix"></div>
			</div>
		<?php }?>
		<div class="clearfix"></div>
		</div>
	</div>
</div>       
<div class="header_main_wrapper">
        <div class="row">
	<div class="<?php if (is_active_sidebar('banner-sidebar')) { echo'four columns header-top-left'; } else { echo'twelve columns logo-position';}?>">
      <!-- begin logo -->                        
      <a href="<?php echo home_url(); ?>">
      <?php $logo = of_get_option('logo_uploader'); ?>
      <?php if (!empty($logo)): ?>   
      <img src="<?php echo $logo; ?>" alt="<?php bloginfo('description'); ?>"/>
      <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('description'); ?>"/>
      <?php endif; ?>
      </a>
<!-- end logo -->
    </div>
    <?php if (is_active_sidebar('banner-sidebar')){ ?>
	<div class="eight columns header-top-right">  
  <?php dynamic_sidebar('banner-sidebar');?>
    </div>
    <?php }?>    
</div>
</div>             
<!-- end header, logo, top ads -->            
<!-- Start Main menu -->
<div id="menu_wrapper" class="menu_wrapper <?php if(!of_get_option('disable_sticky_menu')==1){echo "menu_sticky";}?>">
	<div class="row">
		<div class="main_menu twelve columns"> 
		<!-- main menu -->                   
			<div class="menu-primary-container main-menu"> 
				<?php $main_menu = array('walker' => new jellywp_walker(), 'theme_location' => 'Main_Menu', 'container' => '', 'menu_class' => 'sf-menu', 'menu_id' => 'mainmenu', 'fallback_cb' => false, 'link_after'=>'<span class="border-menu"></span>'); wp_nav_menu($main_menu);?>
				<?php if(!of_get_option('disable_random_post_links')==0){?>
				<div class="random_post_link">
				<?php $random_post_header_link = get_posts(array('orderby'=>'rand', 'posts_per_page'=>'1' ));
				if( !empty( $random_post_header_link ) ){?>  
				<a href="<?php echo get_permalink($random_post_header_link[0]->ID);?>"><i class="fa fa-random"></i></a>
				<?php }?>
				</div>
				<?php }?>
				<div class="clearfix"></div>
			</div>
		<!-- end main menu -->       
		</div>                       
	</div>   
</div>                
<?php if ( is_page_template('home-page-background.php') ) {}else{?>
<?php }?>
</header>
<div class="clearfix"></div>