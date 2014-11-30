<?php

/* EspritCaddyBundle::layout.html.twig */
class __TwigTemplate_5c197c5faa28f7c096cb05b37fed0a1a3b28ecd73f3944805392db37d6d34e0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t\t<meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\" />
\t\t<meta name=\"viewport\" content=\"width=device-width\" />
\t\t<title>BESTSHOP</title>
\t
\t<!-- Font CSS Link -->
\t    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
\t\t<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
\t<!-- Font CSS Link -->\t
\t\t
\t<!-- Start CSS Link -->
\t\t<link rel=\"stylesheet\" href=\"css/bootstrap.css\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"css/responsive.css\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"css/main.css\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"css/custom_responsive.css\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"css/menu.css\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"css/supermenu.css\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"css/bounce_slider.css\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"css/jcarousel.css\" type=\"text/css\" media=\"screen\" />
\t\t<link rel=\"stylesheet\" href=\"css/jquery.bxslider.css\" type=\"text/css\" media=\"screen\" />\t
\t\t<link rel=\"stylesheet\" href=\"css/grid-list.css\" type=\"text/css\" />
\t\t<link rel=\"stylesheet\" href=\"css/accrodin.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"css/ui.css\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"css/jquery.jqzoom.css\" type=\"text/css\"/>
\t<!-- End CSS Link -->
\t
\t</head>
\t<body>
\t\t<div class=\"header\">
\t\t\t<div class=\"container main\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"header_top\">
\t\t\t\t\t\t<div class=\"currency_translator span5\">\t
\t\t\t\t\t\t\t<div class=\"currency\">
\t\t\t\t\t\t\t\tCURRENCY:
\t\t\t\t\t\t\t\t\t<select class=\"select_bg\">
\t\t\t\t\t\t\t\t\t\t<option value=\"dollar\">DOLLAR</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"euro\">EURO</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"taka\">TAKA</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"rupe\">RUPE</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"translator\">
\t\t\t\t\t\t\t\t<li class=\"en\"><a class=\"active\" href=\"#\">EN</a></li>
\t\t\t\t\t\t\t\t<li class=\"en\"><a href=\"#\">ES</a></li>
\t\t\t\t\t\t\t\t<li class=\"en\"><a href=\"#\">FR</a></li>
\t\t\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"account_login span7\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"account_info\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"images/my_account.png\"> MY ACCOUNT</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"wish_list.html\"><img alt=\"\" src=\"images/mywish_list.png\"> MY WISHLIST</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"cart.html\"><img alt=\"\" src=\"images/shopping_cart.png\"> MY CART</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\"><img alt=\"\" src=\"images/checkout.png\"> MY CHECKOUT</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"log_in.html\"><img alt=\"\" src=\"images/log_out.png\"> LOGIN</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"header_top\">
\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t<div class=\"logo\"></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"call_info span4\">
\t\t\t\t\t\t\t<p>PHONE: <span class=\"color\">1 (234) 56 78 901</span></p>
\t\t\t\t\t\t\t<p>Call us Monday - Saturday: 9:00 am - 6:00 pm</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cart_info span3\">
\t\t\t\t\t\t\t<div class=\"cart_data\">Shopping Cart - \$0.00</div>
\t\t\t\t\t\t\t<button class=\"cart_btn btn btn-navbar\" data-toggle=\"collapse\" data-target=\".item_cart_wrap\"><img alt=\"\" src=\"images/shopping_cart_btn_img.png\"></button>
\t\t\t\t\t\t\t<div class=\"item_cart_content\">
\t\t\t\t\t\t\t\t<div class=\"item_cart_wrap collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"item_cart\">
\t\t\t\t\t\t\t\t\t\t<p class=\"item_cart_products\">No Products</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item_cart_info\">Shipping - \$0.00</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item_cart_info\">Total - \$0.00</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"checkout\">Checkout</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"cart\">Cart</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t\t
\t\t<div class=\"navigation navbar\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"navbar\">
\t\t\t\t\t<div class=\"container main\">
\t 
\t\t\t\t\t<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
\t\t\t\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t<!-- Be sure to leave the brand out there if you want it shown -->
\t 
\t\t\t\t\t<!-- Everything you want hidden at 940px or less, place within here -->
\t\t\t\t\t\t<div class=\"nav-collapse collapse\">
\t\t\t\t\t\t<!-- .nav, .navbar-search, .navbar-form, etc -->
\t\t\t\t\t\t\t<ul class=\"sf-menu\">
\t\t\t\t\t\t\t\t<li class=\"deeper parent current\"><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\tMen
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"men.html\">Dresses</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"product_details_men.html\">Product Details</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"deeper parent dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\tWomen
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"grid.html\">Dresses</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"bag.html\">Bags</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"beautiful.html\" >Beauty</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"bikini.html\">Bikini</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"nightwear.html\">Nightwear</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"club.html\" >Club</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"doll.html\">Doll</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"product_details_women.html\">Product Details</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\tKids
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"kid.html\">Dresses</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"product_details_kid.html\">Product Details</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Blogs</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog View</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single.html\">Single View</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>\t
\t\t\t\t\t\t\t\t<li><a href=\"#\">Styles</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"../bestshop_red/index.html\">Red</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Green</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"../bestshop_orange/index.html\">Orenge</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"../bestshop_purple/index.html\">Purple</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"../bestshop_brown/index.html\">Brown</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t\t\t\t<input type=\"search\" name=\"search\" placeholder=\"search\">
\t\t\t\t\t\t\t\t\t<button class=\"search_btn\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/icon_search.png\">
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t\t<div class=\"main_content\">

