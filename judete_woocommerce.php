<?php
/*
Plugin Name: Județe WooCommerce
Plugin URI: https://www.webventures.ro
Description: -
Version: 2.0.2
Author: Dragos Cristache
Author URI: https://www.webventures.ro
*/

if ( !is_admin() ) {
  add_action( 'wp_enqueue_scripts', 'ajax_test_enqueue_scripts' );

  add_filter( 'woocommerce_states', 'custom_woocommerce_states' );
  add_filter( 'woocommerce_get_country_locale' , 'judete_woo_webv_checkout_fields', 100 );
  add_filter( 'woocommerce_checkout_fields' , 'orase_woo_webv_checkout' );

  add_filter( 'default_checkout_billing_country', 'woo_webv_set_default_checkout_country' );
  add_filter( 'default_checkout_billing_state', 'woo_webv_set_default_checkout_state' );
}

function ajax_test_enqueue_scripts() {
  if(is_checkout()){
  	wp_enqueue_script( 'ajax', plugins_url( '/assets/wc-judete.js', __FILE__ ), array('jquery'), '1.0', true );
  }
}

function woo_webv_set_default_checkout_country() {
  return 'RO';
}

function woo_webv_set_default_checkout_state() {
  return '10';
}

function custom_woocommerce_states( $states ) {
  $states['RO'] = array(
    '0' => 'Alegeți județul',
    '1' => 'Alba',
    '2' => 'Arad',
    '3' => 'Arges',
    '4' => 'Bacau',
    '5' => 'Bihor',
    '6' => 'Bistrita-Nasaud',
    '7' => 'Botosani',
    '8' => 'Braila',
    '9' => 'Brasov',
    '10' => 'Bucuresti',
    '11' => 'Buzau',
    '12' => 'Calarasi',
    '13' => 'Caras-Severin',
    '14' => 'Cluj',
    '15' => 'Constanta',
    '16' => 'Covasna',
    '17' => 'Dambovita',
    '18' => 'Dolj',
    '19' => 'Galati',
    '20' => 'Giurgiu',
    '21' => 'Gorj',
    '22' => 'Harghita',
    '23' => 'Hunedoara',
    '24' => 'Ialomita',
    '25' => 'Iasi',
    '206' => 'Ilfov',
    '26' => 'Maramures',
    '27' => 'Mehedinti',
    '28' => 'Mures',
    '29' => 'Neamt',
    '30' => 'Olt',
    '31' => 'Prahova',
    '32' => 'Salaj',
    '33' => 'Satu Mare',
    '34' => 'Sibiu',
    '35' => 'Suceava',
    '36' => 'Teleorman',
    '37' => 'Timis',
    '38' => 'Tulcea',
    '39' => 'Valcea',
    '40' => 'Vaslui',
    '41' => 'Vrancea',
  );
  return $states;
}

function judete_woo_webv_checkout_fields( $locale ) {
  $locale['RO']['state']['label'] = __('Județ', 'woocommerce');
  $locale['RO']['city']['label'] = __('Localitate', 'woocommerce');
  return $locale;
}

function orase_woo_webv_checkout( $fields ) {
  $city_args = wp_parse_args( array(
		'type' => 'select',
		'options' => array(
      '11' => 'Bucuresti',
    ),
		'input_class' => array(
			'wc-enhanced-select',
		)
	), $fields['billing']['billing_city'] );

  // $fields['shipping']['shipping_city'] = $city_args;
	$fields['billing']['billing_city'] = $city_args;

  return $fields;
}
