<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/






$mod_strings = array (
'LBL_EDIT_LAYOUT'=>'Plan Düzenle',
'LBL_EDIT_ROWS'=>'Satırları Düzenle',
'LBL_EDIT_COLUMNS'=>'Kolonları Düzenle',
'LBL_EDIT_LABELS'=>'Etiketleri Düzenle',
'LBL_EDIT_FIELDS'=>'Özel Alanları Düzenle',
'LBL_ADD_FIELDS'=>'Özel Alan Ekle',
'LBL_DISPLAY_HTML'=>'HTML Kodunu Görüntüle',
'LBL_SELECT_FILE'=> 'Dosya Seçin:',
'LBL_SAVE_LAYOUT'=> 'Planı kaydet',
'LBL_SELECT_A_SUBPANEL' => 'Bir altpanel seç',
'LBL_SELECT_SUBPANEL' => 'Altpanel seç',
'LBL_MODULE_TITLE' => 'Stüdyo',
'LBL_TOOLBOX' => 'Araçkutusu',
'LBL_STAGING_AREA' => 'Hazırlanma Alanı (öğeleri buraya sürükle bırak)',
'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Bin (click items to add to staging area)',
'LBL_VIEW_SUGAR_FIELDS' => 'View SuiteCRM Fields',
'LBL_VIEW_SUGAR_BIN' => 'View SuiteCRM Bin',
'LBL_FAILED_TO_SAVE' => 'Kaydetme işlemi başarısız oldu',
'LBL_CONFIRM_UNSAVE' => 'Yaptığınız hiçbir değişiklik kaydedilmeyecek. Devam etmek istediğinizden emin misiniz?',
'LBL_PUBLISHING' => 'Yayınlanıyor...',
'LBL_PUBLISHED' => 'Yayınlandı',
'LBL_FAILED_PUBLISHED' => 'Yayınlama işlemi başarısız oldu',
'LBL_DROP_HERE' => 'Buraya bırak',

//CUSTOM FIELDS
'LBL_NAME'=>'İsim',
'LBL_LABEL'=>'Etiket',
'LBL_MASS_UPDATE'=>'Miktar Güncelleme',
'LBL_AUDITED'=>'Denetleme',
'LBL_CUSTOM_MODULE'=>'Modül',
'LBL_DEFAULT_VALUE'=>'Varsayılan Değer',
'LBL_REQUIRED'=>'Gerekli',
'LBL_DATA_TYPE'=>'Cinsi',


'LBL_HISTORY'=>'Tarihçe',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'Bugün ne yapmak istersiniz?<br />Lütfen aşağıdaki seçeneklerden seçiminizi yapınız.',
'LBL_SW_EDIT_MODULE'=>'Bir Modülü Düzenle',
'LBL_SW_EDIT_DROPDOWNS'=>'Açılan Listeleri Düzenle',
'LBL_SW_EDIT_TABS'=>'Sekmeleri Yapılandır',
'LBL_SW_RENAME_TABS'=>'Sekmeleri Yeniden Adlandır',
'LBL_SW_EDIT_GROUPTABS'=>'Grup Sekmelerini Yapılandır',
'LBL_SW_EDIT_PORTAL'=>'Portalı Düzenle',
'LBL_SW_EDIT_WORKFLOW'=>'İş Akışlarını Düzenle',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Özel Alanları Onar',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Özel Alanları Taşı',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'Aşağıdan bir modül seçiniz.',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'İlgili modül ile ne yapmak istersiniz?<br />Lütfen almak istediğiniz aksiyonu seçiniz.',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Özel Alanları Düzenle',
'LBL_SMA_EDIT_LAYOUT'=>'Plan Düzenle',
'LBL_SMA_EDIT_LABELS' =>'Etiketleri Düzenle',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Önizleme',
'LBL_MB_RESTORE'=>'Geri Yükle',
'LBL_MB_DELETE'=>'Sil',
'LBL_MB_COMPARE'=>'Karşılaştır',
'LBL_MB_WELCOME'=> 'Tarihçe üzerinde çalıştığınız dosyada daha önce konumlandırılmış değişiklikleri görüntüleyebilmenizi sağlar. Önceki versiyonları karşılaştırabilir ve geri yükleyebilirsiniz. Eğer bir dosyayı geri yüklerseniz ilgili dosya çalışma dosyası olacaktır. Herkes için görünebilir olmadan önce ilgili dosyayı konumlandırmalısınız.<br />Bu gün ne yapmak istersiniz?<br />LÜtfen aşağıdaki seçeneklerden seçiminizi yapınız.',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Bir Açılan Liste Oluştur',
'LBL_ED_WELCOME'=>'Mevcuttaki açılan listeyi düzenleyebilir veya yeni bir açılan liste oluşturabilirsiniz.',
'LBL_DROPDOWN_NAME' => 'Açılan Liste İsmi:',
'LBL_DROPDOWN_LANGUAGE' => 'Açılan Liste Dili',
'LBL_TABGROUP_LANGUAGE' => 'Dil',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'Mevcuttaki özel alanı görüntüler, düzenler ve yeni bir özel alan yaratır veya özel alan önbelleğini temizleyebilirsiniz.',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Özel Alanları Görüntüle',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Özel Alan Oluştur',
'LBL_EC_CLEAR_CACHE'=>'Önbelleği Temizle',

//SELECT MODULE
'LBL_SM_WELCOME'=> 'Görütülemek istediğiniz dosyayı seçiniz.',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Değeri Görüntüle',
'LBL_DD_DATABASEVALUE'=>'Veritabanı Değeri',
'LBL_DD_ALL'=>'Tümü',

//BUTTONS
'LBL_BTN_SAVE'=>'Kaydet',
'LBL_BTN_CANCEL'=>'Vazgeç',
'LBL_BTN_SAVEPUBLISH'=>'Kaydet & Yaygınlaştır',
'LBL_BTN_HISTORY'=>'Tarihçe',
'LBL_BTN_NEXT'=>'Sonraki',
'LBL_BTN_BACK'=>'Geri',
'LBL_BTN_ADDCOLS'=>'Kolonlar Ekle',
'LBL_BTN_ADDROWS'=>'Satırlar Ekle',
'LBL_BTN_UNDO'=>'Geri Al',
'LBL_BTN_REDO'=>'İleri Al',
'LBL_BTN_ADDCUSTOMFIELD'=>'Özel Alan Ekle',
'LBL_BTN_TABINDEX'=>'Sekme Emrini Düzenle',

//TABS
'LBL_TAB_SUBTABS'=>'Alt Sekmeler',
'LBL_MODULES'=>'Modüller',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Yönetim',
'LBL_CONFIGURE_GROUP_TABS' => 'Gruplanmış Modülleri Yapılandır',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'Aşağıdaki gruplar Gruplanmış Modülleri görüntülemeyi seçen kullanıcılar için navigasyon barında gösterilecek. Modülleri ileriye geriye sürükleyerek ve bırakarak grupların altında hangi modüllerin yer alacağını yapılandırabilirsiniz.<br />Not: Boş gruplar navigasyon barda görüntülenmeyecektir.',
'LBL_RENAME_TAB_WELCOME'=>'Sekmeyi yeniden adlandırmak için aşağıdaki tabloda yer alan Değeri Görüntüle sekmesini tıklayınız.',
'LBL_DELETE_MODULE'=>'Modülleri ortadan kaldır<br />Gruptan',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Navigasyon bardaki "Diğer" sekmesini görüntülemeyi seçiniz."Diğer" sekmesi diğer gruplarda henüz var olmayan modülleri gösterir.',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Uygun bir dil seçiniz, Grup etiketlerini düzenleyiniz ve Kaydet & Yaygınlaştır\'a tıklayarak seçilen dili etiketlere uygulayınız.',
'LBL_ADD_GROUP'=>'Grup Ekle',
'LBL_NEW_GROUP'=>'Yeni Grup',
'LBL_RENAME_TABS'=>'Sekmeleri Yeniden Adlandır',
'LBL_DISPLAY_OTHER_TAB' => '"Diğer" Sekmesini Görüntüle',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Varsayılan',
'LBL_ADDITIONAL'=>'İlave',
'LBL_AVAILABLE'=>'Kullanılabilir',
'LBL_LISTVIEW_DESCRIPTION'=>'Aşağıda 3 kolon görünmektedir. Varsayılan kolon bir liste görünümünde belirtilen alanlar içermektedir. İlave edilen kolon bir kullanıcının özel bir görünüm yaratmak için seçebileceği alanları içermektedir. Kullanılacak olan kolon kullanıcılara bir admin gibi varsayılan veya ilave edilen kolonlara ekleyebilceğiniz alanları gösterir.',
'LBL_LISTVIEW_EDIT'=>'Liste Görünümü Düzenleyici',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Hata: Alan zaten mevcut.',
'ERROR_INVALID_KEY_VALUE'=> "Hata: Geçersiz değer [']",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'SuiteCRM Portal',
'LBL_SMP_WELCOME'=>'Aşağıdaki listeden düzenlemek istediğiniz modülü seçiniz.',
'LBL_SP_WELCOME'=>'Welcome to Studio for SuiteCRM Portal. You can either choose to edit modules here or sync to a portal instance.<br> Please choose from the list below.',
'LBL_SP_SYNC'=>'Portal Senkronizasyon',
'LBL_SYNCP_WELCOME'=>'Please enter the url to the portal instance you wish to update then press the Go button.<br> This will bring up a prompt for your user name and password.<br> Please enter your SuiteCRM user name and password and press the Begin Sync button.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Aşağıda iki kolon yer almaktadır: Varsayılan alanlar görüntülenebilen ve Kullanılabilir alanlar ise görüntülenemeyen ama kullanılması ve görüntülenmesi mümkün olan alanları içermektedir. Sadece alanları iki kolon arasında sürükleyiniz. İlgili alanları sürükleyerek ve bırakarak aynı zamanda öğeleri kolon içinde yeniden düzenleyebilirsiniz.',
'LBL_SP_STYLESHEET'=>'Bir Style Sheet yükle',
'LBL_SP_UPLOADSTYLE'=>'Bilgisayarınızdan tarama düğmesine tıklayın ve yüklenecek bir style sheet seçiniz.<br />Bir dahaki senkronizasyon gerçekleştirme işleminde style sheet portal ile birlikte getirilecektir.',
'LBL_SP_UPLOADED'=> 'Yüklendi',
'ERROR_SP_UPLOADED'=>'Lütfen bir css style sheet yüklediğinizden emin olunuz.',
'LBL_SP_PREVIEW'=>'Burada style sheet\'in neye benzeyeceğinin bir önizlemesi yer almaktadır.',

	'LBL_SAVE' => 'Kaydet' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'İşlemi Geri al' /*for 508 compliance fix*/,
	'LBL_REDO' => 'İşlemi Tekrar et' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Sil' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Alan Ekle' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'En üst düzeye çıkar' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimize' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'Yayınla' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Satır Ekle' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Alan Ekle' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Düzenle' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Select the language to edit.',
'LBL_SINGULAR' => 'Singular Label',
'LBL_PLURAL' => 'Plural Label',
'LBL_RENAME_MOD_SAVE_HELP' => 'Click <b>Save</b> to apply the changes.'

);
?>