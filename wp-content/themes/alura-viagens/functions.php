<?php
function Alura_RegisterMenu()
{
  register_nav_menu(
    'menu-navigator',
    'Menu navegação'
  );
}

function Alura_AdicionandoRecursos()
{
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}


function Alura_RegistrandoPostCustomizados()
{
  register_post_type('destinos', array(
    'labels' => array(
      'name' => 'Destinos'
    ),
    'public' => true,
    'menu_position' => 0,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_icon' => 'dashicons-admin-site'
  ));
}

function Alura_RegisterTaxonomia()
{
  register_taxonomy(
    'paises',
    'destinos',
    array(
      'labels' => array('name' => 'Paises'),
      'hierarchical' => true,
    ),
  );
}

function Alura_intecambios_register_post_banner()
{
  register_post_type(
    'banners',
    array(
      'labels' => array('name' => 'Banner'),
      'public' => true,
      'menu_position' => 1,
      'menu_icon' => 'dashicons-format-image',
      'supports' => array('title', 'thumbnail'),
    ),
  );
}
// Criando a metabox

function Alura_intercambios_metabox()
{
  add_meta_box(
    'ai_registrando_metabox',
    'Texto da home',
    'ai_funcao_callback',
    'banners',
  );
}

function ai_funcao_callback($post)
{
  $text_one = get_post_meta($post->ID, 'texto_home_1', true); // Pega os dados meta que foram salvos no banco
  $text_two = get_post_meta($post->ID, 'texto_home_2', true); // Pega os dados meta que foram salvos no banco

?>
  <label for="text_home_1">Texto 1</label>
  <input type="text" name="texto_home_1" style="width: 100%" value="<?= $text_one ?>" />
  <br />
  <br />
  <label for="text_home_2">Texto 1</label>
  <input type="text" name="texto_home_2" style="width: 100%" value="<?= $text_two ?>" />
<?php
}

function Alura_intercambios_save_to_date($post_id)
{
  foreach ($_POST as $key => $value) {
    if ($key !== 'texto_home_1' && $key !== 'texto_home_2') {
      continue;
    }

    update_post_meta(
      $post_id,
      '_' . $key,
      $_POST[$key],
    );
  }
}

function alura_intercambios_adicionando_scripts()
{
  if (is_front_page()) {
    wp_enqueue_script('typed-js', get_template_directory_uri() . '/js/typed.min.js', array(), false, true);
    wp_enqueue_script('texto-banner-js', get_template_directory_uri() . '/js/text_banner.js', array('typed-js'), false, true);
  }
}

// Fazer com que o wordpress inicialize a função na inicialização do mesmo
add_action('init', 'Alura_RegisterMenu');
add_action('init', 'Alura_RegisterTaxonomia');
add_action('init', 'Alura_RegistrandoPostCustomizados');
add_action('init', 'Alura_intecambios_register_post_banner');
add_action('wp_enqueue_scripts', 'alura_intercambios_adicionando_scripts');
add_action('add_meta_boxes', 'Alura_intercambios_metabox');
add_action('save_post', 'Alura_intercambios_save_to_date');
add_action('after_setup_theme', 'Alura_AdicionandoRecursos');
