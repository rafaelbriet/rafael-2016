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
                <img class="cover-image" src="assets/images/site-cover.png" alt="Imagem da capa do site" />
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
                        <img src="assets/images/job.jpg" alt="" />
                        <div class="job-description">
                            <h3>Nome do Projeto</h3>
                            <p>Descrição curta do que foi feito.</p>
                            <a href="#">Projeto completo no Behance.</a>
                        </div>
                    </li>
                    <li class="job-thumbnail">
                        <img src="assets/images/job.jpg" alt="" />
                        <div class="job-description">
                            <h3>Nome do Projeto</h3>
                            <p>Descrição curta do que foi feito.</p>
                            <a href="#">Projeto completo no Behance.</a>
                        </div>
                    </li>
                    <li class="job-thumbnail">
                        <img src="assets/images/job.jpg" alt="" />
                        <div class="job-description">
                            <h3>Nome do Projeto</h3>
                            <p>Descrição curta do que foi feito.</p>
                            <a href="#">Projeto completo no Behance.</a>
                        </div>
                    </li>
                    <li class="job-thumbnail">
                        <img src="assets/images/job.jpg" alt="" />
                        <div class="job-description">
                            <h3>Nome do Projeto</h3>
                            <p>Descrição curta do que foi feito.</p>
                            <a href="#">Projeto completo no Behance.</a>
                        </div>
                    </li>
                    <li class="job-thumbnail">
                        <img src="assets/images/job.jpg" alt="" />
                        <div class="job-description">
                            <h3>Nome do Projeto</h3>
                            <p>Descrição curta do que foi feito.</p>
                            <a href="#">Projeto completo no Behance.</a>
                        </div>
                    </li>
                    <li class="job-thumbnail">
                        <img src="assets/images/job.jpg" alt="" />
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
                    <form class="form-contact" action="mail.php" method="post">
                        <span>
                            <label for="name">Nome:</label>
                            <input type="text" name="name" value="" class="name" id="name">
                        </span>
                        <span>
                            <label for="email">E-mail:</label>
                            <input type="text" name="email" value="" class="email" id="email">
                        </span>
                        <span>
                            <label for="message">Mesagem:</label>
                            <textarea name="message" id="message" class="message" rows="8" cols="40"></textarea>
                        </span>

                        <span class="btn">
                            <input type="submit" name="submit" value="Enviar">
                        </span>

                    </form>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <section class="social">
                <h3 class="section-title">Siga-me nas redes sociais.</h3>
                <ul class="social-links">
                    <li class="icon-linkedin-square"><a href="#">LinkdIn</a></li>
                    <li class="icon-instagram"><a href="#">Instagram</a></li>
                    <li class="icon-behance-square"><a href="#">Behance</a></li>
                </ul>
            </section>

        </footer>
    </body>
</html>
