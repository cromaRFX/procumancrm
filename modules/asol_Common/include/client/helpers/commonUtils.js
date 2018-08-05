function setCodeMirrorEditor(textAreaId, editorMode) {

	/*
	text/x-mysql
	text/x-php
	text/css
	*/
	
	if (typeof window['codeMirror_'+textAreaId] === "undefined") {
			
		window['codeMirror_'+textAreaId] = CodeMirror.fromTextArea(document.getElementById(textAreaId), {
		    lineNumbers: true,
		    lineWrapping: true,
		    matchBrackets: true,
		    mode: editorMode,
		    indentUnit: 4,
		    indentWithTabs: true,
		    enterMode: "keep",
		    tabMode: "shift",
		    autofocus: true
		});
		
		$('#'+textAreaId).next('.CodeMirror').resizable({
		    handles: 'n, s'
		});
	
	}
	
	return window['codeMirror_'+textAreaId];
	
}

function getCodeMirrorEditorValue(textAreaId) {
	
	return window['codeMirror_'+textAreaId].getValue();

}

function deleteCodeMirrorEditor(textAreaId) {
	
	delete window['codeMirror_'+textAreaId];
	
}

function insertAtActiveCodeMirrorCursor(click) {

	var codeMirrorId = $(".CodeMirror:visible").prev("textarea").attr("id");
	var value = $(click).closest("td").text();
	var codeMirrorEnabled = (typeof $(".CodeMirror textarea:disabled").attr("disabled") === "undefined");
	
	if ((typeof window['codeMirror_'+codeMirrorId] !== "undefined") && codeMirrorEnabled)  {
		
		var coreMirrorCursor = window['codeMirror_'+codeMirrorId].getCursor();
		window['codeMirror_'+codeMirrorId].replaceRange(value, coreMirrorCursor, coreMirrorCursor);
		window['codeMirror_'+codeMirrorId].focus();
		
	}
	
}

function initMassiveAction(tableId, massiveCheckboxClass, massiveAllCheckboxClass, massiveActionClass) {

	$('#'+tableId).on('click', 'input.'+massiveCheckboxClass, function() {
		
		numElementsChecked = $('#'+tableId+' .'+massiveCheckboxClass+':checked').length;
		numElements = $('#'+tableId+' .'+massiveCheckboxClass).length;
		
		// Enables or disables massive operations
		$('#'+tableId+' .'+massiveActionClass).prop('disabled', (numElementsChecked == 0));
		
		// Checks or unchecks global selector
		$('#'+tableId+' .'+massiveAllCheckboxClass).prop('checked', (numElementsChecked == numElements));
		
	});
	
	$('#'+tableId+' .'+massiveAllCheckboxClass).click(function() {
		
		var checkAll = $(this).is(':checked');
		
		$('#'+tableId+' .'+massiveAllCheckboxClass).prop('checked', checkAll);
		$('#'+tableId+' .'+massiveCheckboxClass).prop('checked', checkAll);
		
		// Checks all
		$('#'+tableId+' .'+massiveActionClass).prop('disabled', !checkAll);
		
	});

}


function openDomainManagementElementPanel(currentElementDomain, buttonRef, containerElement) {
	
	if (containerElement !== null) {
		window['asolCommonElementDomainButton'] = buttonRef;
		window['asolCommonElementDomainElement'] = containerElement;
		
		var currentElement = $(buttonRef).closest(containerElement);
		
		var currentPanelDomain = currentElement.find('.asolCommonUsedDomains').val();
		var usedDomains = currentElement.find('.asolCommonUsedDomains option').map(function() { return {"id":$(this).val(),"text":$(this).text()}; }).get();
	} else {
		var currentPanelDomain = $('.asolCommonUsedDomains').val();
		var usedDomains = $('.asolCommonUsedDomains option').map(function() { return {"id":$(this).val(),"text":$(this).text()}; }).get();
	}
	
	$('#commonAvailableCopyDomains option[value!=""]').remove();
	$('#asolCommonAvailableDomainsSelection .domainLink img').attr('src', 'modules/asol_Common/include/client/images/asol_common_addline.png');
	usedDomains.forEach(function(currentDomain) {
		
		if (currentElementDomain == currentDomain.id) {
			$('#asolCommonAvailableDomainsSelection #domainLink_'+currentDomain.id).remove();
		} else {
			$('#asolCommonAvailableDomainsSelection #domainLink_'+currentDomain.id+' img').attr('src', 'modules/asol_Common/include/client/images/asol_common_removeline.png');
		}
		
		if (currentPanelDomain != currentDomain.id) {
			$('#commonAvailableCopyDomains').append($('<option>', {
			    value: currentDomain.id,
			    text: currentDomain.text
			}));
		}
		
	});
	
	$('#asolCommonAvailableDomainsSelection').dialog({
		modal: true,
		overlay:
		{
			opacity: 0.8,
			background: 'black'
		},
		width: 400,
		position: ['center', 'center'],
	});
	
}

var sortUsedDomainsAlphabetically = function(currentContainer) {
	
	if (currentContainer == null) {
		var options = $('.asolCommonUsedDomains option');
	} else {
		var options = currentContainer.find('.asolCommonUsedDomains option');
	}
	var arr = options.map(function(_, o) { return { t: $(o).text(), v: o.value }; }).get();
	arr.sort(function(o1, o2) {
		var t1 = o1.t.toLowerCase(), t2 = o2.t.toLowerCase();
		return t1 > t2 ? 1 : t1 < t2 ? -1 : 0;
	});
	options.each(function(i, o) {
	  o.value = arr[i].v;
	  $(o).text(arr[i].t);
	});
	
}