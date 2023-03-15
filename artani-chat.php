<?php

/**
 * Plugin Name:       Artani Chat
 * Plugin URI:        
 * Description:       Plugin privado ao site oficial Artani, voltado à ao chat.
 * Version:           1.0.0
 * Author:            Artani
 * Author URI:        https://artani.solutions
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * @category    Wordpress_Plugin
 * @package     Artani
 * @author      Artani Company <nivsoficial@gmail.com>
 * @copyright   2023 Artani
 * @license     GNU Public License
 * @version     1.1
 */
include 'tools.php';

include 'admin/menu.php';
include 'shortcodes/shortcodes.php';
include 'database/migrations/Migration.php';
include 'controllers/Controller.php';

new \ArtaniChat\Admin\Menu;
new \ArtaniChat\Database\Migrations\Migration;
new \ArtaniChat\Controllers\Controller;
