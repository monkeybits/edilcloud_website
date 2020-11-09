<?php

class Advanced_Form_Integration_Submission {

    public function __construct() {
        add_action( 'wp_ajax_adfoin_get_forms', array( $this,'get_forms' ) );
        add_action( 'wp_ajax_adfoin_get_form_fields', array( $this,'get_form_fields' ) );
        add_action( 'wp_ajax_adfoin_get_tasks', array( $this,'get_tasks' ) );
        add_action( 'wp_ajax_adfoin_save_integration', array( $this,'save_integration' ) );
    }

    public function get_forms() {
        if( !wp_verify_nonce( $_POST['nonce'], 'advanced-form-integration' ) ) {
            return;
        }

        $form_provider = sanitize_text_field( $_POST['formProviderId'] );

        if( $form_provider ) {
            $forms = call_user_func( "adfoin_{$form_provider}_get_forms", $form_provider );

            if( !is_wp_error( $forms ) ) {
                wp_send_json_success( $forms );
            }
        }

        wp_die();
    }

    /*
     * Get all fields for a specific form
     */
    public function get_form_fields() {
        if( !wp_verify_nonce( $_POST['nonce'], 'advanced-form-integration' ) ) {
            return;
        }

        $form_provider = sanitize_text_field( $_POST['formProviderId'] );
        $form_id       = sanitize_text_field( $_POST['formId'] );

        if( $form_provider && $form_id ) {
            $fields = call_user_func( "adfoin_{$form_provider}_get_form_fields", $form_provider, $form_id );

            if( !is_wp_error( $fields ) ) {
                wp_send_json_success( $fields );
            }
        }

        wp_die();
    }

    /*
     * Get Tasks for a action provider
     */
    public function get_tasks() {
        if( !wp_verify_nonce( $_POST['nonce'], 'advanced-form-integration' ) ) {
            return;
        }

        $action_provider = sanitize_text_field( $_POST['actionProviderId'] );

        if( $action_provider ) {
            $tasks = adfoin_get_action_tasks( $action_provider );

            if( !is_wp_error( $tasks ) ) {
                wp_send_json_success( $tasks );
            }
        }

        wp_die();
    }

    /*
     * Save Integration
     */
    public function save_integration() {
        if( !wp_verify_nonce( $_POST["nonce"], 'advanced-form-integration' ) ) {
            return;
        }

        $action_provider_id  = isset( $_POST["actionData"]["actionProviderId"] ) ? sanitize_text_field( $_POST["actionData"]["actionProviderId"] ) : "";

        if( $action_provider_id ) {
            call_user_func( "adfoin_{$action_provider_id}_save_integration" );
        }
    }

}