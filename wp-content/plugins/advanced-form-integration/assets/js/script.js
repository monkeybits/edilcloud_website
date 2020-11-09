Vue.component('cl-main', {
    props: ["trigger", "action", "fielddata"],
    template: '#cl-main-template',
    data: function() {
        return{}
    },
    methods: {
        clAddCondition: function(event) {
            var conditionL = adfoinNewIntegration.action.cl.conditions.length;
            adfoinNewIntegration.action.cl.conditions.push({id: conditionL+1, field: "", operator: "equal_to", value: ""});
        }
    }
});

Vue.component('conditional-logic', {
    props: ["trigger", "action", "fielddata", "condition"],
    template: '#conditional-logic-template',
    data: function() {
        return{}
    },
    methods: {
        clRemoveCondition: function(condition) {
            const conditionIndex = adfoinNewIntegration.action.cl.conditions.indexOf(condition);
            adfoinNewIntegration.action.cl.conditions.splice(conditionIndex, 1);
        }
    }
});

Vue.component('editable-field', {
    props: ["trigger", "action", "fielddata", "field"],
    template: '#editable-field-template',
    data: function() {
        return{
            selected: ''
        }
    },
    methods: {
        updateFieldValue: function(e) {
            if(this.selected || this.selected == 0) {

                if (this.fielddata[this.field.value] || "0" == this.fielddata[this.field.value]) {
                    this.fielddata[this.field.value] += ' {{' + this.selected + '}}';
                } else {
                    this.fielddata[this.field.value] = '{{' + this.selected + '}}';
                }
            }
        },
        inArray: function(needle, haystack) {
            var length = haystack.length;
            for(var i = 0; i < length; i++) {
                if(haystack[i] == needle) return true;
            }
            return false;
        }
    }
});

Vue.component('mailchimp', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe', 'unsubscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        if (typeof this.fielddata.phoneNumber == 'undefined') {
            this.fielddata.phoneNumber = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_mailchimp_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#mailchimp-action-template'
});

Vue.component('sendfox', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_sendfox_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#sendfox-action-template'
});

Vue.component('woodpecker', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe', 'unsubscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }
    },
    template: '#woodpecker-action-template'
});

Vue.component('aweber', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            accountLoading: false,
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe', 'unsubscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
        getLists: function() {
            var that = this;
            this.listLoading = true;

            var listData = {
                'action': 'adfoin_get_aweber_lists',
                '_nonce': adfoin.nonce,
                'accountId': this.fielddata.accountId,
                'task': this.action.task
            };

            jQuery.post( ajaxurl, listData, function( response ) {
                var lists = response.data;
                that.fielddata.lists = lists;
                that.listLoading = false;
            });
        }
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.accounts == 'undefined') {
            this.fielddata.accounts = '';
        }

        if (typeof this.fielddata.accountId == 'undefined') {
            this.fielddata.accountId = '';
        }

        if (typeof this.fielddata.lists == 'undefined') {
            this.fielddata.lists = '';
        }

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        this.accountLoading = true;

        var accountRequestData = {
            'action': 'adfoin_get_aweber_accounts',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, accountRequestData, function( response ) {
            that.fielddata.accounts = response.data;
            that.accountLoading = false;
        });
    },
    template: '#aweber-action-template'
});

