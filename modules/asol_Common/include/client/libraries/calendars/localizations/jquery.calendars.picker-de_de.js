/* http://keith-wood.name/calendars.html
   German localisation for calendars datepicker for jQuery.
   Written by Milian Wolff (mail@milianw.de). */
(function($) {
	'use strict';
	$.calendarsPicker.regionalOptions.de = {
		renderer: $.calendarsPicker.defaultRenderer,
		monthNames: ['Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember'],
		prevText: '&laquo;zurück',
		prevStatus: 'letzten Monat zeigen',
		prevJumpText: '&#x3c;&#x3c;',
		prevJumpStatus: '',
		nextText: 'Vor&raquo;',
		nextStatus: 'nächsten Monat zeigen',
		nextJumpText: '&#x3e;&#x3e;',
		nextJumpStatus: '',
		currentText: 'heute',
		currentStatus: '',
		todayText: 'heute',
		todayStatus: '',
		clearText: 'löschen',
		clearStatus: 'aktuelles Datum löschen',
		closeText: 'schließen',
		closeStatus: 'ohne Änderungen schließen',
		yearStatus: 'anderes Jahr anzeigen',
		monthStatus: 'anderen Monat anzeige',
		weekText: 'Wo',
		weekStatus: 'Woche des Monats',
		dayStatus: 'Wähle D, M d',
		defaultStatus: 'Wähle ein Datum',
		isRTL: false
	};
	$.calendarsPicker.setDefaults($.calendarsPicker.regionalOptions.de);
})(jQuery);
