<?php

add_filter( 'adfoin_form_providers', 'adfoin_woocommerce_add_provider' );

function adfoin_woocommerce_add_provider( $providers ) {

    if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
        $providers['woocommerce'] = __( 'WooCommerce', 'advanced-form-integration' );
    }

    return $providers;
}

function adfoin_woocommerce_get_forms( $form_provider ) {

    if ( $form_provider != 'woocommerce' ) {
        return;
    }

    $triggers = array(
        '1' => __( 'All New order', 'advanced-form-integration' ),
        '2' => __( 'Order Status Processing', 'advanced-form-integration' ),
        '3' => __( 'Order Sttus On-Hold', 'advanced-form-integration' ),
        '4' => __( 'Order Status Completed', 'advanced-form-integration' ),
        '5' => __( 'Order Status Failed', 'advanced-form-integration' ),
        '6' => __( 'Order Status Pending', 'advanced-form-integration' ),
        '7' => __( 'Order Status Refunded', 'advanced-form-integration' ),
        '8' => __( 'Order Status Cancelled', 'advanced-form-integration' ),
    );

    return $triggers;
}

function adfoin_woocommerce_get_form_fields( $form_provider, $form_id ) {

    if ( $form_provider != 'woocommerce' ) {
        return;
    }

    $fields = array();

//    if( $form_id == "1" ) {

    $fields = adfoin_get_woocommerce_order_fields();
//    }

    return $fields;
}