Vue.component('activecampaign', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            automationLoading: false,
            pipelineLoading: false,
            accountLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email [Contact]', task: ['subscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name [Contact]', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name [Contact]', task: ['subscribe'], required: false},
                {type: 'text', value: 'phoneNumber', title: 'Phone [Contact]', task: ['subscribe'], required: false},
                {type: 'text', value: 'note', title: 'Note', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.automationId == 'undefined') {
            this.fielddata.automationId = '';
        }

        if (typeof this.fielddata.accountId == 'undefined') {
            this.fielddata.accountId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        if (typeof this.fielddata.phoneNumber == 'undefined') {
            this.fielddata.phoneNumber = '';
        }

        if (typeof this.fielddata.update == 'undefined') {
            this.fielddata.update = false;
        }

        if (typeof this.fielddata.update != 'undefined') {
            if(this.fielddata.update == "false") {
                this.fielddata.update = false;
            }
        }

        this.listLoading = true;
        this.automationLoading = true;
        this.pipelineLoading = true;
        this.accountLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_activecampaign_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });

        var automationRequestData = {
            'action': 'adfoin_get_activecampaign_automations',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, automationRequestData, function( response ) {
            that.fielddata.automations = response.data;
            that.automationLoading = false;
        });

        var accountRequestData = {
            'action': 'adfoin_get_activecampaign_accounts',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, accountRequestData, function( response ) {
            that.fielddata.accounts = response.data;
            that.accountLoading = false;
        });

        var dealRequestData = {
            'action': 'adfoin_get_activecampaign_deal_fields',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, dealRequestData, function( response ) {

            if( response.success ) {
                if( response.data ) {
                    response.data.map(function(single) {
                        that.fields.push( { type: 'text', value: single.key, title: single.value, task: ['subscribe'], required: false, description: single.description } );
                    });
                }
            }
        });
    },
    template: '#activecampaign-action-template'
});

Vue.component('agilecrm', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email [Contact]', task: ['add_contact'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name [Contact]', task: ['add_contact'], required: true},
                {type: 'text', value: 'lastName', title: 'Last Name [Contact]', task: ['add_contact'], required: false},
                {type: 'text', value: 'title', title: 'Title [Contact]', task: ['add_contact'], required: false},
                {type: 'text', value: 'company', title: 'Company [Contact]', task: ['add_contact'], required: false},
                {type: 'text', value: 'phone', title: 'Phone [Contact]', task: ['add_contact'], required: false},
                {type: 'text', value: 'address', title: 'Address [Contact]', task: ['add_contact'], required: false},
                {type: 'text', value: 'city', title: 'City [Contact]', task: ['add_contact'], required: false},
                {type: 'text', value: 'state', title: 'State [Contact]', task: ['add_contact'], required: false},
                {type: 'text', value: 'zip', title: 'Zip [Contact]', task: ['add_contact'], required: false},
                {type: 'text', value: 'country', title: 'Country [Contact]', task: ['add_contact'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        var pipelineRequestData = {
            'action': 'adfoin_get_agilecrm_pipelines',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, pipelineRequestData, function( response ) {

            if( response.success ) {
                if( response.data ) {
                    response.data.map(function(single) {
                        that.fields.push( { type: 'text', value: single.key, title: single.value, task: ['add_contact'], required: false, description: single.description } );
                    });
                }
            }
        });
    },
    template: '#agilecrm-action-template'
});

Vue.component('pushover', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'title', title: 'Title', task: ['push'], required: false},
                {type: 'text', value: 'message', title: 'Message', task: ['push'], required: false},
                {type: 'text', value: 'device', title: 'Device', task: ['push'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.title == 'undefined') {
            this.fielddata.title = '';
        }

        if (typeof this.fielddata.message == 'undefined') {
            this.fielddata.message = '';
        }

        if (typeof this.fielddata.device == 'undefined') {
            this.fielddata.device = '';
        }
    },
    template: '#pushover-action-template'
});

Vue.component('twilio', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'to', title: 'To', task: ['subscribe'], required: true},
                {type: 'textarea', value: 'body', title: 'Body', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.from == 'undefined') {
            this.fielddata.from = '';
        }

        if (typeof this.fielddata.to == 'undefined') {
            this.fielddata.to = '';
        }

        if (typeof this.fielddata.body == 'undefined') {
            this.fielddata.body = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_twilio_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#twilio-action-template'
});

Vue.component('elasticemail', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_elasticemail_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#elasticemail-action-template'
});

