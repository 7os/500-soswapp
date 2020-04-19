<?php
namespace TymFrontiers;
require_once "app.init.php";
require_once APP_BASE_INC;
$gen = new Generic;
$params = $gen->requestParam([
  "request" => ["request","text",3,0],
  "message" => ["message","text",3,0]
],'get',[]);
if (!empty($params['message'])) $params['message'] = \urldecode($params['message']);
$page_name = "500";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" manifest="<?php echo WHOST; ?>/site.webmanifest">
  <head>
    <meta charset="utf-8">
    <title>500 - Internal Server Error</title>
    <?php include PRJ_INC_ICONSET; ?>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta name="robots" content='nofollow'>
    <!-- Theming styles -->
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/font-awesome-soswapp/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/theme-soswapp/css/theme.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/theme-soswapp/css/theme-<?php echo PRJ_THEME; ?>.min.css">
    <!-- optional plugin -->
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/plugin-soswapp/css/plugin.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/dnav-soswapp/css/dnav.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/faderbox-soswapp/css/faderbox.min.css">
    <!-- Project styling -->
    <link rel="stylesheet" href="<?php echo \html_style("base.css"); ?>">
  </head>
  <body>
    <?php \TymFrontiers\Helper\setup_page('500','base', true, PRJ_HEADER_HEIGHT); ?>
    <?php include PRJ_INC_HEADER; ?>
    <section id="main-content">
      <div class="view-space">
        <div class="sec-div padding -p20">
          <h1> <i class="fas fa-sad-tear fa-2x"></i> It's our fault.</h1>
          <?php if (!empty($params['request'])): ?>
            <blockquote>
              <p><?php echo $params['request']; ?></p>
            </blockquote>
          <?php endif; ?>
          <p>
            <?php if (!empty($params["message"])){
              echo $params['message'];
            } else {
              echo "There is a situation here now but we assure you services will be fully restored soon.";
            } ?>
          </p>
          <p> <i class="fas fa-angle-double-left"></i> <a href="<?php echo WHOST; ?>"><b>Go back home</b></a> </p>
          <br class="c-f">
        </div>

      </div>
    </section>
    <?php include PRJ_INC_FOOTER; ?>
    <!-- Required scripts -->
    <script src="<?php echo WHOST; ?>/7os/jquery-soswapp/js/jquery.min.js">  </script>
    <script src="<?php echo WHOST; ?>/7os/js-generic-soswapp/js/js-generic.min.js">  </script>
    <script src="<?php echo WHOST; ?>/7os/theme-soswapp/js/theme.min.js" ></script>
    <!-- optional plugins -->
    <script src="<?php echo WHOST; ?>/7os/plugin-soswapp/js/plugin.min.js" ></script>
    <script src="<?php echo WHOST; ?>/7os/dnav-soswapp/js/dnav.min.js" ></script>
    <script src="<?php echo WHOST; ?>/7os/faderbox-soswapp/js/faderbox.min.js" ></script>
    <!-- project scripts -->
    <script src="<?php echo \html_script ("base.min.js"); ?>" ></script>
  </body>
</html>
