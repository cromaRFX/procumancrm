/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
 //*********************************
// SUBPANELS
//*********************************          
var cmodule="";



function sethide_filters()
{
 $(".search_form").toggleClass("form_show");
}

function show_all()
{
  SUGAR.searchForm.clear_form(document.getElementById("search_form"));
  document.getElementById("search_form").submit();
}


function active_filters()
{
 var fil="";
 var strvalue="";
 var strlabel="";
 var strname="";  
 var modulo=$('#search_form input[name=module]').val();
   if($('#'+modulo+'basic_searchSearchForm').attr('style')==0)
   {
      _obj=$('#'+modulo+'basic_searchSearchForm');
      strname="_basic";
   }
   else
   {
      _obj=$('#'+modulo+'advanced_searchSearchForm'); 
      strname="_advanced";
   } 
   _obj.find('tr').each(function(index) { 
   $(this).find('td').each(function(index) { 
        if(index%2 == 0)
        {
         strlabel=$(this).text();
        }
        else        
        {
          if($(this).find('select[id*="_choice"]').length>0) 
          {
            $(this).find('input').each(function(index) { 
             if($(this).val()!='')
               strvalue+=$(this).val()+' ';
            }); 
            if((strvalue!='')&&($(this).find('select').attr('name')!=undefined))
            {
              if($(this).find('select').attr('name').indexOf(strname)>0)
              {
               if($(this).find('select').length>0)
                  strvalue=$(this).find('select option:selected').text()+' '+strvalue;
              }  
            }              
          }
          else
          {
              if($(this).find('input').attr('name')!=undefined)
              {
                if($(this).find('input').attr('name').indexOf(strname)>0)
                {
                 if($(this).find('input:text').length>0) 
                    strvalue=$(this).find('input:text').val();
                 if($(this).find('input:radio').length>0)
                    strvalue=$(this).find('input:radio').val();
                 if($(this).find('input:checkbox').length>0)
                   if($(this).find('input:checkbox').is(':checked'))
                     strvalue='Yes';
                }  
              } 
              if($(this).find('select').attr('name')!=undefined)
              {
                if($(this).find('select').attr('name').indexOf(strname)>0)
                {
                 if($(this).find('select').length>0)
                    strvalue=$(this).find('select option:selected').text();
                }  
              } 
          }
                                       
        }
        if((strvalue!="")&&(strvalue!=null))
        {
        if(fil.length+strvalue.length<220)
          fil+=" <b>"+strlabel+"</b>=\'"+strvalue+"\'"; 
        else
          fil+="... and more";
          strvalue="";
          strlabel="";
 
        }             
    });
 });
 return fil;
}


                     
function setsubpanelsheader1(){
 
// listview

  if(($('.search_form').length>0)&&($('.moduleTitle').length>0))
  {
   if($('.search_form').find('input[name=module]').val()!=cmodule)
    {
      strhtml='<div class="moduleTitle"><h2>'+$('.moduleTitle > h2').text()+'</h2>';
      strhtml+='<div id="newsb" style="float:left;padding-left:30px;margin-top:-10px;"><input type="button" value=" '+SUGAR.language.get('app_strings', 'LBL_IAD_BREADCRUMB_FILTERS')+' " id="setfilters" class="button" onclick="sethide_filters(); return false;" tabindex="2">&nbsp;<input type="button" value="'+SUGAR.language.get('app_strings', 'LBL_IAD_BREADCRUMB_SHOW_ALL')+'" id="search_form_clear" name="clear" class="button" onclick="show_all(); return false;"  tabindex="2"></div>';  
      strhtml+='<div id="div_active_filters" style="float:left;padding-left:20px;">'+active_filters()+'</div></div>';
      $('.moduleTitle').html(strhtml); 
      cmodule =$('.search_form').find('input[name=module]').val();
      return;
    }                                   
    else
    {
//      $('#div_active_filters').html(active_filters());
    } 
  }     
  
// subpanels in detailview  
 if($('#subpanel_list').length>0)
  {
     setsubpanelsheader();
     return;  
  }

  setTimeout(setsubpanelsheader1,500);  

};