function adfoin_get_woocommerce_order_fields() {

    $fields = array(
        // order fields
        "id"                          => __( "Order ID", "advanced-form-integration" ),
        "parent_id"                   => __( "Parent ID", "advanced-form-integration" ),
        "user_id"                     => __( "User ID", "advanced-form-integration" ),
        "billing_first_name"          => __( "Billing First Name", "advanced-form-integration" ),
        "billing_last_name"           => __( "Billing Last Name", "advanced-form-integration" ),
        "formatted_billing_full_name" => __( "Formatted Billing Full Name", "advanced-form-integration" ),
        "billing_company"             => __( "Billing Company", "advanced-form-integration" ),
        "billing_address_1"           => __( "Billing Address 1", "advanced-form-integration" ),
        "billing_address_2"           => __( "Billing Address 2", "advanced-form-integration" ),
        "billing_city"                => __( "Billing City", "advanced-form-integration" ),
        "billing_state"               => __( "Billing State", "advanced-form-integration" ),
        "billing_postcode"            => __( "Billing Postcode", "advanced-form-integration" ),
        "billing_country"             => __( "Billing Country", "advanced-form-integration" ),
        "billing_email"               => __( "Billing Email", "advanced-form-integration" ),
        "billing_phone"               => __( "Billing Phone", "advanced-form-integration" ),
        "formatted_billing_address"   => __( "Formatted Billing Phone", "advanced-form-integration" ),
        "shipping_first_name"         => __( "Shipping First Name", "advanced-form-integration" ),
        "shipping_last_name"          => __( "Shipping Last Name", "advanced-form-integration" ),
        "shipping_full_name"          => __( "Shipping Full Name", "advanced-form-integration" ),
        "shipping_company"            => __( "Shipping Company", "advanced-form-integration" ),
        "shipping_address_1"          => __( "Shipping Address 1", "advanced-form-integration" ),
        "shipping_address_2"          => __( "Shipping Address 2", "advanced-form-integration" ),
        "shipping_city"               => __( "Shipping City", "advanced-form-integration" ),
        "shipping_state"              => __( "Shipping State", "advanced-form-integration" ),
        "shipping_postcode"           => __( "Shipping Postcode", "advanced-form-integration" ),
        "shipping_country"            => __( "Shipping Country", "advanced-form-integration" ),
        "shipping_email"              => __( "Shipping Email", "advanced-form-integration" ),
        "shipping_phone"              => __( "Shipping Phone", "advanced-form-integration" ),
        "formatted_shipping_address"  => __( "Formatted Shipping Phone", "advanced-form-integration" ),
        "shipping_address_map_url"    => __( "Shipping Address Map URL", "advanced-form-integration" ),
        "payment_method"              => __( "Payment Method", "advanced-form-integration" ),
        "payment_method_title"        => __( "Payment Method Title", "advanced-form-integration" ),
        "transaction_id"              => __( "Transaction ID", "advanced-form-integration" ),
        "created_via"                 => __( "Order Created Via", "advanced-form-integration" ),
        "date_completed"              => __( "Date Completed", "advanced-form-integration" ),
        "date_created"                => __( "Date Created", "advanced-form-integration" ),
        "date_modified"               => __( "Date Modified", "advanced-form-integration" ),
        "date_paid"                   => __( "Date Paid", "advanced-form-integration" ),
        "cart_hash"                   => __( "Cart Hash", "advanced-form-integration" ),
        "currency"                    => __( "Currency", "advanced-form-integration" ),

        //customer fields
        "customer_id"         => __( "Customer ID", "advanced-form-integration" ),
        "customer_ip_address" => __( "Customer IP Address", "advanced-form-integration" ),
        "customer_user_agent" => __( "Customer User Agent", "advanced-form-integration" ),
        "customer_note"       => __( "Customer Note", "advanced-form-integration" ),

        //item fields
        "total"                  => __( "Total", "advanced-form-integration" ),
        "formatted_order_total"  => __( "Formatted Order Total", "advanced-form-integration" ),
        "order_item_total"       => __( "Order Item Total", "advanced-form-integration" ),
        "prices_include_tax"     => __( "Prices Include Tax", "advanced-form-integration" ),
        "discount_total"         => __( "Discount Total", "advanced-form-integration" ),
        "discount_tax"           => __( "Discount Tax", "advanced-form-integration" ),
        "shipping_total"         => __( "Shipping Total", "advanced-form-integration" ),
        "shipping_tax"           => __( "Shipping Tax", "advanced-form-integration" ),
        "cart_tax"               => __( "Cart Tax", "advanced-form-integration" ),
        "total_tax"              => __( "Total Tax", "advanced-form-integration" ),
        "total_discount"         => __( "Total Discount", "advanced-form-integration" ),
        "subtotal"               => __( "Subtotal", "advanced-form-integration" ),
        "tax_totals"             => __( "Tax Totals", "advanced-form-integration" ),
        "items"                  => __( "Items Full JSON", "advanced-form-integration" ),
        "items_id"               => __( "Item(s) ID", "advanced-form-integration" ),
        "items_name"             => __( "Item(s) Name", "advanced-form-integration" ),
        "items_sku"              => __( "Item(s) SKU", "advanced-form-integration" ),
        "items_quantity"         => __( "Item(s) Quantity", "advanced-form-integration" ),
        "items_total"            => __( "Item(s) Total", "advanced-form-integration" ),
        "taxes"                  => __( "Taxes", "advanced-form-integration" ),
        "shipping_methods"       => __( "Shipping Methods", "advanced-form-integration" ),
        "shipping_method"        => __( "Shipping Method", "advanced-form-integration" ),
        "applied_coupons"        => __( "Applied Coupons", "advanced-form-integration" ),
        "coupon_discount_totals" => __( "Coupon Discount Totals", "advanced-form-integration" ),
        "status"                 => __( "Status", "advanced-form-integration" ),
    );

    return $fields;
}

