<?php
namespace ArtaniChat\Database\Migrations;

abstract class Tools {
    public $db;
    public $charset_collate;
    function __construct() {
        global $wpdb;
        $this->db = $wpdb;
        $this->charset_collate = $wpdb->get_charset_collate();
    }
    function getNameTable($name) {
        global $wpdb;
        return $wpdb->prefix . $name;
    }
    
    function query($sql) {
          require_once ABSPATH . 'wp-admin/includes/upgrade.php';
          return dbDelta($sql);
    }

    function register($table) {
        register_activation_hook( __FILE__, array($this, $table));  
    }

}