function setsubpanelsheader(){

$('#subpanel_list').css('visibility','visible');

  var grptab=document.getElementById('groupTabs');
  if(grptab)
  {
 return;
 } 
 
 var sp2 = document.getElementById('subpanel_list');
 var sp1 = document.createElement("ul");
 sp1.id="groupTabs";
 sp1.className="subpanelTablist";   
 var parentDiv = sp2.parentNode;
 parentDiv.insertBefore(sp1, sp2);
 grptab=sp1;

      
 var tabspanel=$('#subpanel_list > li'); 
 var _subpanelid=getCookie($('#formDetailView').find('input[name=module]').val());
 if(_subpanelid=="")     
   _subpanelid='dummy-'+0;             

 for(i=0; i<tabspanel.length; i++)  {     
     if(i>0)
       tabspanel[i].style.display='none';  
            
      var tabstitles =tabspanel[i].getElementsByTagName('table');
      if (document.all) // IE Stuff
        {
         namesubpanel=tabstitles[0].innerText;                
        }   
        else // Mozilla does not work with innerText
        {
         namesubpanel=tabstitles[0].textContent;
        }
 
      var li = document.createElement('li');
      var a = document.createElement('a');
      a.href="#";
      a.id="dummy-"+i;
      a.name=tabspanel[i].id;
      a.innerHTML=namesubpanel;
      if('dummy-'+i==_subpanelid)
      {
        a.className ='activesubpanel';
      } 
      if (window.addEventListener) 
          {  
              a.addEventListener('click', function(){ 
                  var tabsp=document.getElementById('subpanel_list').childNodes; 
                  for(k=0; k<tabsp.length; k++)  {     
                      tabsp[k].style.display='none';
                  }
                  var tabspsub=document.getElementById('groupTabs').childNodes; 
           
                  document.getElementById(this.name).style.display='inline';
                  for(k=0; k<$('#groupTabs >li').length; k++)  
                     $('#groupTabs >li:eq('+k+') a').removeClass('activesubpanel');
                  document.getElementById(this.id).className ='activesubpanel';
                  
                  setCookie($('#formDetailView').find('input[name=module]').val(),this.id,100);   
                  
                  (arguments[0].preventDefault)? arguments[0].preventDefault(): arguments[0].returnValue = false;           
                  }, false); 
          } 
          else
          { 
             if (window.attachEvent) {  
              a.attachEvent('onclick',  function(){              
                  var tabsp=document.getElementById('subpanel_list').childNodes; 
                  for(k=0; k<tabsp.length; k++)  {     
                      tabsp[k].style.display='none';
                  }
                  var tabspsub=document.getElementById('groupTabs').childNodes; 
         
                  document.getElementById(this.name).style.display='inline';
                  for(k=0; k<$('#groupTabs >li').length; k++)  
                     $('#groupTabs >li:eq('+k+') a').removeClass('activesubpanel');                  
                  document.getElementById(this.id).className ='activesubpanel';
                  (arguments[0].preventDefault)? arguments[0].preventDefault(): arguments[0].returnValue = false;     
              } ); 
             } 
          }   
      li.appendChild(a);
      
      grptab.appendChild(li);
    }   
    if(_subpanelid!='dummy-0')
    {
      var tabsp=document.getElementById('subpanel_list').childNodes; 
      for(k=0; k<tabsp.length; k++)  {     
          tabsp[k].style.display='none';
      }
      var tabspsub=document.getElementById('groupTabs').childNodes;  
      document.getElementById(tabspanel[_subpanelid.replace('dummy-','')].id).style.display='inline';
    }
                           
};  

//*********************************
// FUNZIONI GENERICHE
//*********************************
function setCookie(name, value, expires, path, domain, secure){
	document.cookie = name + "=" + escape(value) + "; ";	
	if(expires){
		expires = setExpiration(expires);
		document.cookie += "expires=" + expires + "; ";
	}
	if(path){
		document.cookie += "path=" + path + "; ";
	}
	if(domain){
		document.cookie += "domain=" + domain + "; ";
	}
	if(secure){
		document.cookie += "secure; ";
	}
}