Vue.component('mailerlite', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'name', title: 'Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.name == 'undefined') {
            this.fielddata.name = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_mailerlite_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#mailerlite-action-template'
});

Vue.component('emailoctopus', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        if (typeof this.fielddata.doubleoptin != 'undefined') {
            if(this.fielddata.doubleoptin == "false") {
                this.fielddata.doubleoptin = false;
            }
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_emailoctopus_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#emailoctopus-action-template'
});

Vue.component('jumplead', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['add_contact'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['add_contact'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['add_contact'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }
    },
    template: '#jumplead-action-template'
});

Vue.component('klaviyo', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'title', title: 'Title', task: ['subscribe'], required: false},
                {type: 'text', value: 'organization', title: 'Organization', task: ['subscribe'], required: false},
                {type: 'text', value: 'phoneNumber', title: 'Phone Number', task: ['subscribe'], required: false},
                {type: 'text', value: 'address1', title: 'Address 1', task: ['subscribe'], required: false},
                {type: 'text', value: 'address2', title: 'Address 2', task: ['subscribe'], required: false},
                {type: 'text', value: 'region', title: 'Region', task: ['subscribe'], required: false},
                {type: 'text', value: 'zip', title: 'ZIP', task: ['subscribe'], required: false},
                {type: 'text', value: 'country', title: 'Country', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        if (typeof this.fielddata.phoneNumber == 'undefined') {
            this.fielddata.phoneNumber = '';
        }

        if (typeof this.fielddata.address1 == 'undefined') {
            this.fielddata.address1 = '';
        }

        if (typeof this.fielddata.address2 == 'undefined') {
            this.fielddata.address2 = '';
        }

        if (typeof this.fielddata.region == 'undefined') {
            this.fielddata.region = '';
        }

        if (typeof this.fielddata.zip == 'undefined') {
            this.fielddata.zip = '';
        }

        if (typeof this.fielddata.country == 'undefined') {
            this.fielddata.country = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_klaviyo_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#klaviyo-action-template'
});

Vue.component('kartra', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'middleName', title: 'Middle Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName2', title: 'Last Name 2', task: ['subscribe'], required: false},
                {type: 'text', value: 'phoneCountryCode', title: 'Phone Country Code', task: ['subscribe'], required: false},
                {type: 'text', value: 'phone', title: 'Phone', task: ['subscribe'], required: false},
                {type: 'text', value: 'ip', title: 'IP', task: ['subscribe'], required: false},
                {type: 'text', value: 'address', title: 'Address 1', task: ['subscribe'], required: false},
                {type: 'text', value: 'zip', title: 'ZIP', task: ['subscribe'], required: false},
                {type: 'text', value: 'city', title: 'City', task: ['subscribe'], required: false},
                {type: 'text', value: 'state', title: 'State', task: ['subscribe'], required: false},
                {type: 'text', value: 'country', title: 'Country', task: ['subscribe'], required: false},
                {type: 'text', value: 'company', title: 'Company', task: ['subscribe'], required: false},
                {type: 'text', value: 'website', title: 'Website', task: ['subscribe'], required: false},
                {type: 'text', value: 'facebook', title: 'Facebook', task: ['subscribe'], required: false},
                {type: 'text', value: 'twitter', title: 'Twitter', task: ['subscribe'], required: false},
                {type: 'text', value: 'linkedin', title: 'LinkedIn', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_kartra_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#kartra-action-template'
});

Vue.component('moosend', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'name', title: 'Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.name == 'undefined') {
            this.fielddata.name = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_moosend_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#moosend-action-template'
});

Vue.component('sendy', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'name', title: 'Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.name == 'undefined') {
            this.fielddata.name = '';
        }
    },
    template: '#sendy-action-template'
});

Vue.component('convertkit', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_convertkit_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#convertkit-action-template'
});

