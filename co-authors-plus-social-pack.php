<?php
/**
 * Plugin Name: Co-Authors Plus Social Pack
 * Description: Co-Authors Plus add-on pack with profile fields for popular social media services and the ability to allow attributing posts to their Authors when shared using Jetpack
 * Version: 0.1
 * Author: Automattic
 * Author URI: http://automattic.com
 * Copyright: 2013 Shared and distributed by Automattic
 *
 * @package CoAuthors_Plus_Social_Pack
 *
 * GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

if ( ! class_exists( 'CoAuthors_Plus_Social_Pack' ) ) {
	require_once __DIR__ . '/class-coauthors-plus-social-pack.php';
}

$coauthors_plus_social_pack;

/**
 * Callback for loading plugin on init.
 */
function coauthors_plus_social_pack_init() {
	global $coauthors_plus_social_pack;

	$coauthors_plus_social_pack = new CoAuthors_Plus_Social_Pack();
}

// Must come in init, so Co Authors Plus is guaranteed to be already instantiated.
add_action( 'init', 'coauthors_plus_social_pack_init' );
