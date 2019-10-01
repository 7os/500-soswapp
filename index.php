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
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" manifest="./site.manifest">
  <head>
    <meta charset="utf-8">
    <title>500 - Internal Server Error</title>
    <?php include PRJ_INC_ICONSET; ?>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta name="keywords" content="7, seven, os, operating, system, template">
    <meta name="description" content="7 OS Web - app template">
    <meta name="author" content="Your developer">
    <meta name="creator" content="7 OS">
    <meta name="publisher" content="Your company">
    <meta name="robots" content='index'>
    <!-- Theming styles -->
    <link rel="stylesheet" href="//cdn.tymapp.com/get/7os/web-theme/web-theme.css">
    <link rel="stylesheet" href="//cdn.tymapp.com/get/7os/web-theme/web-theme-<?php echo PRJ_THEME; ?>.css">
    <!-- optional plugin -->
    <link rel="stylesheet" href="//cdn.tymapp.com/get/7os/web-plugin/web-plugin.css">
    <link rel="stylesheet" href="//cdn.tymapp.com/get/7os/web-drag-nav/web-drag-nav.css">
    <link rel="stylesheet" href="//cdn.tymapp.com/get/7os/web-fader-box/web-fader-box.css">
    <!-- Project styling -->
    <link rel="stylesheet" href="<?php echo \html_style("base.css"); ?>">
  </head>
  <body>
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
    <script src="//cdn.tymapp.com/get/jquery/jquery/jquery.min.js">  </script>
    <script src="//cdn.tymapp.com/get/7os/js-generic-fn/js-generic-fn.min.js">  </script>
    <script src="//cdn.tymapp.com/get/7os/web-theme/web-theme.min.js" ></script>
    <!-- optional plugins -->
    <script src="//cdn.tymapp.com/get/7os/web-plugin/web-plugin.min.js" ></script>
    <script src="//cdn.tymapp.com/get/7os/web-drag-nav/web-drag-nav.min.js" ></script>
    <script src="//cdn.tymapp.com/get/7os/web-fader-box/web-fader-box.min.js" ></script>
    <!-- project scripts -->
    <script src="<?php echo \html_script ("base.min.js"); ?>" ></script>
  </body>
</html>
