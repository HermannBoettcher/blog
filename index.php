<?php get_header(); ?>

<div class="container-fluid intro view" style="background: url('<?php echo get_template_directory_uri(); ?>/img/photos/DSCF9057.jpg') no-repeat center center; background-size: cover;">
  <div class="full-bg-img">
    <div class="mask flex-center">
      <div class="container text-center white-text wow fadeInUp">
        <h1>Blog</h1>
        <br>
        <p>Hier findet ihr meine letzten Reise- und Tourenberichte.</p>
        <br>
        <p>Freut euch arg, denn sie sind toll.</p>
      </div>
    </div>
  </div>
</div>
</header>

<main>
<!--Main layout-->
<div class="container-fluid">
    <div class="row">
        <!--Main column-->
        <div class="col-md-8">
          <!-- Section heading -->
          <h2 class="h1-responsive font-weight-bold text-center my-5">Letzte Beiträge</h2>
          <!-- Section description -->
          <p class="text-center w-responsive mx-auto mb-5">Hier erscheinen meine eltzten Tourenberichte. </p>
            <?php
            if ( have_posts() ) {
            while ( have_posts() ) {
            the_post();
            ?>
            <!--Post-->
           <?php get_template_part('content', get_post_format()); ?>
            <!--/.Post-->
            <hr>
            <?php
            } // end while
            } // end if
            ?>
            <?php mdb_pagination(); ?>
        </div>
       <!--Sidebar-->
<div class="col-md-4">
    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar' ); ?>
    <?php endif; ?>
</div>
<!--/.Sidebar-->
    </div>
</div>
<!--/.Main layout-->
</main>


<?php get_footer(); ?>
