<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rkelectrical
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rkelectrical' ); ?></a>

	<header class="header">
            <div class="upper-header">
                <div class="container">
                    <div class="row">
                        <div class="col-auto logo-wrap">
                            <!-- <a href="https://geologica.saydev.co.uk/" class="custom-logo-link" rel="home" itemprop="url"
                                title="GeoLogica"><img src="assets/images/rk-electronic.png" class="custom-logo"
                                    alt="GeoLogica" itemprop="logo" decoding="async"></a> -->
									<?php
						// Display the site logo with a link to the home page
						the_custom_logo();
						?>
                            <!-- <h1 class="site-description font-muli">World-class training for the modern energy industry
                            </h1> -->
                        </div>
                        <div class="col-auto ms-auto header-contact-wrap">
                            <div class="header-contact-info d-lg-block d-none">
                                <div class="textwidget">
                                    <ul>
                                        <li><a title="+44 20 4536 5837" href="tel:+442045365837"><br>
                                                <span class="icon"><i class="fa-solid fa-phone"></i></span><br>
                                                <span><b>United Kingdom</b><br>
                                                    +44 20 4536 5837 </span><br>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="+1 713 900 1917" href="tel:+17139001917"><br>
                                                <span><b>United States</b><br>
                                                    +1 713 900 1917</span><br>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul id="menu-social-media" class="social-menu d-lg-flex d-none">
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-230"><a
                                        title="Linkedin" target="_blank" rel="noopener"
                                        href="https://www.linkedin.com/company/geologica-ltd"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                <li id="menu-item-2694"
                                    class="footer-none menu-item menu-item-type-custom menu-item-object-custom menu-item-2694">
                                    <a title="Cart" target="_blank" rel="noopener"
                                        href="https://geologica.arlo.co/uk/checkout"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </li>
                                <li id="menu-item-2695"
                                    class="footer-none menu-item menu-item-type-custom menu-item-object-custom menu-item-2695">
                                    <a title="Portal" target="_blank" rel="noopener"
                                        href="https://geologica.arlo.co/w/US/portal/login"><i
                                            class="fa-solid fa-cart-shopping"></i></a>
                                </li>
                            </ul> <button class="navbar-toggler d-block d-lg-none" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="menu-btn"> <span></span> <span></span> <span></span> </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="bottom-header navbar navbar-expand-lg navbar-light py-0">
				<div class="container">
					<div class="bottom-header-logo">
                        <a href="<?php echo site_url();?>" class="custom-logo-link" rel="home" itemprop="url"><img src="<?php echo get_theme_mod( 'your_theme_hover_logo' ); ?>" class="custom-logo" alt="RK Electronic" itemprop="logo" decoding="async"></a>
					</div>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php
						// Display the WordPress navigation menu with the "header-menu" location
						wp_nav_menu(array(
							// 'theme_location' => 'menu-2',
                            'menu' => 'main menu',
							'menu_class' => 'navbar-nav',
							// 'menu_id' => 'menu-header-menu', // Add menu_id parameter
							'container' => false,
                            'theme_location' => 'max_mega_menu_1',
						));
						?>
						<!-- Add other dynamic content here -->
					</div>
				</div>
			</nav>

        </header>
	<!-- #masthead -->
    