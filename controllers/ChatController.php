<?php
namespace ArtaniChat\Controllers;
require_once 'API/Chat.php';
class ChatController extends \ArtaniChat\Controllers\API\Chat {
    public $table;
    public $prefix;
    public $db;
    public function __construct() {
        global $wpdb;
        $this->db = $wpdb;
        $this->prefix = $wpdb->prefix; 
        $this->table =  $this->prefix . 'artani_chat_rooms';


        parent::__construct();
        $this->endpoints();
    }

    public function getAll($request = null) {
        $results = $this->db->get_results("SELECT * FROM {$this->table}");
        return $results;
    }

    public function create($request = null) {
        error_log('create() foi chamado');
        $data = array(
            'user_id' => 1,
            'blocked' => 1,
            'status' => 'ativo',
            'created_at' => date('Y-m-d H:i:s')
        );
        //$format = array('%d', '%d', '%s', '%s');
        $results = $this->db->insert($this->table, $data);
        return $results;
    }

    public function delete($request = null) {

    }
}