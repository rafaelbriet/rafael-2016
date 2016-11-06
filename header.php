<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rafael Briet | Publicitátio nerd faminto por desafios.</title>

        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

        <?php wp_head(); ?>
    </head>
    <body>

        <!--[if lte IE 9]>
            <p class="browserupgrade">Você está utilizando um navegador <strong>desatualizado</strong>. Por favor, <a href="http://browsehappy.com/">atualize seu navegador</a> para melhorar sua experiência e segurança.</p>
        <![endif]-->
  
        <header class="site-header">
            <div class="container">
                <div class="site-branding">
                    <h1 class="site-name"><a href="<?php echo esc_url(home_url()); ?>">Rafael Briet</a></h1>
                </div>
                <nav class="site-nav">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                    )); ?>
                </nav>
            </div>
        </header>

        <main class="main">