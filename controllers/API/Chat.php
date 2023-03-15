<?php
namespace ArtaniChat\Controllers\API;

class Chat {
    protected $prefix;
    public function __construct() {
        $this->prefix = 'artani-chat';
    }
    
    public function endpoints() {
        add_action('rest_api_init', function () {
            register_rest_route($this->prefix, '/create-rooms', array(
                'methods' => 'POST',
                'callback' => array( $this, 'create' ),
            ));
    
            register_rest_route($this->prefix, '/delete-rooms', array(
                'methods' => 'POST',
                'callback' => array( $this, 'delete' ),
            ));
    
            register_rest_route($this->prefix, '/get-rooms', array(
                'methods' => 'GET',
                'callback' => array( $this, 'getAll' ),
            ));
        });
    }
}