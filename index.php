<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rafael Briet | Publicitátio nerd faminto por desafios.</title>

        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <header class="site-header">
            <div class="container">
                <div class="site-branding">
                    <h1 class="site-name"><a href="#">Rafael Briet</a></h1>
                </div>
                <nav class="site-nav">
                    <ul class="menu">
                        <li><a href="http://rafaelbriet.com.br/">Home</a></li>
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="main">
            <section class="cover">
                <picture class="cover-image">
                    <source srcset="assets/images/420.jpg" media="(max-width: 420px)">
                    <source srcset="assets/images/600.jpg" media="(max-width: 600px)">
                    <source srcset="assets/images/700.jpg" media="(max-width: 700px)">
                    <source srcset="assets/images/920.jpg" media="(max-width: 920px)">
                    <img src="assets/images/1920.jpg">
                </picture>
                <!-- <img class="cover-image" src="assets/images/1920.jpg" alt="Imagem da capa do site" /> -->
                <h2 class="site-description">Publicitátio nerd faminto por desafios.</h2>
            </section>
            <section class="about" id="about">
                <h3 class="section-title">Quem sou eu.</h3>
                <div class="container">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in mi et sapien hendrerit molestie. Pellentesque nibh dolor, mollis ac faucibus in, egestas non neque. Phasellus ut volutpat nulla. Proin non pretium lectus, ut iaculis odio. In sodales scelerisque tortor, at lacinia urna tincidunt ac. Proin in aliquet purus, non tristique dolor. Ut eu mi leo. Sed viverra sed tortor maximus accumsan.
                    </p>
                </div>
            </section>
            <section class="portfolio" id="portfolio">
                <h3 class="section-title">O que já fiz.</h3>
                <ul class="job-list">
                    <li class="job-thumbnail">
                        <!-- <img src="assets/images/job.jpg" alt="" /> -->
                        <div class="job-description">
                            <h3>Nome do Projeto</h3>
                            <p>Descrição curta do que foi feito.</p>
                            <a href="#">Projeto completo no Behance.</a>
                        </div>
                    </li>
                    <li class="job-thumbnail">
                        <!-- <img src="assets/images/job.jpg" alt="" /> -->
                        <div class="job-description">
                            <h3>Nome do Projeto</h3>
                            <p>Descrição curta do que foi feito.</p>
                            <a href="#">Projeto completo no Behance.</a>
                        </div>
                    </li>
                    <li class="job-thumbnail">
                        <!-- <img src="assets/images/job.jpg" alt="" /> -->
                        <div class="job-description">
                            <h3>Nome do Projeto</h3>
                            <p>Descrição curta do que foi feito.</p>
                            <a href="#">Projeto completo no Behance.</a>
                        </div>
                    </li>
                    <li class="job-thumbnail">
                        <!-- <img src="assets/images/job.jpg" alt="" /> -->
                        <div class="job-description">
                            <h3>Nome do Projeto</h3>
                            <p>Descrição curta do que foi feito.</p>
                            <a href="#">Projeto completo no Behance.</a>
                        </div>
                    </li>
                    <li class="job-thumbnail">
                        <!-- <img src="assets/images/job.jpg" alt="" /> -->
                        <div class="job-description">
                            <h3>Nome do Projeto</h3>
                            <p>Descrição curta do que foi feito.</p>
                            <a href="#">Projeto completo no Behance.</a>
                        </div>
                    </li>
                    <li class="job-thumbnail">
                        <!-- <img src="assets/images/job.jpg" alt="" /> -->
                        <div class="job-description">
                            <h3>Nome do Projeto</h3>
                            <p>Descrição curta do que foi feito.</p>
                            <a href="#">Projeto completo no Behance.</a>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="contact" id="contact">
                <h3 class="section-title">Entre em contato</h3>
                <form class="form-contact" action="" method="">
                    <span class="input-container">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" value="" class="name" id="name">
                        <p class="error-message hide">Você precisa disser qual é o seu nome.</p>
                    </span>
                    <span class="input-container">
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" value="" class="email" id="email">
                        <p class="error-message hide">Você precisa fornecer um endereço de e-mail válido.</p>
                    </span>
                    <span class="input-container">
                        <label for="message">Mesagem:</label>
                        <textarea name="message" id="message" class="message" rows="8" cols="40"></textarea>
                        <p class="error-message hide">Você precisa digitar uma mensagem.</p>
                    </span>

                    <span class="btn">
                        <button type="button" name="button" class="submit-button">Enviar</button>
                    </span>

                </form>

                <div class="send-success hide">
                    <p>
                        Sua mensagem foi enviada com sucesso!
                    </p>
                </div>

                <div class="send-error hide">
                    <p>
                        Sua mensagem não pode ser enviada no momento, por favor tente novamente mais tarde. Você também pode enviar a mensagem através de seu aplicativo de e-mail favorito para <a href="mailto:contato@rafaelbriet.com.br?subject=contato">contato@rafaelbriet.com.br</a>.
                    </p>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <section class="social">
                <h3 class="section-title">Siga-me nas redes sociais.</h3>
                <ul class="social-links">
                    <li class="icon-linkedin-square"><a href="https://linkedin.com/in/rafaelbriet">LinkdIn</a></li>
                    <li class="icon-instagram"><a href="https://www.instagram.com/rafael_briet/">Instagram</a></li>
                    <li class="icon-behance-square"><a href="https://www.behance.net/rafaelbriet">Behance</a></li>
                </ul>
            </section>

        </footer>

        <script type="text/javascript" src="assets/scripts/mail.js"></script>
    </body>
</html>
