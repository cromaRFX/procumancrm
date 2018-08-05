/* http://keith-wood.name/calendars.html
   Spanish localisation for calendars datepicker for jQuery.
   Traducido por Vester (xvester@gmail.com). */
(function($) {
	'use strict';
	$.calendarsPicker.regionalOptions.es = {
		renderer: $.calendarsPicker.defaultRenderer,
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		prevText: '&laquo; Ant',
		prevStatus: '',
		prevJumpText: '&#x3c;&#x3c;',
		prevJumpStatus: '',
		nextText: 'Sig &raquo;',
		nextStatus: '',
		nextJumpText: '&#x3e;&#x3e;',
		nextJumpStatus: '',
		currentText: 'Hoy',
		currentStatus: '',
		todayText: 'Hoy',
		todayStatus: '',
		clearText: 'Limpiar',
		clearStatus: '',
		closeText: 'Cerrar',
		closeStatus: '',
		yearStatus: '',
		monthStatus: '',
		weekText: 'Sm',
		weekStatus: '',
		dayStatus: 'DD, M d',
		defaultStatus: '',
		isRTL: false
	};
	$.calendarsPicker.setDefaults($.calendarsPicker.regionalOptions.es);
})(jQuery);
