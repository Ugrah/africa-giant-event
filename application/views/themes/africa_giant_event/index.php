<?php defined('BASEPATH') or exit('No direct script access allowed');
echo theme_head_view();
// get_template_part($navigationEnabled ? 'navigation' : '');
?>
<!-- Page Preloder -->
<div id="preloder">
   <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
   <div class="offcanvas__logo">
      <a href="index-2.html"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt=""></a>
   </div>
   <div id="mobile-menu-wrap"></div>
   <div class="offcanvas__btn__widget">
      <a href="#">Book Now <span class="arrow_right"></span></a>
   </div>
   <div class="offcanvas__widget">
      <ul>
         <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
         <li><span class="icon_phone"></span> (123) 456-78-910</li>
      </ul>
   </div>
   <div class="offcanvas__language">
      <img src="<?php echo base_url('assets/img/lan.png'); ?>" alt="">
      <span>English</span>
      <i class="fa fa-angle-down"></i>
      <ul>
         <li>English</li>
         <li>Bangla</li>
      </ul>
   </div>
   <div class="offcanvas__auth">
      <ul>
         <li><a href="#">Login</a></li>
         <li><a href="#">Register</a></li>
      </ul>
   </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
   <div class="header__top">
      <div class="container">
         <div class="row">
            <div class="col-lg-7">
               <ul class="header__top__widget">
                  <li><span class="icon_pin_alt"></span> 96 Ernser Vista Suite 437, NY, US</li>
                  <li><span class="icon_phone"></span> (123) 456-78-910</li>
               </ul>
            </div>
            <div class="col-lg-5">
               <div class="header__top__right">
                  <div class="header__top__auth">
                     <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                     </ul>
                  </div>
                  <div class="header__top__language">
                     <img src="<?php echo base_url('assets/img/lan.png'); ?>" alt="">
                     <span>English</span>
                     <i class="fa fa-angle-down"></i>
                     <ul>
                        <li>English</li>
                        <li>Bangla</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="header__nav__option">
      <div class="container">
         <div class="row">
            <div class="col-lg-2">
               <div class="header__logo">
                  <a href="index-2.html"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt=""></a>
               </div>
            </div>
            <div class="col-lg-10">
               <div class="header__nav">
                  <nav class="header__menu">
                     <ul class="menu__class">
                        <li class="active"><a href="index-2.html">Home</a></li>
                        <li><a href="rooms.html">Rooms</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Pages</a>
                           <ul class="dropdown">
                              <li><a href="about.html">About Us</a></li>
                              <li><a href="room-details.html">Room Details</a></li>
                              <li><a href="blog-details.html">Blog Details</a></li>
                              <li><a href="blog-details.html">Item</a></li>
                           </ul>
                        </li>
                        <li><a href="blog.html">News</a></li>
                        <li><a href="contact.html">Contact</a></li>
                     </ul>
                  </nav>
                  <div class="header__nav__widget">
                     <a href="#">Book Now <span class="arrow_right"></span></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="canvas__open">
            <span class="fa fa-bars"></span>
         </div>
      </div>
   </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="<?php echo base_url('assets/img/hero.jpg'); ?>">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="hero__text">
               <h5>WELCOME Africa Giant Event</h5>
               <h2>Experience the greatest for you holidays.</h2>
            </div>
            <form action="#" class="filter__form">
               <div class="filter__form__item filter__form__item--search">
                  <p>Location</p>
                  <div class="filter__form__input">
                     <input type="text" placeholder="Search Location">
                     <span class="icon_search"></span>
                  </div>
               </div>
               <div class="filter__form__item">
                  <p>Check In</p>
                  <div class="filter__form__datepicker">
                     <span class="icon_calendar"></span>
                     <input type="text" class="datepicker_pop check__in">
                     <i class="arrow_carrot-down"></i>
                  </div>
               </div>
               <div class="filter__form__item">
                  <p>Check Out</p>
                  <div class="filter__form__datepicker">
                     <span class="icon_calendar"></span>
                     <input type="text" class="datepicker_pop check__out">
                     <i class="arrow_carrot-down"></i>
                  </div>
               </div>
               <div class="filter__form__item filter__form__item--select">
                  <p>Person</p>
                  <div class="filter__form__select">
                     <span class="icon_group"></span>
                     <select>
                        <option value="">2 Adult, 1 Children</option>
                        <option value="">2 Adult</option>
                        <option value="">1 Adult</option>
                     </select>
                  </div>
               </div>
               <button type="submit">BOOK NOW</button>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- Hero Section End -->

<div id="wrapper">
   <div id="content">
      <div class="container">
         <div class="row">
            <?php get_template_part('alerts'); ?>
         </div>
      </div>
      <?php if (isset($knowledge_base_search)) { ?>
         <?php get_template_part('knowledge_base/search'); ?>
      <?php } ?>
      <div class="container">
         <?php hooks()->do_action('customers_content_container_start'); ?>
         <div class="row">
            <?php
            /**
             * Don't show calendar for invoices, estimates, proposals etc.. views where no navigation is included or in kb area
             */
            if (is_client_logged_in() && $subMenuEnabled && !isset($knowledge_base_search)) { ?>
               <ul class="submenu customer-top-submenu">
                  <?php hooks()->do_action('before_customers_area_sub_menu_start'); ?>
                  <li class="customers-top-submenu-files"><a href="<?php echo site_url('clients/files'); ?>"><i class="fa fa-file" aria-hidden="true"></i> <?php echo _l('customer_profile_files'); ?></a></li>
                  <li class="customers-top-submenu-calendar"><a href="<?php echo site_url('clients/calendar'); ?>"><i class="fa fa-calendar-minus-o" aria-hidden="true"></i> <?php echo _l('calendar'); ?></a></li>
                  <?php hooks()->do_action('after_customers_area_sub_menu_end'); ?>
               </ul>
               <div class="clearfix"></div>
            <?php } ?>
            <?php echo theme_template_view(); ?>
         </div>
      </div>
   </div>
   <?php
   echo theme_footer_view();
   ?>
</div>
<?php
/* Always have app_customers_footer() just before the closing </body>  */
app_customers_footer();
/**
 * Check for any alerts stored in session
 */
app_js_alerts();
?>
<!-- Js Plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php // echo base_url('assets/js/jquery-3.3.1.min.js'); 
               ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.nice-select.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slicknav.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>

</html>