<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>

<section class="cover">
    <picture class="cover-image">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/420.jpg" media="(max-width: 420px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/600.jpg" media="(max-width: 600px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/700.jpg" media="(max-width: 700px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/920.jpg" media="(max-width: 920px)">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1920.jpg">
    </picture>
    <h2 class="site-description">Publicitátio nerd faminto por desafios.</h2>
</section>
<section class="about" id="about">
    <h3 class="section-title">Quem sou eu.</h3>
    <div class="container">
        <p>
            Olá! Meu nome é Rafael, tenho 24 anos. Possuo mais de cinco anos de experiência como designer gráfico e arte finalista. Sou apaixonado por tecnologia, internet, video game, música, cinema, livros. Estou sempre em busca de aprender algo. Por esse motivo me mudei para Taubaté, onde comecei a cursar a faculdade de Publicidade e Propaganda.
        </p>
    </div>
</section>
<section class="portfolio" id="portfolio">
    <h3 class="section-title">O que já fiz</h3>
    <ul class="job-list">
        <li class="job-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/content/images/Dingo_Arte_Jornal.jpg" alt="" />
            <div class="job-description">
                <h3>Restaurante Dingo</h3>
                <p>Dingo é um restaurante que serve essencialmente carnes australianas como avestruz, canguru, crocodilo e coelhos.</p>
                <a href="https://www.behance.net/gallery/38650651/Restaurante-Dingo" target="_blank">Projeto completo no Behance.</a>
            </div>
        </li>
        <li class="job-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/content/images/Cartaz_Festup.jpg" alt="" />
            <div class="job-description">
                <h3>Cartaz 29º Fest’Up</h3>
                <p>O Fest’Up é um evento para estudantes de publicidade promovido pela APP. Durante o evento ocorre um concurso para alunos em que é escolhido o cartaz da edição do ano seguinte.</p>
                <a href="https://www.behance.net/gallery/38650503/Cartaz-29-FestUp" target="_blank">Projeto completo no Behance.</a>
            </div>
        </li>
        <li class="job-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/content/images/Restaurante_de_Molen.jpg" alt="" />
            <div class="job-description">
                <h3>Restaurante de Molen</h3>
                <p>A marca do restaurante de Molen foi inspirado nos trabalhos do artista holandês Escher. Ela tem como elemento central um moinho, elemento muito presente na paisagem holandesa.</p>
                <a href="https://www.behance.net/gallery/38683863/Restaurante-de-Molen" target="_blank">Projeto completo no Behance.</a>
            </div>
        </li>
        <li class="job-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/content/images/Fotografia_Publicitaria_I.jpg" alt="" />
            <div class="job-description">
                <h3>Fotografia Publicitária I</h3>
                <p>Trabalho apresentado à disciplina Fotografia do curso de Publicidade e Propaganda da Universidade de Taubaté durante o primeiro semestre.</p>
                <a href="https://www.behance.net/gallery/31751437/Fotografia-Publicitaria-I" target="_blank">Projeto completo no Behance.</a>
            </div>
        </li>
        <li class="job-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/content/images/Fotografia_Publicitaria_II.jpg" alt="" />
            <div class="job-description">
                <h3>Fotografia Publicitária II</h3>
                <p>Trabalho apresentado à disciplina Fotopublicidade do curso de Publicidade e Propaganda da Universidade de Taubaté durante o segundo semestre.</p>
                <a href="https://www.behance.net/gallery/31752109/Fotografia-Publicitaria-II" target="_blank">Projeto completo no Behance.</a>
            </div>
        </li>
        <li class="job-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/content/images/Matte_Leao.jpg" alt="" />
            <div class="job-description">
                <h3>Matte Leão</h3>
                <p>Trabalho apresentado à disciplina Fundamento de Design do curso de Publicidade e Propaganda da Universidade de Taubaté durante o primeiro semestre.</p>
                <a href="https://www.behance.net/gallery/31751785/Matte-Leao" target="_blank">Projeto completo no Behance.</a>
            </div>
        </li>
    </ul>
</section>

<section class="contact" id="contact">
    <h3 class="section-title">Entre em contato</h3>
    <form class="form-contact" action="" method="">
        <p class="input-container">
            <label for="name">Nome:</label>
            <input type="text" name="name" value="" class="name" id="name">
            <p class="error-message hide">Você precisa disser qual é o seu nome.</p>
        </p>
        <p class="input-container">
            <label for="email">E-mail:</label>
            <input type="text" name="email" value="" class="email" id="email">
            <p class="error-message hide">Você precisa fornecer um endereço de e-mail válido.</p>
        </p>
        <p class="input-container">
            <label for="message">Mesagem:</label>
            <textarea name="message" id="message" class="message" rows="8" cols="40"></textarea>
            <p class="error-message hide">Você precisa digitar uma mensagem.</p>
        </p>

        <p class="btn">
            <button type="button" name="button" class="submit-button">Enviar</button>
        </p>

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

<?php get_footer(); ?>