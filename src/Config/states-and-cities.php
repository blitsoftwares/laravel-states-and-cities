<?php

return [

    /*
     * In these settings you can set the default country,
     * state and city for the selected fields.
     *
     * - default-country
     * - default-state
     * - default-city
     */

    /*
     * SET DEFAULT COUNTRY USING PRIMARY_KEY
     * SEE # IN TABLE LIST
     *
     * default is 1 - Brazil (BR)
     */
    "default-country" => 1,

    /*
     * SET DEFAULT STATE USING PRIMARY_KEY
     * SEE # IN TABLE LIST
     *
     * default is 12 - Mato Grosso do Sul (MS)
     */
    "default-state" => 12,

    /*
     * SET DEFAULT CITY USING PRIMARY_KEY
     * SEE # IN TABLE LIST
     *
     * default is 5123 - Campo Grande
     */
    "default-city" => 5123,

    /*
     * MASKS
     */

    "postal_code_mask" => "99999-999",

    /*
     * ROUTES MIDDLEWARE WEB
     */
    "route_middleware" => ['web','auth'],

    /*
     * ROUTES MIDDLEWARE API
     */
    "route_middleware_api" => ['auth:api','bindings']
];