Vue.component('getresponse', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'name', title: 'Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.name == 'undefined') {
            this.fielddata.name = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_getresponse_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#getresponse-action-template'
});

Vue.component('mailjet', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'name', title: 'Name', task: ['subscribe'], required: false}
            ]

        }
    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_mailjet_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#mailjet-action-template'
});

Vue.component('mailify', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'phone', title: 'Phone', task: ['subscribe'], required: false},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false}
            ]

        }
    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        if (typeof this.fielddata.phone == 'undefined') {
            this.fielddata.phone = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_mailify_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#mailify-action-template'
});

Vue.component('lemlist', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false}
            ]

        }
    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_lemlist_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#lemlist-action-template'
});

Vue.component('directiq', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false}
            ]

        }
    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_directiq_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#directiq-action-template'
});

Vue.component('revue', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }
    },
    template: '#revue-action-template'
});

Vue.component('liondesk', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['add_contact'], required: true},
                {type: 'text', value: 'secondaryEmail', title: 'Secondary Email', task: ['add_contact'], required: false},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['add_contact'], required: false},
                {type: 'text', value: 'lasName', title: 'Last Name', task: ['add_contact'], required: false},
                {type: 'text', value: 'mobilePhone', title: 'Mobile Phone', task: ['add_contact'], required: false},
                {type: 'text', value: 'homePhone', title: 'Home Phone', task: ['add_contact'], required: false},
                {type: 'text', value: 'officePhone', title: 'Office Phone', task: ['add_contact'], required: false},
                {type: 'text', value: 'fax', title: 'Fax', task: ['add_contact'], required: false},
                {type: 'text', value: 'company', title: 'Company', task: ['add_contact'], required: false},
                {type: 'text', value: 'birthday', title: 'Birthday', task: ['add_contact'], required: false},
                {type: 'text', value: 'spouseName', title: 'Spouse Name', task: ['add_contact'], required: false},
                {type: 'text', value: 'spouseEmail', title: 'Spouse Email', task: ['add_contact'], required: false},
                {type: 'text', value: 'spousePhone', title: 'Spouse Phone', task: ['add_contact'], required: false},
                {type: 'text', value: 'spouseBirthday', title: 'Spouse Birthday', task: ['add_contact'], required: false},
            ]

        }
    },
    methods: {
    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }
    },
    template: '#liondesk-action-template'
});

Vue.component('curated', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true}
            ]

        }
    },
    methods: {
    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }
    },
    template: '#curated-action-template'
});

Vue.component('sendinblue', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'sms', title: 'SMS', task: ['subscribe'], required: false, description: 'Mobile Number should be passed with proper country code. For example: "+91xxxxxxxxxx" or "0091xxxxxxxxxx"'}
            ]

        }
    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_sendinblue_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#sendinblue-action-template'
});

Vue.component('zapier', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {}
    },
    mounted: function() {

        if (typeof this.fielddata.webhookUrl == 'undefined') {
            this.fielddata.webhookUrl = '';
        }
    },
    template: '#zapier-action-template'
});

Vue.component('webhook', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {}
    },
    mounted: function() {

        if (typeof this.fielddata.webhookUrl == 'undefined') {
            this.fielddata.webhookUrl = '';
        }
    },
    template: '#webhook-action-template'
});

