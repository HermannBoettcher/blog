
<!DOCTYPE html>
<html lang="de">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
    <title>
        <?php bloginfo( 'name'); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>


<header>
  <?php require_once('components/navbar.inc.php'); ?>

  <div class="view intro-2" style="">
    <div class="full-bg-img">
      <div class="mask flex-center">
        <div class="container text-center white-text wow fadeInUp">
          <h2>This Navbar is fixed and transparent</h2>
          <br>
          <h5>It will always stay visible on the top, even when you scroll down</h5>
          <p>Navbar's background will switch from transparent to solid color while scrolling down</p>
          <br>
          <p>Full page intro with background image will be always displayed in full screen mode, regardless of
            device </p>
        </div>
      </div>
    </div>
  </div>
</header>
