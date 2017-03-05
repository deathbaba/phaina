<?php
  require_once(dirname(__FILE__).'/../config.php');
  // Set HTTP "404 Not found" code for this page.
  // TODO: Probably it can be moved to the config.php.
  http_response_code(404);
  HTML_HEAD();
?>

<body>
<?php HTML_HEADER(); ?>

<main role="main">
  <section class="section page404">
      <h1><?= T("404pageTitle"); ?></h1>
      <p class="preface"><?= T("404pageText"); ?></p>
  </section>
</main>

<?php HTML_FOOTER(); ?>
</body>
</html>