Vue.component('drip', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            accountLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['create_subscriber'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['create_subscriber'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['create_subscriber'], required: false},
                {type: 'text', value: 'phone', title: 'Phone', task: ['create_subscriber'], required: false},
                {type: 'text', value: 'address1', title: 'Address 1', task: ['create_subscriber'], required: false},
                {type: 'text', value: 'address2', title: 'Address 2', task: ['create_subscriber'], required: false},
                {type: 'text', value: 'city', title: 'City', task: ['create_subscriber'], required: false},
                {type: 'text', value: 'state', title: 'State', task: ['create_subscriber'], required: false},
                {type: 'text', value: 'zip', title: 'ZIP', task: ['create_subscriber'], required: false},
                {type: 'text', value: 'country', title: 'Country', task: ['create_subscriber'], required: false},
            ]

        }
    },
    methods: {
        getList: function() {
            var that = this;
            this.accountLoading = true;

            var listData = {
                'action': 'adfoin_get_drip_list',
                '_nonce': adfoin.nonce,
                'accountId': this.fielddata.accountId
            };

            jQuery.post( ajaxurl, listData, function( response ) {
                var list = response.data;
                that.fielddata.list = list;
                //that.accountLoading = false;

                var workflowData = {
                    'action': 'adfoin_get_drip_workflows',
                    '_nonce': adfoin.nonce,
                    'accountId': that.fielddata.accountId
                };

                jQuery.post( ajaxurl, workflowData, function( response ) {
                    var workflows = response.data;
                    that.fielddata.workflows = workflows;
                    that.accountLoading = false;
                });
            });


        }
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.accountId == 'undefined') {
            this.fielddata.accountId = '';
        }

        if (typeof this.fielddata.campaignId == 'undefined') {
            this.fielddata.campaignId = '';
        }

        if (typeof this.fielddata.workflowId == 'undefined') {
            this.fielddata.workflowId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        this.listLoading = true;

        var accountRequestData = {
            'action': 'adfoin_get_drip_accounts',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, accountRequestData, function( response ) {
            that.fielddata.accounts = response.data;
            that.listLoading = false;
        });
    },
    template: '#drip-action-template'
});

Vue.component('everwebinar', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            webinarLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['register_webinar'], required: true, description: 'Required'},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['register_webinar'], required: true, description: 'Required'},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['register_webinar'], required: false},
                {type: 'text', value: 'ipAddress', title: 'IP Address', task: ['register_webinar'], required: false},
                {type: 'text', value: 'phoneCountryCode', title: 'Phone Country Code', task: ['register_webinar'], required: false},
                {type: 'text', value: 'phone', title: 'Phone Number', task: ['register_webinar'], required: false},
                {type: 'text', value: 'timezone', title: 'Timezone', task: ['register_webinar'], required: false},
                {type: 'text', value: 'date', title: 'Date', task: ['register_webinar'], required: false}
            ]

        }
    },
    methods: {
        getSchedule: function() {
            var that = this;
            this.webinarLoading = true;

            var scheduleData = {
                'action': 'adfoin_get_everwebinar_schedules',
                '_nonce': adfoin.nonce,
                'webinarId': this.fielddata.webinarId,
                'task': this.action.task
            };

            jQuery.post( ajaxurl, scheduleData, function( response ) {
                var schedules = response.data;
                that.fielddata.schedules = schedules;
                that.webinarLoading = false;
            });
        }
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.webinarId == 'undefined') {
            this.fielddata.webinarId = '';
        }

        if (typeof this.fielddata.scheduleId == 'undefined') {
            this.fielddata.scheduleId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        this.webinarLoading = true;

        var webinarRequestData = {
            'action': 'adfoin_get_everwebinar_webinars',
            '_nonce': adfoin.nonce
        };
        jQuery.post( ajaxurl, webinarRequestData, function( response ) {
            that.fielddata.webinars = response.data;
            that.webinarLoading = false;
        });
    },
    template: '#everwebinar-action-template'
});

