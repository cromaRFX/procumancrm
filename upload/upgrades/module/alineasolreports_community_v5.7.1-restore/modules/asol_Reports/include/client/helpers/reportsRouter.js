"use strict";

var reportsRouter = (function($, window) {

	var views = {
		list : 'listContainer',
		edit : 'editContainer',
		detail : 'detailContainer',
	};
	
	var urlModule = '?module=asol_Reports',
		urlAction = '&action=index';
	
	var init = function() {
		window.onpopstate = function(event) {
			if (typeof event.state === 'object') {
				$(event.state.container).html(sessionStorage.getItem(event.state.url)).unblock();
				if(window.currentLocationState == 'list'){
					hideAll();
					$("#" + views[getUrlParams('view',event.state.url)]).show();
				}
			} else {
				moveTo(event.state, undefined, undefined, true);
			}
			window.currentLocationState = event.state;
		}
	};
	
	var moveTo = function(dest, record, unique, back) {
		
		dest = typeof arguments[0] !== 'undefined' ? arguments[0] : 'list';
		dest = (typeof dest === 'object'? getUrlParams('view',dest.url) : dest);
		record = typeof arguments[1] !== 'undefined' ? arguments[1] : '';
		unique = typeof arguments[2] !== 'undefined' ? arguments[2] : '';
		
		if (views[dest] !== undefined) {
			
			var urlView = '&view=' + dest;
			var	urlRecord = (record !== '') ? '&record=' + record : '';
			var urlUnique = (unique !== '') ? '&unique=' + unique : '';
			
			var url = window.location.origin + window.location.pathname + 
						urlModule + urlAction + urlView + urlRecord + urlUnique;
			
			hideAll();
			$("#" + views[dest]).show();
			
			if (!back) {
				if (dest == 'edit' || dest == 'list') {
					var newState = dest;
					window.history.pushState(newState, dest, url);
					window.currentLocationState = window.history.state;
				} else {
					var newState = {
						"url" : url,
						"container" : "#" + views[dest],
						"html" : $("#" + views[dest]).html(),
					};
					setNewState(newState);
				}
			}
		}
		
		return this;
	};

	var hideAll = function() {
		
		$.each(views, function(key, value) {
			$("#" + value).hide();
		});

		return this;
		
	};
	
	var getUrlParams = function(param, url) {
		
		param = (typeof param == "string" ?  param : false);
		url = (typeof url == "string" ? url : window.location.search);
		
		var params = {}
		if (url != '') {
			url.split('?')[1].split('&').forEach(function(param){ param = param.split('='); params[param[0]] = param[1] });
		}
		
		if (!param) {
			return params;
		} else {
			return params[param];
		}
		
	}
	
	var getNewUrl = function(idView, record) {
		
		var newUrl;
		
		if (getUrlParams('module') == 'asol_Reports') {
			
			newUrl = window.location.href.replace(/(record=).*?(&|$)/,'$1' + idView + '$2').replace(/(id=).*?(&|$)/,'$1' + record + '$2');
		
		} else {
			
			newUrl = window.location.href.replace(/(id=).*?(&|$)/,'$1' + idView + '$2');

			if (typeof record == 'string') {
				if (getUrlParams('record') == undefined) {
					newUrl = newUrl+'&record='+record; 
				} else {
					newUrl = newUrl.replace(/(record=).*?(&|$)/,'$1' + record + '$2');
				}
			} else { 
				newUrl = newUrl.replace(/(record=).*?(&|$)/,'').replace(/&$/,'');;
			}
			
		}
		
		return newUrl;
		
	}
	
	var setNewState = function(newState){
		sessionStorage.setItem(newState.url, newState.html);
		delete newState.html;
		window.history.pushState(newState, document.title, newState.url);
		window.currentLocationState = window.history.state;
	}
	
	//********************//
	//***Initialization***//
	//********************//
	init();
	var urlParams = getUrlParams();
	
	if (urlParams['module'] === 'asol_Reports' || urlParams['type'] === 'asol_Reports') {
		init();
		
		var state = null;
		if (typeof urlParams.view == 'undefined' && !urlParams.hasOwnProperty('type')) {
			state = 'list';
		} else {
			state = urlParams.view;
		}
		
		if (state != null && state != "detail") {
			window.history.replaceState(state, document.title, window.location.href);
			window.currentLocationState = state;
		} else {
			$(document).ready(function() {
				var newState = {
					"url" : window.location.href,
					"container" : '#detailContainer',
					"html" : $('#detailContainer').html(),	
				};
				setNewState(newState);
			});
		}
	}
	//********************//
	//***Initialization***//
	//********************//

	return {
		init : init,
		hideAll : hideAll,
		moveTo : moveTo,
		getNewUrl : getNewUrl,
		setNewState : setNewState,
	};

})($, window);
