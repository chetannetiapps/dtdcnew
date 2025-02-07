<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
render($page['content']['metatags']);

 drupal_add_css(drupal_get_path('theme', 'thailand_dtdc') . '/css/style_map.css');
 drupal_add_js(drupal_get_path('theme', 'thailand_dtdc') . '/js/jquery.min.js');
 drupal_add_js(drupal_get_path('theme', 'thailand_dtdc') . '/js/connect.js');
?>
<div class="dd-home">
  <header>
    <div class="container-fluid">
      <div class="row ">
       <div class="container">
         <div class="col-lg-12 col-md-12">
           <div class="row">
             <nav role="navigation" class="navbar navbar-default dd-nav pull-left">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>
              <!-- Collection of nav links, forms, and other content for toggling -->
              <div id="navbarCollapse" class="collapse navbar-collapse">
          <div class="row top_row">
                  <div class="dropdown">
                   <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><span aria-hidden="true"></span> Choose Country <span class="caret"></span></button>
                    <ul class="dropdown-menu">
            <li class="gl"><a href="http://www.dtdc.com/"><span class="glyphicon glyphicon-globe">&nbsp;</span>Global</a></li>
              <li class="in"><a href="http://dtdc.in/"><span>&nbsp;</span>India</a></li>
                      <li class="au"><a href="http://dtdcaustralia.com.au/"><span>&nbsp;</span>Australia</a></li>
                      <li class="bl"><a href="http://bangladesh.dtdc.com/"><span>&nbsp;</span>Bangladesh</a></li>
                      <li class="ca"><a href="http://canada.dtdc.com/"><span>&nbsp;</span>Canada</a></li>
                      <li class="ch"><a href="http://china.dtdc.com/"><span>&nbsp;</span>China</a></li>
                      <li class="hk"><a href="http://hongkong.dtdc.com/"><span>&nbsp;</span>Hongkong</a></li>
                      <li class="kenya"><a href="http://Kenya.dtdc.com/"><span>&nbsp;</span>Kenya</a></li>
                      <li class="malaysia"><a href="http://malaysia.dtdc.com/"><span>&nbsp;</span>Malaysia</a></li>

                      <li class="ne"><a href="http://nepal.dtdc.com/"><span>&nbsp;</span>Nepal</a></li>
                    <!-- <li class="oman"><a href="http://oman.dtdc.com/"><span>&nbsp;</span>Oman</a></li> -->
                      <!-- <li class="nz"><a href="http://nz.dtdc.com/"><span>&nbsp;</span>New Zealand</a></li>
                      <li class="pakistan"><a href="http://pakistan.dtdc.com/"><span>&nbsp;</span>Pakistan</a></li> -->
                      <li class="sg"><a href="http://singapore.dtdc.com/"><span>&nbsp;</span>Singapore</a></li>
                      <li class="sl"><a href="http://srilanka.dtdc.com/"><span>&nbsp;</span>Sri Lanka</a></li>
                      <li class="du"><a href="http://uae.dtdc.com/"><span>&nbsp;</span>United Arab Emirates</a></li>
                      <li class="uk"><a href="http://uk.dtdc.com/"><span>&nbsp;</span>United Kingdom</a></li>
                      <li class="us"><a href="http://usa.dtdc.com/"><span>&nbsp;</span>United States</a></li>
                    </ul>
                  </div>
                  <?php  $block = module_invoke('search', 'block_view', 'form');
                          print render($block); ?>
                          <?php print render($page['language_dropdown']); ?>

                </div>
                <!---menu block -->

                  <?php if (!empty($page['navigation'])): ?>
                    <?php print render($page['navigation']); ?>
                  <?php endif; ?>

                 <!---menu block -->
              </div>
          </nav>
          <a class="logo" href="/" title="Home"><img src="/sites/thailand.dtdc.com/themes/thailand_dtdc/images/dtdc_logo.png" alt="Home" class="img-responsive pull-right" /></a>
        </div>
      </div>
    </div>
  </div>
