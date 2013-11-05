<?php
/*
Plugin Name: Kint Debugger
Plugin URI: http://upthemes.com/plugins/kint-debugger/
Description: A simple WordPress wrapper for Kint, a debugging tool to output information about variables and traces. Kint Debugger integrates seamlessly with the Debug Bar plugin.
Version: 0.9
Author: Brian Fegter
Author URI: http://upthemes.com
License: MIT
*/

require_once( 'kint/Kint.class.php' );

if ( !function_exists( 'dump_wp_query' ) ) {
	function dump_wp_query(){
		global $wp_query;
		ob_start('kint_debug_globals');
		d($wp_query);
		ob_end_flush();
	}
}

if ( !function_exists( 'dump_wp' ) ) {
	function dump_wp(){
		global $wp;
		ob_start('kint_debug_globals');
		d($wp);
		ob_end_flush();
	}
}
if ( !function_exists( 'dump_post' ) ) {
	function dump_post(){
		global $post;
		ob_start('kint_debug_globals');
		d($post);
		ob_end_flush();
	}
}

function kint_debug_globals($buffer){
	global $kint_debug;
	$kint_debug[] = $buffer;
	if(class_exists('Debug_Bar')) return;
	return $buffer;
}

class kintDebugBarPanel {
	function title() {
		return __('Kint Debugger');
	}
      
	function prerender() {
		
	}
      
	function is_visible() {
		return true;
	}
      
	function render() {
		global $kint_debug;
		if(is_array($kint_debug)){
			foreach($kint_debug as $line)
				echo $line;
		}
	}
}

function kint_debug_bar_panel($panels) {
  $panels[] = new kintDebugBarPanel;
  return $panels;
}
add_filter('debug_bar_panels', 'kint_debug_bar_panel');

