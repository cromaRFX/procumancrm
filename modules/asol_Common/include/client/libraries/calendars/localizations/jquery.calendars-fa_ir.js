/* http://keith-wood.name/calendars.html
   Farsi/Persian localisation for Gregorian/Julian calendars for jQuery.
   Javad Mowlanezhad -- jmowla@gmail.com */
(function($) {
	'use strict';
	/* jshint -W100 */
	$.calendars.calendars.persian.prototype.regionalOptions.fa = {
		name: 'Persian',
		epochs: ['BCE', 'CE'],
		monthNames: ['فروردین','اردیبهشت','خرداد','تیر','مرداد','شهریور',
		'مهر','آبان','آذر','دی','بهمن','اسفند'], //Farvardin (April),Ordibehesht (May),Khordad (June),Tir (July),Mordad (August),Shahrivar (September),Mehr (October),Aban (November),Azar (December),Dey (January),Bahman (February),Esfand (March)
		monthNamesShort: ['1','2','3','4','5','6','7','8','9','10','11','12'],
		dayNames: ['یکشنبه','دوشنبه','سه‌شنبه','چهارشنبه','پنج‌شنبه','جمعه','شنبه'],
		dayNamesShort: ['ی','د','س','چ','پ','ج', 'ش'],
		dayNamesMin: ['ی','د','س','چ','پ','ج', 'ش'],
		digits: $.calendars.substituteDigits(['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹']),
		dateFormat: 'mm/dd/yyyy',
		firstDay: 6,
		isRTL: true
	};
})(jQuery);
