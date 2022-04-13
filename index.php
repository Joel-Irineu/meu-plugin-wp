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
        echo '<h1>Meu Plugin</h1>';
    }
    // [myShortcode]
    add_shortcode('irineu1', 'myShortcode');
?>