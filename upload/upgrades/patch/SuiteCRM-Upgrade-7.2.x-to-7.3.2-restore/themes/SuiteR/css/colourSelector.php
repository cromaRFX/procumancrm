<?php

// config|_override.php
if(is_file('../../../config.php')) {
    require_once('../../../config.php'); // provides $sugar_config
}

// load up the config_override.php file.  This is used to provide default user settings
if(is_file('../../../config_override.php')) {
    require_once('../../../config_override.php');
}

if(!isset($sugar_config['theme_settings']['SuiteR'])) return;

//set file type back to css from php
header("Content-type: text/css; charset: UTF-8");

?>

/* Header CSS */

h1, h2, h3, h4 {
color: #<?php echo $sugar_config['theme_settings']['SuiteR']['page_header']; ?>;

}

/* Pagelink CSS */

a, a:link, a:visited, .dashletPanel .h3Row h3, #dashletbuttons, .detail tr td a:link, .detail tr td a:visited, .detail tr td a:hover{
color: #<?php echo $sugar_config['theme_settings']['SuiteR']['page_link']; ?>;
}

/* Dashlet CSS */

.dashletPanel .h3Row{

background: #<?php echo $sugar_config['theme_settings']['SuiteR']['dashlet']; ?>;

}

/* Top navigation bar CSS */

.navbar-inverse {
background:#<?php echo $sugar_config['theme_settings']['SuiteR']['navbar'];?> !important;
}

.headerlinks a:link, .headerlinks a:visited, .navbar-inverse .navbar-brand, .moremenu a,  a[id^=grouptab], a[id^=moduleTab] {
background:none;
color:#<?php echo $sugar_config['theme_settings']['SuiteR']['navbar_font']; ?>;
}

@media(max-width:979px){
ul.navbar-nav li a,.navbar-inverse .navbar-nav .open .dropdown-menu > li > a, .moremenu ul li a {
color:#<?php echo $sugar_config['theme_settings']['SuiteR']['navbar_font']; ?>; !important;
}
}

ul.topnav li:hover, .dropdown-menu li a:hover, li#usermenu:hover, .moremenu ul li a:hover,ul.navbar-nav li:hover {
background:#<?php echo $sugar_config['theme_settings']['SuiteR']['navbar_hover']; ?> !important;
}

.headerlinks a:hover, .navbar-inverse .navbar-brand:hover {
color:#<?php echo $sugar_config['theme_settings']['SuiteR']['navbar_link_hover']; ?> !important;
}

/* Drop down menu CSS */

.dropdown-menu {
background:#<?php echo $sugar_config['theme_settings']['SuiteR']['dropdown_menu']; ?> !important;
}

.dropdown-menu li a, .dropdown-menu em a, .moremenu ul li a , #globalLinks ul li a, #quickcreatetop ul li a{
color:#<?php echo $sugar_config['theme_settings']['SuiteR']['dropdown_menu_link']; ?> !important;
}

.moremenu li a:hover, .dropdown-menu li a:hover, #globalLinks ul li a:hover, #quickcreatetop ul li a:hover{
color:#<?php echo $sugar_config['theme_settings']['SuiteR']['dropdown_menu_link_hover']; ?> !important;
}


.icon{
    fill: #<?php echo $sugar_config['theme_settings']['SuiteR']['icon']; ?> !important;
}

/* Button and action menu CSS */

button, .button, input[type="button"], input[type="reset"], input[type="submit"], a#create_link.utilsLink, .btn, .btn-success, .btn-primary, .button, input[type=submit], input[type=button], a#create_link.utilsLink, .btn-group a, ul.clickMenu>li, ul.SugarActionMenuIESub li, ul.SugarActionMenuIESub li a,
ul.clickMenu li a, .list tr.pagination td.buttons ul.clickMenu > li > a:link, .list tr.pagination td.buttons ul.clickMenu > li > a {
background:#<?php echo $sugar_config['theme_settings']['SuiteR']['button']; ?> !important;
color:#<?php echo $sugar_config['theme_settings']['SuiteR']['button_link']; ?> !important;
}

.btn:hover, .btn-success:hover, .btn-primary:hover, .button:hover, input[type=submit]:hover, input[type=button]:hover, a#create_link.utilsLink:hover, .btn-group a:hover, #globalLinksModule ul.clickMenu.SugarActionMenu li a:hover,
#globalLinksModule ul.clickMenu li:hover span,
ul.SugarActionMenuIESub li a:hover, ul.clickMenu.SugarActionMenu li a:hover, ul.clickMenu.SugarActionMenu li span.subhover:hover,
ul#globalLinksSubnav li a:hover, ul#quickCreateULSubnav li a:hover,
ul.clickMenu li ul.subnav li a:hover,ul.clickMenu li ul.subnav li input:hover, ul.clickMenu.subpanel.records li ul.subnav li a:hover, ul.clickMenu ul.subnav-sub li a:hover {
background:#<?php echo $sugar_config['theme_settings']['SuiteR']['button_hover']; ?> !important;
color:#<?php echo $sugar_config['theme_settings']['SuiteR']['button_link_hover']; ?> !important;
}