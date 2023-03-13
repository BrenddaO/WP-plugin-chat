<?php
namespace ArtaniChat\Database\Migrations;
require 'create_table_artani_chat_rooms.php';

use ArtaniChat\Database\Migrations\artaniChatMigration;
class Migration {
    function __construct()
    {
        new artaniChatMigration;
    }
}