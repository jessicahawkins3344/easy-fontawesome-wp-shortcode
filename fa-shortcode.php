<?php
// Load Font Awesome

function load_font_awesome() {
  wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, null );

} add_action( 'wp_enqueue_scripts', 'load_font_awesome' );

// Add Shortcode
function iconShortcode( $atts, $content = null ) {

// Attributes
$atts = shortcode_atts(
  array(
  'icon' => 'fa-heart',
  'size' => '60px',
  'color' => '#323232',
  'spacing' => '5px',
  'align' => 'center',
  'class' => 'default',

),
  $atts,
  'my_icon'
);

return '<i class="fa ' . $atts['icon'] . ' ' . $atts['class'] . '" style=" display: inline-block; text-align: ' . $atts['align'] .'; color:' . $atts['color'] .'; line-height:' . $atts['size'] .'; font-size:' . $atts['size'] .'; padding:' . $atts['spacing'] .';"></i>';
} add_shortcode( 'my_icon', 'iconShortcode' );