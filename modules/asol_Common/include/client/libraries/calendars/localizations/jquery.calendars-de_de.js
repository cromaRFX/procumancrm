(function($) {
	'use strict';
	/* jshint -W100 */
	$.calendars.calendars.gregorian.prototype.regionalOptions.de = {
			name: 'Gregorian',
			epochs: ['BCE', 'CE'],
			monthNames: ['Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember'],
			monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
			dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
			dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
			dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
			digits: null,
			dateFormat: 'mm/dd/yyyy',
			firstDay: 0,
			isRTL: false
	};
})(jQuery);
