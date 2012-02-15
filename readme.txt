=== Kint Debugger ===
Contributors: misternifty
Author: Brian Fegter
Author URI: http://coderrr.com/
Plugin URI: http://code.google.com/p/kint/
Tags: debug, debugger, print_r, var_dump, backtrace, debug_backtrace, krumo, php, tool, trace
Requires at least: 3.1
Tested up to: 3.3
Stable tag: 0.1

Kint Debugger makes debugging and dumping variables a more pleasant experience.

== Description ==

Kint Debugger is a simple WordPress wrapper for [Kint](http://code.google.com/p/kint), a debugging tool to output information about variables and traces. Debugging is presented in a styled, collapsible format that is easy on the eyes.

**No more adding PRE tags before print_r or var_dump!**

For those who love Krumo, **Kint is Krumo++**.

Dumping variables is easy:
* `d($variable)` will output a styled, collapsible container with your variable information
* `dd($variable)` will do exactly as d() except halt execution of the script
* `s($variable)` will output a simple, un-styled whitespace container
* `sd($variable)` will do exactly as s() except halt execution of the script

Backtrace is also easy:
* `Kint::trace()` The displayed information for each step of the trace includes the source snippet, passed arguments and the object at the time of calling

We've also baked in a few functions that are WordPress specific:
* `dump_wp_query()`
* `dump_wp()`
* `dump_post()`

== Installation ==

Upload the Kint Debugger plugin to your `wp-content/plugins/` directory and activate.

== Frequently Asked Questions ==

If you have a feature request or question, please use the [Kint Debugger support forum](http://wordpress.org/tags/kint-debugger).

If you have a question about Kint specifically, please visit the [Kint site](http://code.google.com/p/kint/).

== Screenshots ==

1. screenshot.png

== Changelog ==

= 0.1 =
* Added Kint 3.2 and created dump_wp_query(), dump_wp(), and dump_post() functions

If you have a feature request or question, please use the <a href='http://wordpress.org/tags/kint-debugger'>Kint Debugger support forum</a>.
