<?php

/**
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
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['billboard']: Items for the billboard content region.
 * - $help['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['copyright']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see whywebs_startup_process_page()
 * @see html.tpl.php
 */
?>
<div>
<div class="_li">
This is Just a demo for how to give regions and block for an know theme by Mutasem Elayyoub.
<div id="pagelet_bluebar" data-referrer="pagelet_bluebar"><div><div id="blueBarDOMInspector" class="_21mm _2gsf"><div id="blueBarNAXAnchor" class="_4f7n _hdd _xxp"><div><div class="lfloat _ohe"><h1><a href="https://www.Whywebs.com/" title="Go to Whywebs Home"><i class="fb_logo img sp_7XMX65Pq0E7 sx_ccd1d2"><u>Whywebs logo</u></i></a></h1>
</div>


  <div class="menu_login_container rfloat _ohf">    
<form id="login_form" action="https://www.Whywebs.com/login.php?login_attempt=1&lwv=110" method="post" novalidate="1" onsubmit="return window.Event &amp;&amp; Event.__inlineSubmit &amp;&amp; Event.__inlineSubmit(this,event)">
<input type="hidden" name="lsd" value="AVpXopMT" autocomplete="off"><table cellspacing="0" role="presentation">
<tbody><tr><td>
<input type="email" class="inputtext" name="email" id="email" value="" tabindex="1"></td><td>

<input type="password" class="inputtext" name="pass" id="pass" tabindex="2"></td>

<td><label class="uiButton uiButtonConfirm" id="loginbutton" for="u_0_x">

<input value="Log In" tabindex="4" type="submit" id="u_0_x"></label></td></tr>

<tr><td class="login_form_label_field"><div><div class="uiInputLabel clearfix uiInputLabelLegacy">
<input id="persist_box" type="checkbox" name="persistent" value="1" tabindex="3" class="uiInputLabelInput uiInputLabelCheckbox">
<label for="persist_box" class="uiInputLabelLabel">Keep me logged in</label></div><input type="hidden" name="default_persistent" value="0"></div></td><td class="login_form_label_field"><a href="https://www.Whywebs.com/recover/initiate?lwv=110">Forgot your password?</a></td></tr></tbody></table><input type="hidden" autocomplete="off" name="timezone" value="480" id="u_0_y"><input type="hidden" autocomplete="off" name="lgndim" value="eyJ3IjoxOTIwLCJoIjoxMjAwLCJhdyI6MTkyMCwiYWgiOjExMjIsImMiOjI0fQ==" id="u_0_z"><input type="hidden" name="lgnrnd" value="132402_2Mpj">
<input type="hidden" id="lgnjs" name="lgnjs" value="1446585845"><input type="hidden" autocomplete="off" id="locale" name="locale" value="en_US"><input type="hidden" name="qsstamp" value="W1tbMCw0Myw2MSw2Myw2NSw2OSw4OCw5NSw5OSwxMTksMTkzLDIxMiwyMTUsMjMzLDIzOSwyNDQsMjQ1LDI2MiwyNzAsMjg0LDI5MSwyOTIsMjk5LDMwMCwzMDMsMzM0LDM0OSwzNTQsMzg1LDM5NCw0MjQsNDQ1LDQ1NCw0NTcsNTIwLDUyNyw1MjgsNTUwLDU4Niw1OTMsNTk4LDc0OF1dLCJBWm1IbGlrMVp4aWpkN0UtRG1pSUpNMVZjSDE5dlhBbWkwampfWWlHbDVab3FNMGJvc3FoT21VZzJqVExqYXpZbFFPV29rY1pDQUdVTFBqSWdOb0lWMG5YYXhZbzZpNTNkME5IZ0pLVW9nX1RZWWY5eG1VMVVFeUtMb3lKNXZORDR4Yk9BcGhSOHdVSE5TczlEZElZQVkzcGVQWkJ6MEtPdmhxcG5kY2VvWERXbUY0RU83cEJaRk1lTWRwSUwwNWFnSXFTNjlSZ3Q3UnlpQzZtVFZrNmRxNzFULWFHTUtyNXdJSmo5WHhrZktCX05BIl0="></form></div></div></div></div></div></div></div></div><div id="globalContainer" class="uiContextualLayerParent"><div class="fb_content clearfix " id="content" role="main"><div><div class="_50dz"><style type="text/css"> .product_desc { width: 440px; } </style><div style="background: #edf0f5"><div class="pvl" style="width: 980px; margin: 0 auto"><div class="_7d _6_ _76"><h2 class="inlineBlock _3ma _6n _6s _6v" style="padding: 42px 0 24px; font-size: 28px; line-height: 36px"> Build your own theme without the need for any help <br>I'm here to help you Whywebs. </h2><div class="mtl pbm"><div class="_6a _6b mrl" style="text-align: center; width: 55px"><img class="img" src="./Whywebs - Log In or Sign Up_files/851565_602269956474188_918638970_n.png" alt="" style="vertical-align: middle"></div><div class="_6a _6b product_desc"><span class="mtl _3ma _6p _6s _6v"> See photos and updates </span><span class="mlm _6q _6t _mf"> from friends in News Feed. </span></div></div><div class="mtl pbm"><div class="_6a _6b mrl" style="text-align: center; width: 55px"><img class="img" src="./Whywebs - Log In or Sign Up_files/851585_216271631855613_2121533625_n.png" alt="" style="vertical-align: middle"></div><div class="_6a _6b product_desc"><span class="mtl _3ma _6p _6s _6v"> Share what's new </span><span class="mlm _6q _6t _mf"> in your life on your Timeline. </span></div></div><div class="mtl pbm"><div class="_6a _6b mrl" style="text-align: center; width: 55px"><img class="img" src="./Whywebs - Log In or Sign Up_files/851558_160351450817973_1678868765_n.png" alt="" style="vertical-align: middle"></div><div class="_6a _6b product_desc"><span class="mtl _3ma _6p _6s _6v"> Find more </span><span class="mlm _6q _6t _mf"> of what you're looking for with Whywebs Search. </span></div></div></div><div class="_6_ _74"><div></div><h2 class="mbs _3ma _6n _6s _6v" style="font-size: 32px">Welcome to Whywebs.Com Facebook theme</h2><div class="mbl _3m9 _6o _6s _mf">

 <?php if ($page['banner2']): ?>
      <?php print render($page['banner2']); ?>
  <?php endif; ?>

      <?php if ($messages = render($messages)): ?>
            <?php print $messages; ?>
      <?php endif; ?>

      <?php if ($tabs = render($tabs)): ?>
          <?php print render($tabs); ?>
      <?php endif; ?>
