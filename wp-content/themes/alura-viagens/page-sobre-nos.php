<?php
$estiloPagina = 'sobre_nos.css';
require_once 'files/header.php';

// Utilizando a função para verificar se há conteudo para ser exibido
if (have_posts()) :
?>
  <main class="main-sobre-nos">
    <?php
    while (have_posts()) : the_post(); // Conhecido como while do wordpress
      the_post_thumbnail(
        'post-thumbnail',
        array('class', 'imagem-sobre-nos')
      );
      echo '<div class="conteudo container-alura">';
      the_title('<h2>', '</h2>');
      the_content();
      echo '</div>';
    endwhile;
    ?>
  </main>
<?php
endif;

require_once 'files/footer.php';
