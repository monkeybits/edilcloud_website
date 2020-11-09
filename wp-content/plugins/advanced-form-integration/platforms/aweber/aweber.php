<?php

class ADFOIN_Aweber extends Advanced_Form_Integration_OAuth2 {

    const service_name           = 'aweber';
    const authorization_endpoint = 'https://auth.aweber.com/oauth2/authorize';
    const token_endpoint         = 'https://auth.aweber.com/oauth2/token';
    const refresh_token_endpoint = 'https://auth.aweber.com/oauth2/token';

    private static $instance;
    protected      $contact_lists = array();
    protected      $refresh_token_endpoint = '';

    public static function get_instance() {

        if ( empty( self::$instance ) ) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    private function __construct() {

        $this->authorization_endpoint = self::authorization_endpoint;
        $this->token_endpoint         = self::token_endpoint;
        $this->refresh_token_endpoint = self::refresh_token_endpoint;

        $option = (array) maybe_unserialize( get_option( 'adfoin_aweber_keys' ) );

        if ( isset( $option['client_id'] ) ) {
            $this->client_id = $option['client_id'];
        }

        if ( isset( $option['client_secret'] ) ) {
            $this->client_secret = $option['client_secret'];
        }

        if ( isset( $option['access_token'] ) ) {
            $this->access_token = $option['access_token'];
        }

        if ( isset( $option['refresh_token'] ) ) {
            $this->refresh_token = $option['refresh_token'];
        }

        if ( $this->is_active() ) {
            if ( isset( $option['contact_lists'] ) ) {
                $this->contact_lists = $option['contact_lists'];
            }
        }

        add_action( 'admin_init', array( $this, 'auth_redirect' ) );
        add_filter( 'adfoin_action_providers', array( $this, 'adfoin_aweber_actions' ), 10, 1 );
        add_filter( 'adfoin_settings_tabs', array( $this, 'adfoin_aweber_settings_tab' ), 10, 1 );
        add_action( 'adfoin_settings_view', array( $this, 'adfoin_aweber_settings_view' ), 10, 1 );
        add_action( 'admin_post_adfoin_save_aweber_keys', array( $this, 'adfoin_save_aweber_keys' ), 10, 0 );
        add_action( 'adfoin_action_fields', array( $this, 'action_fields' ), 10, 1 );
        add_action( 'wp_ajax_adfoin_get_aweber_accounts', array( $this, 'get_aweber_accounts' ), 10, 0 );
        add_action( 'wp_ajax_adfoin_get_aweber_lists', array( $this, 'get_aweber_lists' ), 10, 0 );
        add_action( "rest_api_init", array( $this, "create_webhook_route" ) );
    }

    public function create_webhook_route() {
        register_rest_route( 'advancedformintegration', '/aweber',
            array(
                'methods'             => 'GET',
                'callback'            => array( $this, 'get_webhook_data' ),
                'permission_callback' => '__return_true'
            )
        );
    }

    public function get_webhook_data( $request ) {
        $params = $request->get_params();

        $code = isset( $params['code'] ) ? trim( $params['code'] ) : '';

        if ( $code ) {

            $redirect_to = add_query_arg(
                [
                    'service' => 'authorize',
                    'action'  => 'adfoin_aweber_auth_redirect',
                    'code'    => $code,
                ],
                admin_url( 'admin.php?page=advanced-form-integration')
            );

            wp_safe_redirect( $redirect_to );
            exit();
        }
    }

    public function adfoin_aweber_actions( $actions ) {

        $actions['aweber'] = array(
            'title' => __( 'Aweber', 'advanced-form-integration' ),
            'tasks' => array(
                'subscribe'   => __( 'Subscribe To List', 'advanced-form-integration' )
            )
        );

        return $actions;
    }

    public function adfoin_aweber_settings_tab( $providers ) {
        $providers['aweber'] = __( 'Aweber', 'advanced-form-integration' );

        return $providers;
    }

    public function adfoin_aweber_settings_view( $current_tab ) {
        if( $current_tab != 'aweber' ) {
            return;
        }

        $option       = (array) maybe_unserialize( get_option( 'adfoin_aweber_keys' ) );
        $nonce        = wp_create_nonce( "adfoin_aweber_settings" );
        $api_key      = empty( $option['client_id'] ) ? "" : $option['client_id'];
        $api_secret   = empty( $option['client_secret'] ) ? "" : $option['client_secret'];
        $redirect_uri = $this->get_redirect_uri();
        ?>

        <form name="aweber_save_form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"
              method="post" class="container">

            <input type="hidden" name="action" value="adfoin_save_aweber_keys">
            <input type="hidden" name="_nonce" value="<?php echo $nonce ?>"/>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row"> <?php _e( 'Instructions', 'advanced-form-integration' ); ?></th>
                    <td>
                        <p><?php _e( '1. Create a Aweber <a target="_blank" href="https://labs.aweber.com/">developer account</a> if not exists.
                                      2. Go to <a target="_blank" href="https://labs.aweber.com/apps">https://labs.aweber.com/apps</a> (create developer account if not already have).<br>
                                      3. Create A New App.<br>
                                      4. Fill out necessary fields.<br>
                                      5. Copy Redirect URI from below and paste in \'OAuth Redirect URL\' field.<br>
                                      6. Copy Client ID and Client Secret from newly created app and save here.', 'advanced-form-integration' ); ?></p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> <?php _e( 'Status', 'advanced-form-integration' ); ?></th>
                    <td>
                        <?php
                        if( $this->is_active() ) {
                            _e( 'Connected', 'advanced-form-integration' );
                        } else {
                            _e( 'Not Connected', 'advanced-form-integration' );
                        }
                        ?>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> <?php _e( 'Client ID', 'advanced-form-integration' ); ?></th>
                    <td>
                        <input type="text" name="adfoin_aweber_api_key"
                               value="<?php echo $api_key; ?>" placeholder="<?php _e( 'Enter Client ID', 'advanced-form-integration' ); ?>"
                               class="regular-text"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> <?php _e( 'Client Secret', 'advanced-form-integration' ); ?></th>
                    <td>
                        <input type="text" name="adfoin_aweber_api_secret"
                               value="<?php echo $api_secret; ?>" placeholder="<?php _e( 'Enter Client Secret', 'advanced-form-integration' ); ?>"
                               class="regular-text"/>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"> <?php _e( 'Redirect URI', 'advanced-form-integration' ); ?></th>
                    <td>
                        <input type="text" value="<?php echo $redirect_uri; ?>" id="redirect_uri" name="redirect_uri" class="regular-text code" readonly="readonly" onfocus="this.select();" />
                    </td>
                </tr>
            </table>
            <?php submit_button( __( 'Authorize', 'advanced-form-integration' ) ); ?>
        </form>

        <?php
    }

    public function adfoin_save_aweber_keys() {
        // Security Check
        if (! wp_verify_nonce( $_POST['_nonce'], 'adfoin_aweber_settings' ) ) {
            die( __( 'Security check Failed', 'advanced-form-integration' ) );
        }

        $api_key    = isset( $_POST["adfoin_aweber_api_key"] ) ? sanitize_text_field( $_POST["adfoin_aweber_api_key"] ) : "";
        $api_secret = isset( $_POST["adfoin_aweber_api_secret"] ) ? sanitize_text_field( $_POST["adfoin_aweber_api_secret"] ) : "";

        $this->client_id     = trim( $api_key );
        $this->client_secret = trim( $api_secret );

        $this->save_data();
        $this->authorize( 'account.read list.read subscriber.read subscriber.write' );

        advanced_form_integration_redirect( "admin.php?page=advanced-form-integration-settings&tab=aweber" );
    }

    public function action_fields() {
        ?>
        <script type="text/template" id="aweber-action-template">
            <table class="form-table">
                <tr valign="top" v-if="action.task == 'subscribe'">
                    <th scope="row">
                        <?php esc_attr_e( 'Map Fields', 'advanced-form-integration' ); ?>
                    </th>
                    <td scope="row">

                    </td>
                </tr>

                <tr valign="top" class="alternate" v-if="action.task == 'subscribe'">
                    <td scope="row-title">
                        <label for="tablecell">
                            <?php esc_attr_e( 'Aweber Account', 'advanced-form-integration' ); ?>
                        </label>
                    </td>
                    <td>
                        <select name="account_id" v-model="fielddata.accountId" @change="getLists" required="required">
                            <option value=""> <?php _e( 'Select Account...', 'advanced-form-integration' ); ?> </option>
                            <option v-for="(item, index) in fielddata.accounts" :value="index" > {{item}}  </option>
                        </select>
                        <div class="spinner" v-bind:class="{'is-active': accountLoading}" style="float:none;width:auto;height:auto;padding:10px 0 10px 50px;background-position:20px 0;"></div>
                    </td>
                </tr>

                <tr valign="top" class="alternate" v-if="action.task == 'subscribe'">
                    <td scope="row-title">
                        <label for="tablecell">
                            <?php esc_attr_e( 'Aweber List', 'advanced-form-integration' ); ?>
                        </label>
                    </td>
                    <td>
                        <select name="list_id" v-model="fielddata.listId" required="required">
                            <option value=""> <?php _e( 'Select List...', 'advanced-form-integration' ); ?> </option>
                            <option v-for="(item, index) in fielddata.lists" :value="index" > {{item}}  </option>
                        </select>
                        <div class="spinner" v-bind:class="{'is-active': listLoading}" style="float:none;width:auto;height:auto;padding:10px 0 10px 50px;background-position:20px 0;"></div>
                    </td>
                </tr>

                <editable-field v-for="field in fields" v-bind:key="field.value" v-bind:field="field" v-bind:trigger="trigger" v-bind:action="action" v-bind:fielddata="fielddata"></editable-field>

                <tr valign="top" v-if="action.task == 'subscribe'">
                    <th scope="row">
                        <?php esc_attr_e( 'Go Pro', 'advanced-form-integration' ); ?>
                    </th>
                    <td scope="row">
                        <span><?php printf( __( 'To unlock custom fields and tags consider <a href="%s">upgrading to Pro</a>.', 'advanced-form-integration' ), admin_url('admin.php?page=advanced-form-integration-settings-pricing') ); ?></span>
                    </td>
                </tr>
            </table>
        </script>


        <?php
    }

    public function auth_redirect() {

        $auth   = isset( $_GET['auth'] ) ? trim( $_GET['auth'] ) : '';
        $code   = isset( $_GET['code'] ) ? trim( $_GET['code'] ) : '';
        $action = isset( $_GET['action'] ) ? trim( $_GET['action'] ) : '';

        if ( 'adfoin_aweber_auth_redirect' == $action ) {
            $code = isset( $_GET['code'] ) ? $_GET['code'] : '';

            if ( $code ) {
                $this->request_token( $code );
            }

            if ( ! empty( $this->access_token ) ) {
                $message = 'success';
            } else {
                $message = 'failed';
            }

            wp_safe_redirect( admin_url( 'admin.php?page=advanced-form-integration-settings&tab=aweber' ) );

            exit();
        }
    }

    protected function save_data() {

        $data = (array) maybe_unserialize( get_option( 'adfoin_aweber_keys' ) );

        $option = array_merge(
            $data,
            array(
                'client_id'     => $this->client_id,
                'client_secret' => $this->client_secret,
                'access_token'  => $this->access_token,
                'refresh_token' => $this->refresh_token,
                'contact_lists' => $this->contact_lists,
            )
        );

        update_option( 'adfoin_aweber_keys', maybe_serialize( $option ) );
    }

    protected function reset_data() {

        $this->client_id     = '';
        $this->client_secret = '';
        $this->access_token  = '';
        $this->refresh_token = '';
        $this->contact_lists = [ ];

        $this->save_data();
    }

    protected function get_redirect_uri() {
        return site_url( '/wp-json/advancedformintegration/aweber' );
    }

    public function create_contact( $properties, $account_id, $list_id ) {

        $endpoint = "https://api.aweber.com/1.0/accounts/{$account_id}/lists/{$list_id}/subscribers";

        $request = [
            'method'  => 'POST',
            'headers' => [
                'Accept'       => 'application/json',
                'Content-Type' => 'application/json; charset=utf-8',
            ],
            'body'    => json_encode( $properties ),
        ];

        $response = $this->remote_request( $endpoint, $request );

        return $response;
    }

    public function get_aweber_accounts() {

        $endpoint = 'https://api.aweber.com/1.0/accounts';

        $request = array(
            'method'  => 'GET',
            'headers' => array(
                'Accept'       => 'application/json',
                'Content-Type' => 'application/json',
            )
        );

        $response = $this->remote_request( $endpoint, $request );

        if ( 400 <= (int) wp_remote_retrieve_response_code( $response ) ) {
            wp_send_json_error();
        }

        $response_body = wp_remote_retrieve_body( $response );

        if ( empty( $response_body ) ) {
            wp_send_json_error();
        }

        $response_body = json_decode( $response_body, true );

        if ( !empty( $response_body['entries'] ) ) {
            $accounts = wp_list_pluck( $response_body['entries'], 'id', 'id' );

            wp_send_json_success( $accounts );
        } else {
            wp_send_json_error();
        }
    }

    public function get_aweber_lists() {

        $account_id = isset( $_POST['accountId'] ) ? $_POST['accountId'] : '';

        if( !$account_id ) {
            wp_send_json_error();
        }

        $endpoint = "https://api.aweber.com/1.0/accounts/{$account_id}/lists";

        $request = array(
            'method'  => 'GET',
            'headers' => array(
                'Accept'       => 'application/json',
                'Content-Type' => 'application/json',
            )
        );

        $response = $this->remote_request( $endpoint, $request );

        if ( 400 <= (int) wp_remote_retrieve_response_code( $response ) ) {
            wp_send_json_error();
        }

        $response_body = wp_remote_retrieve_body( $response );

        if ( empty( $response_body ) ) {
            wp_send_json_error();
        }

        $response_body = json_decode( $response_body, true );

        if ( !empty( $response_body['entries'] ) ) {
            $lists = wp_list_pluck( $response_body['entries'], 'name', 'id' );

            wp_send_json_success( $lists );
        } else {
            wp_send_json_error();
        }
    }
}

$aweber = ADFOIN_Aweber::get_instance();

/*
 * Saves connection mapping
 */
function adfoin_aweber_save_integration() {
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
 * Handles sending data to Aweber API
 */
function adfoin_aweber_send_data( $record, $posted_data ) {

    $record_data = json_decode( $record["data"], true );
    $data        = $record_data["field_data"];

    if( array_key_exists( "cl", $record_data["action_data"]) ) {
        if( $record_data["action_data"]["cl"]["active"] == "yes" ) {
            if( !adfoin_match_conditional_logic( $record_data["action_data"]["cl"], $posted_data ) ) {
                return;
            }
        }
    }

    $account_id = $data["accountId"];
    $list_id    = $data["listId"];
    $task       = $record["task"];

    if( $task == "subscribe" ) {
        $email      = empty( $data["email"] ) ? "" : adfoin_get_parsed_values( $data["email"], $posted_data );
        $first_name = empty( $data["firstName"] ) ? "" : adfoin_get_parsed_values($data["firstName"], $posted_data);
        $last_name  = empty( $data["lastName"] ) ? "" : adfoin_get_parsed_values($data["lastName"], $posted_data);

        $properties = array(
            "email"  => $email,
            "name"   => $first_name . " " . $last_name
        );

        $aweber = ADFOIN_Aweber::get_instance();
        $return = $aweber->create_contact( $properties, $account_id, $list_id );

        adfoin_add_to_log( $return, '', $properties, $record );
    }
    return;
}