<?php
namespace ArtaniChat\Controllers\API;
class Message {
    protected $prefix;
    public function __construct() {
        $this->prefix = 'artani-chat';
        $this->endpoints();
    }

    public function endpoints() {
        register_rest_route($this->prefix, '/create-message', array(
            'methods' => 'POST',
            'callback' => array( $this, 'create' ),
        ));

        register_rest_route($this->prefix, '/delete-message', array(
            'methods' => 'POST',
            'callback' => array( $this, 'delete' ),
        ));

        register_rest_route($this->prefix, '/get-messages', array(
            'methods' => 'GET',
            'callback' => array( $this, 'get' ),
        ));
    }
}