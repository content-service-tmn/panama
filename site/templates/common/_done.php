<?php namespace Processwire; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <?php include_once($config->paths->templates . "common/_head.php"); ?>
</head>

<body>

<?= $templateRender; ?>

<script src=<?= $config->urls->templates . 'assets/js/slick.js'?>></script>
<script src=<?= $config->urls->templates . 'assets/js/script.js'?>></script>

</body>

</html>
