<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?php echo $this->config['site-titulo']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/default.css">
</head>

<body>
    <div class="topo"></div>
    <div class="menu">
        <?php $this->loadMenu(); ?>
    </div>
    <div class="container">
        <?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    </div>
    <div class="rodape"></div>

</body>

</html>