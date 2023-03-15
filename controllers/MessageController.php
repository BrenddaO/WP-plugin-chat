<?php
require_once 'API/Message.php';
namespace ArtaniChat\Controllers;

class MessageController extends \ArtaniChat\Controllers\API\Message {
    public function __construct()
    {
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