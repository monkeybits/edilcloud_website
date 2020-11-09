<?php

add_filter( 'adfoin_action_providers', 'adfoin_pipedrive_actions', 10, 1 );

function adfoin_pipedrive_actions( $actions ) {

    $actions['pipedrive'] = array(
        'title' => __( 'Pipedrive', 'advanced-form-integration' ),
        'tasks' => array(
            'add_contact'   => __( 'Create New Contact', 'advanced-form-integration' )
        )
    );

    return $actions;
}

add_filter( 'adfoin_settings_tabs', 'adfoin_pipedrive_settings_tab', 10, 1 );

function adfoin_pipedrive_settings_tab( $providers ) {
    $providers['pipedrive'] = __( 'Pipedrive', 'advanced-form-integration' );

    return $providers;
}

add_action( 'adfoin_settings_view', 'adfoin_pipedrive_settings_view', 10, 1 );

function adfoin_pipedrive_settings_view( $current_tab ) {
    if( $current_tab != 'pipedrive' ) {
        return;
    }

    $nonce     = wp_create_nonce( "adfoin_pipedrive_settings" );
    $api_token = get_option( 'adfoin_pipedrive_api_token' ) ? get_option( 'adfoin_pipedrive_api_token' ) : "";
    ?>

    <form name="pipedrive_save_form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"
          method="post" class="container">

        <input type="hidden" name="action" value="adfoin_save_pipedrive_api_token">
        <input type="hidden" name="_nonce" value="<?php echo $nonce ?>"/>

        <table class="form-table">
            <tr valign="top">
                <th scope="row"> <?php _e( 'API Token', 'advanced-form-integration' ); ?></th>
                <td>
                    <input type="text" name="adfoin_pipedrive_api_token"
                           value="<?php echo $api_token; ?>" placeholder="<?php _e( 'Please enter API Token', 'advanced-form-integration' ); ?>"
                           class="regular-text"/>
                    <p class="description" id="code-description"><?php _e( 'Please go to Settings > Personal > API to get API Token', 'advanced-form-integration' ); ?></a></p>
                </td>

            </tr>
        </table>
        <?php submit_button(); ?>
    </form>

    <?php
}

add_action( 'admin_post_adfoin_save_pipedrive_api_token', 'adfoin_save_pipedrive_api_token', 10, 0 );

function adfoin_save_pipedrive_api_token() {
    // Security Check
    if (! wp_verify_nonce( $_POST['_nonce'], 'adfoin_pipedrive_settings' ) ) {
        die( __( 'Security check Failed', 'advanced-form-integration' ) );
    }

    $api_token = sanitize_text_field( $_POST["adfoin_pipedrive_api_token"] );

    // Save tokens
    update_option( "adfoin_pipedrive_api_token", $api_token );

    advanced_form_integration_redirect( "admin.php?page=advanced-form-integration-settings&tab=pipedrive" );
}

add_action( 'adfoin_add_js_fields', 'adfoin_pipedrive_js_fields', 10, 1 );

function adfoin_pipedrive_js_fields( $field_data ) {}

add_action( 'adfoin_action_fields', 'adfoin_pipedrive_action_fields' );

function adfoin_pipedrive_action_fields() {
    ?>
    <script type="text/template" id="pipedrive-action-template">
        <table class="form-table">
            <tr valign="top" v-if="action.task == 'add_contact'">
                <th scope="row">
                    <?php esc_attr_e( 'Contact Fields', 'advanced-form-integration' ); ?>
                </th>
                <td scope="row">

                </td>
            </tr>

            <editable-field v-for="field in fields" v-bind:key="field.value" v-bind:field="field" v-bind:trigger="trigger" v-bind:action="action" v-bind:fielddata="fielddata"></editable-field>

            <tr valign="top" v-if="action.task == 'subscribe'">
                <th scope="row">
                    <?php esc_attr_e( 'Go Pro', 'advanced-form-integration' ); ?>
                </th>
                <td scope="row">
                    <span><?php printf( __( 'To unlock org, deal, note, activity and custom fields consider <a href="%s">upgrading to Pro</a>.', 'advanced-form-integration' ), admin_url('admin.php?page=advanced-form-integration-settings-pricing') ); ?></span>
                </td>
            </tr>
        </table>
    </script>
    <?php
}

/*
 * Saves connection mapping
 */
function adfoin_pipedrive_save_integration() {
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
 * Handles sending data to Pipedrive API
 */
function adfoin_pipedrive_send_data( $record, $posted_data ) {

    $api_token    = get_option( 'adfoin_pipedrive_api_token' ) ? get_option( 'adfoin_pipedrive_api_token' ) : "";

    if( !$api_token ) {
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

    $data = $record_data["field_data"];
    $task = $record["task"];

    if( $task == "add_contact" ) {
        $email = empty( $data["email"] ) ? "" : adfoin_get_parsed_values( $data["email"], $posted_data );
        $name  = empty( $data["name"] ) ? "" : adfoin_get_parsed_values( $data["name"], $posted_data );
        $url   = "https://api.pipedrive.com/v1/persons?api_token=" . $api_token;

        $headers = array(
            "Accept"       => "application/json",
            "Content-Type" => "application/json"
        );

        $body = json_encode( array(
            "name"  => $name,
            "email" => $email
        ) , true );

        $args = array(
            "headers" => $headers,
            "body"    => $body
        );

        $response = wp_remote_post( $url, $args );

        adfoin_add_to_log( $response, $url, $args, $record );
    }

    return;
}