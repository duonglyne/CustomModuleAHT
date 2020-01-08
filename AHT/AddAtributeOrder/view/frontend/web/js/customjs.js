define([
    'jquery',
    'ko',
    'uiComponent'], function ($, ko, Component) {
    'use strict';
    return Component.extend({
        defaults: {
            template: 'AHT_AddAtributeOrder/custom_orderby'
        },
        initialize: function () {
            this._super();
    
            return this;
        },
    });});