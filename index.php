<?php
require_once "app.init.php";
require_once APP_BASE_INC;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" manifest="./site.manifest">
  <head>
    <meta charset="utf-8">
    <title>500 - Internal Server Error</title>
    <?php include PRJ_ICONSET; ?>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta name="keywords" content="7, seven, os, operating, system, template">
    <meta name="description" content="7 OS Web - app template">
    <meta name="author" content="Your developer">
    <meta name="creator" content="7 OS">
    <meta name="publisher" content="Your company">
    <meta name="robots" content='index'>
    <!-- Theming styles -->
    <link rel="stylesheet" href="//cdn.tymfrontiers.net/get/7os/web-theme/web-theme.css">
    <link rel="stylesheet" href="//cdn.tymfrontiers.net/get/7os/web-theme/web-theme-<?php echo PRJ_THEME; ?>.css">
    <!-- optional plugin -->
    <link rel="stylesheet" href="//cdn.tymfrontiers.net/get/7os/web-plugin/web-plugin.css">
    <link rel="stylesheet" href="//cdn.tymfrontiers.net/get/7os/web-drag-nav/web-drag-nav.css">
    <link rel="stylesheet" href="//cdn.tymfrontiers.net/get/7os/web-fader-box/web-fader-box.css">
    <!-- Project styling -->
    <link rel="stylesheet" href="<?php echo \html_style("base.css"); ?>">
  </head>
  <body>
    <?php include PRJ_INC_HEADER; ?>
    <section id="main-content">
      <h1>500 Internal Server Error</h1>
      <p>We are sorry its our fault</p>
    </section>
    <?php include PRJ_INC_FOOTER; ?>
    <!-- Required scripts -->
    <script src="//cdn.tymfrontiers.net/get/jquery/jquery/jquery.min.js">  </script>
    <script src="//cdn.tymfrontiers.net/get/7os/js-generic-fn/js-generic-fn.min.js">  </script>
    <script src="//cdn.tymfrontiers.net/get/7os/web-theme/web-theme.min.js" charset="utf-8"></script>
    <!-- optional plugins -->
    <script src="//cdn.tymfrontiers.net/get/7os/web-plugin/web-plugin.min.js" charset="utf-8"></script>
    <script src="//cdn.tymfrontiers.net/get/7os/web-drag-nav/web-drag-nav.min.js" charset="utf-8"></script>
    <script src="//cdn.tymfrontiers.net/get/7os/web-fader-box/web-fader-box.min.js" charset="utf-8"></script>
    <!-- project scripts -->
    <script src="<?php echo \html_script ("base.min.js"); ?>" charset="utf-8"></script>
  </body>
</html>
