<?php

add_filter( 'adfoin_action_providers', 'adfoin_sendfox_actions', 10, 1 );

function adfoin_sendfox_actions( $actions ) {

    $actions['sendfox'] = array(
        'title' => __( 'SendFox', 'advanced-form-integration' ),
        'tasks' => array(
            'subscribe'   => __( 'Subscribe To List', 'advanced-form-integration' )
        )
    );

    return $actions;
}

add_filter( 'adfoin_settings_tabs', 'adfoin_sendfox_settings_tab', 10, 1 );

function adfoin_sendfox_settings_tab( $providers ) {
    $providers['sendfox'] = __( 'SendFox', 'advanced-form-integration' );

    return $providers;
}

add_action( 'adfoin_settings_view', 'adfoin_sendfox_settings_view', 10, 1 );

function adfoin_sendfox_settings_view( $current_tab ) {
    if( $current_tab != 'sendfox' ) {
        return;
    }

    $nonce     = wp_create_nonce( "adfoin_sendfox_settings" );
    $api_key = get_option( 'adfoin_sendfox_api_key' ) ? get_option( 'adfoin_sendfox_api_key' ) : "";
    ?>

    <form name="sendfox_save_form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"
          method="post" class="container">

        <input type="hidden" name="action" value="adfoin_save_sendfox_api_key">
        <input type="hidden" name="_nonce" value="<?php echo $nonce ?>"/>

        <table class="form-table">
            <tr valign="top">
                <th scope="row"> <?php _e( 'SendFox Personal Access token', 'advanced-form-integration' ); ?></th>
                <td>
                    <input type="text" name="adfoin_sendfox_api_key"
                           value="<?php echo $api_key; ?>" placeholder="<?php _e( 'Enter Access Token', 'advanced-form-integration' ); ?>"
                           class="regular-text"/>
                    <p class="description" id="code-description"><?php _e( 'Go to <a target="_blank" href="https://sendfox.com/account/oauth">https://sendfox.com/account/oauth</a> and click "Create New Token"', 'advanced-form-integration' ); ?></a></p>
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>

    <?php
}

add_action( 'admin_post_adfoin_save_sendfox_api_key', 'adfoin_save_sendfox_api_key', 10, 0 );

function adfoin_save_sendfox_api_key() {
    // Security Check
    if (! wp_verify_nonce( $_POST['_nonce'], 'adfoin_sendfox_settings' ) ) {
        die( __( 'Security check Failed', 'advanced-form-integration' ) );
    }

    $api_key = sanitize_text_field( $_POST["adfoin_sendfox_api_key"] );

    // Save tokens
    update_option( "adfoin_sendfox_api_key", $api_key );

    advanced_form_integration_redirect( "admin.php?page=advanced-form-integration-settings&tab=sendfox" );
}

add_action( 'adfoin_add_js_fields', 'adfoin_sendfox_js_fields', 10, 1 );

function adfoin_sendfox_js_fields( $field_data ) { }

add_action( 'adfoin_action_fields', 'adfoin_sendfox_action_fields' );

function adfoin_sendfox_action_fields() {
?>
    <script type="text/template" id="sendfox-action-template">
        <table class="form-table">
            <tr valign="top" v-if="action.task == 'subscribe' || action.task == 'unsubscribe'">
                <th scope="row">
                    <?php esc_attr_e( 'Map Fields', 'advanced-form-integration' ); ?>
                </th>
                <td scope="row">

                </td>
            </tr>

            <tr valign="top" class="alternate" v-if="action.task == 'subscribe' || action.task == 'unsubscribe'">
                <td scope="row-title">
                    <label for="tablecell">
                        <?php esc_attr_e( 'SendFox List', 'advanced-form-integration' ); ?>
                    </label>
                </td>
                <td>
                    <select name="list_id" v-model="fielddata.listId" required="required">
                        <option value=""> <?php _e( 'Select List...', 'advanced-form-integration' ); ?> </option>
                        <option v-for="(item, index) in fielddata.list" :value="index" > {{item}}  </option>
                    </select>
                    <div class="spinner" v-bind:class="{'is-active': listLoading}" style="float:none;width:auto;height:auto;padding:10px 0 10px 50px;background-position:20px 0;"></div>
                </td>
            </tr>

            <editable-field v-for="field in fields" v-bind:key="field.value" v-bind:field="field" v-bind:trigger="trigger" v-bind:action="action" v-bind:fielddata="fielddata"></editable-field>
        </table>
    </script>


<?php
}

add_action( 'wp_ajax_adfoin_get_sendfox_list', 'adfoin_get_sendfox_list', 10, 0 );

/*
 * Get Mailchimp subscriber lists
 */