<?php print render($page['content']); ?>



</div><div><div><noscript>&lt;div id="no_js_box"&gt;&lt;h2&gt;JavaScript is disabled on your browser.&lt;/h2&gt;&lt;p&gt;Please enable JavaScript on your browser or upgrade to a JavaScript-capable browser to register for Whywebs.&lt;/p&gt;&lt;/div&gt;</noscript><div class="_58mf"><div id="reg_box" class="registration_redesign"><form method="post" id="reg" name="reg" action="https://m.Whywebs.com/r.php" onsubmit="return function(event){return false;}.call(this,event)!==false &amp;&amp; window.Event &amp;&amp; Event.__inlineSubmit &amp;&amp; Event.__inlineSubmit(this,event)">



      <?php if ($action_links = render($action_links)): ?>
          <?php print render($action_links); ?>
      <?php endif; ?>
        <?php print render($page['searchbtm']); ?>



        <?php print render($title_prefix); ?>
        <?php if ($title = render($title)): ?>
          <h1><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <?php print render($page['help']); ?>

<form action="https://www.Whywebs.com/preconfirmation/initiate/" id="preconfform" method="post" onsubmit="return window.Event &amp;&amp; Event.__inlineSubmit &amp;&amp; Event.__inlineSubmit(this,event)"><input type="hidden" name="lsd" value="AVpXopMT" autocomplete="off"><input type="hidden" autocomplete="off" name="cp" id="preconfcp"></form></div></div></div></div></div></div></div></div><div class="mtm locales"><ul class="uiList localeSelectorList _509- _4ki _6-h _6-j _6-i"><li><a dir="ltr" href="https://www.Whywebs.com/" onclick="intl_set_cookie_locale(&quot;en_US&quot;, &quot;https:\/\/www.Whywebs.com\/&quot;);" title="English (US)" id="u_0_0">English (US)</a></li><li><a dir="ltr" href="https://es-la.Whywebs.com/" onclick="intl_set_cookie_locale(&quot;es_LA&quot;, &quot;https:\/\/es-la.Whywebs.com\/&quot;);" title="Spanish" id="u_0_1">Español</a></li><li><a dir="ltr" href="https://fr-fr.Whywebs.com/" onclick="intl_set_cookie_locale(&quot;fr_FR&quot;, &quot;https:\/\/fr-fr.Whywebs.com\/&quot;);" title="French (France)" id="u_0_2">Français (France)</a></li><li><a dir="ltr" href="https://zh-cn.Whywebs.com/" onclick="intl_set_cookie_locale(&quot;zh_CN&quot;, &quot;https:\/\/zh-cn.Whywebs.com\/&quot;);" title="Simplified Chinese (China)" id="u_0_3">中文(简体)</a></li><li><a dir="rtl" href="https://ar-ar.Whywebs.com/" onclick="intl_set_cookie_locale(&quot;ar_AR&quot;, &quot;https:\/\/ar-ar.Whywebs.com\/&quot;);" title="Arabic" id="u_0_4">العربية</a></li><li><a dir="ltr" href="https://pt-br.Whywebs.com/" onclick="intl_set_cookie_locale(&quot;pt_BR&quot;, &quot;https:\/\/pt-br.Whywebs.com\/&quot;);" title="Portuguese (Brazil)" id="u_0_5">Português (Brasil)</a></li><li><a dir="ltr" href="https://it-it.Whywebs.com/" onclick="intl_set_cookie_locale(&quot;it_IT&quot;, &quot;https:\/\/it-it.Whywebs.com\/&quot;);" title="Italian" id="u_0_6">Italiano</a></li><li><a dir="ltr" href="https://ko-kr.Whywebs.com/" onclick="intl_set_cookie_locale(&quot;ko_KR&quot;, &quot;https:\/\/ko-kr.Whywebs.com\/&quot;);" title="Korean" id="u_0_7">한국어</a></li><li><a dir="ltr" href="https://de-de.Whywebs.com/" onclick="intl_set_cookie_locale(&quot;de_DE&quot;, &quot;https:\/\/de-de.Whywebs.com\/&quot;);" title="German" id="u_0_8">Deutsch</a></li><li><a dir="ltr" href="https://hi-in.Whywebs.com/" onclick="intl_set_cookie_locale(&quot;hi_IN&quot;, &quot;https:\/\/hi-in.Whywebs.com\/&quot;);" title="Hindi" id="u_0_9">हिन्दी</a></li><li><a class="showMore" rel="dialog" ajaxify="/settings/language/language/?uri=https%3A%2F%2Fwww.Whywebs.com%2F&amp;source=TOP_LOCALES_DIALOG" title="Show more languages" href="https://www.Whywebs.com/?_rdr=p#" role="button">…</a></li></ul></div></div></div><div id="pageFooter" data-referrer="page_footer"><div id="contentCurve"></div>





                                     <div class="mvl copyright"><div >
        <p>
           
            2015
            <span>All Rights Reserved | <?php if($page['copyright']): ?>
   <?php print render($page['copyright']); ?>
   <?php endif; ?> Powered by: <a href="http://Whywebs.com/">Whywebs</a></span>
        </p>
    </div></div></div></div></div>
