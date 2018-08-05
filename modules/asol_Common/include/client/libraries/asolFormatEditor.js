var asolFormatEditor = (function($) {

	var singleFormats = ["varchar", "date", "int", "decimal", "currency", "percent", "bool"];
	
	var module = null;
	var language = {
		"varchar" : "String",
		"date" : "Date",
		"int" : "Integer",
		"decimal" : "Decimal",
		"currency" : "Currency",
		"percent" : "Percent",
		"bool" : "Boolean",
		"enum" : "Enum",
		"multienum" : "Multi Enum",
		"tree" : "MultiLevel Enum",
		"relate" : "Relate",
		"button" : "Button",
		"multimedia" : "Multimedia",
	};
	
	var setModule = function(currentModule) {
		module = currentModule;
	}
	
	var getModule = function() {
		return module;
	}
	
	var setLanguage = function(currentLanguage) {
		language = currentLanguage;
	}
	
	var getLanguage = function() {
		return language;
	}
	
	var generate = function(formatImages, index, containerClass, extendedClass, currentValue, currentTemplates, currentField, currentType, commonScreen, disabledInputs) {
		
		var selectedType = ((typeof currentValue === 'undefined') || (typeof currentValue.type === 'undefined') ? '' : currentValue.type);
		
		var cell_Format_Type_Ext_HTML = "";
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		if ((module == 'asol_Forms' && typeof window.hasPremiumFormsJsFeatures == 'function') || (module == 'asol_Views' && typeof window.hasPremiumViewsJsFeatures == 'function') || (module == 'asol_Reports' && typeof window.hasPremiumReportsJsFeatures == 'function')) {
			var selectedExtra = ((typeof currentValue.extra === 'undefined') ? {} : currentValue.extra);
			cell_Format_Type_Ext_HTML += asolFormatEditorPremium.getFormatConfiguration(formatImages, containerClass, extendedClass, commonScreen, selectedType, false, selectedExtra, currentTemplates, '', null);
		}
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
	
		if (commonScreen) {
			return cell_Format_Type_Ext_HTML;
		} else {
			var cell_Format_Type_HTML = getAvailableTypes(selectedType, commonScreen, containerClass, currentField, index, disabledInputs);
			return cell_Format_Type_HTML + cell_Format_Type_Ext_HTML;
		}
		
	}
	
	var getSingleFormats = function() {
		
		return singleFormats;
		
	}
	
	var getAvailableTypes = function(selectedType, commonScreen, containerClass, currentField, index, disabledInputs) {
		
		var formatValues = [""];
		singleFormats.forEach(function(currentFormat) {
			formatValues.push(currentFormat);
		})
		
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		if ((module == 'asol_Forms' && typeof window.hasPremiumFormsJsFeatures == 'function') || (module == 'asol_Views' && typeof window.hasPremiumViewsJsFeatures == 'function') || (module == 'asol_Reports' && typeof window.hasPremiumReportsJsFeatures == 'function')) {
			formatValues = asolFormatEditorPremium.addPremiumFormatOptions(formatValues, containerClass, index);
		}
		//***********************//
		//***AlineaSol Premium***//
		//***********************//
		
		var cell_Format_Type_HTML = "<select class='format_type' "+disabledInputs+" onChange='if ((asolFormatEditor.getModule() == \"asol_Forms\" && typeof window.hasPremiumFormsJsFeatures == \"function\") || (asolFormatEditor.getModule() == \"asol_Views\" && typeof window.hasPremiumViewsJsFeatures == \"function\") || (asolFormatEditor.getModule() == \"asol_Reports\" && typeof window.hasPremiumReportsJsFeatures == \"function\")) { asolFormatEditorPremium.manageFormat("+(commonScreen ? 'true' : 'false')+", \""+currentField+"\", this.value, \""+index+"\", \""+containerClass+"\"); }'>";
		formatValues.forEach(function(currentFormat) {
			cell_Format_Type_HTML += "<option value='"+currentFormat+"' "+(currentFormat == selectedType ? 'selected' : '')+">"+(currentFormat !== '' ? language[currentFormat] : '')+"</option>";
		});
		cell_Format_Type_HTML += "</select>";
		
		return cell_Format_Type_HTML;
		
	}
	
	
	return {
		generate : generate,
		
		setModule : setModule,
		getModule : getModule,
		setLanguage : setLanguage,
		getLanguage : getLanguage,
		
		getSingleFormats : getSingleFormats,
		getAvailableTypes : getAvailableTypes,
	};
	
})($);