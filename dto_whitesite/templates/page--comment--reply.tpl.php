<?php
/**
 * @file
 * Returns the HTML for Add commet page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div class="layout-centered page-wrapper">
  <header class="header" role="banner">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>

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
  </header>

  <?php print render($page['navigation']); ?>

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
    $layout = 'layout-full';
  }

  ?>

  <?php print render($page['banner']); ?>

  <?php print $breadcrumb; ?>

  <?php print render($page['highlighted']); ?>

  <div class="<?php print $layout; ?>">

    <?php if ($sidebar): ?>
      <aside class="<?php print $layout; ?>__sidebar" role="complementary">
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
      <aside class="<?php print $layout; ?>__sidebar_two" role="complementary">
        <?php print $sidebar_two; ?>
      </aside>

    <?php endif; ?>

  </div>

  <?php print render($page['footer_top']); ?>
  <?php print render($page['footer_bottom']); ?>

</div>

<?php print render($page['bottom']); ?>