function setExpiration(cookieLife){
    var today = new Date();
    var expr = new Date(today.getTime() + cookieLife * 24 * 60 * 60 * 1000);
    return  expr.toGMTString();
}
function getCookie(w){
	cName = "";
	pCOOKIES = new Array();
	pCOOKIES = document.cookie.split('; ');
	for(bb = 0; bb < pCOOKIES.length; bb++){
		NmeVal  = new Array();
		NmeVal  = pCOOKIES[bb].split('=');
		if(NmeVal[0] == w){
			cName = unescape(NmeVal[1]);
		}
	}
	return cName;
}
function is_int(value){ 
  if((parseFloat(value) == parseInt(value)) && !isNaN(value)){
       return true;
   } else { 
      return false;
   } 
}




$(document).ready(function () {


    loadSidebar();
    $("ul.clickMenu").each(function (index, node) {
        $(node).sugarActionMenu();
    });
    // Back to top animation
    $('#backtotop').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop:0}, 500); // Scroll speed to the top
    });
  
  setsubpanelsheader1();
});
YAHOO.util.Event.onAvailable('sitemapLinkSpan', function () {
    document.getElementById('sitemapLinkSpan').onclick = function () {
        ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_LOADING_PAGE'));
        var smMarkup = '';
        var callback = {
            success: function (r) {
                ajaxStatus.hideStatus();
                document.getElementById('sm_holder').innerHTML = r.responseText;
                with (document.getElementById('sitemap').style) {
                    display = "block";
                    position = "absolute";
                    right = 0;
                    top = 80;
                }
                document.getElementById('sitemapClose').onclick = function () {
                    document.getElementById('sitemap').style.display = "none";
                }
            }
        }
        postData = 'module=Home&action=sitemap&GetSiteMap=now&sugar_body_only=true';
        YAHOO.util.Connect.asyncRequest('POST', 'index.php', callback, postData);
    }
});
function IKEADEBUG() {
    var moduleLinks = document.getElementById('moduleList').getElementsByTagName("a");
    moduleLinkMouseOver = function () {
        var matches = /grouptab_([0-9]+)/i.exec(this.id);
        var tabNum = matches[1];
        var moduleGroups = document.getElementById('subModuleList').getElementsByTagName("span");
        for (var i = 0; i < moduleGroups.length; i++) {
            if (i == tabNum) {
                moduleGroups[i].className = 'selected';
            }
            else {
                moduleGroups[i].className = '';
            }
        }
        var groupList = document.getElementById('moduleList').getElementsByTagName("li");
        var currentGroupItem = tabNum;
        for (var i = 0; i < groupList.length; i++) {
            var aElem = groupList[i].getElementsByTagName("a")[0];
            if (aElem == null) {
                continue;
            }
            var classStarter = 'notC';
            if (aElem.id == "grouptab_" + tabNum) {
                classStarter = 'c';
                currentGroupItem = i;
            }
            var spanTags = groupList[i].getElementsByTagName("span");
            for (var ii = 0; ii < spanTags.length; ii++) {
                if (spanTags[ii].className == null) {
                    continue;
                }
                var oldClass = spanTags[ii].className.match(/urrentTab.*/);
                spanTags[ii].className = classStarter + oldClass;
            }
        }
        var menuHandle = moduleGroups[tabNum];
        var parentMenu = groupList[currentGroupItem];
        if (menuHandle && parentMenu) {
            updateSubmenuPosition(menuHandle, parentMenu);
        }
    };
    for (var i = 0; i < moduleLinks.length; i++) {
        moduleLinks[i].onmouseover = moduleLinkMouseOver;
    }
};
function updateSubmenuPosition(menuHandle, parentMenu) {
    var left = '';
    if (left == "") {
        p = parentMenu;
        var left = 0;
        while (p && p.tagName.toUpperCase() != 'BODY') {
            left += p.offsetLeft;
            p = p.offsetParent;
        }
    }
    var bw = checkBrowserWidth();
    if (!parentMenu) {
        return;
    }
    var groupTabLeft = left + (parentMenu.offsetWidth / 2);
    var subTabHalfLength = 0;
    var children = menuHandle.getElementsByTagName('li');
    for (var i = 0; i < children.length; i++) {
        if (children[i].className == 'subTabMore' || children[i].parentNode.className == 'cssmenu') {
            continue;
        }
        subTabHalfLength += parseInt(children[i].offsetWidth);
    }
    if (subTabHalfLength != 0) {
        subTabHalfLength = subTabHalfLength / 2;
    }
    var totalLengthInTheory = subTabHalfLength + groupTabLeft;
    if (subTabHalfLength > 0 && groupTabLeft > 0) {
        if (subTabHalfLength >= groupTabLeft) {
            left = 1;
        } else {
            left = groupTabLeft - subTabHalfLength;
        }
    }
    if (totalLengthInTheory > bw) {
        var differ = totalLengthInTheory - bw;
        left = groupTabLeft - subTabHalfLength - differ - 2;
    }
    if (left >= 0) {
        menuHandle.style.marginLeft = left + 'px';
    }
}
YAHOO.util.Event.onDOMReady(function () {
    if (document.getElementById('subModuleList')) {
        var parentMenu = false;
        var moduleListDom = document.getElementById('moduleList');
        if (moduleListDom != null) {
            var parentTabLis = moduleListDom.getElementsByTagName("li");
            var tabNum = 0;
            for (var ii = 0; ii < parentTabLis.length; ii++) {
                var spans = parentTabLis[ii].getElementsByTagName("span");
                for (var jj = 0; jj < spans.length; jj++) {
                    if (spans[jj].className.match(/currentTab.*/)) {
                        tabNum = ii;
                    }
                }
            }
            var parentMenu = parentTabLis[tabNum];
        }
        var moduleGroups = document.getElementById('subModuleList').getElementsByTagName("span");
        for (var i = 0; i < moduleGroups.length; i++) {
            if (moduleGroups[i].className.match(/selected/)) {
                tabNum = i;
            }
        }
        var menuHandle = moduleGroups[tabNum];
        if (menuHandle && parentMenu) {
            updateSubmenuPosition(menuHandle, parentMenu);
        }
    }
});
SUGAR.themes = SUGAR.namespace("themes");
SUGAR.append(SUGAR.themes, {
    allMenuBars: {}, setModuleTabs: function (html) {
        var el = document.getElementById('ajaxHeader');
        if (el) {
            $('#ajaxHeader').html(html);
            loadSidebar();
            if ($(window).width() < 979) {
                $('#bootstrap-container').removeClass('main');
            }
        }
    }, actionMenu: function () {
        $("ul.clickMenu").each(function (index, node) {
            $(node).sugarActionMenu();
        });
    }, loadModuleList: function () {
        var nodes = YAHOO.util.Selector.query('#moduleList>div'), currMenuBar;
        this.allMenuBars = {};
        for (var i = 0; i < nodes.length; i++) {
            currMenuBar = SUGAR.themes.currMenuBar = new YAHOO.widget.MenuBar(nodes[i].id, {
                autosubmenudisplay: true,
                visible: false,
                hidedelay: 750,
                lazyload: true
            });
            currMenuBar.render();
            this.allMenuBars[nodes[i].id.substr(nodes[i].id.indexOf('_') + 1)] = currMenuBar;
            if (typeof YAHOO.util.Dom.getChildren(nodes[i]) == 'object' && YAHOO.util.Dom.getChildren(nodes[i]).shift().style.display != 'none') {
                oMenuBar = currMenuBar;
            }
        }
        YAHOO.util.Event.onAvailable('subModuleList', IKEADEBUG);
    }, setCurrentTab: function () {
    }
});
YAHOO.util.Event.onDOMReady(SUGAR.themes.loadModuleList, SUGAR.themes, true);



