<title><?= $page->seo_title ? $page->seo_title : $page->title; ?></title>
<meta name="description" content="<?= $page->site_seo_description; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800" rel="stylesheet">
<link rel="stylesheet" href=<?=$config->urls->templates . "assets/css/template.css";?> />
<?php // generate css / js
  $css = AIOM::CSS(array(
    'assets/css/template.css'
  ));

  $js = AIOM::JS(array(
    "assets/js/core/core.js",
    "assets/js/core/offcanvas.js",
    "assets/js/core/smooth-scroll.js",
    "assets/js/core/modal.js",
    "assets/js/core/utility.js",
    "assets/js/components/notify.js"
  ));
?>
<script src="<?= $js; ?>"></script>
<!-- <link rel="stylesheet" type="text/css" href="<?= $css; ?>"> -->
