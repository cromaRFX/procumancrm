var asolCalendar= (function($) {

	var context = {
		'language':'en_us',
		'format':'yyyy-mm-dd',
		'type':'gregorian',
		'weekStartsOn':'1',
		'gregorianEquivalency':false
	};
	var setContext=function(newContext){
		context=newContext;
	}
	
	var getContext=function(){
		return context;
	}

	var asolCalendarOnShow=function(embedGregorian,containerId,inputId){
		
		//***Fix for problem where calendar picker does not process dates with farsi characters, thus selected date not being visible on the picker.***
		if(context.type==='persian'&&context.language==='fa_ir'){
			//Take original input value, farsi, and convert this date to jd
			var persianDate=0;
			var currentDefaultDate=0;
			var currentInputValue=$(containerId).find('input[id='+inputId+'_date]').val();
			var currentJD=convertDate_persianFarsiToJD(currentInputValue);
			//Remove from all the a[class^='calendars-highlight'] elements, the class calendars-highlight.
			$("a[class^='calendars-highlight']").removeClass("calendars-highlight");
			//Get the element having the class with the value of the jd date obtained earlier, and add it the class calendars-selected.			
			$("a[class^='jd"+currentJD+"']").addClass("calendars-selected");
			//This lines avoid the gregorian equivalency to be shown duplicated.
			if(currentInputValue!=null&&currentInputValue.length>0){
				var persianDateValues=convertDate_JD_toPersian(currentJD);
				persianDate=context.format.replace('yyyy', persianDateValues.year).replace('mm', persianDateValues.month).replace('dd', persianDateValues.day);
				
				currentDefaultDate=$(containerId).find("input[id='"+inputId+"_date']").calendarsPicker('option','defaultDate');
			}
			if(currentDefaultDate==persianDate){
				if(embedGregorian){
					showGregorianDates();
					//Remove highlight class from gregorian date cell
					$("a[class^='jd'] span[class^='gregorianDate_day']").removeClass("calendars-highlight");
				}
			}
		//***End of the fix***
		}else{
			//If showing gregorian calendar dates and nonstandard calendar dates is required.
			if(embedGregorian){
				showGregorianDates();
				//Remove highlight class from gregorian date cell
				$("a[class^='jd'] span[class^='gregorianDate_day']").removeClass("calendars-highlight");
			}
		}
		$("a[class^='jd']").click(function(event){
			//Obtener el origen del evento, y su JD
			var classes=event.target.className;
			var selectedJD="";
			if(classes.indexOf("j")==0){
				selectedJD=parseFloat(classes.substring(2,classes.indexOf(".")+2))
			}else{
				selectedJD=parseFloat(classes.substring("gregorianDate_day jd".length,classes.indexOf(".")+2))
			}
			var dateConverted=convertDate_julianToGregorian(selectedJD);
			dateConverted=new Date(dateConverted[1]+"/"+dateConverted[0]+"/"+dateConverted[2]);
			$(containerId).find("input[id='"+inputId+"']").val(dateConverted.format(context.format));
			//***Small continuation of fix for farsi characters, calendar does not show up on the selected date.
			if(context.type==='persian'&&context.language==='fa_ir'){
				var persianDateValues=convertDate_JD_toPersian(selectedJD);
				var persianDate=context.format.replace('yyyy', persianDateValues.year).replace('mm', persianDateValues.month).replace('dd', persianDateValues.day);
				
				$(containerId).find("input[id='"+inputId+"_date']").calendarsPicker('option','defaultDate',persianDate);
			}
		});
	}

	var showGregorianDates=function(){
		var calendarCells=$("a[class^='jd']");
	    var calendarCellClass="";
	    var cellJD=0;
	    var firstCellJD=0;
	    var lastCellJD=0;
	    var firstMonthYear=0;
	    var lastMonthYear=0;
			
	    var count=0;
		var skipMonth=false;
			
	    if(document.getElementById("gregorianMonthIdentificator")!=null){
	    	skipMonth=true;
	    }
	    for(var i=0;i<calendarCells.length;i++){
	    	calendarCellClass=calendarCells[i].className;
	    	if(i==0){
	    		if(skipMonth){
	    			i=30;
	    			skipMonth=false;
	    			calendarCellClass=calendarCells[i].className;
	    		}
	    		firstCellJD=parseFloat(calendarCellClass.substring(2,calendarCellClass.indexOf(".")+2));
	    	}
	    	if(i==calendarCells.length-1){
	    		lastCellJD=parseFloat(calendarCellClass.substring(2,calendarCellClass.indexOf(".")+2));
	    		if(firstCellJD>lastCellJD){
	    			firstMonthYear=convertDate_julianToGregorian(lastCellJD)[2];
	    			lastMonthYear=convertDate_julianToGregorian(firstCellJD)[2];
	    			if(firstMonthYear!=lastMonthYear){
	    				$(".calendars-nav").after("<div id='gregorianMonthIdentificator'>"+getMonthIdentificationTranslated(convertDate_julianToGregorian(lastCellJD)[1])+" "+lastMonthYear+" - "+getMonthIdentificationTranslated(convertDate_julianToGregorian(firstCellJD)[1])+" "+firstMonthYear+"</div>");
    				}else{
    					$(".calendars-nav").after("<div id='gregorianMonthIdentificator'>"+getMonthIdentificationTranslated(convertDate_julianToGregorian(lastCellJD-27)[1])+" - "+getMonthIdentificationTranslated(convertDate_julianToGregorian(firstCellJD-27)[1])+" "+firstMonthYear+"</div>");
					}
    			}else{
    				firstMonthYear=convertDate_julianToGregorian(firstCellJD)[2];
    				lastMonthYear=convertDate_julianToGregorian(lastCellJD)[2];
    				if(firstMonthYear!=lastMonthYear){
    					$(".calendars-nav").after("<div id='gregorianMonthIdentificator'>"+getMonthIdentificationTranslated(convertDate_julianToGregorian(firstCellJD)[1])+" "+firstMonthYear+" - "+getMonthIdentificationTranslated(convertDate_julianToGregorian(lastCellJD)[1])+" "+lastMonthYear+"</div>");
					}else{
						$(".calendars-nav").after("<div id='gregorianMonthIdentificator'>"+getMonthIdentificationTranslated(convertDate_julianToGregorian(firstCellJD)[1])+" - "+getMonthIdentificationTranslated(convertDate_julianToGregorian(lastCellJD)[1])+" "+lastMonthYear+"</div>");
					}
				}
    		}
	    	cellJD=parseFloat(calendarCellClass.substring(2,calendarCellClass.indexOf(".")+2));
	    	calendarCells[i].innerHTML+="<br><span class='gregorianDate_day "+calendarCellClass.trim()+"'>"+convertDate_julianToGregorian(cellJD)[0]+"</span>";
    	}
	}

	var convertToFarsiNumbers=function(traditionalNumbersText){
		return traditionalNumbersText.replace(/0/g,'۰').replace(/1/g,'۱').replace(/2/g,'۲').replace(/3/g,'۳').replace(/4/g,'۴').replace(/5/g,'۵').replace(/6/g,'۶').replace(/7/g,'۷').replace(/8/g,'۸').replace(/9/g,'۹');
	}
	
	var getMonthIdentificationTranslated=function(month){
		var translated;
		var months;
		var langKey;
		for(var property in $.calendarsPicker.regionalOptions) {
			if(property.length>0){
				langKey=property;
			}else{
				langKey='';
			}
		}
		var regOptions=Object.keys($.calendarsPicker.regionalOptions);
		for(var i=0;i<regOptions.length;i++){
			if(regOptions[i]==langKey){
				if(langKey.length>0){
					months=$.calendarsPicker.regionalOptions[langKey].monthNames;
					if(typeof(months)=="undefined"){
						months=['January', 'February', 'March', 'April', 'May', 'June','July', 'August', 'September', 'October', 'November', 'December'];
					}
					break;
				}else{
					months=['January', 'February', 'March', 'April', 'May', 'June','July', 'August', 'September', 'October', 'November', 'December'];
				}
			}
		}
		switch(month){
			case 'January':
				translated=months[0];
				break;
			case 'February':
				translated=months[1];
				break;
			case 'March':
				translated=months[2];
				break;
			case 'April':
				translated=months[3];
				break;
			case 'May':
				translated=months[4];
				break;
			case 'June':
				translated=months[5];
				break;
			case 'July':
				translated=months[6];
				break;
			case 'August':
				translated=months[7];
				break;
			case 'September':
				translated=months[8];
				break;
			case 'October':
				translated=months[9];
				break;
			case 'November':
				translated=months[10];
				break;
			case 'December':
				translated=months[11];
				break;
			default:
				translated="Invalid";
				break;
		}
		return translated;
	}

	var removeCalendarInputValue=function(dashId,input){
		$(dashId).find('input[id="'+input+'"]').val('');
		$(dashId).find('input[id="'+input+'_date"]').val('');
		if(context.type==='persian'&&context.language==='fa_ir'){
			var persianDateValues=convertDate_gregorianToPersian(new Date().format(context.format));
			dateVal=context.format.replace('yyyy', persianDateValues.year).replace('mm', persianDateValues.month).replace('dd', persianDateValues.day);

			$(dashId).find('input[id="'+input+'_date"]').calendarsPicker('option','defaultDate',dateVal);
		}
	}

	var mod=function(a,b){
		return a - (b * Math.floor(a / b));
	}

	var toJD=function(year,month,day){
		var epBase = year - (year >= 0 ? 474 : 473);
		var epYear = 474 + mod(epBase, 2820);
		
		return day + 
			((month <= 7) ?
					((month - 1) * 31) :
					(((month - 1) * 30) + 6)
			)+
			Math.floor((epYear * 682 - 110) / 2816) + (epYear - 1) * 365 +
			Math.floor(epBase / 2820) * 1029983 + 1948320.5 - 1;
	}

	var convertDate_julianToGregorian=function(julianDate){
		var jd=julianDate+0.5;

		var I=Math.trunc(jd);
		var F=jd%1;

		var A= Math.trunc((I - 1867216.25)/36524.25);
		var B=0;
		if(I>2299160){
			B = I + 1 + A - Math.trunc(A / 4);
		}else{
			B=I;
		}
		var C=B+1524;
	    var D = Math.trunc((C - 122.1) / 365.25);
	    
	    var E = Math.trunc(365.25 * D);
	    
		var G = Math.trunc((C - E) / 30.6001);
		var day = C - E + F - Math.trunc(30.6001 * G);

		var month=0;

		if(G<13.5){
			month=G-1;
		}else{
			month=G-13;
		}

		var year=0;

		if(month>2.5){
			year=D-4716;
		}else{
			year=D-4715;
		}

		switch(month){
			case 1:
				month="January";
				break;
			case 2:
				month="February";
				break;
			case 3:
				month="March";
				break;
			case 4:
				month="April";
				break;
			case 5:
				month="May";
				break;
			case 6:
				month="June";
				break;
			case 7:
				month="July";
				break;
			case 8:
				month="August";
				break;
			case 9:
				month="September";
				break;
			case 10:
				month="October";
				break;
			case 11:
				month="November";
				break;
			case 12:
				month="December";
				break;
		}

		var date=[day,month,year];
		return date;
	}

	var convertDate_persianFarsiToJD=function(farsiDate){
		var parsedDate=parseDate(farsiDate.replace(/۰/g,'0').replace(/۱/g,'1').replace(/۲/g,'2').replace(/۳/g,'3').replace(/۴/g,'4').replace(/۵/g,'5').replace(/۶/g,'6').replace(/۷/g,'7').replace(/۸/g,'8').replace(/۹/g,'9'));
		
		var day=parsedDate.day;
		var month=parsedDate.month;
		var year=parsedDate.year;
		
		var epbase, epyear;

	    epbase = year - ((year >= 0) ? 474 : 473);
	    epyear = 474 + mod(epbase, 2820);

	    return( day +
	            ((month <= 7) ?
	                ((month - 1) * 31) :
	                (((month - 1) * 30) + 6)
	            ) +
	            Math.floor(((epyear * 682) - 110) / 2816) +
	            (epyear - 1) * 365 +
	            Math.floor(epbase / 2820) * 1029983 +
	            (1948320.5 - 1));
	}
	
	var parseDate=function(date){
		var separator=context.format.replace(/[a-zA-Z]/g,"")[0];
		var dateValues=date.split(separator);
		var formatValues=context.format.split(separator);
		var day="";
		var month="";
		var year="";
		switch(formatValues[0]){
			case "dd":
				day=dateValues[0];
				break;
			case "mm":
				month=dateValues[0];
				break;
			case "yyyy":
				year=dateValues[0];
				break;
		}
		switch(formatValues[1]){
			case "dd":
				day=dateValues[1];
				break;
			case "mm":
				month=dateValues[1];
				break;
			case "yyyy":
				year=dateValues[1];
				break;
		}
		switch(formatValues[2]){
			case "dd":
				day=dateValues[2];
				break;
			case "mm":
				month=dateValues[2];
				break;
			case "yyyy":
				year=dateValues[2];
				break;
		}
		return {
			'day':parseInt(day),
			'month':parseInt(month),
			'year':parseInt(year)
		}
	}
	
	var convertDate_gregorianToPersian=function(gregorianDate){
		
		var parsedDate=parseDate(gregorianDate);
		
		var day=parsedDate.day;
		var month=(parsedDate.month);
		var year=parsedDate.year;
		
		var yearp=0;
		var monthp=0;
		
		var B=0;
		var A=0;
		var C=0;
		
		var jd=0;
		
		if(month==1||month==2){
			yearp=year-1;
			monthp=month+12;
		}else{
			yearp=year;
			monthp=month;
		}
		if((year<1582)||(year==1582&&month<10)||(year==1582&&month==10&&day<15)){
			B=0;
		}else{
			A=Math.trunc(yearp/100);
			B=2 - A + Math.trunc(A / 4);
		}
		if(yearp<0){
			C = Math.trunc((365.25 * yearp) - 0.75);
		}else{
			C = Math.trunc(365.25 * yearp);
		}
		D = Math.trunc(30.6001 * (monthp + 1));
		jd=B + C + D + day + 1720994.5;
		
		return convertDate_JD_toPersian(jd);
	}

	var convertDate_JD_toPersian=function(jd){
		var jd = Math.floor(jd) + 0.5;
		var depoch = jd - toJD(475, 1, 1);
		var cycle = Math.floor(depoch / 1029983);
		var cyear = mod(depoch, 1029983);
		var ycycle=0;
		if (cyear == 1029982) {
	        ycycle = 2820;
	    }else{
			var aux1 = Math.floor(cyear / 366);
			var aux2 = mod(cyear, 366);
			ycycle = Math.floor(((2134 * aux1) + (2816 * aux2) + 2815) / 1028522) + aux1 + 1;
		}
		var year = ycycle + (2820 * cycle) + 474;
		if (year <= 0) {
	        year--;
	    }
		var yday = jd - toJD(year, 1, 1) + 1;
		var month = (yday <= 186 ? Math.ceil(yday / 31) : Math.ceil((yday - 6) / 30));
		var day = (jd - toJD(year, month, 1)) + 1;
		
		return {
			'year' : year,
			'month' : (month < 10 ? '0'+month : month),
			'day' : (day < 10 ? '0'+day : day),
		}

	}
	
	var initialize=function(containerId,inputID,editValue,inputClass,forceType){
		var containerRef = (containerId != null ? '#'+containerId : 'body');
		
		var originalInput=$(containerRef).find("input[id='"+inputID+"']");
		var originalInputVisible=$(containerRef).find("input[id='"+inputID+"']").css('display')!="none";
		
		originalInput.attr('id',inputID+"_date");
		originalInput.addClass("input");
		
		$(containerRef).find("input[id='"+inputID+"_date']").after("<input id='"+inputID+"' value='"+editValue+"' type='hidden'>");
		
		var dateToUseInput=$(containerRef).find("input[id='"+inputID+"']");
		var datePickerInput=$(containerRef).find("input[id='"+inputID+"_date']");
		
		if(inputClass!=null){
			dateToUseInput.attr('class',inputClass+" value");
		}
				
		switch(forceType ? forceType : context.type){
			case 'persian':
				switch(context.language){
					case 'fa_ir':
						var hasEditValue = (editValue.length > 0 ? true : false);
						if(!hasEditValue){
							//Coger lo que tiene realmente el input, si tiene algo.
							editValue=$(containerRef).find("input[id='"+inputID+"_date']").val();
							if("undefined" != typeof editValue && editValue.length > 0){
								editValue=convertDate_persianFarsiToJD(editValue);
								//Convertirlo a gregoriano
								editValue=convertDate_julianToGregorian(editValue);
								editValue=new Date(editValue[1]+"/"+editValue[0]+"/"+editValue[2]);
								editValue=editValue.format(context.format);
							}
						}
						//Necesitare convertir dateVal al otro calendario (de gregoriano a persa) y si aplica, convertir los digitos a los caracteres correspondientes.
		    			var dateVal=editValue;
		    			var formatError=false;

		    			if (dateVal !== '') {
		    				try{
		    					var persianDateValues=convertDate_gregorianToPersian(dateVal);
		    					dateVal=context.format.replace('yyyy', persianDateValues.year).replace('mm', persianDateValues.month).replace('dd', persianDateValues.day);
		    				}catch(err){
	    						var persianDateValues=convertDate_gregorianToPersian(new Date().format(context.format));
		    					dateVal=context.format.replace('yyyy', persianDateValues.year).replace('mm', persianDateValues.month).replace('dd', persianDateValues.day);
			    				formatError=true;
		    				}
		    			}
		    			
	    				datePickerInput.calendarsPicker({
							calendar: $.calendars.instance('persian','fa'),
							localNumbers: true,
							showOnFocus: false,
							firstDay:context.weekStartsOn,
							showTrigger:'<img class=\"asol_icon clickable calendarIcon '+inputClass+' trigger\" style=\"vertical-align: text-bottom;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAQCAYAAADJViUEAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB+ACAQ0YJkAiC9AAAADcSURBVCjPxdIhS0RREAXg78mCgl1kg2gQWVBmw4KCRbDZDArC/gTBtt36mn9CYQ0LBptg2WYQBI1WsQuatMyDWxR0RU+5Zzj3zMyduVVEwAxu8YQtn+Ma8+jitYVjrGEFixh+Yd7ANE5xV0XEux9iygRoYX8S8/Df2oYaNzjCCeawjTMc4ArPhd7DoDGPcYFdnGMJ7eRdXOKx0N/KygP0sZ4zmM0Ey1jNBC+F3i7fXOfUx3keYpR8lHGp1782sL9vu6m8mR9+AXu5qk7yDnZyVY3egyoi7vPCd/HwASJWNAUPk4f7AAAAAElFTkSuQmCC\">',
							showOtherMonths: true,
							dateFormat:context.format,
							yearRange:'c-100:c+50',
							//Calendar with farsi characters needs to be initialized with a default date set to the date value in the textfield.
							defaultDate: dateVal,
							onShow:function(){
								asolCalendarOnShow(context.gregorianEquivalency,containerRef,inputID);
							}
						});
	    				if(!formatError){
	    					dateVal=dateVal.replace(/0/g,'۰').replace(/1/g,'۱').replace(/2/g,'۲').replace(/3/g,'۳').replace(/4/g,'۴').replace(/5/g,'۵').replace(/6/g,'۶').replace(/7/g,'۷').replace(/8/g,'۸').replace(/9/g,'۹');
							datePickerInput.val(dateVal);
	    				}

		    			datePickerInput.calendarsPicker('option', {showAnim: '', showOptions: {}, showSpeed: 'normal'});
		    			$(containerRef).find("input[id='"+inputID+"_date']").siblings('.'+inputClass+'.trigger').after("<img class=\"asol_icon clickable calendarIcon "+inputClass+" cancel\" style=\"vertical-align: text-bottom;\" src=\"modules/asol_Common/include/client/images/asol_common_cancel.png\">");
		    			$(containerRef).find("input[id='"+inputID+"_date']").siblings('.'+inputClass+'.trigger').next().click(function(){
		    				removeCalendarInputValue(containerRef,inputID);
		    			});
						break;
					default:
						datePickerInput.calendarsPicker({
							calendar: $.calendars.instance('persian'),
							localNumbers: true,
							showOnFocus: false,
							firstDay:context.weekStartsOn,
							showTrigger:'<img class=\"asol_icon clickable calendarIcon '+inputClass+' trigger\" style=\"vertical-align: text-bottom;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAQCAYAAADJViUEAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB+ACAQ0YJkAiC9AAAADcSURBVCjPxdIhS0RREAXg78mCgl1kg2gQWVBmw4KCRbDZDArC/gTBtt36mn9CYQ0LBptg2WYQBI1WsQuatMyDWxR0RU+5Zzj3zMyduVVEwAxu8YQtn+Ma8+jitYVjrGEFixh+Yd7ANE5xV0XEux9iygRoYX8S8/Df2oYaNzjCCeawjTMc4ArPhd7DoDGPcYFdnGMJ7eRdXOKx0N/KygP0sZ4zmM0Ey1jNBC+F3i7fXOfUx3keYpR8lHGp1782sL9vu6m8mR9+AXu5qk7yDnZyVY3egyoi7vPCd/HwASJWNAUPk4f7AAAAAElFTkSuQmCC\">',
							showOtherMonths: true,
							dateFormat:context.format,
							yearRange:'c-100:c+50',
							onShow:function(){
								asolCalendarOnShow(context.gregorianEquivalency,containerRef,inputID);
							}
						});
						var dateVal=editValue;
						
						if(editValue!=null&&editValue.length>0){
							try{
								var persianDateValues=convertDate_gregorianToPersian(dateVal);
		    					dateVal=context.format.replace('yyyy', persianDateValues.year).replace('mm', persianDateValues.month).replace('dd', persianDateValues.day);
							}catch(err){}
							datePickerInput.val(dateVal);
						}
						
						datePickerInput.calendarsPicker('option', {showAnim: '', showOptions: {}, showSpeed: 'normal'});
						$(containerRef).find("input[id='"+inputID+"_date']").siblings('.'+inputClass+'.trigger').after("<img class=\"asol_icon clickable calendarIcon "+inputClass+" cancel\" style=\"vertical-align: text-bottom;\" src=\"modules/asol_Common/include/client/images/asol_common_cancel.png\">");
						$(containerRef).find("input[id='"+inputID+"_date']").siblings('.'+inputClass+'.trigger').next().click(function(){
		    				removeCalendarInputValue(containerRef,inputID);
		    			});
						break; 
				}
				break;
			default:
				$.localise(['modules/asol_Common/include/client/libraries/calendars/localizations/jquery.calendars', 'modules/asol_Common/include/client/libraries/calendars/localizations/jquery.calendars.picker'], context.language );
				datePickerInput.calendarsPicker({
					calendar: $.calendars.instance('gregorian',context.language.substring(2, 0)),
					showOnFocus: false,
					firstDay:context.weekStartsOn,
					showTrigger:'<img class=\"asol_icon clickable calendarIcon '+inputClass+' trigger\" style=\"vertical-align: text-bottom;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAQCAYAAADJViUEAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB+ACAQ0YJkAiC9AAAADcSURBVCjPxdIhS0RREAXg78mCgl1kg2gQWVBmw4KCRbDZDArC/gTBtt36mn9CYQ0LBptg2WYQBI1WsQuatMyDWxR0RU+5Zzj3zMyduVVEwAxu8YQtn+Ma8+jitYVjrGEFixh+Yd7ANE5xV0XEux9iygRoYX8S8/Df2oYaNzjCCeawjTMc4ArPhd7DoDGPcYFdnGMJ7eRdXOKx0N/KygP0sZ4zmM0Ey1jNBC+F3i7fXOfUx3keYpR8lHGp1782sL9vu6m8mR9+AXu5qk7yDnZyVY3egyoi7vPCd/HwASJWNAUPk4f7AAAAAElFTkSuQmCC\">',
					yearRange:'c-100:c+50',
					onShow:function(){
						asolCalendarOnShow(false,containerRef,inputID);
					},
					dateFormat:context.format,
					showOtherMonths: true
				});
				//No hace falta convertir de persa a gregoriano porque ya esta en gregoriano
				
				if(editValue!=null&&editValue.length>0){
					datePickerInput.val(editValue);
				}
				
				datePickerInput.calendarsPicker('option', {showAnim: '', showOptions: {}, showSpeed: 'normal'});
				$(containerRef).find("input[id='"+inputID+"_date']").siblings('.'+inputClass+'.trigger').after("<img class=\"asol_icon clickable calendarIcon "+inputClass+" cancel\" style=\"vertical-align: text-bottom;\" src=\"modules/asol_Common/include/client/images/asol_common_cancel.png\">");
				$(containerRef).find("input[id='"+inputID+"_date']").siblings('.'+inputClass+'.trigger').next().click(function(){
    				removeCalendarInputValue(containerRef,inputID);
    			});
				break;
		}
		if(!originalInputVisible){
			$(containerRef).find("input[id='"+inputID+"_date']").next('.'+inputClass+'.trigger').css('display', 'none');
			$(containerRef).find("input[id='"+inputID+"_date']").next('.'+inputClass+'.trigger').next().css('display', 'none');
		}
	}
	return {
		initialize : initialize,
		setContext : setContext,
		getContext : getContext,
		convertDate_gregorianToPersian : convertDate_gregorianToPersian,
		convertToFarsiNumbers : convertToFarsiNumbers
	};
	
})($);
