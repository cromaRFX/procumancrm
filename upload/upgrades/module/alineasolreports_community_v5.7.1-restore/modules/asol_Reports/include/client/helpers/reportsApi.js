"use strict";

var reportsApi = (function($) {

	var url = 'index.php?entryPoint=asolReportsApi&module=asol_Reports';

	var language = {
		"blocking" : {
			"load" : "Loading",
			"save" : "Saving",
		}
	}
	
	var setLanguage = function(currentLanguage) {
		language = currentLanguage;
	}
	
	var getBlockingMessage = function(mode) {
		
		var returnedMessage = '<img src="modules/asol_Common/include/client/images/img_loading_'+(mode != null ? 'small' : 'big')+'.gif">'
		returnedMessage += (mode != null ? '&nbsp;'+language.blocking[mode] : '');
		
		return returnedMessage;
		
	}
	
	var listReports = function() {
		
		var listContainer = $("#listContainer");
		
		return $.ajax({
			url: url,
	        type: 'POST',
	        dataType: 'text',
	        data: {
	        	actionTarget: 'list_reports',
	        	actionValue: {
	        		filters: {
	        			name: listContainer.find('#name').val(),
	        			database: listContainer.find('#database').val(),
	        			module: listContainer.find('#module').val(),
	        			scope: listContainer.find('#scope').val(),
	        			type: listContainer.find('#type').val(),
	        			meta: listContainer.find('#meta_basic').val(),
			            assigned_user_id: listContainer.find('#assigned_user_id').val(),
			            assigned_user_name: listContainer.find('#assigned_user_name').val(),
	        		},
	        		position: {
	        			field: listContainer.find('#sort_field').val(),
			            direction: listContainer.find('#sort_direction').val(),
						page : listContainer.find('#page_number').val(),
	        		}
	        	}
	        }
		});
		
	}
	
	var editReport = function(record) {
		
		return $.ajax({
			url: url,
	        type: 'POST',
	        dataType: 'text',
	        data: {
	        	actionTarget: 'get_edit_form',
	        	actionValue : record,
	        }
		});
	};
	
	var deleteReport = function(record) {
		
		return $.ajax({
			url: url,
	        type: 'POST',
	        dataType: 'text',
	        data: {
	        	actionTarget : 'delete_report',
	        	actionValue : record,
	        }
		});
		
	};

	var saveReport = function() {
		
		var editContainer = $("#editContainer");
		
		var currentName = editContainer.find("#name").val();
		if (currentName == '') {
			editContainer.find("#name").val("Form Name");
		}
		
		return $.ajax({
			url: url,
	        type: 'POST',
	        dataType: 'text',
	        data: {
	        	actionTarget: 'save_form',
	        	actionValue : {
	        		record: $("#record").val(),
	        		name: editContainer.find("#name").val(),
	        		assignedUser: editContainer.find("#assigned_user_id").val(),
	        		description: {
	        			internal: editContainer.find("#internal_description").val(),
	        			public: editContainer.find("#public_description").val(),
	        		},
	        		scope: {
	        			type: editContainer.find("#formScope").val(),
	        			roles: editContainer.find("#scopeRole option:selected").map(function() { return $(this).val(); }).get()
	        		},
	        		type: editContainer.find("#type").val(),
	        		domains: {
	        			mode: editContainer.find("#asol_domain_published_mode").val(),
	        			level: editContainer.find("#asol_domain_child_share_depth").val(),
	        			publish: editContainer.find("#asol_multi_create_domain").val(),
	        			enable: (editContainer.find("#asol_published_domain").is(":checked") ? '1' : '0')
	        		},
	        		formDefinition: editContainer.find("#asolFormsStoredDefinition").val()
	        	}
	        }
		});
		
	};
		
	var exportReport = function(record) {

		return $.ajax({
			url: url,
	        type: 'POST',
	        dataType: 'text',
	        data: {
	        	actionTarget: 'export_report',
	        	actionValue : record,
	        	getContent : false,
	        }
		});
		
	}
	
	var detailReport = function(record, mapping, context) {

		var overrideFilters = [];
		if (mapping != null && Object.keys(mapping).length > 0) {
			for (var mappingReference in mapping) {
				var mappingValue = mapping[mappingReference]; 
				overrideFilters.push({
					'reference' : mappingReference,
					'value' : 'equals${dp}'+mappingValue+'${dp}'
				});
		    };
		}
	    context.vardefFilters = (overrideFilters.length > 0 ? window.JSON.stringify(overrideFilters) : context.vardefFilters);
	    
		for (var prop in context) { 
			if (context[prop] === null || context[prop] === undefined) {
				delete context[prop];
			}
		}
		
		//***AlineaSol Premium***//
	    if (typeof window.hasPremiumViewsJsFeatures == 'function') {
	    	updateElementStoredContext(context.dashletId, context);
	    }
		//***AlineaSol Premium***//
		
		return $.ajax({
			url: url,
	        type: 'POST',
	        dataType: 'text',
	        data: {
	        	actionTarget: 'display_report',
	        	actionValue : record,
	        	actionMapping : mapping,
	        	actionContext : context
	        }
		});
		
	}
	
	return {
		url : url,
		
		setLanguage : setLanguage,
		getBlockingMessage : getBlockingMessage,
		
		listReports : listReports,
		editReport : editReport,
		saveReport : saveReport,
		deleteReport : deleteReport,
		exportReport : exportReport,
		detailReport : detailReport
	};

})($);
