<?php
/*
Plugin Name: Județe WooCommerce
Plugin URI: https://www.webventures.ro
Description: -
Version: 2.0.1
Author: Dragos Cristache
Author URI: https://www.webventures.ro
*/

add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

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