Vue.component('webinarjam', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            webinarLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['register_webinar'], required: true, description: 'Required'},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['register_webinar'], required: true, description: 'Required'},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['register_webinar'], required: false},
                {type: 'text', value: 'ipAddress', title: 'IP Address', task: ['register_webinar'], required: false},
                {type: 'text', value: 'phoneCountryCode', title: 'Phone Country Code', task: ['register_webinar'], required: false},
                {type: 'text', value: 'phone', title: 'Phone Number', task: ['register_webinar'], required: false},
                {type: 'text', value: 'timezone', title: 'Timezone', task: ['register_webinar'], required: false},
                {type: 'text', value: 'date', title: 'Date', task: ['register_webinar'], required: false}
            ]

        }
    },
    methods: {
        getSchedule: function() {
            var that = this;
            this.webinarLoading = true;

            var scheduleData = {
                'action': 'adfoin_get_webinarjam_schedules',
                '_nonce': adfoin.nonce,
                'webinarId': this.fielddata.webinarId,
                'task': this.action.task
            };

            jQuery.post( ajaxurl, scheduleData, function( response ) {
                var schedules = response.data;
                that.fielddata.schedules = schedules;
                that.webinarLoading = false;
            });
        }
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.webinarId == 'undefined') {
            this.fielddata.webinarId = '';
        }

        if (typeof this.fielddata.scheduleId == 'undefined') {
            this.fielddata.scheduleId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        this.webinarLoading = true;

        var webinarRequestData = {
            'action': 'adfoin_get_webinarjam_webinars',
            '_nonce': adfoin.nonce
        };
        jQuery.post( ajaxurl, webinarRequestData, function( response ) {
            that.fielddata.webinars = response.data;
            that.webinarLoading = false;
        });
    },
    template: '#webinarjam-action-template'
});

Vue.component('pipedrive', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['add_contact'], required: true},
                {type: 'text', value: 'name', title: 'Name', task: ['add_contact'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;


        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.name == 'undefined') {
            this.fielddata.name = '';
        }
    },
    template: '#pipedrive-action-template'
});

Vue.component('omnisend', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['add_contact'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['add_contact'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['add_contact'], required: false},
                {type: 'text', value: 'phone', title: 'Phone', task: ['add_contact'], required: false},
                {type: 'text', value: 'address', title: 'Address', task: ['add_contact'], required: false},
                {type: 'text', value: 'city', title: 'City', task: ['add_contact'], required: false},
                {type: 'text', value: 'state', title: 'State', task: ['add_contact'], required: false},
                {type: 'text', value: 'zip', title: 'ZIP', task: ['add_contact'], required: false},
                {type: 'text', value: 'country', title: 'Country', task: ['add_contact'], required: false},
                {type: 'text', value: 'birthday', title: 'Birthday', task: ['add_contact'], required: false, description: 'required format YYYY-MM-DD'},
                {type: 'text', value: 'gender', title: 'Gender', task: ['add_contact'], required: false, description: 'e.g. Male, Female'}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;


        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }
    },
    template: '#omnisend-action-template'
});

Vue.component('close', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'orgName', title: 'Organization Name', task: ['add_lead'], required: true},
                {type: 'text', value: 'url', title: 'URL', task: ['add_lead'], required: false},
                {type: 'text', value: 'description', title: 'Description', task: ['add_lead'], required: false},
                {type: 'text', value: 'contactName', title: 'Contact Name', task: ['add_lead'], required: false},
                {type: 'text', value: 'title', title: 'Title', task: ['add_lead'], required: false},
                {type: 'text', value: 'email', title: 'Email', task: ['add_lead'], required: false},
                {type: 'text', value: 'phone', title: 'Phone', task: ['add_lead'], required: false},
                {type: 'text', value: 'address1', title: 'Address 1', task: ['add_lead'], required: false},
                {type: 'text', value: 'address2', title: 'Address 2', task: ['add_lead'], required: false},
                {type: 'text', value: 'city', title: 'City', task: ['add_lead'], required: false},
                {type: 'text', value: 'zip', title: 'Zip', task: ['add_lead'], required: false},
                {type: 'text', value: 'state', title: 'State', task: ['add_lead'], required: false},
                {type: 'text', value: 'country', title: 'Country', task: ['add_lead'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;


        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.name == 'undefined') {
            this.fielddata.name = '';
        }
    },
    template: '#close-action-template'
});

