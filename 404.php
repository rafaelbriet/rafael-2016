<?php get_header(); ?>

<section class="error-page">
	<h1 class="error-title">Ops! Algo não está no lugar que deveria.</h1>
	<p class="error-lettering">404</p>
	<p class="error-sublettering">Página não encontrada</p>
	<p>A página que você procura pode ter sido removida ou mudado de endereço. Se você acha que isso é um engano entre em contato pelo folmulário abaixo. Você pode também ir para a <a href="<?php echo esc_url(home_url()); ?>">página inicial</a> ou para o <a href="/blog/">blog</a>.</p>
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