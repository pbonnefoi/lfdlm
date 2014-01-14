<div<?php print $attributes; ?>>
  <header class="l-header" role="banner">
    <?php if (!drupal_is_front_page()): ?>
      <img src="<?php print url($theme_path . '/images/header.png', array('asbolute' => true)); ?>" />
    <?php else: ?>
      <img src="<?php print url($theme_path . '/images/header_home.png', array('asbolute' => true)); ?>" />
    <?php endif ?>
    <?php if ($site_name): ?>
      <h1 class="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
          <span>La Ferme de la<br>
            <span class="proper-noun">Marsauderie</span>
          </span>
        </a>
      </h1>
    <?php endif; ?>
    <?php print render($page['header']); ?>
    <?php print render($page['navigation']); ?>
  </header>

  <div class="l-slideshow">
    <?php if (!drupal_is_front_page()): ?>
      <?php print views_embed_view('homepage_slideshow', 'block'); ?>
    <?php endif; ?>
  </div>

  <div class="l-main">
    <div class="l-content" role="main">
      <?php print render($page['highlighted']); ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
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
  </div>

  <div class="l-bottom">
    <ul>
      <li class="l-bottom-left">
        <?php print render($page['bottom-left']); ?>
      </li>
      <li class="l-bottom-center">
        <?php print render($page['bottom-center']); ?>
      </li>
      <li class="l-bottom-right">
        <?php print render($page['bottom-right']); ?>
      </li>
    </ul>
  </div>

  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>
