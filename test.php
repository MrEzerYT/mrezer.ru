<?php

$phpVersion = phpversion();
if (version_compare($phpVersion, '7.0.0', '<'))
{
	die("PHP 7.0.0 or newer is required. $phpVersion does not meet this requirement. Please ask your host to upgrade PHP.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MrEzer | Главная</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/logo.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/logo.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/logo.png" />
    <link rel="apple-touch-icon" href="assets/images/logo.png" />
    <link rel="shortcut icon" href="assets/images/logo.png" />
    <script type="text/javascript" src="https://raw.githubusercontent.com/flouthoc/blinkTitle.js/master/index.js"></script>

    <!-- Primary meta tags -->
    <meta
        name="title"
        content="Ezer — front-end developer and Minecrafter"
    />
    <meta
        name="description"
        content="I craft responsive websites where technologies meet creativity"
    />

    <!-- Open Graph / Facebook -->
    <meta
        property="og:title"
        content="Ezer — front-end developer and Minecrafter"
    />
    <meta
        property="og:description"
        content="I craft responsive websites where technologies meet creativity"
    />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en" />
    <meta property="og:site_name" content="Ezer" />
</head>
<body>
    <header class='header'>
        <div class='container'>
            <div class='logo'><img src='assets/images/logo.png' alt='Logo'></div>
            <nav class='menu'>
                <ul>
                    <li class='menu-item active hover-line'><a href="#">Главная</a></li>
                    <li class='menu-item hover-line'><a href="#contacts">Контакты</a></li>
                    <li class="menu-item hover-line"><button id="theme"><i class="ri-moon-line"></i></button></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id='main'>
        <div class='container'>
            <div class="main">
                <h1 class="main-title">Моё портфолио</h1>
                <div class="main-description">Я разработчик, майнкрафтер, и ЮТубер.</div>
            </div>
        </div>
    </section>
    <section id='contacts'>
        <div class='container'>
            <div class="section-info">
                <div class="section-title">Контакты</div>
                <div class="section-description">Где вы можете <span>связаться</span> со мной</div>
            </div>
            <div class="contacts-buttons">
                <a href="https://discord.com/users/578533097293873162/" class="btn contact-btn">Дискорд</a>
                <a href="https://discord.gg/cDBe4TZ3g2" class="btn contact-btn">Дискорд сервер</a>
            </div>
        </div>
        <section id='about-me'>
            <div class='container'>
                <div class="section-info">
                    <div class="section-title">О себе</div>
                    <div class="section-description">Здесь я <span>расскажу</span> о себе</div>
                </div>
                <div class="hero">
                    <div class="hero-content">
                        <p>Я фронт-енд и бек-енд разработчик из России. Умею создавать сайты и ботов в различных мессенджерах.</p>
                    </div>
                    <div class="skills">
                        <div class="skills-title">Навыки</div>
                        <div class="skills-list">
                            <ul>
                                <li class="skill-card">
                                    <div class="skill-title">Языки программирования</div>
                                    <div class="skill-content">Python, JavaScript, Java</div>
                                </li>
                                <li class="skill-card">
                                    <div class="skill-title">Базы данных</div>
                                    <div class="skill-content">SQLite, MySQL, MongoDB</div>
                                </li>
                                <li class="skill-card">
                                    <div class="skill-title">Остальное</div>
                                    <div class="skill-content">HTML, CSS, Node.js, disnake, discord.py, nextcord, dislash, Vue, PHP, Arduino</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section id='projects'>
        <div class='container'>
            <div class="section-info">
                <div class="section-title">Мои работы</div>
                <div class="section-description">Работы, которые <span>я разрабатываю</span></div>
                <div class="section-subdescription">Ну... или принимаю участие в разработке</div>
            </div>
            <div class="projects-list">
                <ul>
                    <li class="project">
                        <img src="https://sscefalix.xyz/assets/images/sourescube.png" alt="SouresCube" class="project-image">
                        <div class="project-info">
                            <div class="project-title">SouresCube</div>
                            <div class="project-description">Minecraft сервер</div>
                        </div>
                        <div class="project-actions">
                            <a href="https://www.sourescube.ru" class="btn project-btn">Перейти</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div class="footer"></div>

    <script type="text/javascript" src="assets/js/index.js"></script>
    <script type="text/javascript" src="assets/js/title.js"></script>
    <script type="text/javascript" src="assets/js/animation-text.js"></script>
</body>
</html>