// Custom jQuery for theme

// Script to toggle copyright popup
$( "button" ).click(function() {
    $( "#sugarcopy" ).toggle();

});

// Custom JavaScript for copyright pop-ups
$(function() {
    $( "#dialog, #dialog2" ).dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 100
        },
        hide: {
            effect: "fade",
            duration: 1000
        }
    });
    $( "#powered_by" ).click(function() {
        $( "#dialog" ).dialog( "open" );
        $("#overlay").show().css({"opacity": "0.5"});
    });
    $( "#admin_options" ).click(function() {
        $( "#dialog2" ).dialog( "open" );
    });
});

// Back to top animation
$('#backtotop').click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop:0}, 500); // Scroll speed to the top
});

// Tabs jQuery for Admin panel
$(function() {
    var tabs = $( "#tabs" ).tabs();
    tabs.find( ".ui-tabs-nav" ).sortable({
        axis: "x",
        stop: function() {
            tabs.tabs( "refresh" );
        }
    });
});

var checkContents = setInterval(function(){
    if ($(".list.view").length > 0 || $(".list.View").length > 0){ // Check if element has been found

        if($(".list.view").length > 0){
            element = $(".list.view");
        }

        if($(".list.View").length > 0){
            element = $(".list.View");
        }

        //$('#dashletPanel th:not(:first-child)').attr("data-hide","phone, tablet");
        //$('#subPanel th:not(:first-child)').attr("data-hide","phone, tablet");
        $(element).footable();
        //$(".footable").find("th:first").attr("data-toggle","true");

        // Button to toggle list view search
        $('.showsearch').click(function() {
            $('.search_form').toggle();
        });
        $('#userlinks_togglemobilesearch').click(function() {
            $('#searchmobile').toggle('slide', {direction: 'left'}, '350');
        });

        clearInterval(checkContents);
    }
},1);

