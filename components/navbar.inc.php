<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
  <a class="navbar-brand" href="#"><strong><?php bloginfo( 'name'); ?></strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">


<?php if (!function_exists('dynamic_sidebar') ||
  dynamic_sidebar('Navbar')): ?>
<?php endif; ?>


</div>
</nav>
