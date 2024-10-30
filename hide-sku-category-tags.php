<?php
/*
Plugin Name: Remove SKU Category Tags
Plugin URI: https://wordpress.org/plugins/hide-sku-category-tags
Description: This plugin will Remove Woocommerce product SKUs Category Tags woocommerce Product Details Page.
Author: Asif Ali
Author URI: http://asifalimca.wordpress.com
Version: 1.1.0
License: GPLv2
*/
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );