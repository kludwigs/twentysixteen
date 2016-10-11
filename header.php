<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--
	<link rel='stylesheet' type='text/css' href='bootstrap-3.3.6-dist/css/bootstrap.min.css' /></link>	
	<link rel='stylesheet' type='text/css' href='bootstrap-3.3.6-dist/css/bootstrap.min.css' /></link>	
	<script src='bootstrap-3.3.6-dist/js/bootstrap.min.js'></script>
	-->
	<script src="wp-content/themes/twentysixteen/js/jquery-2.2.0.js"></script>
	
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
<script>
/*   */
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  var width = $(window).width();
	  
      if (target.length) 
	  {
		  if(width<901)
		{
        $('html, body').animate({
          scrollTop: target.offset().top - 20
        }, 1000);
		}
		else
		{
        $('html, body').animate({
          scrollTop: target.offset().top - 350
        }, 1000);			
		}
		
        return false;
      }
    }
  });
});
/* * /

$(function() {
 
  // scroll handler
  var scrollToAnchor = function( id ) {
 
    // grab the element to scroll to based on the name
    var elem = $("a[name='"+ id +"']");
 
    // if that didn't work, look for an element with our ID
    if ( typeof( elem.offset() ) === "undefined" ) {
      elem = $("#"+id);
    }
 
    // if the destination element exists
    if ( typeof( elem.offset() ) !== "undefined" ) {
 
      // do the scroll
      $('html, body').animate({
        scrollTop: elem.offset().top
      }, 1000 );
 
    }
    
  };
  
 
  // bind to click event
  $("a").click(function( event ) {
   
    // only do this if it's an anchor link
    if ( $(this).attr("href").match(/^#/) ) {
      
      // prevent default propagation
      event.preventDefault();
      
      // scroll to the location
      var href = $(this).attr('href').replace('#', '');
      scrollToAnchor( href );

      // if we have pushState
      if ( history.pushState ) {
        history.pushState( null, null, '#'+href );
      }
			   
      // fallback to prevent jitter
      return false;
 
    }
 
  });
 
});
/* * /
$(document).ready(function () {
  $(".navbar-nav li a").click(function(event) {
    $(".navbar-collapse").collapse('hide');
  });
});
/* */
</script>	
</head>

<body <?php body_class(); ?>>
<style>
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: #999999;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 16px;}
}
.navbar-default .navbar-toggle .icon-bar {
    background-color: red;
}
#sitebarbutton
{
	color:#cccccc;	
}
#sitebarbutton:visited, #sitebarbutton:hover, #sitebarbutton:active,#sitebarbutton:focus
{
	background-color:black !Important;
	outline: 0;
}
@media (min-width: 900px)
{
	#sitebarbutton
	{
		display:none;
	}
}
</style>
	
		<!--
<div id="page" class="site">

<nav id="themainnav" class="navbar navbar-inverse navbar-fixed-top" style="padding-bottom:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="z-index:100;">		
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
		<span class="icon-bar"></span> 
      </button>
		<a class="navbar-brand" style="padding-left:32px;margin-top:-7px;" href="#"><img src="wp-content/images/facebook_cover.jpg" width="50" height="50" ></a>     
    </div>
    <div id="mynavbar" class="collapse navbar-collapse pull-left" style="float:;margin-left:30px;font-size:120%; width:50%; font-weight:bold; color-grey;">
      <ul class="nav navbar-nav" style="padding-top:16px;padding-bottom:0px">
				<li><a href="#info" data-toggle="collapse" data-target=".navbar-collapse.in">Info</a></li>
				<li><a href="#gallery"  data-toggle="collapse" data-target=".navbar-collapse.in">Gallery</a></li>
				<li><a href="#menu"  data-toggle="collapse" data-target=".navbar-collapse.in">Menu</a></li>		
      </ul>
	</div>
  </div>
</nav>		
&#9776; open
-->
<div id="mySidenav" class="sidenav" style="z-index:1000;width:180;">
<!--
  <a href="javascript:void(0)" class="closebtn" onclick="toggleElement()">&times;</a>
  -->
<img src="wp-content/images/facebook_cover.jpg" height="90" style="margin-left:20px">
  <a href="#info" onclick="toggleElement()">Info</a>
  <a href="#gallery" onclick="toggleElement()">Gallery</a>
  <a href="#menu" onclick="toggleElement()">Menu</a>
</div>
<button id="sitebarbutton" class="btn-custom" onclick="toggleElement()" style="float: right;z-index:1000;position: fixed;top: 12px;right:12px;">

<span id="glyphSpan" class="glyphicon glyphicon glyphicon-align-justify" style="font-size:20px;z-index:1000"></span>

</button>

<script>
var openSideBar = false;
function toggleElement()
{
		if(!openSideBar)
		{
			openSideBar = true;
			openNav();			
		}
		else
		{
			closeNav();
			openSideBar = false;
		}		
}

function openNav() {
    document.getElementById("mySidenav").style.width = "180px";
	document.getElementById("glyphSpan").className = "glyphicon glyphicon-remove"
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	document.getElementById("glyphSpan").className = "glyphicon glyphicon glyphicon-align-justify"
}
</script>

	<div class="site-inner">


<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<div>
				
				</div>
				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content" style="" >
