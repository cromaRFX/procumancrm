"use strict;"

var populateEditView = function(json, duplicate) {
	
	var editContainer = $("#editContainer");
	
	var data = window.JSON.parse(json);
	data.name = (duplicate ? "Copy of "+data.name : data.name);
	
	$("#record").val(duplicate ? '' : data.id);
	
	editContainer.find("#form_title").html(SUGAR.language.get('asol_Reports', 'LBL_FORM_EDIT')+": "+data.name);
	editContainer.find("#name").val(data.name);
	editContainer.find("#assigned_user_id").val(data.assigned_user_id);
	editContainer.find("#assigned_user_name").val(data.assigned_user_name);
	editContainer.find("#data_source_type").val(data.data_source.type);
	editContainer.find("#formScope").val(data.scope.type);
	editContainer.find("#scopeRole option").each(function() {
		if ($.inArray($(this).val(), data.scope.roles) >= 0) {
			$(this).prop("selected", true); 
		} 
	});
	asolFancyMultiEnum.update("#scopeRole");
	editContainer.find("#type").val(data.type);
	
	editContainer.find("#internal_description").val(data.description.internal);
	editContainer.find("#public_description").val(data.description.public);
    
	controllerReportEdit.cleanUpFormDefinition(true);
	data.content.domains.forEach(function(domain) {
		editContainer.find(".asolCommonUsedDomains").append($('<option>', { 
	        value: domain.key,
	        text: domain.label
	    }));
	});
	
	editContainer.find("#asolFormsAvailableFields").val(data.available);
    editContainer.find("#asolFormsStoredDefinition").val(data.content.data);

    editContainer.find("#asol_domain_name").val(data.domains.name);
    editContainer.find("#asol_domain_published_mode").val(data.domains.mode);
    $("#selectedMode").val(data.domains.mode);
    editContainer.find("#asol_domain_child_share_depth").val(data.domains.level);
    $("#selectedLevels").val(data.domains.level);
    editContainer.find("#asol_multi_create_domain").val(data.domains.publish);
    $("#selectedPublish").val(data.domains.publish);
    
    editContainer.find("#asol_published_domain").prop("checked", (data.domains.enable == '1'));

    controllerReportEdit.manageEditionTabs('formTabs', 'mainInfo', 'formPanel');
    controllerReportEdit.manageFormDataSourceType(data.data_source.type, data.data_source.value, false, false);
    controllerReportEdit.manageFormScope(editContainer.find("#formScope"));
    controllerReportEdit.generateFormDefinition();

};

var htmlEscape = function(str) {
    return String(str)
    .replace(/&/g, '&amp;')
    .replace(/"/g, '&quot;')
    .replace(/'/g, '&#39;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;');
}

