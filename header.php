<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="shortcut icon" href="http://champion-szkola.pl/favicon.ico" type="image/x-icon">
        <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

    <canvas id="background-dots">
    </canvas>

    <a name="home"></a>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top affix">
        <div class="container">
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>/">
            <img style="margin-right: -20px;"src="<?php echo get_template_directory_uri(); ?>/img/champion-scholl.png" alt="Szkoła Językowa"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="dropdown" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto" >
                <li class="nav-item">
                    <a class="nav-link" id="onas" href="<?php bloginfo('url'); ?>/#o-nas">o nas</a>
                </li>
                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="tab" aria-haspopup="true" aria-expanded="false" >
                        zajęcia 
                    </a>
                    <div class="dropdown-menu mt-0" aria-labelledby="navbarDropdown">
 
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-3">
                                    <ul class="nav flex-column">
<!--                                        <li class="nav-item">-->
<!--                                            <a class="nav-link" href="--><?php //bloginfo('url'); ?><!--/zajecia#angielski">angielski</a>-->
<!--                                        </li>-->
<!--                                        <li class="nav-item">-->
<!--                                            <a class="nav-link" href="--><?php //bloginfo('url'); ?><!--/zajecia#niemiecji">niemiecki</a>-->
<!--                                        </li>-->
<!--                                        <li class="nav-item">-->
<!--                                            <a class="nav-link" href="--><?php //bloginfo('url'); ?><!--/zajecia#hiszpanski">hiszpański</a>-->
<!--                                        </li>-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php bloginfo('url'); ?>/filia-boguszowice">FILIA BOGUSZOWICE</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul class="nav flex-column">
<!--                                        <li class="nav-item">-->
<!--                                            <a class="nav-link" href="--><?php //bloginfo('url'); ?><!--/zajecia#wloski">włoski</a>-->
<!--                                        </li>-->
<!--                                        <li class="nav-item">-->
<!--                                            <a class="nav-link" href="--><?php //bloginfo('url'); ?><!--/teddy-eddie">Teddy Eddie Świerklany</a>-->
<!--                                        </li>-->
<!--                                        <li class="nav-item">-->
<!--                                            <a class="nav-link" href="--><?php //bloginfo('url'); ?><!--/zajecia#matematyka">matematyka</a>-->
<!--                                        </li>-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php bloginfo('url'); ?>/filia-swierklany">FILIA ŚWIERKLANY</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php bloginfo('url'); ?>/plan-zajec-2">PLAN ZAJĘĆ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php bloginfo('url'); ?>/cennik">cennik</a>
                </li>
<!-- 	           <li class="nav-item">
                  <a class="nav-link" href="--><?php //bloginfo('url'); ?><!--/blog">blog</a>
               </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php bloginfo('url'); ?>/kariera-champion">kariera</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php bloginfo('url'); ?>/kontakt">kontakt</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="https://app.kivo.pl/Login?returnUrl=%2FPayments%2FMain%2FAccessExpired" target="_blank">TEDDY EDDY</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="<?php bloginfo('url'); ?>/travel">travel</a>
                </li>	
                <li class="nav-item zapiszsie">
                    <a class="nav-link" href="<?php bloginfo('url'); ?>/zapisz">zapisuję się</a>
                </li>
				
                <li class="nav-item fb">
                    <a class="nav-link" href="https://www.facebook.com/akademiajezykowachampion/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="Champion School at Facebook"/></a>
                </li>
				<li class="nav-item fb">
                    <a class="nav-link" href="https://app.kivo.pl/Login?returnUrl=%2FPayments%2FMain%2FAccessExpired" target="_blank">
						<img style="height:20px; width:60px;"src="<?php echo get_template_directory_uri(); ?>/img/kivo.png" alt="E-dziennik KIVO"/>
					</a>
                </li>
            </ul>
        </div>

        </div>
    </nav>