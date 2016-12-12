<?php
/*
Plugin Name: Județe WooCommerce
Plugin URI: http://cristache.net
Description: Plugin care adaugă județe în WooCommerce.
Version: 1.01
Author: Dragoș Cristache
Author URI: http://cristache.net/
*/
/**
 * Copyright (c) 2016 Dragoș Cristache. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

 add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

 function custom_woocommerce_states( $states ) {

   $states['RO'] = array(
       'RO01' => 'Alba',
       'RO02' => 'Arad',
       'RO031' => 'Argeș',
       'RO03' => 'Bacău',
       'RO04' => 'Bihor',
       'RO05' => 'Bistrița-Năsăud',
       'RO06' => 'Botoșani',
       'RO07' => 'Brașov',
       'RO08' => 'Brăila',
       'RO09' => 'București',
       'RO10' => 'Buzău',
       'RO11' => 'Caraș-Severin',
       'RO12' => 'Călărași',
       'RO13' => 'Cluj',
       'RO14' => 'Constanța',
       'RO15' => 'Covasna',
       'RO16' => 'Dâmbovița',
       'RO17' => 'Dolj',
       'RO18' => 'Galați',
       'RO19' => 'Giurgiu',
       'RO20' => 'Gorj',
       'RO21' => 'Harghita',
       'RO22' => 'Hunedoara',
       'RO23' => 'Ialomița',
       'RO24' => 'Iași',
       'RO25' => 'Ilfov',
       'RO26' => 'Maramureș',
       'RO27' => 'Mehedinți',
       'RO28' => 'Mureș',
       'RO29' => 'Neamț',
       'RO30' => 'Olt',
       'RO31' => 'Prahova',
       'RO32' => 'Satu Mare',
       'RO33' => 'Sălaj',
       'RO34' => 'Sibiu',
       'RO35' => 'Suceava',
       'RO36' => 'Teleorman',
       'RO37' => 'Timiș',
       'RO38' => 'Tulcea',
       'RO39' => 'Vaslui',
       'RO40' => 'Vâlcea',
       'RO41' => 'Vrancea'       
   );

   return $states;
 }
