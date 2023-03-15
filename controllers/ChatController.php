<?php
namespace ArtaniChat\Controllers;
require_once 'API/Chat.php';
class ChatController extends \ArtaniChat\Controllers\API\Chat {
    public function __construct() {
        parent::__construct();
        $this->init();
    }
    
    public function init() {
        $this->boot();
        add_action( 'rest_api_init', array($this, 'boot'));
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

    }

    public function create($request = null) {

    }

    public function delete($request = null) {

    }
}