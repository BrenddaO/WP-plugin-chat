<?php
namespace ArtaniChat\Controllers;
require_once 'ChatController.php';
require_once 'MessageController.php';
use ArtaniChat\Controllers\{ChatController, MessageController};
class Controller {
    function __construct()
    {
        new ChatController;
       // new MessageController;
    }
}