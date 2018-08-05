var commonMenuManagement = (function($) {

	var language = {
		"name" : "Menu ID",
		"label" : "Menu Label",
		"acls" : "Menu ACLs",
		"value" : "Menu Element",
		"roles" : "Roles",
		"visibility" : "Visibility Conditions",
		"properties" : "Properties",
		"alert" : {
			"delete" : "Are you sure you want to delete this menu?",
			"empty" : "All of the menus must be filled with its Name, Label & Value",
			"duplicated" : "Duplicated menu name"
		},
		"menu" : "Menu",
		"save" : "Save",
		"close": "Close",
		"multilingual": "Multilingual Management",
	};
	 
	var setLanguage = function(currentLanguage) {
		language = currentLanguage;
	}
	
	var getLanguage = function() {
		return language;
	}
	
	var addMenuItem = function(moduleId) {

		var menuId = 'ElementMenuFor'+moduleId+'_'+$('#'+moduleId+'CommonMenusTable .asolCommonMenuRow').length;
		
		var table = document.getElementById(moduleId+'CommonMenusTable');
		var row = document.createElement("tr");
		row.setAttribute("class", "asolCommonMenuRow");
		  
		var cell_MenuNameLabel = document.createElement("td");
		cell_MenuNameLabel.scope = "col";
		cell_MenuNameLabel.width = "7%";
		var cell_MenuLabelLabel = document.createElement("td");
		cell_MenuLabelLabel.scope = "col";
		cell_MenuLabelLabel.width = "7";

		var cell_MenuDefaultLabel = document.createElement("td");
		cell_MenuDefaultLabel.scope = "col";
		cell_MenuDefaultLabel.width = "7";
		  
		var cell_MenuNameValue = document.createElement("td"); 
		cell_MenuNameValue.width = "17%";
		  	
		var cell_MenuLabelValue = document.createElement("td");
		cell_MenuLabelValue.width = "17%";
		
		
		var cell_MenuDefaultValue = document.createElement("td");
		cell_MenuDefaultValue.width = "27.5%";
		  
		var cell_Button = document.createElement("td");
		cell_Button.width = "15%"
		cell_Button.align = "right";
				
		cell_MenuNameLabel.innerHTML = language['name']+': ';				
		cell_MenuNameValue.innerHTML = "<input type='text' class='menuId' size='30' maxlength='255' value='"+menuId+"'>";
		  
		cell_MenuLabelLabel.innerHTML = language['label']+': ';
		cell_MenuLabelValue.innerHTML = "<input type='text' class='menuLabel' size='30' maxlength='255' lang='{}' value=''>";
		
				
		cell_MenuDefaultLabel.innerHTML = language['value']+': ';
		
		
		var availableReportsForMenus = window.JSON.parse(unescape($('#availableReportsForMenus').val()));
		var availableReportsOptions = "<option value=''></option>";
		availableReportsForMenus.forEach(function(reportsForMenus) {
			availableReportsOptions += "<option value='"+reportsForMenus.id+"'>"+reportsForMenus.name+"</option>";
		});

		var availableFormsForMenus = window.JSON.parse(unescape($('#availableFormsForMenus').val()));
		var availableFormsOptions = "<option value=''></option>";
		availableFormsForMenus.forEach(function(formsForMenus) {
			availableFormsOptions += "<option value='"+formsForMenus.id+"'>"+formsForMenus.name+"</option>";
		});

		var availableViewsForMenus = window.JSON.parse(unescape($('#availableViewsForMenus').val()));
		var availableViewsOptions = "<option value=''></option>";
		availableViewsForMenus.forEach(function(viewsForMenus) {
			availableViewsOptions += "<option value='"+viewsForMenus.id+"'>"+viewsForMenus.name+"</option>";
		});
		
		var availableModuleOptions = "";
		var hasAvailableReports = (availableReportsForMenus.length > 0);
		var hasAvailableForms = (availableFormsForMenus.length > 0);
		var hasAvailableViews = (availableViewsForMenus.length > 0);
		
		if (hasAvailableReports) {
			availableModuleOptions += 	"<option value='asol_Reports'>"+SUGAR.language.get('app_list_strings', 'moduleList').asol_Reports+"</option>";
		}
		if (hasAvailableForms) {
			availableModuleOptions += 	"<option value='asol_Forms'>"+SUGAR.language.get('app_list_strings', 'moduleList').asol_Forms+"</option>";
		}
		if (hasAvailableViews) {
			availableModuleOptions += 	"<option value='asol_Views'>"+SUGAR.language.get('app_list_strings', 'moduleList').asol_Views+"</option>";
		}
		
		cell_MenuDefaultValue.innerHTML += "<select class='menuElementType' onChange='commonMenuManagement.manageModuleType(this);'>"+availableModuleOptions+"</select> ";


		//***AlineaSol Premium***//
		if (typeof window.hasPremiumCommonFeatures == 'function') {
			cell_MenuDefaultValue.innerHTML += getOpenSelection();
		} else {
		//***AlineaSol Premium***//
			cell_MenuDefaultValue.innerHTML += "<select class='reportId' style='display: "+(hasAvailableReports ? 'inline' : 'none')+";'>"+availableReportsOptions+"</select>";
			cell_MenuDefaultValue.innerHTML += "<select class='formId' style='display: "+(!hasAvailableReports && hasAvailableForms ? 'inline' : 'none')+";'>"+availableFormsOptions+"</select>";
			cell_MenuDefaultValue.innerHTML += "<select class='viewId'  style='display: "+(!hasAvailableReports && !hasAvailableForms && hasAvailableViews ? 'inline' : 'none')+";'>"+availableViewsOptions+"</select>";
		}
		
		
		var cell_roles = $('<img class="roles asol_icon clickable" onclick="commonMenuManagement.menuItemRoles(this)" config="{}"  src="modules/asol_Common/include/client/images/asol_common_view_role.png" title="'+language['roles']+'" />')[0];

		row.appendChild(cell_MenuNameLabel);
		row.appendChild(cell_MenuNameValue);
		
		row.appendChild(cell_MenuLabelLabel);
		row.appendChild(cell_MenuLabelValue);
				
		row.appendChild(cell_MenuDefaultLabel);
		row.appendChild(cell_MenuDefaultValue);
		
		cell_Button.appendChild(cell_roles);
		
		//***AlineaSol Premium***//
		if (typeof window.hasPremiumCommonFeatures == 'function')
			cell_Button.appendChild(addCellProperties());
		//***AlineaSol Premium***//
		
		cell_Button.innerHTML += "<img class='asol_icon clickable' onclick='if(confirm(\""+language['alert']['delete']+"\")) { $(this).closest(\".asolCommonMenuRow\").remove(); }' src='modules/asol_Common/include/client/images/asol_common_removeline.png'>";
		
		row.appendChild(cell_Button);

		table.getElementsByTagName('tbody')[0].appendChild(row);
		
		asolFancyMultiEnum.generate($(".menuAcls"));
		
	}

	var manageModuleType = function(selectRef) {
		//***AlineaSol Premium***//
		if (typeof window.hasPremiumCommonFeatures == 'function') {
			updateOpenSelection(selectRef);
		}else{
		//***AlineaSol Premium***//

			if (selectRef.value == 'asol_Reports') {
				$(selectRef).closest(".asolCommonMenuRow").find(".reportId").show();
				$(selectRef).closest(".asolCommonMenuRow").find(".formId").hide();
				$(selectRef).closest(".asolCommonMenuRow").find(".viewId").hide();
			} else if (selectRef.value == 'asol_Forms') {
				$(selectRef).closest(".asolCommonMenuRow").find(".reportId").hide();
				$(selectRef).closest(".asolCommonMenuRow").find(".formId").show();
				$(selectRef).closest(".asolCommonMenuRow").find(".viewId").hide();
			} else if (selectRef.value == 'asol_Views') {
				$(selectRef).closest(".asolCommonMenuRow").find(".reportId").hide();
				$(selectRef).closest(".asolCommonMenuRow").find(".formId").hide();
				$(selectRef).closest(".asolCommonMenuRow").find(".viewId").show();
			}
		}
		
	}

	var saveMenuItems = function(moduleId) {

		if (checkMenuItems(moduleId)) {
			
			$.blockUI({ message: $('#savingBlockDiv') }); 
			$.ajax({
				type: "POST",
				url: "index.php?entryPoint=commonAjaxActions&actionTarget=saveCommonMenuItems&actionValue="+escape(formatMenuItems(moduleId)),
				async: true,
				cache: false,
				success: function (msg) {
					ajaxStatus.showStatus(msg);
					setTimeout(function(){ ajaxStatus.hideStatus() }, 5000);
					$.unblockUI();
				}
			});
		
		}
			
	}

	var checkMenuItems = function(moduleId) {

		var flag = true;
		var nameList = new Array();
		
		$('#'+moduleId+'CommonMenusDiv tr.asolCommonMenuRow').each(function(index) {
		
			var menuId = $(this).find(".menuId").val();
			var menuLabel = $(this).find(".menuLabel").val();
			var elementType = $(this).find(".menuElementType").val();
			var elementValue = (elementType == 'asol_Reports' ? $(this).find(".reportId").val() : (elementType == 'asol_Forms' ? $(this).find(".formId").val() : (elementType == 'asol_Views' ? $(this).find(".viewId").val() : '')));
			
			if ((menuId == '') || (menuLabel == '') || (elementValue == '')) {
				alert(language['alert']['empty']);
				flag = false;
			} else {
				if ($.inArray(menuId, nameList) >= 0) {
					alert(language['alert']['duplicated']);
					flag = false;
				} else {
					nameList.push(menuId); // Avoids duplicating generated references
				}
			}
			
		});
			
		return flag;
		
	}
		
	var formatMenuItems = function(moduleId) {
		
		var currentModuleMenus = $('#'+moduleId+'CommonMenusDiv');
		
		var commonMenusObject = new Object();
		commonMenusObject.module = moduleId;
		commonMenusObject.override = currentModuleMenus.find('.asolFormsMenuOverride').is(':checked');
		commonMenusObject.menus = new Array();
		
		currentModuleMenus.find('tr.asolCommonMenuRow').each(function(index) {

			var elementMenu = new Object();
			elementMenu.id = $(this).find(".menuId").val();
			elementMenu.label = $(this).find(".menuLabel").val();
			elementMenu.language = window.JSON.parse(unescape($(this).find(".menuLabel").attr("lang")));
			
			var roles = window.JSON.parse(unescape($(this).find("img.roles").attr('config')));
			
			elementMenu.acls = roles.acls;
			elementMenu.roles = roles.roles;
			//***AlineaSol Premium***//
			if (typeof window.hasPremiumCommonFeatures == 'function') {
				elementMenu.properties = window.JSON.parse(unescape($(this).find("img.properties").attr('config')));
			}
			//***AlineaSol Premium***//
			elementMenu.type = $(this).find(".menuElementType").val();
			
			//***AlineaSol Premium***//
			if (typeof window.hasPremiumCommonFeatures == 'function') {
				elementMenu.record = $(this).find('input[type="hidden"]').val();
			}else{
			//***AlineaSol Premium***//
				if (elementMenu.type == 'asol_Reports') {
					elementMenu.record = $(this).find(".reportId").val();
				} else if (elementMenu.type == 'asol_Forms') {
					elementMenu.record = $(this).find(".formId").val();
				} else if (elementMenu.type == 'asol_Views') {
					elementMenu.record = $(this).find(".viewId").val();
				}
			}
			commonMenusObject.menus.push(elementMenu);
			
		});

		return window.JSON.stringify(commonMenusObject);
		
	}
	
	var menuItemRoles = function(th) {
				
		window.buttonFilter = th;
		
		var availableAclsForMenus =	window.JSON.parse(unescape($('#availableAclsForMenus').val()));
		var currentRoles = window.JSON.parse(unescape($("#availableRoles").val()));
		
		var config = window.JSON.parse(unescape($(th).attr('config')));
		
		config.acls = typeof config.acls  != 'undefined'? config.acls : [] ;
		config.roles = typeof config.roles  != 'undefined'? config.roles : [] ;
				
		var availableAclsOptions = "" , availableRolesOptions = "";
		
		availableAclsForMenus.forEach(function(aclsForMenus) {
			availableAclsOptions += "<option value='"+aclsForMenus+"'  "+(config.acls.indexOf(aclsForMenus)>=0? 'selected':'')+">"+aclsForMenus+"</option>";
		});
		
		currentRoles.forEach(function(currentRole) {
			availableRolesOptions += '<option value="'+currentRole.id+'" '+(config.roles.indexOf(currentRole.id)>=0? 'selected' : '')+'>'+currentRole.name+'</option>';
		});
						
		var filtersHtml = '<div id="menuItemRoles">';
		
		filtersHtml += 	'<table class="edit view">';
		
		filtersHtml += 		'<tr>';
		filtersHtml += 			'<td>'+language['acls']+'</td>';
		filtersHtml += 			'<td><select class="menuAcls" size="1" multiple>'+availableAclsOptions+'</select></td>';
		filtersHtml += 		'</tr>';
	
		filtersHtml += 	'</table>';
		
		filtersHtml += 	'<table class="edit view">';
		
		filtersHtml += 		'<tr>';
		filtersHtml += 			'<td>'+language['roles']+'</td>';
		filtersHtml += 			'<td><select class="menuRoles" size="1" multiple>'+availableRolesOptions+'</select></td>';
		filtersHtml += 		'</tr>';
	
		filtersHtml += 	'</table>';
		
		filtersHtml += '<div>';
		filtersHtml += 	'<input type="button" value="Save" onclick="commonMenuManagement.menuItemRolesSave();"> ';
		filtersHtml += 	'<input type="button" value="Close" onclick="$(\'#menuItemRoles\').dialog(\'close\');">';
		filtersHtml += '</div>';
		
		filtersHtml += '</div>';
		
		$(filtersHtml).dialog({
			modal: true,
			overlay:
			{
				opacity: 0.8,
				background: 'black'
			},
			width: 800,
			position: ['center', 'center'],
			close: function(ev, ui) {
				$(this).remove();
			},
			title: language['roles'],
		});
		
	    asolFancyMultiEnum.generate($("#menuItemRoles .menuAcls,  #menuItemRoles .menuRoles"));
	    
	}
	
	var menuItemRolesSave = function(){
		
		var button = $(window.buttonFilter);
		
		var config = {};
		
		config.acls = $("#menuItemRoles .menuAcls").val() != null ? $("#menuItemRoles .menuAcls").val() : [];
		config.roles = $("#menuItemRoles .menuRoles").val() != null ? $("#menuItemRoles .menuRoles").val() : [];
			
		if (config.acls.length > 0 || config.roles.length > 0) 	
			button.find('img').attr('src','modules/asol_Common/include/client/images/asol_common_view_role_filled.png');
		else 	
			button.find('img').attr('src','modules/asol_Common/include/client/images/asol_common_view_role.png');
		
		button.attr('config',escape(JSON.stringify(config)));
		
		$('#menuItemRoles').dialog('close');
		
	}
	
	
	
	return {
		setLanguage : setLanguage,
		getLanguage : getLanguage,
		
		manageModuleType : manageModuleType,
		addMenuItem : addMenuItem,
		saveMenuItems : saveMenuItems,
		menuItemRoles : menuItemRoles,
		menuItemRolesSave : menuItemRolesSave,
	};
	
})($);