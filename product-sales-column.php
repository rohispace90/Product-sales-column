<?php
/**
 * Plugin Name: Product Sales Column
 * Plugin URI: https://sarkolearn.com
 * Description: افزودن ستون تعداد فروش موفق به لیست محصولات در ووکامرس.
 * Version: 1.0
 * Author: RohiSpace
 * Author URI: https://t.me/rohispace
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_filter( 'manage_edit-product_columns', function( $columns ) {
    $columns['sold_count'] = 'تعداد فروش موفق';
    return $columns;
});

add_action( 'manage_product_posts_custom_column', function( $column, $post_id ) {
    if ( $column === 'sold_count' ) {
        $product = wc_get_product( $post_id );
        $sales   = $product->get_total_sales(); 
        echo $sales ? $sales : 0;
    }
}, 10, 2 );
