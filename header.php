<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <?php get_template_part('template-parts/primary-nav');?>

    <header class="banner" style="background: url(<?php echo get_template_directory_uri() . "/src/images/banner.svg" ?>);">
        <div class="header__social">
            <a class="header__social-link" href="#">Instagram</a>
            <a class="header__social-link" href="#">Facebook</a>
            <a class="header__social-link" href="#">Linkedin</a>
        </div>
        <div class="container d-flex h-100 align-items-center">
            <div class="row col-md-12 align-items-center">
                <div class="banner-left">
                    <div class="slogan">
                        Duurzame tiny huisjes
                    </div>
                    <h2 class="heading">
                    Een ecologisch tiny huisje is zoveel mogelijk 
                    opgebouwd uit duurzame natuurlijke materialen
                    </h2>
                </div>
                <div class="banner-right">
                    <a href="#" class="d-block m-auto text-center play_now">
                        <button class="btn btn-play rounded-circle">
                            <img src="<?php echo get_template_directory_uri() . "/src/images/play.svg" ?>" alt="Play Video">
                        </button>
                        <span>Bekijk de film</span>
                    </a>
                </div>
            </div>
        </div>
    </header>


