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
        echo '
        <div class="wrap">
            <h1>Bem Vindo(a) ao Meu Plugin</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem!</p>
        ';
    }
?>