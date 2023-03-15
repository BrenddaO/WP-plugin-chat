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
        $this->table =  $this->prefix . 'artani_chat_messages';
        //dd($this->table);


        parent::__construct();
        $this->boot();
    }
    
    public function boot() {
        $this->callbacks();
        $this->endpoints();
    }
    

    public function callbacks() {
        $this->getAll();
        $this->create();
        $this->delete();
    }

    public function getAll($request = null) {
        $results = $this->db->get_results("SELECT * FROM {$this->table}");
        return $results;
    }

    public function create($request = null) {

    }

    public function delete($request = null) {

    }
}