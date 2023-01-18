<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">                                          <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<?php wp_head(); ?>	
	<title>ТаскТрекер</title>

</head>
                                                                                                                                             <body class="main-page">

        <header class="header">
                <div class="header-container">
                        <a href='/' class="logo">
                                <img src="<?php echo get_custom_logo_url(); ?>" alt="ТаскТрекер">
                        </a>                                                                                                                                       <nav class="nav">
			<a class="nav-link" href="<?php echo get_page_uri(38); ?>">Приложение</a>
                                <a class="nav-link" href="<?php echo get_page_uri(40); ?>">Возможности</a>
                                <a class="nav-link" href="<?php echo get_page_uri(42); ?>">Стоимость</a>
                                <a class="nav-link" href="<?php echo get_page_uri(46); ?>">Блог</a>
                                <a class="nav-link" href="<?php echo get_page_uri(48); ?>">Контакты</a>
                        </nav>
                        <div class="appstore">
				<a class="appstore-item" href="https://play.google.com">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/' ?>img/appstore/google-play.svg" alt="Скачать в GooglePlay">
                                </a>
                                <a class="appstore-item" href="https://www.apple.com/app-store/">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/' ?>img/appstore/app-store.svg" alt="Скачать в AppStore">
                                </a>
                        </div>

                        <button class="nav-button">
                                <span class="nav-button-icon"></span>
                        </button>

                        <div class="mobile-nav">
                                <div class="nav">
                                        <ul>
                                                <li><a href="<?php echo get_page_uri(38); ?>">Приложение</a></li>
                                                <li><a href="<?php echo get_page_uri(40); ?>">Возможности</a></li>
                                                <li><a href="<?php echo get_page_uri(42); ?>">Стоимость</a></li>
                                                <li><a href="<?php echo get_page_uri(46); ?>">Блог</a></li>
                                                <li><a href="<?php echo get_page_uri(48); ?>">Контакты</a></li>
                                        </ul>
                                </div>

                                <div class="appstore-mobile">
                                        <a class="appstore-item" href="https://play.google.com">
                                                <img src="<?php echo get_template_directory_uri() . '/assets/' ?>img/appstore/google-play.svg" alt="Скачать в GooglePlay">
                                        </a>
                                        <a class="appstore-item" href="https://www.apple.com/app-store/">
                                                <img src="<?php echo get_template_directory_uri() . '/assets/' ?>img/appstore/app-store.svg" alt="Скачать в AppStore">
                                        </a>
                                </div>
                        </div>
                </div>
        </header>
