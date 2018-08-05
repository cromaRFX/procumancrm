var asolFancyMultiEnum = (function($) {

	var language = {
		"checkAll" : "Select All",
		"allSelected" : "All Selected",
		"items" : "Selected Items"
	};
	 
	var setLanguage = function(currentLanguage) {
		language = currentLanguage;
	}
	
	var generate = function(selectReference, maxValues, doFadeIn) {
		
		maxValues = (typeof maxValues === 'undefined' ? 2 : maxValues);
		doFadeIn = (typeof doFadeIn === 'undefined' ? false : doFadeIn);
		
		$(selectReference).each(function() {
		
			var that = $(this);
			var thatWidth = that.css("width");
			var thatMinWidth = that.css("min-width");
			var thatMaxWidth = that.css("max-width");
			
			var isVisible = that.is("visible");
	
			if ((typeof that.attr("multiple") !== 'undefined') && (!isEnabled(that))) {
			
				var fancyCounter = $('.asolFancyMultiEnum').length;
				that.before('<div id="asolFancyMultiEnum_'+fancyCounter+'" class="asolFancyMultiEnum" style="'+(isVisible ? '' : 'display: none;')+'"></div>').appendTo('#asolFancyMultiEnum_'+fancyCounter);
				
				var fancyMultiEnumChildren = $(that).children("option, optgroup");
				var fancyMultiEnumHtml = '<ul style="display: none; min-width: '+(parseInt(thatWidth) + 50)+thatWidth.replace(/[0-9]/g, '')+';" class="asolFancyValues">';
				if (fancyMultiEnumChildren.length > 0) {
					fancyMultiEnumHtml += '<li class="asolFancySearch" style="width: '+(parseInt(thatWidth) - 25)+thatWidth.replace(/[0-9]/g, '')+';"><input class="asolFancySearchInput" onkeyup="asolFancyMultiEnum.updateOptions(event, this);" type="text" style="min-width: '+(parseInt(thatWidth) - 40)+thatWidth.replace(/[0-9]/g, '')+';"><span style="font-weight: bold; vertical-align: baseline;">&#128270;</span></li>';
				}
				
				thatWidth = parseInt(that.css("width")) > 0 ? that.css("width") : thatWidth;
				thatMinWidth = parseInt(that.css("min-width")) > 0 ? that.css("min-width") : thatMinWidth;
				thatMaxWidth = parseInt(that.css("max-width")) > 0 ? that.css("max-width") : thatMaxWidth;
				
				$('#asolFancyMultiEnum_'+fancyCounter).css('width', thatWidth);
				$('#asolFancyMultiEnum_'+fancyCounter).css('min-width', thatMinWidth);
				$('#asolFancyMultiEnum_'+fancyCounter).css('max-width', thatMaxWidth);
				$('#asolFancyMultiEnum_'+fancyCounter).removeAttr('id');
				
				fancyMultiEnumHtml += '<li class="asolFancyOptionAll" style="font-weight: bold;"><input class="asolFancyCheckAll" type="checkbox" onChange="asolFancyMultiEnum.manageOption(this, '+maxValues+')">&nbsp;['+language["checkAll"]+']</li>';
				fancyMultiEnumChildren.each(function() {
					var tagName = $(this).prop("tagName");
					if (tagName == 'OPTION') {
						fancyMultiEnumHtml += '<li class="asolFancyOption" label="'+this.text.toLowerCase()+'"><input class="asolFancyCheck" type="checkbox" value="'+this.value+'" '+(this.selected ? "checked" : "")+'>&nbsp;'+this.text+'</li>';
					} else if (tagName == 'OPTGROUP') {
						fancyMultiEnumHtml += '<li class="asolFancyGroup" label="'+this.label.toLowerCase()+'">'+this.label+'</li>';
						fancyMultiEnumHtml += '<ul class="asolFancyGroupValues">';
						$(this).find("option").each(function() {
							fancyMultiEnumHtml += '<li class="asolFancyOption" label="'+this.text.toLowerCase()+'"><input class="asolFancyCheck" type="checkbox" value="'+this.value+'" '+(this.selected ? "checked" : "")+'>&nbsp;'+this.text+'</li>';
						});
						fancyMultiEnumHtml += '</ul>';
					}
				});
				fancyMultiEnumHtml += '</ul>';
					
				var asolFancyPlaceholder  = '<div onClick="asolFancyMultiEnum.manage(this);" class="asolFancyPlaceHolder">';
				asolFancyPlaceholder += 		'<div class="asolFancyLabels">&nbsp;</div>';
				asolFancyPlaceholder += 		'<div class="asolFancyArrows">&#x25BC;</div>';
				asolFancyPlaceholder +=		'</div>';
				
				that.hide().after(fancyMultiEnumHtml).before(asolFancyPlaceholder);
				that.next(".asolFancyValues").find("input.asolFancyCheck").bind("change", function() {
					that.find("option[value='"+this.value+"']").prop("selected", $(this).is(":checked"));
					updatePlaceHolder(that.closest('.asolFancyMultiEnum'), maxValues);
				});
				
				updatePlaceHolder($(this).closest('.asolFancyMultiEnum'), maxValues);
			
				if (!isVisible && doFadeIn) {
					$(this).closest('.asolFancyMultiEnum').fadeIn();
				} else {
					$(this).closest('.asolFancyMultiEnum').show();
				}
				
			}
		
		});
	
		if (typeof window['asolFancyMultiEnumClickEvent'] === 'undefined') {
			$(document).bind("click", function(event) {
				if ($.inArray(event.target.className, ["asolFancyValues", "asolFancyLabels", "asolFancyArrows", "asolFancyOption", "asolFancyCheck", "asolFancyGroup", "asolFancyGroupValues", "asolFancyOptionAll", "asolFancyCheckAll", "asolFancySearch", "asolFancySearchInput"]) === -1) {
					$(".asolFancyMultiEnum .asolFancyValues").hide();
					$(".asolFancyMultiEnum .asolFancyArrows").html("&#x25BC;");
				}
			});
			window['asolFancyMultiEnumClickEvent'] = true;
		}
		
	}
	
	var updateOptions = function(event, inputReference) {
	
		if (event.keyCode == 27) {
			inputReference.value = "";
	    }
		
		$(inputReference).closest(".asolFancyValues").find(".asolFancyOption:not(:visible)").show();
		if (inputReference.value !== "") {
			$(inputReference).closest(".asolFancyValues").find(".asolFancyOption:not([label*='"+inputReference.value.toLowerCase()+"'])").hide();
		}
		
	}
	
	var manageOption = function(optionReference, maxValues) {
	
		var fancyMultiEnumReference = $(optionReference).closest(".asolFancyMultiEnum");
		
		fancyMultiEnumReference.find(".asolFancyValues .asolFancyCheck").prop("checked", $(optionReference).is(":checked"));
		fancyMultiEnumReference.find("select option").prop("selected", $(optionReference).is(":checked"));
		
		updatePlaceHolder(fancyMultiEnumReference, maxValues);
		
	}
	
	var remove = function(selectReference, forceRemove) {
		
		$(selectReference).each(function() {
			
			if (((typeof $(this).attr("multiple") === 'undefined') || (forceRemove)) && ($(this).closest(".asolFancyMultiEnum").length === 1)) {
				
				var fancyMultiEnum = $(this).closest('.asolFancyMultiEnum');
				$(selectReference).insertAfter(fancyMultiEnum).show();
				$(fancyMultiEnum).remove();
				
			}
			
		});
		
	}
	
	var update = function(selectReference, maxValues) {
		
		maxValues = (typeof maxValues === 'undefined' ? 2 : maxValues);
		
		$(selectReference).each(function() {
			
			if ((typeof $(this).attr("multiple") === 'undefined') && ($(this).closest(".asolFancyMultiEnum").length === 1)) {
				
				remove($(this), false);
				
			} else if (typeof $(this).attr("multiple") !== 'undefined') {
				
				if (isEnabled($(this))) {
					remove($(this), true);
				}
				
				generate($(this), maxValues);
				$(this).hide();
				
			}
	
		});
			
	}
	
	var isEnabled = function(selectReference) {
		
		return ($(selectReference).closest(".asolFancyMultiEnum").length === 1);
		
	}
	
	var manage = function(placeholderReference) {
		
		var values = $(placeholderReference).closest('.asolFancyMultiEnum').find('.asolFancyValues');
		
		if ($(values).is(':visible')) {
			
			$(values).hide();
			$(placeholderReference).find('.asolFancyArrows').html('&#x25BC;');
			
		} else {
		
			$(".asolFancyMultiEnum .asolFancyValues").hide();
			$(".asolFancyMultiEnum .asolFancyArrows").html("&#x25BC;");
		
			$(values).show().position({ 
				my: 'left top', 
				at: 'left bottom', 
				of: placeholderReference 
			});
			$(placeholderReference).find('.asolFancyArrows').html('&#x25B2;');
		
		}
		
	}
	
	var remove = function(selectReference, forceRemove) {
		
		$(selectReference).each(function() {
			
			if (((typeof $(this).attr("multiple") === 'undefined') || (forceRemove)) && ($(this).closest(".asolFancyMultiEnum").length === 1)) {
				
				var fancyMultiEnum = $(this).closest('.asolFancyMultiEnum');
				$(selectReference).insertAfter(fancyMultiEnum).show();
				$(fancyMultiEnum).remove();
				
			}
			
		});
		
	}
	
	var updatePlaceHolder = function(fancyReference, maxValues) {
		
		maxValues = (typeof maxValues === 'undefined' ? 2 : maxValues);
		
		var allInputs = $(fancyReference).find('.asolFancyValues li > input.asolFancyCheck');
		var allInputsLength = allInputs.length;
		var checkedInputs = $(fancyReference).find('.asolFancyValues li > input.asolFancyCheck:checked');
		var checkedInputsLength = checkedInputs.length; 
		
		if (allInputsLength > 0) {
			
			if (allInputsLength == checkedInputsLength) {
				var placeholderText = language["allSelected"];
				$(fancyReference).find('.asolFancyCheckAll:not(:checked)').prop('checked', true);
			} else if (checkedInputsLength > maxValues) {
				var placeholderText = checkedInputsLength + ' ' + language["items"];
				$(fancyReference).find('.asolFancyCheckAll:checked').prop('checked', false);
			} else if (checkedInputsLength > 0) {
				var placeholderText = $(checkedInputs).map(function() { return trim($(this).closest('li').text()) }).get().join(', ');
				$(fancyReference).find('.asolFancyCheckAll:checked').prop('checked', false);
			} else { 
				var placeholderText = '&nbsp;';
				$(fancyReference).find('.asolFancyCheckAll:checked').prop('checked', false);
			}
			
			var placeholderTitle = $(checkedInputs).map(function() { return trim($(this).closest('li').text()) }).get().join(', ');
			
			$(fancyReference).find('.asolFancyLabels').html(placeholderText).attr("title", placeholderTitle);
		
		}
			
	}
	
	return {
		generate : generate,
		manage : manage,
		update : update,
		isEnabled : isEnabled,
		
		setLanguage : setLanguage,
		
		manageOption : manageOption,
		updateOptions : updateOptions,
	};
	
})($);
