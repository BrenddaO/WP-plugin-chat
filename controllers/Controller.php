<?php
namespace ArtaniChat\Controllers;
require_once 'ChatController';
require_once 'MessageController';
use ArtaniChat\Controllers\{ChatController, MessageController};
class Controller {
    function __construct()
    {
        new ChatController;
        new MessageController;
    }
}