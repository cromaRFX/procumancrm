"use strict";

var controllerReportList = (function($, api, router) {

	var listReports = function() {
		
		var listContainer = $("#listContainer");
		$.blockUI({ message: api.getBlockingMessage("load") });
		api.listReports().done(function(data) {
			listContainer.find('#reportRows').html(data);
			$.unblockUI();
		});
		
	};
	
	/*
	var editForm = function(record, duplicate) {
		
		$.blockUI({ message: api.getBlockingMessage("load") });
		api.editForm(record).done(function(json) {
           	populateEditView(json, duplicate);
            router.moveTo('edit', record);
            $.unblockUI();
		});
		
	}
	*/
	
	var detailReport = function(record) {
		
		var detailContainer = $("#detailContainer");
		$.blockUI({ message: api.getBlockingMessage("load") });
		api.detailReport(record, null, {}).done(function(data) {
        	$("#record").val(record);
        	detailContainer.html(data);
        	
			detailContainer.find(".asolChartScript[proccess='1']").each(function() {
				eval(decodeURIComponent($(this).val()));
			});
			detailContainer.find(".asolChartScript").attr("proccess", "0");
        	
        	router.moveTo('detail', record);
        	$.unblockUI();
		});
		
	}
	
	var deleteReport = function(record, name) {
		
		var listContainer = $("#listContainer");
		
		var confirmMessage = (record == null ? SUGAR.language.get('asol_Reports', 'LBL_REPORT_MULTIDELETE_ALERT') : SUGAR.language.get('asol_Reports', 'MSG_REPORT_DELETE_ALERT')+' '+decodeURIComponent(name).replace("&#039;","'"));
		
		var undeletableReportFlag = false;
		var undeletableReportElements = [];
		
		if (record == null) {

			listContainer.find(".listViewCheck:checked").each(function() {
				var currentReportDeletableFlag = $(this).parent().children('.deletableReport');
				if (currentReportDeletableFlag.val() == 'false') {
					undeletableReportFlag = true;
					undeletableReportElements.push($(this));
				}  
			});
			
			if (undeletableReportFlag) {
				confirmMessage+= '\n' + SUGAR.language.get('asol_Reports', 'LBL_REPORT_UNDELETABLE_ALERT');
			}

		}
		
		if (confirm(confirmMessage)) {

			$.blockUI({ message: api.getBlockingMessage("load") });
			undeletableReportElements.forEach(function(currentReport) {
				View.prop('checked', false);
			});
			var actionValue = (record == null ? listContainer.find(".listViewCheck:checked").map(function() { return this.value; }).get() : record);
			api.deleteReport(actionValue).done(function(data) {
				api.listReports().done(function(data) {
					listContainer.find('#reportRows').html(data);
					$.unblockUI();
				});
			});
			
		}
		
	};
	
	var exportReport = function(record) {

		var listContainer = $("#listContainer");
		
		var actionValue = (record == null ? listContainer.find(".listViewCheck:checked").map(function() { return this.value; }).get() : [record]);
		
		$.blockUI({ message: api.getBlockingMessage("load") });
		api.exportReport(actionValue).done(function(data) {
			$.unblockUI();
        	window.location = api.url+'&actionTarget=export_report&actionValue='+window.JSON.stringify(actionValue)+'&getContent=true';
		});
		
	};
	
	var importReport = function() {
		
		var listContainer = $("#listContainer");
		
		$.blockUI({ message: api.getBlockingMessage("load") });
		listContainer.find("#massive_form").attr("action", api.url+"&actionTarget=import_report");
		listContainer.find("#massive_form").ajaxForm({
			success: function(data) {
				api.listReports().done(function(data) {
					listContainer.find('#reportRows').html(data);
					$.unblockUI();
				});
			}
		});
		
	};
	
	var searchOnKeyPressed = function(event) {
	
		if ((event.which && event.which == 13) || (event.keyCode && event.keyCode == 13)) {
			$('#page_number').val("0"); 
			listReports();
		}
	
	};
	
	var massiveAction = function(isMassive, currentRef) {

		if (isMassive) {
			
			var checkAll = $(currentRef).is(':checked');
	
			$('#reportRows .massiveCheck').prop('checked', checkAll);
			$('#reportRows .massiveAction').prop('disabled', !checkAll);
			
		} else {
			
			var numElements = $('#reportRows .massiveCheck').length;
			var numElementsChecked = $('#reportRows .massiveCheck:checked').length;

			$('#reportRows .massiveAction').prop('disabled', (numElementsChecked === 0));
			$('#reportRows .massiveCheckAll').prop('checked', (numElementsChecked === numElements));
			
		}
			
	}
	
	return {
		listReports : listReports,
		//editForm : editForm,
		detailReport : detailReport,
		deleteReport : deleteReport,
		exportReport : exportReport,
		importReport : importReport,
		
		searchOnKeyPressed : searchOnKeyPressed,
		massiveAction : massiveAction,
	};

})($, reportsApi, reportsRouter);