<!--   <header >
  <?php if ($page['addlblock'] || $page['socialblock']) { ?>

              <?php print render($page['addlblock']); ?>
              <?php print render($page['socialblock']); ?>
               <?php print render($page['extra_top_links']); ?>
                <?php print render($page['extra_top_social']); ?>
<?php }; ?>
        <?php print render($page['search1']); ?>
                    MAIN MENU - START
         <?php if ($page['header_menu']) :?>
          <?php print render($page['header_menu']);  ?>
        <?php endif; ?>

        <?php if ($page['header_menu']!=TRUE): ?>
          <?php if ($primary_nav): print $primary_nav; endif; ?>
          <?php if ($secondary_nav): print $secondary_nav; endif; ?>
        <?php endif; ?>

                    <!-- MAIN MENU - END -->
  <!-- </header> --> 




     <!-- MAIN CONTENT START -->

  


<!-- Main Placeholder -->
       

        

    <!-- LEFT COL END -->


   <!-- RIGHT COL START -->
      <?php if ($page['featured'] || $page['triptych_first']): ?>
          <?php print render($page['featured']); ?>
          <?php print render($page['triptych_first']); ?>
      <?php endif; ?>

    <!-- RIGHT COL END -->

                    <!-- Main Placeholder END -->

                <!-- MAIN MENU END -->

<footer>
    <!-- FOOTER MENU - START -->
    <?php if($page['footer_firstcolumn']) { ?>
    <?php print render($page['footer_firstcolumn']); ?>
   <?php } else { ?>
                    <!-- You can add something that you don't want to change it or static for a long period of time to make the process work less -->
                <?php }; ?>
    <?php if($page['footer_secondcolumn']) { ?>
   <?php print render($page['footer_secondcolumn']); ?>
   <?php } else { ?>
                                        <!-- You can add something that you don't want to change it or static for a long period of time to make the process work less -->

                <?php }; ?>
         
    <?php if($page['footer_thirdcolumn']) { ?>
   <?php print render($page['footer_thirdcolumn']); ?>
   <?php } else { ?>
                                        <!-- You can add something that you don't want to change it or static for a long period of time to make the process work less -->

                <?php }; ?>
           
    
              <?php if($page['footer_fourthcolumn']) { ?>
   <?php print render($page['footer_fourthcolumn']); ?>
   <?php } else { ?>
                    <!-- You can add something that you don't want to change it or static for a long period of time to make the process work less -->

                        <?php }; ?>

    <!-- FOOTER MENU - END -->
    <!-- FOOTER INFO - START -->
    
    <!-- FOOTER INFO - END -->
</footer>