function adfoin_woocommerce_get_form_name( $form_provider, $form_id ) {

    if ( $form_provider != "woocommerce" ) {
        return;
    }

    $triggers = array(
        '1' => __( 'All New order', 'advanced-form-integration' ),
        '2' => __( 'Order Status Processing', 'advanced-form-integration' ),
        '3' => __( 'Order Sttus On-Hold', 'advanced-form-integration' ),
        '4' => __( 'Order Status Completed', 'advanced-form-integration' ),
        '5' => __( 'Order Status Failed', 'advanced-form-integration' ),
        '6' => __( 'Order Status Pending', 'advanced-form-integration' ),
        '7' => __( 'Order Status Refunded', 'advanced-form-integration' ),
        '8' => __( 'Order Status Cancelled', 'advanced-form-integration' ),
    );

    if( $form_id ) {
        return $triggers[$form_id];
    }

    return false;
}

// Save WooCommerce POST fields
add_action('woocommerce_checkout_update_order_meta', 'adfoin_woocommerce_save_checkout_fields', 10, 2);

function adfoin_woocommerce_save_checkout_fields( $order_id ) {

    $fields                = adfoin_get_woocommerce_order_fields();
    $field_keys            = array_keys( $fields );
    $filtered              = array();

    if( isset( $_POST ) && is_array( $_POST ) ) {
        foreach( $_POST as $key => $value ) {
            if( is_string( $value ) && ! in_array( $key, $field_keys ) ) {
                $filtered[$key] = adfoin_sanitize_text_or_array_field( $value );
            }
        }
    }

    update_option( 'adfoin_wc_checkout_fields', maybe_serialize( $filtered ) );
    return;
}

add_action( 'woocommerce_new_order', 'adfoin_woocommerce_after_admin_order', 10, 2 );

function adfoin_woocommerce_after_admin_order( $order_id ) {
    if( !$order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );
    $via   = $order->get_created_via();

    if( !($via == "admin" || $via == "rest-api") ) {
        return;
    }

    adfoin_woocommerce_after_submission( $order, 1 );

}

add_action( 'woocommerce_thankyou', 'adfoin_woocommerce_after_checkout_order', 10, 2 );

function adfoin_woocommerce_after_checkout_order( $order_id ) {
    if( !$order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );
    $via   = $order->get_created_via();

    if( $via != "checkout" ) {
        return;
    }

    adfoin_woocommerce_after_submission( $order, 1 );

}

add_action( 'woocommerce_order_status_processing', 'adfoin_woocommerce_order_status_processing', 10, 2 );

function adfoin_woocommerce_order_status_processing( $order_id ) {
    if( !$order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );

    adfoin_woocommerce_after_submission( $order, 2 );

}

add_action( 'woocommerce_order_status_on-hold', 'adfoin_woocommerce_order_status_onhold', 10, 2 );

function adfoin_woocommerce_order_status_onhold( $order_id ) {
    if( !$order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );

    adfoin_woocommerce_after_submission( $order, 3 );

}

add_action( 'woocommerce_order_status_completed', 'adfoin_woocommerce_order_status_completed', 10, 2 );

function adfoin_woocommerce_order_status_completed( $order_id ) {
    if( !$order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );

    adfoin_woocommerce_after_submission( $order, 4 );

}

add_action( 'woocommerce_order_status_failed', 'adfoin_woocommerce_order_status_failed', 10, 2 );

function adfoin_woocommerce_order_status_failed( $order_id ) {
    if( !$order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );

    adfoin_woocommerce_after_submission( $order, 5 );

}

add_action( 'woocommerce_order_status_pending', 'adfoin_woocommerce_order_status_pending', 10, 2 );

function adfoin_woocommerce_order_status_pending( $order_id ) {
    if( !$order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );

    adfoin_woocommerce_after_submission( $order, 6 );

}

add_action( 'woocommerce_order_status_refunded', 'adfoin_woocommerce_order_status_refunded', 10, 2 );

function adfoin_woocommerce_order_status_refunded( $order_id ) {
    if( !$order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );

    adfoin_woocommerce_after_submission( $order, 7 );

}

add_action( 'woocommerce_order_status_cancelled', 'adfoin_woocommerce_order_status_cancelled', 10, 2 );

