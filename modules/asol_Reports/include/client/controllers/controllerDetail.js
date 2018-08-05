"use strict";

var controllerReportDetail = (function($, api, router) {

	var editReport = function() {
		
		var record = $("#record").val();
		$.blockUI({ message: api.getBlockingMessage("load") });
		api.editReport(record).done(function(json) {
           	populateEditView(json, false);
            router.moveTo('edit', record);
            $.unblockUI();
		});
		
	}
	
	var cancelReport = function(dashletId) {
		
		$.blockUI({ message: api.getBlockingMessage("load") });
		$("#record").val("");
		
		var detailContainer = $("#detailContainer"+dashletId);
		detailContainer.html("");
        
		router.moveTo('list');
		$.unblockUI();
		
	}
	
	var reloadReport = function(record, refresh, context) {
		
		var isMetaReportReload = ((typeof window.hasPremiumReportsJsFeatures == "function") && window["isMetaReport"+context.metaDashletId] && !refresh);
		
		var containerSelector = (isMetaReportReload ? (context.dashlet ? "[id='detailContainer"+context.metaDashletId+"']" : "[id='detailContainer']") : (context.dashlet ? "[id='detailContainer"+context.dashletId+"']" : "[id='detailContainer']"))
		var mainReportSelector = (isMetaReportReload ? (context.dashlet ? "[id='detailMetaContainer']."+context.dashletId : "[id='detailMetaContainer']") : (context.dashlet ? "[id='detailContainer"+context.dashletId+"']" : "[id='detailContainer']"));
		var pushedReportsSelector = (isMetaReportReload ? "[id='detailMetaContainer'][pushed='"+context.dashletId+"']" : null);
		
		var hasLoadingMessage = ($("div"+mainReportSelector).prev(".loadingContainer:visible").length > 0);
		hasLoadingMessage = (!hasLoadingMessage ? $("div"+mainReportSelector).find(".loadingContainer:visible").length > 0 : hasLoadingMessage);
		
		if (!hasLoadingMessage) {
			try {
				$("div"+mainReportSelector).block({ message: reportsApi.getBlockingMessage("load") });
				if (pushedReportsSelector != null) {
					$("div"+pushedReportsSelector).block({ message: reportsApi.getBlockingMessage("load") });
				}
			} catch(error) {}
		}
		
		if ((typeof window.hasPremiumReportsJsFeatures == "function") && isMetaReportReload) {
			context.overrideInfo = getMetaReportInfo(context.dashletId);
			context.overrideFilters = getMetaReportFilters(context.dashletId);
			context.multiExecution = "true";
				
			var hasPushedReports = $("div"+pushedReportsSelector).length > 0;
			if (hasPushedReports) {
				var multiExecutionData = getMultiExecutionData(pushedReportsSelector, context.dashletId);
				context.pushedRecords = multiExecutionData["pushedRecords"];
				context.pushedInfos = multiExecutionData["pushedInfos"];
				context.pushedFilters = multiExecutionData["pushedFilters"];
			}
		}
		
		context.avoidAjaxRequest = 'true';
		context.getLibraries = (context.dashlet ? 'false' : 'true');
		if (!refresh) {
			context.search_criteria = '1';
			context.external_filters = encodeURIComponent(formatExternalFilters(context.dashletId));
			//***AlineaSol Premium***//
		    if (typeof window.hasPremiumReportsJsFeatures == 'function') {
		    	context = getSearchMode(context.dashletId, context);
		    }
			//***AlineaSol Premium***//
		}

	    var previewAttribute = $("div"+containerSelector).attr("preview");
		var previewContext = (typeof previewAttribute !== 'undefined' ? window.JSON.parse(unescape(previewAttribute)) : {});
		for (var property in previewContext) {
			context[property] = previewContext[property];
	    }
		
		var hasWrongOrder = ((context.sort_field == '') || (context.sort_direction == '') || (context.sort_index == ''));
		context.sort_field = (hasWrongOrder ? '' : context.sort_field);
		context.sort_direction = (hasWrongOrder ? '' : context.sort_direction);
		context.sort_index = (hasWrongOrder ? '' : context.sort_index);
		
		try {
			api.detailReport(record, null, context).done(function(data) {
				try {
					data = window.JSON.parse(data);
				} catch (error) {
					isMetaReportReload = false;
				}
				
				if (isMetaReportReload) {
					reloadMetaReport(hasPushedReports, data, mainReportSelector, pushedReportsSelector);
		        } else {
		        	var detailContainer = $("div"+mainReportSelector);
			    	detailContainer.replaceWith(data);
				}
				
				$("div"+containerSelector).find(".asolChartScript[proccess='1']").each(function() {
		    		eval(decodeURIComponent($(this).val()));
				});
				$("div"+containerSelector).find(".asolChartScript").attr("proccess", "0");
				
	        	if (typeof alineaSolReportsCallback == "function") {
	    			alineaSolReportsCallback();
	    		}
	        	
	        	if (!hasLoadingMessage) {
	        		$.unblockUI();
	        	}
	        	
			});
		} catch (error) {
			context.dashletId = context.dashletId.replace(/-/g, '');
			window["reloadCurrentDashletReport"+context.dashletId](refresh, context.page_number, context.sort_field, context.sort_direction, context.sort_index, context.external_filters, context.vardefFilters);
		}
			
	}
	
	var massiveAction = function(dashletId, isMassive, currentRef) {

		var detailContainer = $("#detailContainer"+dashletId);
		
		if (isMassive) {
			
			var checkAll = $(currentRef).is(':checked');
	
			detailContainer.find('.massiveCheck').prop('checked', checkAll);
			detailContainer.find('.massiveAction').prop('disabled', !checkAll);
			
		} else {
			
			var numElements = detailContainer.find('.massiveCheck').length;
			var numElementsChecked = detailContainer.find('.massiveCheck:checked').length;

			detailContainer.find('.massiveAction').prop('disabled', (numElementsChecked === 0));
			detailContainer.find('.massiveCheckAll').prop('checked', (numElementsChecked === numElements));
			
		}
			
	}
	
	return {
		editReport : editReport,
		cancelReport : cancelReport,
		reloadReport: reloadReport,
		
		massiveAction : massiveAction,
	};

})($, reportsApi, reportsRouter);
