<?php
    /**
     * Plugin Name: Meu Plugin Wp
     * Plugin URI: https://github.com/Joel-Irineu/meu-plugin-wp
     * Description: Plugin criado em estudo
     * Author: Joel Irineu
     * Author URI: https://joelirineu.com.br
     * Version: 1.0
     */

    //  criando shortcode
    function myShortcode() {
        $shortCode = '<h1>Meu Plugin</h1>';
        return $shortCode;
    }
    // [myShortcode]
    add_shortcode('irineu1', 'myShortcode');

    // criando menu
    function myMenu() {
        add_menu_page('Meu Plugin', 'Meu Plugin', 'manage_options', 'meu-plugin-wp', 'myPluginPage', 'https://projetos.joelirineu.com.br/plugin/wp-content/uploads/2022/04/plugin.png', 200);
    }
    add_action('admin_menu', 'myMenu');

    function myPluginPage() {
        if(array_key_exists('acao', $_POST)) {
            update_option('conteudo_html', $_POST['conteudo_html']);
?>
            <div class="notice notice-success is-dismissible"> 
            	<p><strong>Conteudo salvo.</strong></p>
            </div>

<?php
        }
        $conteudo_html = get_option('conteudo_html');
?>
        <div class="wrap">
            <h1>Bem Vindo(a) ao Meu Plugin</h1>
            <form method="post">
                <label>Conteudo HTML:</label>
                <textarea class="large-text" type="text" name="conteudo_html" id="conteudo_html"><?php echo $conteudo_html ?></textarea>
                <input type="submit" name="acao" value="Enviar" class="button button-primary">
            </form>
        </div>
<?php
    }

    function getConteudoHead() {
        echo '<!-- Conteudo do head -->';
    }
    function getConteudoFooter() {
        echo '<!-- Conteudo do footer -->';
    }

    add_action('wp_head', 'getConteudoHead');
    add_action('wp_footer', 'getConteudoFooter');
?>