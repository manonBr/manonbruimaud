<!-- HEADER -->
<?php require_once("partials/header.html"); ?>

<!-- BODY -->

<header class="header">
    <div>
        <h1 class="header__title">Manon Bruimaud</h1>
        <h2 class="header__subttl scramble"></h2>
        <p class="header__legend">La curiosité et la patience sont les meilleures qualités que peut posséder un développeur</p>
        <a class="btn btn--primary" href="#contact">Me contacter</a>
        <a class="btn btn--secondary" href="/assets/CV-Manon_Bruimaud.pdf" target="_blank">Télécharger mon CV</a>
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
                <img src="/assets/img/portrait.jpg" alt="Manon Bruimaud - Portrait" style="max-width:250px;">
            </span>
        </div>
        <div class="presentation__title">
            <h3 class="section__title">Présentation</h3>
        </div>
        <div class="presentation__description">
            <p>Le développement et les technologies me <span class="emphasized">passionnent</span>, les défis que comportent chaque nouveau projet me stimule. Autodidacte spécialisée dans le <span class="emphasized">front-end</span>, je maitrise également tout à fait les fondements du développement back-end : PHP, Laravel, POO, etc. À chaque projet, je veille à construire un code optimisé tout en veillant à produire un site répondant aux règles élémentaires d'<span class="emphasized">accessibilités</span>.J'ai pour habitude de travailler avec un outil de versionning tel que <span class="emphasized">GIT</span> ainsi qu'un préprocesseur CSS comme <span class="emphasized">SASS</span>.</p>
        </div>
    </section>
</div>
<section class="section portfolio" id="portfolio" data-parallax='-0.15'>
    <div class="container">
        <h3 class="section__title">Portfolio</h3>
        <div>
            <!-- <div class="portfolio__filter">
                <button class="btn btn--secondary current" data-filter="all">Tout</button>
                <button class="btn btn--secondary" data-filter="pro">Pros (en agence)</button>
                <button class="btn btn--secondary" data-filter="perso">Persos</button>
            </div> -->
            <div class="portfolio__wrapper">
                <a href="https://www.journaldelagence.com" target="_blank" class="portfolio__item" data-type="pro">
                    <span class="portfolio__link">
                        <img src="/assets/img/portfolio/jda.png" alt="Projet Journal de l'agence">
                    </span>
                    <span class="portfolio__item__subttl">Techno &bull; Techno</span>
                </a>
                <div class="portfolio__item portfolio__item--divider"></div>
                <a href="https://www.hectoria.com" target="_blank" class="portfolio__item" data-type="pro">
                    <span class="portfolio__link">
                        <img src="/assets/img/portfolio/hectoria.png" alt="Projet Hectoria">
                    </span>
                    <span class="portfolio__item__subttl">Techno &bull; Techno &bull; Techno</span>
                </a>
                <div class="portfolio__item portfolio__item--divider"></div>
                <a href="https://www.donbastineo.fr" target="_blank" class="portfolio__item" data-type="pro">
                    <span class="portfolio__link">
                        <img src="/assets/img/portfolio/donBastineo.png" alt="Projet Don Bastineo">
                    </span>
                    <span class="portfolio__item__subttl">Techno &bull; Techno &bull; Techno</span>
                </a>
                <div class="portfolio__item portfolio__item--divider"></div>
                <a href="/" target="_blank" class="portfolio__item" data-type="perso">
                    <span class="portfolio__link">
                        <img src="/assets/img/portfolio/proventil33.png" alt="Projet Proventil33">
                    </span>
                    <span class="portfolio__item__subttl">Techno &bull; Techno</span>
                </a>
                <div class="portfolio__item portfolio__item--divider"></div>
                <a href="/" target="_blank" class="portfolio__item" data-type="perso">
                    <span class="portfolio__link">
                        <img src="/assets/img/portfolio/proventil33.png" alt="Projet CupcakeAgency">
                    </span>
                    <span class="portfolio__item__subttl">Techno &bull; Techno &bull; Techno</span>
                </a>
                <div class="portfolio__item portfolio__item--divider"></div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <section class="section technos reveal" id="technos">
        <h3 class="section__title">Technos</h3>
        <div class="technos__wrapper">
            <span class="technos__subttl">Dev</span>
            <div class="technos__item">
                <img src="/assets/img/technos/js-withoutborder.png" alt="Javascript">
                <span class="technos__rollover">Javascript</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/git-withoutborder.png" alt="GIT">
                <span class="technos__rollover">GIT</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/laravel-withoutborder.png" alt="Laravel">
                <span class="technos__rollover">Laravel</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/mysql-withoutborder.png" alt="MySQL">
                <span class="technos__rollover">MySQL</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/npm-withoutborder.png" alt="NPM">
                <span class="technos__rollover">NPM</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/php-withoutborder.png" alt="PHP">
                <span class="technos__rollover">PHP</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/prestashop-withoutborder.png" alt="Prestashop">
                <span class="technos__rollover">Prestashop</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/react-withoutborder.png" alt="React">
                <span class="technos__rollover">React</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/sass-withoutborder.png" alt="Sass">
                <span class="technos__rollover">Sass</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/webpack-withoutborder.png" alt="Webpack">
                <span class="technos__rollover">Webpack</span>
            </div>
            <div class="technos__item">
                <img src="/assets/img/technos/wordpress-withoutborder.png" alt="Wordpress">
                <span class="technos__rollover">Wordpress</span>
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
        <h3 class="section__title">Me contacter</h3>
        <p class="contact__text">N'hésitez pas à me contacter, je serai ravie d'échanger avec vous !</p>
        <a class="contact__email"></a>
    </section>



</div>

<!-- FOOTER -->
<?php require_once("partials/footer.html"); ?>