Vue.component('insightly', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['add_contact'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['add_contact'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['add_contact'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;


        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }
    },
    template: '#insightly-action-template'
});

Vue.component('copper', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['add_contact'], required: true},
                {type: 'text', value: 'name', title: 'Name', task: ['add_contact'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;


        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.name == 'undefined') {
            this.fielddata.name = '';
        }
    },
    template: '#copper-action-template'
});

Vue.component('freshsales', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['add_contact', 'add_lead'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['add_contact', 'add_lead'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['add_contact', 'add_lead'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;


        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }
    },
    template: '#freshsales-action-template'
});

Vue.component('campaignmonitor', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            accountLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['create_subscriber'], required: true},
                {type: 'text', value: 'name', title: 'Name', task: ['create_subscriber'], required: false}
            ]
        }
    },
    methods: {
        getList: function() {
            var that = this;
            this.accountLoading = true;

            var listData = {
                'action': 'adfoin_get_campaignmonitor_list',
                '_nonce': adfoin.nonce,
                'accountId': this.fielddata.accountId,
                'task': this.action.task
            };

            jQuery.post( ajaxurl, listData, function( response ) {
                var list = response.data;
                that.fielddata.list = list;
                that.accountLoading = false;
            });
        }
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.accountId == 'undefined') {
            this.fielddata.accountId = '';
        }

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.name == 'undefined') {
            this.fielddata.name = '';
        }

        this.accountLoading = true;

        var accountRequestData = {
            'action': 'adfoin_get_campaignmonitor_accounts',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, accountRequestData, function( response ) {
            that.fielddata.accounts = response.data;
            that.accountLoading = false;
        });
    },
    template: '#campaignmonitor-action-template'
});

Vue.component('moonmail', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['subscribe'], required: true},
                {type: 'text', value: 'firstName', title: 'First Name', task: ['subscribe'], required: false},
                {type: 'text', value: 'lastName', title: 'Last Name', task: ['subscribe'], required: false}
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;

        if (typeof this.fielddata.listId == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.status == 'undefined') {
            this.fielddata.listId = '';
        }

        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.firstName == 'undefined') {
            this.fielddata.firstName = '';
        }

        if (typeof this.fielddata.lastName == 'undefined') {
            this.fielddata.lastName = '';
        }

        this.listLoading = true;

        var listRequestData = {
            'action': 'adfoin_get_moonmail_list',
            '_nonce': adfoin.nonce
        };

        jQuery.post( ajaxurl, listRequestData, function( response ) {
            that.fielddata.list = response.data;
            that.listLoading = false;
        });
    },
    template: '#moonmail-action-template'
});

Vue.component('clinchpad', {
    props: ["trigger", "action", "fielddata"],
    data: function () {
        return {
            listLoading: false,
            fields: [
                {type: 'text', value: 'email', title: 'Email', task: ['add_contact'], required: true},
                {type: 'text', value: 'name', title: 'Name', task: ['add_contact'], required: false},
                {type: 'text', value: 'designation', title: 'Designation', task: ['add_contact'], required: false},
                {type: 'text', value: 'phone', title: 'Phone', task: ['add_contact'], required: false},
                {type: 'text', value: 'address', title: 'Address', task: ['add_contact'], required: false},
            ]

        }
    },
    methods: {
    },
    created: function() {

    },
    mounted: function() {
        var that = this;


        if (typeof this.fielddata.email == 'undefined') {
            this.fielddata.email = '';
        }

        if (typeof this.fielddata.name == 'undefined') {
            this.fielddata.name = '';
        }

        if (typeof this.fielddata.designation == 'undefined') {
            this.fielddata.designation = '';
        }

        if (typeof this.fielddata.phone == 'undefined') {
            this.fielddata.phone = '';
        }

        if (typeof this.fielddata.address == 'undefined') {
            this.fielddata.address = '';
        }
    },
    template: '#clinchpad-action-template'
});

