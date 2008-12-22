<?php
/*
Plugin Name: TicketX
Plugin URI: http://www.thisrand.com/scripts/ticketx
Description: This is currently only in development.  I do not suggest downloading at this point.
Version: 0.1
Author: Xnuiem
Author URI: http://www.thisrand.com

*/

/*  Copyright 2009 Xnuiem  (email : scripts @T thisrand D07 com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * This is currently only in development.  I do not suggest downloading at this point.
 * @package WordPress
 * @since 2.7
 */


$pluginBase = 'wp-content' . DIRECTORY_SEPARATOR . 'plugins' . DIRECTORY_SEPARATOR . 'ticketx';
require_once(ABSPATH . $pluginBase . DIRECTORY_SEPARATOR . 'ticketx_core.php');

$tObj = new ticketX();

//add_filter('the_content', array($wObj, 'winex_showWineList'));

//register_activation_hook(__FILE__, array($wObj, 'winex_install'));
//register_deactivation_hook(__FILE__, array($wObj, 'winex_uninstall'));

//add_action('admin_menu', array($wObj, 'winex_admin_menu'));





?>
