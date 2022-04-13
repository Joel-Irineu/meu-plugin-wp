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
            echo $_POST['nome'];
        }
        ?>
        <div class="wrap">
            <h1>Bem Vindo(a) ao Meu Plugin</h1>
            <form method="post">
                <label>Nome:</label>
                <input type="text" name="nome" id="nome">
                <label>Email:</label>
                <input type="email" name="email" id="email">
                <input type="submit" name="acao" value="Enviar" class="button button-primary">
            </form>
        </div>
<?php
    }
?>