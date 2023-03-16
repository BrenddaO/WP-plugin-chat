<?php

namespace ArtaniChat\Database\Migrations;


require_once 'Tools.php';
use ArtaniChat\Database\Migrations\Tools;
class artaniChatMigration extends Tools {

    function __construct() {
        parent::__construct();
        $this->boot();
        register_activation_hook( __FILE__, array($this, 'boot'));
       // register_activation_hook( __FILE__, array($this, 'create_table_artani_chat_guests'));
       // register_activation_hook( __FILE__, array($this, 'create_table_artani_chat_rooms_messages'));     
    }
    
    function boot() {
        $this->create_table_artani_chat_rooms();
        $this->create_table_artani_chat_guests();
        $this->create_table_artani_chat_rooms_messages();
    }
    
    function create_table_artani_chat_guests() {
        $nome_tabela = $this->getNameTable('artani_chat_guests');
        return $this->query("CREATE TABLE IF NOT EXISTS $nome_tabela (
          id INT NOT NULL AUTO_INCREMENT,
          blocked TINYINT(1) DEFAULT '0',
          name VARCHAR(200),
          description TEXT,
          status VARCHAR(50),
          PRIMARY KEY (id),
          created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
          ) $this->charset_collate");
      }
    
    function create_table_artani_chat_rooms() {
        $nome_tabela = $this->getNameTable('artani_chat_rooms');
        return $this->query("CREATE TABLE IF NOT EXISTS $nome_tabela (
          id INT NOT NULL AUTO_INCREMENT,
          user_id BIGINT(20),
          guest_id BIGINT(20),
          blocked TINYINT(1) DEFAULT '0',
          status VARCHAR(50),
          PRIMARY KEY (id),
          created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
          ) $this->charset_collate");
      }

      
      function create_table_artani_chat_rooms_messages() {
          $nome_tabela = $this->getNameTable( 'artani_chat_rooms_messages');
          return $this->query("CREATE TABLE IF NOT EXISTS $nome_tabela (
              id INT NOT NULL AUTO_INCREMENT,
              user_id BIGINT(20) UNSIGNED NOT NULL,
              room_id INT NOT NULL,
              message VARCHAR(250) NOT NULL,
              created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
              PRIMARY KEY (id),
              FOREIGN KEY (user_id) REFERENCES {$this->db->prefix}users(ID),
              FOREIGN KEY (room_id) REFERENCES {$this->db->prefix}artani_chat_rooms(ID)
          ) $this->charset_collate;");
        }
}