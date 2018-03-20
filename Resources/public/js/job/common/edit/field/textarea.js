'use strict';

/**
 * Textarea view extension
 *
 * @author    Simon CARRE <simon.carre@clickandmortar.fr>
 */
define([
    'underscore',
    'pim/job/common/edit/field/field',
    'pim/template/export/common/edit/field/textarea'
], function (
    _,
    BaseField,
    fieldTemplate
) {
    return BaseField.extend({
        fieldTemplate: _.template(fieldTemplate),
        events: {
            'change textarea': 'updateState'
        },

        /**
         * Get the field dom value
         *
         * @return {string}
         */
        getFieldValue: function () {
            return this.$('textarea').val();
        }
    });
});
