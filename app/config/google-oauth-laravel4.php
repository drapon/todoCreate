<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | oAuth Config
    |--------------------------------------------------------------------------
    */

    /**
     * Storage
     */
    'storage' => 'Session',

    /**
     * Consumers
     */
    'consumers' => array(

        /**
         * Google
         */
        'Google' => array(
            'client_id'     => '',
            'client_secret' => '',
            'redirect_url'  => '',
            'scope'         => array(),
        ),

    )

);