function adfoin_get_sendfox_list() {
    // Security Check
    if (! wp_verify_nonce( $_POST['_nonce'], 'advanced-form-integration' ) ) {
        die( __( 'Security check Failed', 'advanced-form-integration' ) );
    }

    $api_key = get_option( "adfoin_sendfox_api_key" );

    if( ! $api_key ) {
        return array();
    }

    $url    = "https://api.sendfox.com/lists";

    $args = array(
        'headers' => array(
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $api_key
        )
    );

    $data = wp_remote_request( $url, $args );

    if( !is_wp_error( $data ) ) {
        $body  = json_decode( $data["body"] );
        $lists = wp_list_pluck( $body->data, 'name', 'id' );

        wp_send_json_success( $lists );
    } else {
        wp_send_json_error();
    }
}

/*
 * Saves connection mapping
 */
function adfoin_sendfox_save_integration() {
    $params = array();
    parse_str( adfoin_sanitize_text_or_array_field( $_POST['formData'] ), $params );

    $trigger_data = isset( $_POST["triggerData"] ) ? adfoin_sanitize_text_or_array_field( $_POST["triggerData"] ) : array();
    $action_data  = isset( $_POST["actionData"] ) ? adfoin_sanitize_text_or_array_field( $_POST["actionData"] ) : array();
    $field_data   = isset( $_POST["fieldData"] ) ? adfoin_sanitize_text_or_array_field( $_POST["fieldData"] ) : array();

    $integration_title = isset( $trigger_data["integrationTitle"] ) ? $trigger_data["integrationTitle"] : "";
    $form_provider_id  = isset( $trigger_data["formProviderId"] ) ? $trigger_data["formProviderId"] : "";
    $form_id           = isset( $trigger_data["formId"] ) ? $trigger_data["formId"] : "";
    $form_name         = isset( $trigger_data["formName"] ) ? $trigger_data["formName"] : "";
    $action_provider   = isset( $action_data["actionProviderId"] ) ? $action_data["actionProviderId"] : "";
    $task              = isset( $action_data["task"] ) ? $action_data["task"] : "";
    $type              = isset( $params["type"] ) ? $params["type"] : "";

    $all_data = array(
        'trigger_data' => $trigger_data,
        'action_data'  => $action_data,
        'field_data'   => $field_data
    );

    global $wpdb;

    $integration_table = $wpdb->prefix . 'adfoin_integration';

    if ( $type == 'new_integration' ) {

        $result = $wpdb->insert(
            $integration_table,
            array(
                'title'           => $integration_title,
                'form_provider'   => $form_provider_id,
                'form_id'         => $form_id,
                'form_name'       => $form_name,
                'action_provider' => $action_provider,
                'task'            => $task,
                'data'            => json_encode( $all_data, true ),
                'status'          => 1
            )
        );
    }

    if ( $type == 'update_integration' ) {

        $id = esc_sql( trim( $params['edit_id'] ) );

        if ( $type != 'update_integration' &&  !empty( $id ) ) {
            exit;
        }

        $result = $wpdb->update( $integration_table,
            array(
                'title'           => $integration_title,
                'form_provider'   => $form_provider_id,
                'form_id'         => $form_id,
                'form_name'       => $form_name,
                'data'            => json_encode( $all_data, true ),
            ),
            array(
                'id' => $id
            )
        );
    }

    if ( $result ) {
        wp_send_json_success();
    } else {
        wp_send_json_error();
    }
}

/*
 * Handles sending data to Mailchimp API
 */
function adfoin_sendfox_send_data( $record, $posted_data ) {

    $api_key = get_option( 'adfoin_sendfox_api_key' ) ? get_option( 'adfoin_sendfox_api_key' ) : "";

    if( !$api_key ) {
        exit;
    }

    $record_data = json_decode( $record["data"], true );

    if( array_key_exists( "cl", $record_data["action_data"] ) ) {
        if( $record_data["action_data"]["cl"]["active"] == "yes" ) {
            if( !adfoin_match_conditional_logic( $record_data["action_data"]["cl"], $posted_data ) ) {
                return;
            }
        }
    }

    $data    = $record_data["field_data"];
    $list_id = $data["listId"];
    $task    = $record["task"];
    $email   = empty( $data["email"] ) ? "" : adfoin_get_parsed_values($data["email"], $posted_data);
    $prefix  = explode( "-", $api_key )[1];

    if( $task == "subscribe" ) {
        $first_name   = empty( $data["firstName"] ) ? "" : adfoin_get_parsed_values($data["firstName"], $posted_data);
        $last_name    = empty( $data["lastName"] ) ? "" : adfoin_get_parsed_values($data["lastName"], $posted_data);

        $subscriber_data = array(
            "email"      => $email,
            "first_name" => $first_name,
            "last_name"  => $last_name
        );

        if( $list_id ) {
            $subscriber_data["lists"] = array( $list_id );
        }

        $sub_url = "https://api.sendfox.com/contacts";

        $sub_args = array(

            'headers' => array(
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $api_key
            ),
            'body' => json_encode( $subscriber_data )
        );

        $return = wp_remote_post( $sub_url, $sub_args );

        adfoin_add_to_log( $return, $sub_url, $sub_args, $record );

        if ( $return['response']['code'] == 200 ) {
            return array( 1 );
        } else {
            return array( 0, $return )  ;
        }
    }
}