<header class="header">
  <div class="container">
	<div class="row"> <a href="/"><img src="https://s3.ap-northeast-2.amazonaws.com/international-vaccine-institute/ivi-whitelogo-2400x600px.png"></a> </div>
	<div class="row brand"> <?php bloginfo('description'); ?> </div>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
