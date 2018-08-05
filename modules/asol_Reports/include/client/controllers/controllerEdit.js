"use strict";

var controllerReportEdit = (function($, api, router) {

	var previewReport = function(record, context) {
		
		var previewContainer = $("#previewContainer");
		api.detailReport(record, null, context).done(function(data) {
			previewContainer.html(data);
		});
		
	}
	
	
	return {
		previewReport : previewReport,
	};

})($, reportsApi, reportsRouter);