</div>
</header>
</div>
   <!-- Content -->
   <div class="container-fluid dt-inner-banner dt-bg5">
        <h1><?php echo $node->title; ?></h1>
        <?php echo $node->body['und'][0]['summary']; ?>
      <div class="clear"></div>
      </div>

    <div class="container">
      <p class="dt-margin network_para" style="font-family:'gotham-light';font-size: 14px;text-align: center;">
      <?php $nid = arg(1);
      if($nid == '176'){ ?>
                จุดแข็งที่สุดของ ดีทีดีซี คือรูปแบบธุรกิจเครือข่ายพันธมิตรที่มีเอกลักษณ์ องค์กรของเราเป็นหนึ่งในเครือข่ายธุรกิจ สัมปทานที่เติบโตเร็วที่สุดในโลก เราได้พัฒนาให้เกิดความร่วมมือในการให้บริการขนส่งด่วนที่ใหญ่ที่สุดใน ประเทศอินเดีย และได้นำรูปแบบธุรกิจเดียวกันไปใช้ในส่วนต่างๆของโลก วันนี้ ดีทีดีซี มีสาขาอยู่ใน 23 ประเทศ และมีเครือข่ายธุรกิจในกว่า 240 ประเทศ
	 <?php  }
        else{ ?>
       The biggest strength of DTDC is its unique network & partner-based business model. Our organisation has one of the fastest-growing franchise business networks across the globe. We have developed the largest chain of <a href="product-services#domestic">express courier services</a> in India and have replicated the same model in various geographies. Today, DTDC has a direct presence in 21 countries and a business network in over 240 countries.
       <?php }?>

        </p>
      </div>
      <div class="network">
        <?php include 'map.inc'; ?>
        <div class="clear"></div>
      </div>
    </div><!-- main container close -->



            <div class="clear"></div>

    <div class="footer-addr">
      <p><b>DTDC Headquarter:</b> <br>DTDC House No.3, Victoria Road, Bangalore 560047, Karnataka <br>Tel: 080-25365032, 25365039</p>
    </div>
  <!-- Content -->
<footer>
  <div class="container-fluid dt-footer-bottom">
    <div class="container">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="dt-foot-social">
          <a href="https://www.facebook.com/dtdcsingapore/" target="_blank"><img src="/sites/china.dtdc.com/themes/china_dtdc/images/facebook.png" alt="" title=""/></a>
          <a href="https://www.linkedin.com/company/dtdc-courier-&-cargo-pvt-ltd" target="_blank"><img src="/sites/china.dtdc.com/themes/china_dtdc/images/linkedin.png" alt="" title=""/> </a>
          <a href="https://twitter.com/DTDC_Singapore" target="_blank"><img src="/sites/china.dtdc.com/themes/china_dtdc/images/twitter.png" alt="" title=""/> </a>
          <a href="https://plus.google.com/104727912127336791002/posts" target="_blank"><img src="/sites/china.dtdc.com/themes/china_dtdc/images/googleplus.png" alt="" title=""/></a>
          <a href="https://www.youtube.com/user/dtdcindia" target="_blank"><img src="/sites/china.dtdc.com/themes/china_dtdc/images/youtube.png" alt="" title=""/></a>
        </div>
        <div class="clearfix"></div>
         <?php print theme('links', array('links' => menu_navigation_links('menu-footer-menu'), 'attributes' => array('class'=> array('links', 'dt-foot-menu')) ));?>
           <?php //print render($page['footer']);?>
        <div class="clearfix"></div>
        <p class="dt-copyright">&copy; Copyright DTDC Express Limited. All Rights Reserved</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a class="dt-mail-foot" href="mailto:customersupport@dtdc.com"><i class="glyphicon glyphicon-envelope"></i> customersupport@dtdc.com</a> </div>
    </div>
  </div>
</footer>
