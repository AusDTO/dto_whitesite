<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<!--<div class="layout-centered page-wrapper">-->
<!--<div class="menu-open"></div>-->
<div class="ie-warning"><span class="warning-text">It looks like you're using an old version of Internet Explorer. For the best experience, please update your browser.</span></div>
  <header class="header" role="banner">
  <div class="nav-head-container">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" />
    <!--<div class="mobile-header">Digital Transformation Office</div></a>-->
    <!--<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="/sites/all/themes/custom/dto_whitesite/images/update/government-crest.png" alt="<?php print t('Home'); ?>" class="header__logo-image" /><span class="title">Digital Transformation Office</span></a>-->
<a class="mobile-nav" href="#open-menu"><div class="top"></div><div class="middle"></div><div class="bottom"></div>MENU</a>
    <nav class="header__secondary-menu" role="navigation">
      <?php print theme('links__system_secondary_menu', array(
        'links' => $secondary_menu,
        'attributes' => array(
          'class' => array(
            'header__secondary-menu-list',
          ),
        ),
        'heading' => array(
          'text' => isset($secondary_menu_heading) ? $secondary_menu_heading : '',
          'level' => 'h2',
          'class' => array('element-invisible'),
        ),
      )); ?>
    </nav>

    <?php print render($page['header']); ?>
    </div>
  </header>
  <?php print render($page['navigation']); ?>
<div class="layout-centered page-wrapper">
  <?php
  // Render the sidebars to see if there's anything in them.
  $sidebar  = render($page['sidebar']);
  $sidebar_two  = render($page['sidebar_two']);
  
  // Set layout class name based on whether sidebars contain content or not.
  if ($sidebar && $sidebar_two) {
    $layout = 'layout-sidebar-both';
  }
  elseif ($sidebar && !$sidebar_two) {
    $layout = 'layout-sidebar-left';
  }
  elseif (!$sidebar && $sidebar_two) {
    $layout = 'layout-sidebar-right';
  }
  else {
    $layout = 'layout-no-sidebar';
  }

  ?>

  <?php print render($page['banner']); ?>

  <?php print $breadcrumb; ?>

  

  <?php print render($page['highlighted']); ?>
  <?php print render($page['recruitment']); ?>
  <?php print render($page['back_to_guides_link']); ?>
  <div class="<?php print $layout; ?>">

    <?php if ($sidebar): ?>
      <aside class="<?php print $layout; ?>__sidebar sidebar sidebar-left" role="complementary">
        <?php print $sidebar; ?>
      </aside>
    <?php endif; ?>


    <div class="<?php print $layout; ?>__main main-content" role="main">

      <a href="#skip-link" id="skip-content" class="element-invisible">Go to top of page</a>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <?php if ($sidebar_two): ?>
      <aside class="<?php print $layout; ?>__sidebar_two sidebar sidebar-right" role="complementary">
        <?php print $sidebar_two; ?>
      </aside>

    <?php endif; ?>

  </div>

<div class="recruitment-form">
	<script type="text/javascript" id="rbox-loader-script">
if(!window._rbox){
_rbox = { host_protocol:document.location.protocol, ready:function(cb){this.onready=cb;} };
(function(d, e) {
    var s, t, i, src=['/static/client-src-served/widget/36555/rbox_api.js', '/static/client-src-served/widget/36555/rbox_impl.js'];
    t = d.getElementsByTagName(e); t=t[t.length - 1];
    for(i=0; i<src.length; i++) {
        s = d.createElement(e); s.src = _rbox.host_protocol + '//w.recruiterbox.com' + eval("src" + String.fromCharCode(91) + String(i) + String.fromCharCode(93));
        t.parentNode.insertBefore(s, t.nextSibling);
    }})(document, 'script');
}
</script>
</div>	  

</div>

<?php print render($page['footer_top']); ?>
<script type="text/javascript" id="rbox-loader-script">
if(!window._rbox){
_rbox = { host_protocol:document.location.protocol, ready:function(cb){this.onready=cb;} };
(function(d, e) {
    var s, t, i, src=['/static/client-src-served/widget/36555/rbox_api.js', '/static/client-src-served/widget/36555/rbox_impl.js'];
    t = d.getElementsByTagName(e); t=t[t.length - 1];
    for(i=0; i<src.length; i++) {
        s = d.createElement(e); s.src = _rbox.host_protocol + '//w.recruiterbox.com' + eval("src" + String.fromCharCode(91) + String(i) + String.fromCharCode(93));
        t.parentNode.insertBefore(s, t.nextSibling);
    }})(document, 'script');
}
</script>
<footer class="footer">
	<div class="connect-with-dto">
    <h2>Connect with DTO</h2>
    <a href="https://twitter.com/AusDTO" title="DTO Twitter"><div class="twitter-icon"></div></a>
    <a href="https://www.youtube.com/channel/UCmDkFN3UlK2wSKDQQhd-Y-A" title="DTO Youtube"><div class="youtube-icon"></div></a>
    <a href="https://www.linkedin.com/company/digital-transformation-office" title="DTO Linkedin"><div class="linkedin-icon"></div></a>
    <a href="https://github.com/AusDTO" title="DTO Github"><div class="github-icon"></div></a>
    </div>
    <div class="footer-links">
   <!--<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="sites/all/themes/custom/dto_whitesite/images/update/government-crest.png" alt="<?php print t('Home'); ?>" class="header__logo-image" /><span class="title">Digital Transformation Office</span></a>-->
    <?php print render($page['footer_bottom']); ?>
    </div>
  
</footer>

<?php print render($page['bottom']); ?>
