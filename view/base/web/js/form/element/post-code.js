/*
 * @package     Intelipost_Autocomplete
 * @copyright   Copyright (c) 2016 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author      Eneias Ramos de Melo <eneias@gamuza.com.br>
 */

define([
    'underscore',
    'uiRegistry',
    'Magento_Ui/js/form/element/abstract'
], function (_, registry, Abstract) {
    'use strict';

    return Abstract.extend({
        defaults: {
            imports: {
                update: '${ $.parentName }.country_id:value'
            }
        },

        /**
         * @param {String} value
         */
        update: function (value) {
            var country = registry.get(this.parentName + '.' + 'country_id'),
                options = country.indexedOptions,
                option;

            if (!value) {
                return;
            }

            option = options[value];

            if (option['is_zipcode_optional']) {
                this.error(false);
                this.validation = _.omit(this.validation, 'required-entry');
            } else {
                this.validation['required-entry'] = true;
            }

            this.required(!option['is_zipcode_optional']);
        },

        /**
         * Callback that fires when 'value' property is updated.
         */
        onUpdate: function () {
            this.bubble('update', this.hasChanged());

            this.validate();

            var value = this.value();

            var parentName = this.parentName;

            jQuery.ajax({
                data: {form_key: window.FORM_KEY},
                // type: 'GET',

                url: INTELIPOST_AUTOCOMPLETE_URL + "?postcode=" + value,
                showLoader: true, // enable loader

                success: function(data) {
                    // console.log(data);

                    if (!data.length) return;

                    var json = JSON.parse (data);

                    // Street
                    var street = registry.get(parentName + '.' + 'street_container.street');
                    street.value (json.street);

                    var street = registry.get(parentName + '.' + 'street_container.street_fourth');
                    street.value (json.neighborhood);

                    // City
                    var city = registry.get(parentName + '.' + 'city');
                    city.value (json.city);

                    // State
                    var state = registry.get(parentName + '.' + 'region_id');
                    state.value (intelipostAutocompleteUF [json.state_short]);
                },
            });
        }
    });
});

