<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Plugin config for Flickr Plugin
 *
 * PHP version 5
 * LICENSE: This source file is subject to GPLv3 license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/gpl.html
 * @author     Ushahidi Team <team@ushahidi.com> 
 * @package	   SwiftRiver - http://github.com/ushahidi/Swiftriver_v2
 * @subpackage Plugin Configs
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License v3 (GPLv3) 
 */

return array(
	'flickr' => array(
		'name'          => 'Flickr',
		'description'   => 'Adds an Flickr channel to SwiftRiver.',
		'author'        => 'David Kobia',
		'email'         => 'david@ushahidi.com',
		'version'       => '0.1.0',
		
		// Designate as a channel
		'channel'       => TRUE,

		// Fields
		'channel_options' => array(
			'keyword' => array(
				'label' => __('Keyword'),
				'type' => 'text',
				'values' => array(),
				'placeholder' => 'E.g. Ushahidi, "African Tech"'
			)
		)
	),
);