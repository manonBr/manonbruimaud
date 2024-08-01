<!-- HEADER -->
<?php require_once("partials/header.html"); ?>

<!-- BODY -->

<header class="header">
    <div>
        <h1 class="header__title">Manon Bruimaud</h1>
        <h2 class="header__subttl scramble"></h2>
        <p class="header__legend">Diving into subjects and trying to figure out what the answer could be are two of my favorite things.</p>
        <a class="btn btn--primary" href="#contact">Contact me</a>
        <a class="btn btn--secondary" href="/assets/CV-Manon_Bruimaud.pdf" target="_blank">Download my resume</a>
        <div class='bubble bubble--xsmall bubble--primary' data-parallax='-0.9' style="left: 80%; right: 10%; top: 50%"></div>
        <div class='bubble bubble--small bubble--primary' data-parallax='0.5' style="left: 75%; right: 25%; top: 0%"></div>
        <div class='bubble bubble--xsmall bubble--secondary' data-parallax='0.4' style="left: 60%; right: 40%; top: 0%"></div>
        <div class='bubble bubble--small bubble--secondary' data-parallax='-1.2' style="left: 70%; right: 30%; bottom: 25%"></div>
        <div class='bubble bubble--xsmall bubble--primary' data-parallax='0.3' style="left: 60%; right: 40%; top: 60%"></div>
        <div class='bubble bubble--xsmall bubble--secondary' data-parallax='0.6' style="left: 90%; right: 10%; top: 0%"></div>
    </div>
    <i class="icon-down"></i>
</header>
<div class="container">
    <section class="section presentation reveal" id="presentation">
        <div class="presentation__img">
            <span class="presentation__img__border gradientBorder gradientBorder--topLeft">
                <img src="/assets/img/portrait.jpg" alt="Manon Bruimaud - Picture" style="max-width:250px;">
            </span>
        </div>
        <div class="presentation__title">
            <h3 class="section__title">About me</h3>
        </div>
        <div class="presentation__description">
            <p>
                I love facing new <span class="emphasized">challenges</span> and learn each day something new about IT. I'm a self-taught developer specialized with <span class="emphasized">PHP</span> and <span class="emphasized">Javascript</span>. As a fullstack developer, I have an understanding of how server and database work, and I'm used to work with various technologies : PHP, MySQL, Laravel, ReactJS, NodeJS, etc. My motto is to build <span class="emphasized">accessible</span> and pretty web app, with a codebase easy to maintain. I'm eager to learn every day to improve myself and build better projects. I'm usually working with <span class="emphasized">GIT</span> on every projects.
            </p>
        </div>
    </section>
</div>
<section class="section portfolio" id="portfolio" data-parallax='-0.15'>
    <div class="container">
        <h3 class="section__title">Portfolio</h3>
        <div>
            <div class="portfolio__wrapper">
                <div class="portfolio__item">
                    <a href="https://www.manonbgabrielle.fr" target="_blank" class="portfolio__link">
                        <img src="/assets/img/portfolio/manonbgabrielle.jpg" alt="My website as a unpublished author">
                        <div class="portfolio__item__description">
                            <p class="portfolio__item__name">manonbgabrielle.fr</p>
                            <p class="portfolio__item__content">Personnal website as a unpublished author.</p>
                            <p class="portfolio__item__technos">ReactJs &bull; NodeJS &bull; MongoDB</p>
                        </div>
                    </a>
                    <a class="btn btn--primary" href="https://github.com/manonBr/manonautrice" target="_blank">GitHub</a>
                    <a class="btn btn--secondary" href="https://www.manonbgabrielle.fr" target="_blank">Website</a>
                </div>
                <div class="portfolio__item">
                    <a href="https://www.journaldelagence.com" target="_blank" class="portfolio__link">
                        <img src="/assets/img/portfolio/jda.jpg" alt="Project 'Journal de l'agence'">
                        <div class="portfolio__item__description">
                            <p class="portfolio__item__name">journaldelagence.fr</p>
                            <p class="portfolio__item__content">Website realized in my previous job. I was in charge of the all project, from start to finish.</p>
                            <p class="portfolio__item__technos">Wordpress &bull; PHP &bull; Sass</p>
                        </div>
                    </a>
                    <a class="btn btn--secondary" href="https://www.journaldelagence.com" target="_blank">Website</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <section class="section technos reveal" id="technos">
        <h3 class="section__title">Skills</h3>
        <div class="technos__wrapper">
            <span class="technos__subttl">Dev</span>
            <div class="technos__item">
                <img src="/assets/img/technos/react-withoutborder.png" alt="React">
                <span class="technos__rollover">React</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/sass-withoutborder.png" alt="Sass">
                <span class="technos__rollover">Sass</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/axios-withoutborder.png" alt="Axios">
                <span class="technos__rollover">Axios</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/git-withoutborder.png" alt="GIT">
                <span class="technos__rollover">GIT</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/nodejs-withoutborder.png" alt="NodeJS">
                <span class="technos__rollover">NodeJS</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/express-withoutborder.png" alt="Express">
                <span class="technos__rollover">Express</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/mongodb-withoutborder.png" alt="MongoDB">
                <span class="technos__rollover">MongoDB</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/php-withoutborder.png" alt="PHP">
                <span class="technos__rollover">PHP</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/mysql-withoutborder.png" alt="MySQL">
                <span class="technos__rollover">MySQL</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/laravel-withoutborder.png" alt="Laravel">
                <span class="technos__rollover">Laravel</span>
            </div>
        </div>
        <div class="technos__wrapper">
            <span class="technos__subttl">UI</span>
            <div class="technos__item">
                <img src="/assets/img/technos/photoshop-withoutborder.png" alt="Photoshop">
                <span class="technos__rollover">Photoshop</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/figma-withoutborder.png" alt="Figma">
                <span class="technos__rollover">Figma</span>
            </div>
        </div>
    </section>
    <section class="section contact" id="contact">
        <h3 class="section__title">Contact</h3>
        <p class="contact__text">Please feel free to send me an email. It would be a pleasure to get in touch!</p>
        <a class="contact__email"></a>
    </section>



</div>

<!-- FOOTER -->
<?php require_once("partials/footer.html"); ?>