\t\t\t<div class=\"container main\" id=\"main-slide\">
\t\t\t\t<div id=\"wrapper\">
\t\t\t\t\t<div class=\"slide-content\">
\t\t\t\t\t\t<div class=\"bounce-slider\" id=\"first\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p class=\"bounce-desc right-side\"><span>New Modern Dress <br/> Women Summer Collection</span></p>
\t\t\t\t\t\t\t\t\t<img src=\"images/slides/slide1.png\" alt=\"image 1\"/>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p class=\"bounce-desc left-side\"><span>New Modern Dress <br/> Women Summer Collection</span></p>
\t\t\t\t\t\t\t\t\t<img src=\"images/slides/slide2.png\" alt=\"image 2\"/>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p class=\"bounce-desc left-side\"><span>New Modern Dress <br/> Women Summer Collection</span></p>
\t\t\t\t\t\t\t\t\t<img src=\"images/slides/slide3.png\" alt=\"image 2\"/>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<span class=\"next bounce-nav\"></span>\t
\t\t\t\t\t\t\t<span class=\"prev bounce-nav\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t

\t\t\t</div>
\t\t\t<div class=\"container main\">
\t\t\t\t<div class=\"row home-content\">
\t\t\t\t\t<div class=\"span4 feature-content\">
\t\t\t\t\t\t<div id=\"feature-image_1\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-content/sweater.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"feature-post-content_1\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li id=\"feature-post-content-title_1\">Sweater</li>
\t\t\t\t\t\t\t\t<li>Up to</li>
\t\t\t\t\t\t\t\t<li><p id=\"feature-post-content-discount_1\">40%</p><p>off</p></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><button class=\"shop-now\">Shop Now</button></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span4 feature-content\">
\t\t\t\t\t\t<div id=\"feature-image_2\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-content/scarf.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"feature-post-content_2\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li id=\"feature-post-content-title_2\">Scarf</li>
\t\t\t\t\t\t\t\t<li>Up to</li>
\t\t\t\t\t\t\t\t<li><p id=\"feature-post-content-discount_2\">40%</p><p>off</p></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><button class=\"shop-now\">Shop Now</button></li> 
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span4 feature-content\">
\t\t\t\t\t\t<div id=\"feature-image_3\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-content/dress.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"feature-post-content_3\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li id=\"feature-post-content-title_3\">Dress</li>
\t\t\t\t\t\t\t\t<li>Up to</li>
\t\t\t\t\t\t\t\t<li><p id=\"feature-post-content-discount_3\">40%</p><p>off</p></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><button class=\"shop-now\">Shop Now</button></li> 
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"container main\" id=\"first-carousel-slide\">
\t\t\t\t<div class=\"row list_work\">
\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\t<span>New Products</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t<ul id=\"mycarousel\" class=\"jcarousel-skin-tango item da-thumbs\">
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/01.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">
\t\t\t\t\t\t\t\t<div class=\"new\"></div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/02.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/03.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">
\t\t\t\t\t\t\t\t<div class=\"sell\"></div>
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/04.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/01.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/02.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/03.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/04.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t</div>\t
\t\t\t

