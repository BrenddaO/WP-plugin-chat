<?php
namespace ArtaniChat\Controllers;
require_once 'API/Message.php';
class MessageController extends \ArtaniChat\Controllers\API\Message {
    public function __construct()
    {
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

    }

    public function create($request = null) {

    }

    public function delete($request = null) {

    }
}