// JavaScript fix to remove unrequired classes on smaller screens where sidebar is obsolete
$(window).resize(function () {
    if ($(window).width() < 979) {
        $('#bootstrap-container').removeClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 sidebar main');
    }
    if ($(window).width() > 980 && $('.sidebar').is(':visible')) {
        $('#bootstrap-container').addClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main');
    }
    if ($('.navbar-nav').width() < 600 && $(window).width() > 980){
        $('#usermenucollapsed, #searchbutton').css({
            'display': 'none'
        });
        $('#searchform').css({
            'display': 'inline'
        })
            $('#usermenu').css({
            'display': 'inline',
            'padding' :'0',
            //'border-left' :'1px solid #bbbbbb',
            'margin': '0 0 0 10px',
            'font-size':'1.1em'
        });

    }
});

// jQuery to toggle sidebar
function loadSidebar() {
    if($('#sidebar_container').length) {
        $('#buttontoggle').click(function () {
            $('.sidebar').toggle();
            if ($('.sidebar').is(':visible')) {
                $.cookie('sidebartoggle', 'expanded');
                $('#bootstrap-container').addClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2');
                $('#buttontoggle').css({
                    'left': "+=215px"
                });
            }
            if ($('.sidebar').is(':hidden')) {
                $.cookie('sidebartoggle', 'collapsed');
                $('#bootstrap-container').removeClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 col-sm-3 col-md-2 sidebar');
                $('#buttontoggle').css({
                    'left': "-=215px"
                });
            }
        });
        var sidebartoggle = $.cookie('sidebartoggle');
        if (sidebartoggle == 'collapsed') {
            $('.sidebar').hide();
            $('#bootstrap-container').removeClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 col-sm-3 col-md-2 sidebar');
        }
        else {
            $('#bootstrap-container').addClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2');
            $('#buttontoggle').css({
                'left': "+=215px"
            });
        }
    }
}

update_screen_resolution();

    $(window).resize(function () {
        update_screen_resolution();
    });

function update_screen_resolution(){
    $.ajax({
        url: 'index.php?module=Calendar&action=processScreenSize',
        type: 'post',
        data: { 'width' : $( window ).width(), 'height' : $( window ).height(), 'to_pdf': true}
    });
}

// Alerts Notification
$(document).ready(function() {
    $('#alert-nav').click(function() {
        $('#alert-nav #alerts').css('display', 'inherit');
    });
});

// End of custom jQuery