var adfoinNewIntegration = new Vue({
    el: '#adfoin-new-integration',
    data: {
        trigger: {
            integrationTitle: '',
            formProviderId: '',
            forms: '',
            formId: '',
            formName: '',
            formFields: []
        },
        formValidated: 0,
        actionValidated: 0,
        action: {
            actionProviderId: '',
            task: '',
            cl: {
                active: "no",
                match: "any",
                conditions: []
            },
            tasks: []
        },
        formLoading: false,
        fieldLoading: false,
        actionLoading: false,
        functionLoading: false,
        fieldData: {}

    },
    methods: {
        saveIntegration: function(event) {
            var submissionData = {
                'action': 'adfoin_save_integration',
                'nonce': adfoin.nonce,
                'formData': jQuery('#new-integration').serialize(),
                'triggerData': this.trigger,
                'actionData': this.action,
                'fieldData': this.fieldData
            }

            jQuery.post( ajaxurl, submissionData, function( response ) {
                window.location.href = adfoin.list_url;
            });

        },
        changeFormProvider: function(event) {
            this.formValidated  = 1;
            adfoinNewIntegration.formLoading = true;
            this.trigger.formId = '';
            if(this.trigger.formProviderId == '') {
                adfoinNewIntegration.trigger.forms = '';
                adfoinNewIntegration.formValidated = 0;
                adfoinNewIntegration.formLoading = false;
            }

            var formProviderData = {
                'action': 'adfoin_get_forms',
                'nonce': adfoin.nonce,
                'formProviderId': this.trigger.formProviderId
            };

            jQuery.post( ajaxurl, formProviderData, function( response ) {
                adfoinNewIntegration.trigger.forms         = response.data;
                adfoinNewIntegration.formValidated = 0;
                adfoinNewIntegration.formLoading = false;
            });
        },
        changedForm: function(event) {
            adfoinNewIntegration.fieldLoading = true;

            var formData = {
                'action': 'adfoin_get_form_fields',
                'formProviderId': this.trigger.formProviderId,
                'nonce': adfoin.nonce,
                'formId': this.trigger.formId
            };

            jQuery.post( ajaxurl, formData, function( response ) {
                var values             = response.data;
                adfoinNewIntegration.trigger.formFields = values;
                adfoinNewIntegration.fieldLoading = false;
            });
        },
        changeActionProvider: function(event) {
            this.actionValidated  = 1;
            adfoinNewIntegration.actionLoading = true;
            this.action.task = '';
            if(this.actionProviderId == '') {
                adfoinNewIntegration.action.tasks = '';
                adfoinNewIntegration.actionValidated = 0;
                adfoinNewIntegration.actionLoading = false;
            }

            var actionProviderData = {
                'action': 'adfoin_get_tasks',
                'nonce': adfoin.nonce,
                'actionProviderId': this.action.actionProviderId
            };

            jQuery.post( ajaxurl, actionProviderData, function( response ) {
                adfoinNewIntegration.action.tasks         = response.data;
                adfoinNewIntegration.actionValidated = 0;
                adfoinNewIntegration.actionLoading = false;
            });
        }
    },
    mounted: function() {
        if (typeof integrationTitle != 'undefined') {
            this.trigger.integrationTitle = integrationTitle;
        }

        if (typeof triggerData != 'undefined') {
            this.trigger = triggerData;
        }


        if (typeof actionData != 'undefined') {
            this.action = actionData;
        }


        if (typeof fieldData != 'undefined') {
            this.fieldData = fieldData;
        }
    },
    watch: {
        'trigger.formId': function(val) {
            adfoinNewIntegration.trigger.formName = this.trigger.forms[val];
        }
    }

});

jQuery(document).ready(function() {
    jQuery(".adfoin-integration-delete").on("click", function(e) {
        if(confirm(adfoin.delete_confirm)) {
            return;
        } else {
            e.preventDefault();
        }
    });
});