function adfoin_woocommerce_order_status_cancelled( $order_id ) {
    if( !$order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );

    adfoin_woocommerce_after_submission( $order, 8 );

}

function adfoin_woocommerce_after_submission( $order, $form_id ) {

    global $wpdb;

    $saved_records = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}adfoin_integration WHERE status = 1 AND form_provider = 'woocommerce' AND form_id = " .$form_id, ARRAY_A );

    if( empty( $saved_records ) ) {
        return;
    }

    $posted_data = array();

    $fields = adfoin_get_woocommerce_order_fields();
    $field_keys = array_keys( $fields );

    foreach ( $field_keys as $key ) {
        if( method_exists( $order, "get_" . $key ) ) {
            $result = call_user_func( array( $order, "get_" . $key ) );
            $posted_data[$key] = $result;

            if( "date_created" == $key ) {
                $posted_data["date_created"] = $order->get_date_created() !== null ? date( 'Y-m-d H:i:s', $order->get_date_created()->getOffsetTimestamp() ) : "";
            }

            if( "date_modified" == $key ) {
                $posted_data["date_modified"] = $order->get_date_modified() !== null ? date( 'Y-m-d H:i:s', $order->get_date_modified()->getOffsetTimestamp() ) : "";
            }

            if( "date_completed" == $key ) {
                $posted_data["date_completed"] = $order->get_date_completed() !== null ? date( 'Y-m-d H:i:s', $order->get_date_completed ()->getOffsetTimestamp() ) : "";
            }

            if( "tax_totals" == $key ) {
                $posted_data["tax_totals"] = json_encode( $order->get_tax_totals() );
            }

            if( "shipping_methods" == $key ) {
                $shipping_methods = $order->get_shipping_methods();
                $methods_data     = array();

                if( is_array( $shipping_methods ) ) {
                    foreach( $shipping_methods as $single_method ) {
                        $methods_data[] = $single_method->get_data();
                    }

                    $posted_data['shipping_methods'] = json_encode( $methods_data );
                }
            }

            if( "taxes" == $key ) {
                $taxes      = $order->get_taxes();
                $taxes_data = array();

                if( is_array( $taxes ) ) {
                    foreach( $taxes as $single_tax ) {
                        $taxes_data[] = $single_tax->get_data();
                    }

                    $posted_data['taxes'] = json_encode( $taxes_data );
                }
            }

            if( "items" == $key ) {
                $items_id = $items_name = $items_quantity = $items_total = $items_sku = $item_data = array();
                $items = $order->get_items();

                if( is_array( $items ) ) {

                    foreach ( $items as $item ) {
                        $items_id[]       = $item->get_product_id();
                        $items_name[]     = $item->get_name();
                        $items_quantity[] = $item->get_quantity();
                        $items_total[]    = $item->get_total();
                        $items_data[]     = $item->get_data();
                        $product          = wc_get_product( $item->get_product_id() );
                        $items_sku[]      = $product->get_sku();
                    }

                    $posted_data['items_id']       = implode( ",", $items_id );
                    $posted_data['items_name']     = implode( ",", $items_name );
                    $posted_data['items_quantity'] = implode( ",", $items_quantity );
                    $posted_data['items_total']    = implode( ",", $items_total );
                    $posted_data['items_sku']      = implode( ",", $items_sku );
                    $posted_data['items']          = json_encode( $items_data );
                }
            }
        }
    }

    $extra_data = maybe_unserialize( get_option( 'adfoin_wc_checkout_fields' ) );

    if( is_array( $extra_data ) ) {
        $posted_data = $posted_data + $extra_data;
    }

    foreach ( $saved_records as $record ) {
        $action_provider = $record['action_provider'];
        if( function_exists( "adfoin_{$action_provider}_send_data" ) ) {
            call_user_func( "adfoin_{$action_provider}_send_data", $record, $posted_data );
        }
    }
}