\t\t\t<div class=\"container main\" id=\"second-carousel-slide\">
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span8 p_product\">
\t\t\t\t\t<div class=\"list_work\">
\t\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\t\t<span>Popular Products</span>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t<div class=\"slider2 popular_product\">
\t\t\t\t\t\t\t<ul class=\"row slide popular_product_wrap-left\">
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/1.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/2.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"row slide popular_product_wrap-left\">
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/3.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/4.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"row slide popular_product_wrap-left\">
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/1.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/2.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"row slide popular_product_wrap-left\">
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/3.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/4.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t
\t\t\t\t\t</div>
\t\t\t\t\t<br/>
\t\t\t\t</div>
\t\t\t\t<div class=\"span4 feature_product\">
\t\t\t\t\t<div class=\"list_work\">
\t\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\t\t<span>Popular Products</span>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t<div class=\"fslide\">
\t\t\t\t\t\t\t<ul class=\"bxslider\">
\t\t\t\t\t\t\t\t<li class=\"feature_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-product/1.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_content\">Lorem ipsum dolor sit amet conse adipising elit.</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"feature_pro_price\">\$500</button>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"feature_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-product/2.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_content\">Lorem ipsum dolor sit amet conse adipising elit.</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"feature_pro_price\">\$500</button>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"feature_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-product/3.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_content\">Lorem ipsum dolor sit amet conse adipising elit.</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"feature_pro_price\">\$500</button>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"feature_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-product/1.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_content\">Lorem ipsum dolor sit amet conse adipising elit.</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"feature_pro_price\">\$500</button>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"feature_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-product/2.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_content\">Lorem ipsum dolor sit amet conse adipising elit.</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"feature_pro_price\">\$500</button>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"feature_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-product/3.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_content\">Lorem ipsum dolor sit amet conse adipising elit.</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"feature_pro_price\">\$500</button>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t\t\t
\t\t<div class=\"contact_info\">
\t\t\t<div class=\"container main\">
\t\t\t\t<ul class=\"row\">
\t\t\t\t\t<li class=\"follow-us span4\">
\t\t\t\t\t\t<div class=\"follow-social\">Follow us on:</div>
\t\t\t\t\t\t<div class=\"social-icon\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"fb\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img alt=\"\" src=\"images/social/facebook.png\"></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"tw\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img alt=\"\" src=\"images/social/twitter.png\"></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"rss\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img alt=\"\" src=\"images/social/rss.png\"></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"yt\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img alt=\"\" src=\"images/social/youtube.png\"></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"span4\">
\t\t\t\t\t<div class=\"free-shipping\">
\t\t\t\t\t\t<div class=\"free-shipping-wrap\">
\t\t\t\t\t\t\t<div class=\"free-shipping-image\">
\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/social/shiping-truck.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"free-shipping-info\">
\t\t\t\t\t\t\t\t<div id=\"free-shipping-info-title\">
\t\t\t\t\t\t\t\t\tFree Shipping
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"free-shipping-info\">
\t\t\t\t\t\t\t\t\tOn Orders  Over \$ 499
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"contact-no span4\">
\t\t\t\t\t\t<div class=\"contact-no-wrap\">
\t\t\t\t\t\t\t<div class=\"contact-no-image\">
\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/social/telephone.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"contact-no-info\">
\t\t\t\t\t\t\t\t<div id=\"contact-no-info-title\">
\t\t\t\t\t\t\t\t\tOrder Online
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<div id=\"contact-no-info\">
\t\t\t\t\t\t\t\t\t<p>Phone:</p>
\t\t\t\t\t\t\t\t\t<p id=\"nb\">1 (234) 56 78 901</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>\t
\t\t\t</div>

\t\t</div>
\t\t
\t\t<div class=\"footer\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"container main\" id=\"footer-top\">
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"span3 footer-col\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">Information</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Customer Service</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Site Map</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span3 footer-col\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">Why Buy From Us</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Shipping _ Returns</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Secure Shopping</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">International Shipping</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Affiliates</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Group Sales</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span3 footer-col\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">My Account</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Sign In</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Customer Service</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">My Wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Track My Order</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Help</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span3 footer-col\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">Newsletter</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"mail\" placeholder=\"Your E-mail Address\">
\t\t\t\t\t\t\t\t\t<button class=\"go_btn\">Go</button>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<p>Store Location: <span>8601 Creat Labaratory, New York, D05 86GR</span></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"container main\" id=\"footer-bottom\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"span8 footer-col\">
\t\t\t\t\t\t\tCopyright &#169; 2013 <a href=\"#\">Fedimo</a>. All rights reserved.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span4 footer-col\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"images/payment-getway/1.png\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"images/payment-getway/2.png\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"images/payment-getway/3.png\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"images/payment-getway/4.png\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"images/payment-getway/5.png\"></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<!-- Start JS Link -->
\t\t<script src=\"js/js-engine.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 922
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/menu/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 923
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/menu/superfish.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 924
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bounceslider/modernizr.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 925
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bounceslider/jquery.bounceslider.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 926
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/new-product-js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"> </script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 927
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/new-product-js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 928
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bxslider/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 929
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bxslider/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 930
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 931
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mixitup/jquery-ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 932
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mixitup/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 933
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mixitup/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 934
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mixitup/mixitop-inline.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 935
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mixitup/ga.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 936
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mixitup/cloudflare.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 937
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/contact_form/jquery.form.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 938
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/contact_form/init_form.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 939
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 940
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/zoom/jquery.jqzoom-core.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 941
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 942
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
\t<!-- End JS Link -->\t\t
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "EspritCaddyBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1022 => 942,  1018 => 941,  1014 => 940,  1010 => 939,  1006 => 938,  1002 => 937,  998 => 936,  994 => 935,  990 => 934,  986 => 933,  982 => 932,  978 => 931,  974 => 930,  970 => 929,  966 => 928,  962 => 927,  958 => 926,  954 => 925,  950 => 924,  946 => 923,  942 => 922,  19 => 1,);
    }
}
