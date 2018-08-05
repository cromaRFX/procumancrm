<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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


$mod_strings = array(
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Hide Options' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Hapus' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Berikan Nama untuk paket tersebut. Nama yang Anda masukkan harus alfanumerik dan tidak berisi spasi. (Contoh: HR_Management) Anda dapat memberikan karangan dan Deskripsi informasi untuk paket. Klik Save untuk membuat paket.',
            'modify' => 'Properties dan kemungkinan tindakan untuk Paket muncul di sini. Anda dapat memodifikasi Nama, Pengarang dan Deskripsi dari paket, serta melihat dan menyesuaikan semua modul yang terdapat dalam paket. Klik Modul Baru untuk membuat modul paket. Jika paket berisi setidaknya satu modul, Anda dapat Mempublikasikan dan menyebarkan paket, serta memnyesuaikan Ekspor yang dibuat dalam paket. ',
            'name' => 'Ini adalah Nama dari paket saat ini. Nama yang Anda masukkan harus alfanumerik, mulailah dengan surat dan tidak mengandung spasi. (Contoh: HR_Management) ',
            'author' => 'Ini adalah Pengarang yang ditampilkan sewaktu instalasi sebagai nama entitas yang menciptakan paket. Penulis dapat berupa perorangan atau perusahaan. ',
            'description' => 'Ini adalah Keterangan dari paket yang ditampilkan sewaktu instalasi.',
            'publishbtn' => 'Klik Publish untuk menyimpan semua data masuk dan untuk membuat file. zip yang merupakan versi diinstal paket. Gunakan Modul Loader untuk meng-upload file. zip dan menginstal paket. ',
            'deploybtn' => 'Klik Deploy untuk menyimpan semua data entry dan untuk menginstal paket, termasuk semua modul, dalam contoh saat ini.',
            'duplicatebtn' => 'Klik duplicate untuk menyalin isi dari paket ke paket baru dan untuk menampilkan paket baru. Untuk paket baru, nama baru akan dihasilkan secara otomatis dengan menambahkan nomor ke akhir nama dari paket yang digunakan untuk membuat yang baru. Anda dapat mengubah nama paket baru dengan memasukkan Nama baru dan mengklik Simpan. ',
            'exportbtn' => 'Klik Export untuk membuat file. zip yang berisi penyesuaian yang dibuat dalam paket. file yang dihasilkan bukan merupakan versi diinstal paket. Gunakan Modul Loader untuk mengimpor file. zip dan untuk memiliki paket, termasuk kustomisasi, muncul dalam Modul Builder. ',
            'deletebtn' => 'Klik delete untuk menghapus paket ini dan semua file yang berhubungan dengan paket ini.',
            'savebtn' => 'Klik save untuk menyimpan semua data yang dimasukkan berkaitan dengan paket.',
            'existing_module' => 'Klik Module icon untuk mengedit dan menyesuaikan properti Field, relationship dan layout yang terkait dengan modul.',
            'new_module' => 'Klik New Module akan digunakan untuk prefiks semua direktori, nama kelas dan tabel database untuk semua modul dalam paket saat ini. Tombol ini digunakan dalam upaya untuk mencapai keunikan nama tabel. ',
            'key' => 'This 5-letter, alphanumeric <b>Key</b> will be used to prefix all directories, class names and database tables for all of the modules in the current package.<br><br>The key is used in an effort to achieve table name uniqueness.',
            'readme' => 'Klik add Readme text untuk paket ini. Readme akan tersedia pada saat instalasi.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Provide a <b>Name</b> for the module. The <b>Label</b> that you provide will appear in the navigation tab. <br/><br/>Choose to display a navigation tab for the module by checking the <b>Navigation Tab</b> checkbox.<br/><br/>Then choose the type of module you would like to create. <br/><br/>Select a template type. Each template contains a specific set of fields, as well as pre-defined layouts, to use as a basis for your module. <br/><br/>Click <b>Save</b> to create the module.',
            'modify' => 'You can change the module properties or customize the <b>Fields</b>, <b>Relationships</b> and <b>Layouts</b> related to the module.',
            'importable' => 'Memeriksa importable Checkbox akan mengimpor untuk mengaktifkan modul ini. Sebuah link ke Import Wizard akan muncul di panel shortcut dalam modul. Wizard Impor memfasilitasi impor data source dari eksternal ke modul Custom. ',
            'team_security' => 'Memeriksa Tim Security kotak centang akan mengaktifkan keamanan tim untuk modul ini. tim keamanan Jika diaktifkan, Field pilihan Tim akan ditampilkan dalam catatan dalam modul ',
            'reportable' => 'Memeriksa kotak ini akan memungkinkan modul ini untuk mendapatkan laporan dijalankan terhadap itu.',
            'assignable' => 'Memeriksa kotak ini akan memungkinkan catatan dalam modul ini akan ditugaskan untuk pengguna yang dipilih.',
            'has_tab' => 'Memeriksa Navigasi Tab akan menyediakan tab untuk navigasi modul.',
            'acl' => 'Memeriksa kotak ini akan memungkinkan Kontrol akses pada modul ini, termasuk Field Level Security.',
            'studio' => 'Memeriksa kotak ini akan memungkinkan administrator untuk mengkustomisasi modul ini dalam Studio.',
            'audit' => 'Memeriksa kotak ini akan memungkinkan Audit untuk modul ini. Perubahan pada Field tertentu akan dicatat sehingga administrator dapat memeriksa Histori perubahan. ',
            'viewfieldsbtn' => 'Klik Lihat Fields untuk melihat Field yang berhubungan dengan modul dan untuk membuat dan mengedit kolom kustom.',
            'viewrelsbtn' => 'Klik Lihat Hubungan untuk melihat hubungan yang berkaitan dengan modul ini dan untuk menciptakan hubungan baru.',
            'viewlayoutsbtn' => 'Klik Lihat Layouts untuk melihat layout untuk modul dan untuk menyesuaikan pengaturan kolom dalam layout.',
            'duplicatebtn' => 'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module. <br/><br/>For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.',
            'deletebtn' => 'Click <b>Delete</b> to delete this module.',
            'name' => 'This is the <b>Name</b> of the current module.<br/><br/>The name must be alphanumeric and must start with a letter and contain no spaces. (Example: HR_Management)',
            'label' => 'Ini adalah Label yang akan muncul di tab untuk navigasi modul. ',
            'savebtn' => 'Click <b>Save</b> to save all entered data related to the module.',
            'type_basic' => 'menyediakan jenis template Field dasar, seperti Nama, Diberikan pada, Tim, Tanggal Dibuat dan Deskripsi Field.',
            'type_company' => 'Perusahaan menyediakan jenis template organisasi-Field tertentu, seperti Nama Perusahaan, Industri, dan Penagihan Alamat. Gunakan template ini untuk membuat modul yang sama Account standar modul. ',
            'type_issue' => 'Masalah menyediakan jenis template case-dan bug-field tertentu, seperti Nomor, Status, Prioritas dan Description. Gunakan template ini untuk membuat modul yang serupa dengan standar dan Bug Tracker Kasus modul. ',
            'type_person' => 'menyediakan jenis template individu-Field tertentu, seperti Penghormatan, Judul, Nama, Alamat dan Nomer Telepon. Gunakan template ini untuk membuat modul yang serupa dengan standar Leads Kontak dan modul. ',
            'type_sale' => 'Penjualan jenis template yang memberikan Peluang Bidang spesifik, seperti Lead Source, Stage, Jumlah dan Probabilitas. Gunakan template ini untuk membuat modul yang serupa dengan modul Peluang standar. ',
            'type_file' => 'menyediakan template Dokumen field tertentu, seperti Nama File, jenis dokumen, dan mempublikasikan Tanggal. Gunakan template ini untuk membuat modul yang serupa dengan Dokumen standar modul. ',

        ),
        'dropdowns' => array(
            'default' => 'Semua dropdown  untuk aplikasi yang terdaftar di sini. dropdown dapat digunakan untuk dropdown Field dalam setiap modul. Untuk membuat perubahan pada menu dropdown yang ada, klik pada nama dropdown. Klik Tambahkan Dropdown untuk membuat drop-down yang baru. ',
            'editdropdown' => 'Dropdown daftar dapat digunakan untuk standar atau Field dropdown Custom dalam setiap modul. Menyediakan Nama untuk Daftar dropdown. Jika ada paket bahasa yang diinstal di aplikasi, Anda dapat memilih Bahasa untuk digunakan ke daftar item. Dalam Nama Barang, memberikan nama untuk pilihan dalam daftar drop-down. Nama ini tidak akan muncul dalam daftar drop-down yang dapat dilihat oleh pengguna. Dalam Tampilan Label, memberikan label yang akan terlihat oleh pengguna. Setelah memberikan nama item dan menampilkan label, klik Add untuk menambahkan item ke daftar dropdown. Untuk menyusun ulang item dalam daftar, drag dan drop item ke posisi yang dikehendaki. Untuk mengedit tampilan label item, klik icon Edit, dan masukkan sebuah label baru. Untuk menghapus item dari daftar dropdown, klik Delete Icon. Untuk membatalkan perubahan yang dibuat untuk sebuah Penampilan label, klik Undo. Mengulang perubahan yang dibatalkan, klik Redo. Klik Save untuk menyimpan daftar dropdown. ',

        ),
        'subPanelEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Klik Lihat Histori untuk melihat dan memulihkan layout yang sudah disimpan sebelumnya dari Histori.',
            'historyDefault' => 'Klik <b>Restore Default</b> untuk restore view ke layout original.',
            'Hidden' => 'field  Tersembunyi tidak muncul dalam subpanel.',
            'Default' => 'Default Field muncul di subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Hidden' => '<b>Hidden</b> fields not currently available for users to see in ListViews.',
            'Available' => '<b>Available</b> fields are not shown by default, but can be added to ListViews by users.',
            'Default' => '<b>Default</b> fields appear in ListViews that are not customized by users.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
        ,
            'savebtn' => 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Hidden' => '<b>Hidden</b> fields not currently available for users to see in ListViews.',
            'Default' => '<b>Default</b> fields appear in ListViews that are not customized by users.'
        ),
        'searchViewEditor' => array(
            'modify' => 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
        ,
            'savebtn' => 'Clicking <b>Save & Deploy</b> will save all changes and make them active',
            'Hidden' => '<b>Hidden</b> fields do not appear in the Search.',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'Default' => '<b>Default</b> fields appear in the Search.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'Layout ini mengandung Field yang sedang ditampilkan dalam DetailView. Toolbox berisi Recycle Bin dan Field-Field dan tata letak elemen-elemen yang dapat ditambahkan ke dalam layout. Buat perubahan pada tata letak dengan menyeret dan menjatuhkan unsur dan Field-Field antara Toolbox dan Layout di dalam tata letak itu sendiri. Untuk menghapus sebuah field dari tata letak, tarik field Recycle Bin. Field akan tersedia dalam Toolbox untuk menambah tata letak. '
        ,
            'defaultquickcreate' => 'Layout ini mengandung Field yang sedang ditampilkan dalam bentuk Quickcreate. Bentuk QuickCreate muncul di subpanels untuk Buat modul ketika tombol diklik. Toolbox berisi Recycle Bin dan Field-Field dan tata letak elemen-elemen yang dapat ditambahkan ke tata letak. Buat perubahan pada tata letak dengan menyeret dan menjatuhkan unsur dan Field-Field antara Toolbox dan Layout di dalam tata letak itu sendiri. Untuk menghapus sebuah field dari tata letak, tarik Field Recycle Bin. Field akan tersedia dalam Toolbox untuk menambah tata letak.'
        ,
            //this defualt will be used for edit view
            'default' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
        ,
            'saveBtn' => 'Klik Simpan untuk menyimpan perubahan yang Anda buat ke tata letak sejak terakhir kali Anda menyimpannya. Perubahan tidak akan ditampilkan di modul sampai Anda mengerahkan perubahan yang disimpan. ',
            'historyBtn' => 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
            'historyDefault' => 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
            'publishBtn' => 'Klik Simpan & deploy untuk menyimpan semua perubahan yang Anda buat ke tata letak sejak terakhir kali Anda simpan itu, dan untuk membuat perubahan aktif dalam modul. Layout akan segera ditampilkan di modul. ',
            'toolbox' => 'Toolbox berisi Recycle Bin, tambahan elemen tata letak dan himpunan Field yang tersedia untuk ditambahkan ke tata letak. Tata letak unsur dan Field dalam Toolbox dapat menyeret dan menjatuhkan ke dalam tata letak, dan tata letak unsur-unsur dan Field dapat menyeret dan menjatuhkan dari layout ke Toolbox. unsur tata letak Panel dan Baris. Menambahkan baris baru atau panel baru untuk memberikan tambahan tata letak lokasi dalam layout untuk Field. Drag dan drop salah satu Field dalam tata letak peralatan atau ke Field yang menempati posisi untuk menukar lokasi kedua Field ini. Filler menciptakan ruang kosong dalam tata letak di mana ia ditempatkan. ',
            'panels' => 'Daerah ini menunjukkan bagaimana tata letak Anda akan terlihat bagi pengguna modul ini bila depolyed <br/> <br/> Anda dapat mereposisi unsur-unsur seperti ladang, baris dan panel dengan menyeret dan menjatuhkan mereka;. menghapus elemen dengan menyeret dan menjatuhkan mereka pada daerah sampah di kotak peralatan, atau menambahkan elemen baru dengan menyeret mereka dari toolbox dan menjatuhkan mereka ke dalam tata letak posisi yang diinginkan.',
            'delete' => 'Drag dan drop elemen apapun di sini untuk melepasnya dari layout',
            'property' => 'Edit label ditampilkan untuk Field ini. Tab Order kontrol dalam urutan tombol tab beralih di antara kolom. ',
        ),
        'fieldsEditor' => array(
            'default' => 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>Custom fields created for the module appear above the fields that are available for the module by default.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>To create a new field, click <b>Add Field</b>.',
            'mbDefault' => 'Field yang tersedia untuk modul ditampilkan di sini dengan Nama Field. Untuk konfigurasi label Field template, klik Nama Field. Untuk membuat Field baru, klik Tambah Field. Label bersama dengan sifat-sifat lain Field baru dapat diedit setelah penciptaan dengan mengklik Nama Field. Setelah modul tersebut digunakan, Field baru yang dibuat dalam Modul Builder dianggap sebagai standar dikerahkan Field dalam modul di Studio. ',
            'addField' => 'Pilih sebuah Data Type untuk Field baru. Jenis yang Anda pilih akan menentukan karakter seperti apa yang dapat dimasukkan untuk Field. Sebagai contoh, hanya angka bilangan bulat yang dapat dimasukkan ke dalam kolom yang dari tipe data Integer. Menyediakan Nama untuk Field. Nama harus alfanumerik dan tidak boleh berisi spasi. Menegaskan adalah valid. Tampilan Label adalah label yang akan muncul untuk kolom-kolom pada tata letak modul. Sistem Label digunakan untuk mengacu pada kode Field. Tergantung pada tipe data yang dipilih untuk Field, beberapa atau semua properti berikut dapat ditugaskan untuk Field: Bantuan Teks muncul sementara sementara pengguna melayang-layang di atas Field dan dapat digunakan untuk meminta pengguna untuk jenis input yang diinginkan. Komentar Teks hanya dilihat dalam Studio atau Modul Builder, dan dapat digunakan untuk menggambarkan Field untuk administrator. Nilai Default akan muncul di Field. Pengguna dapat memasukkan nilai baru dalam Field atau menggunakan nilai default. Pilih Massa Pembaruan kotak centang agar dapat menggunakan fitur ini untuk Misa Update Field. <Br > <br> <b> Max Size </ b> nilai menentukan jumlah maksimal karakter yang dapat dimasukkan dalam Field. <br> <br> Pilih <b> Required Field </ b> kotak centang untuk membuat Field diperlukan. Sebuah nilai harus disediakan untuk Field agar dapat menyimpan catatan berisi kolom. <br> <br> Pilih <b> dilaporkan </ b> kotak centang untuk memungkinkan Field digunakan untuk filter dan untuk menampilkan data dalam Laporan. <br> <br> Pilih <b> Audit </ b> kotak centang agar dapat melacak perubahan ke Field dalam Change Log. <br> <br> Tentukan pilihan dalam <b> didatangkan </ b> untuk membolehkan, melarang atau memerlukan Field yang akan diimpor ke dalam Import Wizard. <br> <br> Pilih salah satu pilihan dalam Gandakan <b> Merge </ b> untuk mengaktifkan atau Duplikat menonaktifkan Gabung dan Cari Duplikat fitur. <br> <br> properti tambahan dapat ditugaskan untuk tipe data tertentu. ',
            'editField' => 'Properti dari field ini bisa diubah.<br><br>Klik <b>Clone</b> untuk membuat field baru dengan properti yang sama.',
            'mbeditField' => 'Tampilan Label dari Field template dapat disesuaikan. Sifat-sifat yang lain Field tidak bisa disesuaikan. Klik Clone untuk membuat Field baru dengan sifat-sifat yang sama. Untuk menghapus template Field sehingga tidak menampilkan dalam modul, keluarkan dari Field yang sesuai Layouts.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Export customizations made in Studio by creating packages that can be uploaded into another SuiteCRM instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
            'exportCustomBtn' => 'Klik Ekspor untuk membuat file. zip untuk paket berisi kustomisasi yang ingin Anda ekspor.',
            'name' => 'This is the <b>Name</b> of the package. This name will be displayed during installation.',
            'author' => 'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
            'description' => 'Ini adalah Keterangan dari paket yang ditampilkan sewaktu instalasi.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Selamat datang di area Developer Tools. Gunakan alat dalam Field ini untuk membuat dan mengelola standar, custom modul dan Field. ',
            'studioBtn' => 'Gunakan Studio untuk menyesuaikan modul terkirim.',
            'mbBtn' => 'Gunakan Modul Builder untuk membuat modul baru.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Gunakan Dropdown Editor untuk menambah dan mengedit dropdown global untuk dropdown Field.',
            'appBtn' => 'Mode Aplikasi adalah di mana Anda dapat menyesuaikan berbagai Propeti program, seperti berapa banyak TPS laporan yang ditampilkan di homepage',
            'backBtn' => 'Kembali ke langkah sebelumnya.',
            'studioHelp' => 'Gunakan Studio untuk menentukan apa dan bagaimana informasi yang ditampilkan dalam modul.',
            'moduleBtn' => 'Klik untuk mengedit modul ini.',
            'moduleHelp' => 'Komponen-komponen yang Anda dapat sesuaikan untuk modul muncul di sini. Klik sebuah ikon untuk memilih komponen yang akan diedit.',
            'fieldsBtn' => 'Membuat dan menyesuaikan Fields untuk menyimpan informasi di modul.',
            'labelsBtn' => 'Edit Labels yang menampilkan untuk Field dan judul-judul lain dalam modul.',
            'relationshipsBtn' => 'Tambah baru atau melihat relationship yang ada untuk modul.',
            'layoutsBtn' => 'Menyesuaikan modul Layouts. layout adalah tampilan yang berbeda dari contaning modul Field. Anda dapat menentukan Field yang muncul dan bagaimana mereka terorganisir dalam setiap layout. ',
            'subpanelBtn' => 'Tentukan Field yang muncul di Subpanels  pada modul.',
            'portalBtn' => 'Customize the module <b>Layouts</b> that appear in the <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'Modul Layouts yang dapat disesuaikan muncul di sini. tata letak Field dan data Field. Klik sebuah ikon untuk memilih tata letak untuk mengedit. ',
            'subpanelHelp' => 'Subpanels dalam modul yang dapat disesuaikan muncul di sini. Klik sebuah ikon untuk memilih modul untuk mengedit.',
            'newPackage' => 'Klik Paket Baru untuk membuat paket baru.',
            'exportBtn' => 'Klik Ekspor kustomisasi untuk membuat dan men-download paket berisi penyesuaian yang dibuat di Studio untuk modul tertentu.',
            'mbHelp' => 'Gunakan Modul Builder untuk membuat paket berisi modul custom berdasarkan standar atau benda kustom.',
            'viewBtnEditView' => 'Sesuaikan modul EditView layout. EditView adalah bentuk input yang berisi kolom untuk menangkap data yang dimasukkan pengguna. ',
            'viewBtnDetailView' => 'Sesuaikan modul DetailView layout. DetailView pengguna memasuki menampilkan data Field. ',
            'viewBtnDashlet' => 'Customize the module\'s <b>SuiteCRM Dashlet</b>, including the SuiteCRM Dashlet\'s ListView and Search.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'viewBtnListView' => 'Sesuaikan modul ListView layout. hasil pencarian muncul di ListView. ',
            'searchBtn' => 'Sesuaikan modul Cari ayout. Tentukan Field apa yang dapat digunakan untuk menyaring catatan yang muncul di ListView. ',
            'viewBtnQuickCreate' => 'Sesuaikan modul QuickCreate layout.  QuickCreate muncul dalam bentuk dan di subpanels Email modul. ',
            'addLayoutHelp' => "To create a custom layout for a Security Group select the appropriate Security Group and the layout from which to copy from as a starting point.",

            'searchHelp' => 'Cari bentuk-bentuk yang dapat disesuaikan muncul di sini. Cari bentuk Filteran berisi kolom untuk catatan. Klik sebuah ikon untuk memilih pencarian layout untuk mengedit. ',
            'dashletHelp' => 'The <b>SuiteCRM Dashlet</b> layouts that can be customized appear here.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'DashletListViewBtn' => 'The <b>SuiteCRM Dashlet ListView</b> displays records based on the SuiteCRM Dashlet search filters.',
            'DashletSearchViewBtn' => 'The <b>SuiteCRM Dashlet Search</b> filters records for the SuiteCRM Dashlet listview.',
            'popupHelp' => 'Layout <b>Popup</b> yang bisa dikustomisasi, ditampilkan di sini.<br>',
            'PopupListViewBtn' => '<b>Popup ListView</b> menampilkan record berdasarkan Popup search views.',
            'PopupSearchViewBtn' => '<b>Popup Search</b> menampilkan record untuk Popup listview.',
            'BasicSearchBtn' => 'Menyesuaikan Form Basic Search yang muncul pada tab Dasar Pencarian di daerah Pencarian untuk modul.',
            'AdvancedSearchBtn' => 'Menyesuaikan Formulir Advanced Saerch yang muncul dalam tab Pencarian di daerah Pencarian untuk modul.',
            'portalHelp' => 'Manage and customize the <b>SuiteCRM Portal</b>.',
            'SPUploadCSS' => 'Upload a <b>Style Sheet</b> for the SuiteCRM Portal.',
            'SPSync' => '<b>Sync</b> customizations to the SuiteCRM Portal instance.',
            'Layouts' => 'Customize the <b>Layouts</b> of the SuiteCRM Portal modules.',
            'portalLayoutHelp' => 'The modules within the SuiteCRM Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
            'relationshipsHelp' => 'Semua Hubungan yang ada antara modul dan modul dikerahkan lain muncul di sini. Nama Relationship adalah sistem yang dihasilkan untuk nama hubungan. Primer Modul adalah modul yang memiliki hubungan. Sebagai contoh, semua Properti yang terkait dengan Account modul adalah modul utama disimpan dalam Account tabel database. Type adalah jenis hubungan yang ada antara modul utama dan modul terkait. Klik judul kolom untuk mengurutkan berdasarkan kolom. Klik baris dalam hubungan tabel untuk melihat properti yang berkaitan dengan Realtionship. Klik add Relationship untuk membuat hubungan baru. Hubungan dapat dibuat antara dua modul yang dikerahkan. ',
            'relationshipHelp' => 'Hubungan dapat dibuat antara modul dan modul lain dikerahkan. Hubungan secara visual diungkapkan melalui subpanels dan Field yang terkait dalam catatan modul. Pilih salah satu dari hubungan berikut Jenis untuk modul: satu Kedua modul catatan akan berisi Field-Field terkait. Satu-ke-Banyak Modul utama akan berisi catatan subpanel, dan Modul terkait catatan akan berisi Field terkait. Banyak-ke-Banyak Kedua modul catatan akan ditampilkan subpanels. Pilih Modul terkait untuk hubungan. Jika jenis hubungan melibatkan subpanels, pilih subpanel tampilan untuk modul-modul yang sesuai. Klik Simpan untuk menciptakan hubungan. ',
            'convertLeadHelp' => 'Here you can add modules to the convert layout screen and modify the layouts of existing ones.<br/>
		You can re-order the modules by dragging their rows in the table.<br/><br/>
		<b>Module:</b> The name of the module.<br/><br/>
		<b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/>
		<b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/>
		<b>Allow Selection:</b> Modules with a relate field in Contacts can be selected rather than created during the convert lead process.<br/><br/>
		<b>Edit:</b> Modify the convert layout for this module.<br/><br/>
		<b>Delete:</b> Remove this module from the convert layout.<br/><br/>',
            'editDropDownBtn' => 'Edit Dropdown global',
            'addDropDownBtn' => 'Tambah Dropdown global baru',
        ),
        'fieldsHelp' => array(
            'default' => 'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
            'addrelbtn' => 'mouse ke bantuan untuk hubungan menambahkan .',
            'addRelationship' => 'Hubungan dapat dibuat antara modul dan kebiasaan lain modul atau modul yang digunakan. Hubungan secara visual diungkapkan melalui subpanels dan Field terkait dalam catatan modul. Pilih salah satu dari hubungan berikut Jenis untuk modul:  Satu Kedua modul catatan akan berisi berhubungan Field. Satu-ke-Banyak - The Primary Module akan berisi catatan subpanel, dan Modul terkait catatan akan berisi Field terkait. <br> <br> <b> Banyak-ke-Banyak  - Kedua modulcatatan akan ditampilkan subpanels. <Pilih Modul Terkait untuk relationship>.  Jika jenis hubungan melibatkan subpanels, pilih tampilan Subpanel untuk modul-modul yang sesuai. Klik Simpan untuk menciptakan hubungan. ',
        ),
        'labelsHelp' => array(
            'default' => 'The <b>Labels</b> for the fields and other titles in the module can be changed.<br><br>Edit the label by clicking within the field, entering a new label and clicking <b>Save</b>.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the labels.',
            'saveBtn' => 'Click <b>Save</b> to save all changes.',
            'publishBtn' => 'Click <b>Save & Deploy</b> to save all changes and make them active.',
        ),
        'portalSync' => array(
            'default' => 'Enter the <b>SuiteCRM Portal URL</b> of the portal instance to update, and click <b>Go</b>.<br><br>Then enter a valid SuiteCRM user name and password, and then click <b>Begin Sync</b>.<br><br>The customizations made to the SuiteCRM Portal <b>Layouts</b>, along with the <b>Style Sheet</b> if one was uploaded, will be transferred to specified the portal instance.',
        ),
        'portalStyle' => array(
            'default' => 'You can customize the look of the SuiteCRM Portal by using a style sheet.<br><br>Select a <b>Style Sheet</b> to upload.<br><br>The style sheet will be implemented in the SuiteCRM Portal the next time a sync is performed.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Untuk memulai sebuah proyek, klik New Package untuk membuat paket baru modul Custom Home. Setiap paket dapat berisi satu atau lebih modul. Misalnya, Anda mungkin ingin membuat sebuah paket yang berisi satu modul yang berhubungan dengan modul Account standar. Atau, Anda mungkin ingin membuat sebuah paket yang berisi beberapa modul baru yang bekerja sama sebagai sebuah proyek dan yang berhubungan dengan modul lain yang sudah ada dalam aplikasi. ',
            'somepackages' => 'Sebuah paket berfungsi sebagai content untuk modul custom, yang semuanya merupakan bagian dari satu proyek. Paket dapat berisi satu atau lebih Custom modul yang dapat berhubungan satu sama lain atau ke modul lain dalam aplikasi. Setelah membuat sebuah paket untuk proyek Anda, Anda dapat membuat modul untuk paket langsung, atau Anda dapat kembali ke Modul Builder di lain waktu untuk menyelesaikan proyek tersebut. Ketika proyek selesai, Anda dapat deploy untuk menginstal paket Modul dalam aplikasi. ',
            'afterSave' => 'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users\' instances.<br/><br/> To deploy the package in one step within your SuiteCRM instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your SuiteCRM instance.  <br/><br/>You can distribute the file to other users to upload and install within their own SuiteCRM instances.',
            'create' => 'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
        ),
        'main' => array(
            'welcome' => 'Gunakan Developer tools</b> untuk membuat dan mengelola modul standar dan adat dan bidang. <br/><br/>Untuk mengelola modul dalam aplikasi, klik<b>Studio</b>. <br/><br/>ntuk membuat modul kustom, klik<b>Module Builder</b>.',
            'studioWelcome' => 'Semua modul yang terinstal, termasuk benda standar dan modul-load, dapat disesuaikan dalam Studio.'
        ),
        'module' => array(
            'somemodules' => "Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your SuiteCRM instance or <b>Publish</b> the package to be installed in the current SuiteCRM instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your SuiteCRM instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current SuiteCRM instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further.  Then re-publish or re-deploy the package to apply the changes.",
            'editView' => 'Di sini Anda dapat mengedit bidang yang ada. Anda dapat menghapus salah satu bidang yang ada atau menambahkan kolom yang tersedia pada panel kiri.',
            'create' => 'When choosing the type of <b>Type</b> of module that you wish to create, keep in mind the types of fields you would like to have within the module. <br/><br/>Each module template contains a set of fields pertaining to the type of module described by the title.<br/><br/><b>Basic</b> - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br/><br/> <b>Company</b> - Provides organization-specific fields, such as Company Name, Industry and Billing Address.  Use this template to create modules that are similar to the standard Accounts module.<br/><br/> <b>Person</b> - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.  Use this template to create modules that are similar to the standard Contacts and Leads modules.<br/><br/><b>Issue</b> - Provides case- and bug-specific fields, such as Number, Status, Priority and Description.  Use this template to create modules that are similar to the standard Cases and Bugs modules.<br/><br/>Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
            'afterSave' => 'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/><br/>To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/><br/>To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/><br/>To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/><br/> To create a module with the same properties as the current module, click <b>Duplicate</b>.  You can further customize the new module.',
            'viewfields' => 'Field dalam modul dapat disesuaikan sesuai dengan kebutuhan Anda.<br/><br/>Anda tidak dapat menghapus bidang standar, namun Anda dapat menghapusnya dari tata letak yang tepat dalam halaman Layouts. <<br/><br/>Anda bisa dengan cepat membuat field baru yang memiliki properti yang sama dengan field yang sudah ada dengan mengklik <b>Clone</b> dalam form  <b>Properties</b>.  Masukkan properti yang baru lalu klik <b>Save</b>.<br/><br/>Sangat direkomendasikan Anda mengatur semua properti untuk semua field standar dan custom field sebelum Anda publish dan menginstal package yang mengandung custom module.',
            'viewrelationships' => 'Anda dapat membuat hubungan banyak-ke-banyak antara modul saat ini dan modul lain dalam paket, dan / atau antara arus dan modul modul telah terinstal di aplikasi.<br><br> To create one-to-many and one-to-one relationships, create <b>Relate</b> and <b>Flex Relate</b> fields for the modules.',
            'viewlayouts' => 'Anda dapat mengendalikan apa bidang yang tersedia untuk menangkap data di dalam<b>Edit View</b>. Anda juga dapat mengendalikan apa yang menampilkan data dalam<b>Detail View</b>.  Pandangan tidak harus cocok. <br/><br/>Cepat Buat bentuk ditampilkan saat<b>membuat</b> diklik dalam subpanel modul. Secara default, <b> Cepat Buat</ B> adalah bentuk tata letak yang sama sebagai standar Lihat <b>  Edit </ tata letak b>. Anda dapat menyesuaikan bentuk Cepat Buat sehingga mengandung kurang dan / atau bidang yang berbeda dari tata letak Lihat Edit. <br> Anda dapat menentukan modul keamanan menggunakan kustomisasi Tata Letak bersama dengan <b> Peran Manajemen </ b>. <br>',
            'existingModule' => 'Setelah membuat dan mengubah modul ini, Anda dapat membuat modul tambahan atau kembali ke paket untuk <b> Publikasikan / b> atau> <b>  Deploy </ b paket. <br> Untuk membuat modul tambahan, klik <b> Duplikat </ b> untuk membuat modul dengan sifat yang sama dengan modul saat ini, atau arahkan kembali ke paket tersebut, dan klik <b> Modul Baru </ b>. <br> <br> Jika Anda siap <b> Publikasikan / b> atau> <b> Deploy </ b paket berisi modul ini, arahkan kembali ke paket untuk melakukan fungsi tersebut. Anda dapat mempublikasikan dan menyebarkan paket yang mengandung setidaknya satu modul.',
            'labels' => 'Label bidang standar serta bidang kustom dapat diubah. Mengubah bidang label tidak akan mempengaruhi data yang disimpan dalam bidang.',
        ),
        'listViewEditor' => array(
            'modify' => 'There are three columns displayed to the left. The "Default" column contains the fields that are displayed in a list view by default, the "Available" column contains fields that a user can choose to use for creating a custom list view, and the "Hidden" column contains fields available for you as an admin to either add to the default or Available columns for use by users but are currently disabled.',
            'savebtn' => 'Clicking <b>Save</b> will save all changes and make them active.',
            'Hidden' => 'Hidden fields are fields that are not currently available to users for use in list views.',
            'Available' => 'Available fields are fields that are not shown by default, but can be enabled by users.',
            'Default' => 'Default fields are displayed to users who have not created custom list view settings.'
        ),

        'searchViewEditor' => array(
            'modify' => 'There are two columns displayed to the left. The "Default" column contains the fields that will be displayed in the search view, and the "Hidden" column contains fields available for you as an admin to add to the view.',
            'savebtn' => 'Clicking <b>Save & Deploy</b> will save all changes and make them active.',
            'Hidden' => 'Hidden fields are fields that will not be shown in the search view.',
            'Default' => 'Default fields will be shown in the search view.'
        ),
        'layoutEditor' => array(
            'default' => 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
            'saveBtn' => 'Clicking this button saves the layout so that you can preserve your changes. When you return to this module you will start from this changed layout. Your layout however will not be seen by users of the module until you click the Save and Publish button.',
            'publishBtn' => 'Click this button to deploy the layout. This means that this layout will immediately be seen by users of this module.',
            'toolbox' => 'The toolbox contains a variety of useful features for editing layouts, including a trash area, a set of additional elements and a set of available fields. Any of these can be dragged and dropped onto the layout.',
            'panels' => 'This area shows how your layout will look to users of this module when it is depolyed.<br/><br/>You can reposition elements such as fields, rows and panels by dragging and dropping them; delete elements by dragging and dropping them on the trash area in the toolbox, or add new elements by dragging them from the toolbox and dropping them on to the layout in the desired position.'
        ),
        'dropdownEditor' => array(
            'default' => 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
            'dropdownaddbtn' => 'Mengklik tombol ini menambahkan item baru untuk dropdown.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Customizations made in Studio within this instance can be packaged and deployed in another instance.  <br><br>Provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package.<br><br>Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br><br>Click <b>Export</b> to create a .zip file for the package containing the customizations.  The .zip file can be uploaded in another instance through <b>Module Loader</b>.',
            'exportCustomBtn' => 'Klik Ekspor untuk membuat file. zip untuk paket berisi kustomisasi yang ingin Anda ekspor.',
            'name' => 'The <b>Name</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'author' => 'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br><br>The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'description' => 'The <b>Description</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welcome to the <b>Developer Tools</b1> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
            'studioBtn' => 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
            'mbBtn' => 'Gunakan Modul Builder untuk membuat modul baru.',
            'appBtn' => 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
            'backBtn' => 'Kembali ke langkah sebelumnya.',
            'studioHelp' => 'Use <b>Studio</b> to customize installed modules.',
            'moduleBtn' => 'Klik untuk mengedit modul ini.',
            'moduleHelp' => 'Select the module component that you would like to edit',
            'fieldsBtn' => 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/><br/>You can edit and create custom fields here.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'layoutsBtn' => 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
            'subpanelBtn' => 'Edit what information is shown in this modules subpanels.',
            'layoutsHelp' => 'Select a <b>Layout to edit</b>.<br/<br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
            'subpanelHelp' => 'Select a <b>Subpanel</b> to edit.',
            'searchHelp' => 'Select a <b>Search</b> layout to edit.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'newPackage' => 'Klik Paket Baru untuk membuat paket baru.',
            'mbHelp' => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Dropdown Editor',

//ASSISTANT
    'LBL_AS_SHOW' => 'Show Assistant in future.',
    'LBL_AS_IGNORE' => 'Ignore Assistant in future.',
    'LBL_AS_SAYS' => 'Assistant Says:',


//STUDIO2
    'LBL_MODULEBUILDER' => 'Modul Builder',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Dropdown Editor',
    'LBL_EDIT_DROPDOWN' => 'Edit Dropdown',
    'LBL_DEVELOPER_TOOLS' => 'Developer Tools',
    'LBL_SUGARPORTAL' => 'SuiteCRM Portal Editor',
    'LBL_SYNCPORTAL' => 'Sync Portal',
    'LBL_PACKAGE_LIST' => 'Package List',
    'LBL_HOME' => 'Rumah',
    'LBL_NONE' => '-None-',
    'LBL_DEPLOYE_COMPLETE' => 'Deploy complete',
    'LBL_DEPLOY_FAILED' => 'An error has occurred during deploy process, your package may not have installed correctly',
    'LBL_ADD_FIELDS' => 'Tambah Custom Fields',
    'LBL_AVAILABLE_SUBPANELS' => 'Available Subpanels',
    'LBL_ADVANCED' => 'Melanjutkan',
    'LBL_ADVANCED_SEARCH' => 'Pencarian Lanjut',
    'LBL_BASIC' => 'Basic',
    'LBL_BASIC_SEARCH' => 'Basic Search',
    'LBL_CURRENT_LAYOUT' => 'Layout',
    'LBL_CURRENCY' => 'Mata Uang',
    'LBL_CUSTOM' => 'Custom',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet ListView',
    'LBL_DASHLETSEARCH' => 'SuiteCRM Dashlet Search',
    'LBL_POPUP' => 'PopupView',
    'LBL_POPUPLIST' => 'Popup ListView',
    'LBL_POPUPLISTVIEW' => 'Popup ListView',
    'LBL_POPUPSEARCH' => 'Popup Search',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet Search',
    'LBL_DISPLAY_HTML' => 'Tampilkan Kode HTML',
    'LBL_DETAILVIEW' => 'DetailView',
    'LBL_DROP_HERE' => '[Drop Here]',
    'LBL_EDIT' => 'Edit',
    'LBL_EDIT_LAYOUT' => 'Edit Layout',
    'LBL_EDIT_ROWS' => 'Edit Baris',
    'LBL_EDIT_COLUMNS' => 'Edit Kolom',
    'LBL_EDIT_LABELS' => 'Edit Label',
    'LBL_EDIT_PORTAL' => 'Edit Portal for ',
    'LBL_EDIT_FIELDS' => 'Edit Fields',
    'LBL_EDITVIEW' => 'EditView',
    'LBL_FILLER' => '(filler)',
    'LBL_FIELDS' => 'Fields',
    'LBL_FAILED_TO_SAVE' => 'Gagal Menyimpan',
    'LBL_FAILED_PUBLISHED' => 'Gagal untuk dipublish',
    'LBL_HOMEPAGE_PREFIX' => 'My',
    'LBL_LAYOUT_PREVIEW' => 'Layout Preview',
    'LBL_LAYOUTS' => 'Layouts',
    'LBL_LISTVIEW' => 'ListView',
    'LBL_MODULES' => 'Modul',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'New Package',
    'LBL_NEW_PANEL' => 'New Panel',
    'LBL_NEW_ROW' => 'New Row',
    'LBL_PACKAGE_DELETED' => 'Package Deleted',
    'LBL_PUBLISHING' => 'Dipublish...',
    'LBL_PUBLISHED' => 'Publikasi',
    'LBL_SELECT_FILE' => 'Pilih File',
    'LBL_SAVE_LAYOUT' => 'Simpan Layout',
    'LBL_SELECT_A_SUBPANEL' => 'Pilih Subpanel',
    'LBL_SELECT_SUBPANEL' => 'Pilih Subpanel',
    'LBL_SUBPANELS' => 'Subpanels',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Judul:',
    'LBL_SEARCH_FORMS' => 'Cari',
    'LBL_SEARCH' => 'Cari',
    'LBL_STAGING_AREA' => 'Staging Area (Drag dan drop item ke sini)',
    'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_SUGAR_BIN_STAGE' => 'SuiteCRM Bin (click items to add to staging area)',
    'LBL_TOOLBOX' => 'Toolbox',
    'LBL_VIEW_SUGAR_FIELDS' => 'View SuiteCRM Fields',
    'LBL_VIEW_SUGAR_BIN' => 'View SuiteCRM Bin',
    'LBL_QUICKCREATE' => 'QuickCreate',
    'LBL_EDIT_DROPDOWNS' => 'Edit a Global Dropdown',
    'LBL_ADD_DROPDOWN' => 'Add a new Global Dropdown',
    'LBL_BLANK' => '-blank-',
    'LBL_TAB_ORDER' => 'Tab Order',
    'LBL_TAB_PANELS' => 'Enable tabs',
    'LBL_TAB_PANELS_HELP' => 'When tabs are enabled, use the "type" dropdown box<br />for each section to define how it will be displayed (tab or panel)',
    'LBL_TABDEF_TYPE' => 'Display Type',
    'LBL_TABDEF_TYPE_HELP' => 'Select how this section should be displayed. This option only has effect if you have enabled tabs on this view.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Select Panel to have this panel display within the view of the layout. Select Tab to have this panel displayed within a separate tab within the layout. When Tab is specified for a panel, subsequent panels set to display as Panel will be displayed within the tab. <br/>A new Tab will be started for the next panel for which Tab is selected. If Tab is selected for a panel below the first panel, the first panel will necessarily be a Tab.',
    'LBL_TABDEF_COLLAPSE' => 'Collapse',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Select to make the default state of this panel collapsed.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nama',
    'LBL_DROPDOWN_LANGUAGE' => 'Bahasa',
    'LBL_DROPDOWN_ITEMS' => 'List Items',
    'LBL_DROPDOWN_ITEM_NAME' => 'Item Name',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Display Label',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sync to DetailView',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Select this option to sync this EditView layout to the corresponding DetailView layout. Fields and field placement in the EditView<br>will be sync\'d and saved to the DetailView automatically upon clicking Save or Save & Deploy in the EditView. <br>Layout changes will not be able to be made in the DetailView.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'This DetailView is sync\'d with the corresponding EditView.<br> Fields and field placement in this DetailView reflect the fields and field placement in the EditView.<br> Changes to the DetailView cannot be saved or deployed within this page. Make changes or un-sync the layouts in the EditView. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Copy from EditView',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Values are required for both the Item Name and the Display Label. To add a blank item, click Add without entering any values for the Item Name and the Display Label.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
    'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modul',
    'LBL_LHS_MODULE' => 'Primary Module',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relationship created in Studio',
    'LBL_RELATIONSHIPS' => 'Relationships',
    'LBL_RELATIONSHIP_EDIT' => 'Edit Relationship',
    'LBL_REL_NAME' => 'Nama',
    'LBL_REL_LABEL' => 'Label',
    'LBL_REL_TYPE' => 'Tipe',
    'LBL_RHS_MODULE' => 'Related Module',
    'LBL_NO_RELS' => 'No Relationships',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Optional Condition',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Column',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Nilai',
    'LBL_SUBPANEL_FROM' => 'Subpanel from',
    'LBL_RELATIONSHIP_ONLY' => 'No visible elements will be created for this relationship as there is a pre-existing visible relationship between these two modules.',
    'LBL_ONETOONE' => 'One to One',
    'LBL_ONETOMANY' => 'One to Many',
    'LBL_MANYTOONE' => 'Many to One',
    'LBL_MANYTOMANY' => 'Many to Many',


//STUDIO QUESTIONS
    'LBL_QUESTION_FUNCTION' => 'Select a function or component.',
    'LBL_QUESTION_MODULE1' => 'Select a module.',
    'LBL_QUESTION_EDIT' => 'Select a module to edit.',
    'LBL_QUESTION_LAYOUT' => 'Select a layout to edit.',
    'LBL_QUESTION_SUBPANEL' => 'Select a subpanel to edit.',
    'LBL_QUESTION_SEARCH' => 'Select a search layout to edit.',
    'LBL_QUESTION_MODULE' => 'Select a module component to edit.',
    'LBL_QUESTION_PACKAGE' => 'Select a package to edit, or create a new package.',
    'LBL_QUESTION_EDITOR' => 'Select a tool.',
    'LBL_QUESTION_DROPDOWN' => 'Select a dropdown to edit, or create a new dropdown.',
    'LBL_QUESTION_DASHLET' => 'Select a dashlet layout to edit.',
    'LBL_QUESTION_POPUP' => 'Select a popup layout to edit.',
//CUSTOM FIELDS
    'LBL_RELATE_TO' => 'Relate To',
    'LBL_NAME' => 'Nama',
    'LBL_LABELS' => 'Labels',
    'LBL_MASS_UPDATE' => 'Update Masal',
    'LBL_AUDITED' => 'Audit',
    'LBL_CUSTOM_MODULE' => 'Modul',
    'LBL_DEFAULT_VALUE' => 'Nilai Default',
    'LBL_REQUIRED' => 'Required',
    'LBL_DATA_TYPE' => 'Tipe',
    'LBL_HCUSTOM' => 'CUSTOM',
    'LBL_HDEFAULT' => 'DEFAULT',
    'LBL_LANGUAGE' => 'Bahasa Grup Tab:',
    'LBL_CUSTOM_FIELDS' => '* field created in Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Edit Label',
    'LBL_SECTION_PACKAGES' => 'Packages',
    'LBL_SECTION_PACKAGE' => 'Package',
    'LBL_SECTION_MODULES' => 'Modul',
    'LBL_SECTION_PORTAL' => 'Portal',
    'LBL_SECTION_DROPDOWNS' => 'Dropdowns',
    'LBL_SECTION_PROPERTIES' => 'Properties',
    'LBL_SECTION_DROPDOWNED' => 'Edit Dropdown',
    'LBL_SECTION_HELP' => 'Membantu',
    'LBL_SECTION_ACTION' => 'Tindakan',
    'LBL_SECTION_MAIN' => 'Main',
    'LBL_SECTION_EDPANELLABEL' => 'Edit Panel Label',
    'LBL_SECTION_FIELDEDITOR' => 'Edit Field',
    'LBL_SECTION_DEPLOY' => 'Deploy',
    'LBL_SECTION_MODULE' => 'Modul',
    'LBL_SECTION_VISIBILITY_EDITOR' => 'Edit Visibility',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Default',
    'LBL_HIDDEN' => 'Hidden',
    'LBL_AVAILABLE' => 'Lainnya',
    'LBL_LISTVIEW_DESCRIPTION' => 'There are three columns displayed below. The <b>Default</b> column contains fields that are displayed in a list view by default.  The <b>Additional</b> column contains fields that a user can choose to use for creating a custom view.  The <b>Available</b> column displays fields availabe for you as an admin to add to the Default or Additional columns for use by users.',
    'LBL_LISTVIEW_EDIT' => 'Editor List View',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Preview',
    'LBL_MB_RESTORE' => 'Mengembalikan',
    'LBL_MB_DELETE' => 'Hapus',
    'LBL_MB_COMPARE' => 'Bandingkan',
    'LBL_MB_DEFAULT_LAYOUT' => 'Default Layout',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Tambah',
    'LBL_BTN_SAVE' => 'Simpan [Alt+S]',
    'LBL_BTN_SAVE_CHANGES' => 'Save Changes',
    'LBL_BTN_DONT_SAVE' => 'Discard Changes',
    'LBL_BTN_CANCEL' => 'Batal',
    'LBL_BTN_CLOSE' => 'Tutup',
    'LBL_BTN_SAVEPUBLISH' => 'Simpan & Sebarkan',
    'LBL_BTN_NEXT' => 'Berikutnya',
    'LBL_BTN_BACK' => 'Kembali',
    'LBL_BTN_CLONE' => 'Clone',
    'LBL_BTN_ADDCOLS' => 'Tambah Kolom',
    'LBL_BTN_ADDROWS' => 'Tambah Baris',
    'LBL_BTN_ADDFIELD' => 'Tambah Field',
    'LBL_BTN_ADDDROPDOWN' => 'Add Dropdown',
    'LBL_BTN_SORT_ASCENDING' => 'Sort Ascending',
    'LBL_BTN_SORT_DESCENDING' => 'Sort Descending',
    'LBL_BTN_EDLABELS' => 'Edit Label',
    'LBL_BTN_UNDO' => 'Batal',
    'LBL_BTN_REDO' => 'Kembalikan',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Tambah Bidang Kustom',
    'LBL_BTN_EXPORT' => 'Export Customizations',
    'LBL_BTN_DUPLICATE' => 'Duplikat',
    'LBL_BTN_PUBLISH' => 'Mempublikasi',
    'LBL_BTN_DEPLOY' => 'Deploy',
    'LBL_BTN_EXP' => 'Ekspor',
    'LBL_BTN_DELETE' => 'Hapus',
    'LBL_BTN_VIEW_LAYOUTS' => 'View Layouts',
    'LBL_BTN_VIEW_FIELDS' => 'View Fields',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Lihat relasi',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Add Relationship',
    'LBL_BTN_RENAME_MODULE' => 'Change Module Name',
    'LBL_BTN_INSERT' => 'Sisipkan',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Error: Field Sudah ada',
    'ERROR_INVALID_KEY_VALUE' => "Error: Nilai Tidak Valid: [']",
    'ERROR_NO_HISTORY' => 'No history files found',
    'ERROR_MINIMUM_FIELDS' => 'The layout must contain at least one field',
    'ERROR_GENERIC_TITLE' => 'Terjadi kesalahan',
    'ERROR_REQUIRED_FIELDS' => 'Are you sure you wish to continue? The following required fields are missing from the layout:  ',
    'ERROR_ARE_YOU_SURE' => 'Are you sure you wish to continue?',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Package Name:',
    'LBL_MODULE_NAME' => 'Module Name:',
    'LBL_AUTHOR' => 'Author:',
    'LBL_DESCRIPTION' => 'Deskripsi',
    'LBL_KEY' => 'Key:',
    'LBL_ADD_README' => ' Readme',
    'LBL_LAST_MODIFIED' => 'Last Modified:',
    'LBL_NEW_MODULE' => 'New Module',
    'LBL_LABEL' => 'Label:',
    'LBL_LABEL_TITLE' => 'Label',
    'LBL_WIDTH' => 'Width',
    'LBL_PACKAGE' => 'Package:',
    'LBL_TYPE' => 'Tipe:',
    'LBL_TEAM_SECURITY' => 'Team Security',
    'LBL_ASSIGNABLE' => 'Assignable',
    'LBL_PERSON' => 'Person',
    'LBL_COMPANY' => 'Company',
    'LBL_ISSUE' => 'Issue',
    'LBL_SALE' => 'Penjualan',
    'LBL_FILE' => 'Arsip',
    'LBL_NAV_TAB' => 'Navigation Tab',
    'LBL_CREATE' => 'Buat [Alt+N]',
    'LBL_LIST' => 'Daftar',
    'LBL_VIEW' => 'Lihat',
    'LBL_LIST_VIEW' => 'List View',
    'LBL_HISTORY' => 'Lihat Histori',
    'LBL_RESTORE_DEFAULT' => 'Restore Default',
    'LBL_ACTIVITIES' => 'Aktivitas',
    'LBL_NEW' => 'Baru',
    'LBL_TYPE_BASIC' => 'basic',
    'LBL_TYPE_COMPANY' => 'company',
    'LBL_TYPE_PERSON' => 'person',
    'LBL_TYPE_ISSUE' => 'issue',
    'LBL_TYPE_SALE' => 'sale',
    'LBL_TYPE_FILE' => 'Arsip',
    'LBL_RSUB' => 'This is the subpanel that will be displayed in your module',
    'LBL_MSUB' => 'This is the subpanel that your module provides to the related module for display',
    'LBL_MB_IMPORTABLE' => 'Importing',

// VISIBILITY EDITOR
    'LBL_VE_VISIBLE' => 'visible',
    'LBL_VE_HIDDEN' => 'hidden',
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] was deleted',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Export Customizations',
    'LBL_EC_NAME' => 'Package Name:',
    'LBL_EC_AUTHOR' => 'Author:',
    'LBL_EC_DESCRIPTION' => 'Deskripsi',
    'LBL_EC_KEY' => 'Key:',
    'LBL_EC_CHECKERROR' => 'Please select a module.',
    'LBL_EC_CUSTOMFIELD' => 'customized field(s)',
    'LBL_EC_CUSTOMLAYOUT' => 'customized layout(s)',
    'LBL_EC_NOCUSTOM' => 'No modules have been customized.',
    'LBL_EC_EMPTYCUSTOM' => 'has empty customizations.',
    'LBL_EC_EXPORTBTN' => 'Ekspor',
    'LBL_MODULE_DEPLOYED' => 'Module has been deployed.',
    'LBL_UNDEFINED' => 'undefined',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Failed to retrieve data',
    'LBL_AJAX_TIME_DEPENDENT' => 'A time dependent action is in progress. Please wait and try again in a few seconds.',
    'LBL_AJAX_LOADING' => 'Memuat...',
    'LBL_AJAX_DELETING' => 'Deleting...',
    'LBL_AJAX_BUILDPROGRESS' => 'Build In Progress...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Deploy In Progress...',
    'LBL_AJAX_FIELD_EXISTS' => 'The field name you entered already exists. Please enter a new field name.',

    'LBL_AJAX_RESPONSE_TITLE' => 'Result',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'This operation is completed successfully',
    'LBL_AJAX_LOADING_TITLE' => 'In Progress..',
    'LBL_AJAX_LOADING_MESSAGE' => 'Please wait, loading..',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Are you sure you wish to remove this package? This will permanently delete all files associated with this package.',
    'LBL_JS_REMOVE_MODULE' => 'Are you sure you wish to remove this module? This will permanently delete all files associated with this module.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Any customizations that you made in Studio will be overwritten when this module is re-deployed. Are you sure you want to proceed?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Deploying Package',
    'LBL_JS_VALIDATE_NAME' => 'Name - Must be alphanumeric, begin with a letter and contain no spaces.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Package Name already exists',
    'LBL_JS_VALIDATE_KEY' => 'Key - Must be alphanumeric, begin with a letter and contain no spaces.',
    'LBL_JS_VALIDATE_LABEL' => 'Please enter a label that will be used as the Display Name for this module',
    'LBL_JS_VALIDATE_TYPE' => 'Please select the type of module you wish to build from the list above',
    'LBL_JS_VALIDATE_REL_NAME' => 'Name - Must be alphanumeric with no spaces',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Label - please add a label that will be displayed above the subpanel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts. \n\nDo you wish to continue?',
    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Are you sure you wish to delete this relationship?',
    'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => 'This will make this relationship permanent. Are you sure you wish to deploy this relationship?',
    'LBL_CONFIRM_DONT_SAVE' => 'Changes have been made since you last saved, would you like to save?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Save Changes?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Data may be truncated and this cannot be undone, are you sure you wish to continue?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Select the appropriate data type based on the type of data that will be entered into the field.',
    'LBL_POPHELP_SEARCHABLE' => 'Select the boost level for this field. <br />Fields with a higher boost level will be given greater weight when the search is performed. <br />When a search is performed, matching records containing fields with a greater weight will be appear higher in the search results.<br /> If you change the boost level for a field from one level to another, perform a system index to apply the change. <br/> Be sure to select to delete the existing data at the time that the system index is performed.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.'
,
    'LBL_POPHELP_GLOBAL_SEARCH' => 'Select to use this field when searching for records using the Global Search on this module.',
//Revert Module labels
    'LBL_RESET' => 'Reset [Alt + R]',
    'LBL_RESET_MODULE' => 'Reset Module',
    'LBL_REMOVE_CUSTOM' => 'Remove Customizations',
    'LBL_CLEAR_RELATIONSHIPS' => 'Clear Relationships',
    'LBL_RESET_LABELS' => 'Reset Labels',
    'LBL_RESET_LAYOUTS' => 'Reset Layouts',
    'LBL_REMOVE_FIELDS' => 'Remove Custom Fields',
    'LBL_CLEAR_EXTENSIONS' => 'Clear Extensions',
    'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
    'LBL_HISTORY_TITLE' => ' history',


    'LBL_ADD_LAYOUT' => 'Add Layout',
    'LBL_ADD_LAYOUTS' => 'Add Layout',
    'LBL_QUESTION_ADD_LAYOUT' => 'Select a Group Layout to Add.',
    'LBL_REMOVE_LAYOUT' => 'Remove Group Layout',

    'LBL_SECURITYGROUP' => 'Security Group:',
    'LBL_COPY_FROM' => 'Copy From:',
    'LBL_ADDLAYOUTDONE' => 'Layout Saved',
    'LBL_REMOVELAYOUTDONE' => 'Layout Removed',
    'LBL_REMOVE_CONFIRM' => 'Are you really sure?',

    'fieldTypes' => array(
        'varchar' => 'TextField',
        'int' => 'Integer',
        'float' => 'Float',
        'bool' => 'Checkbox',
        'enum' => 'DropDown',
        'dynamicenum' => 'Dynamic DropDown',
        'multienum' => 'MultiSelect',
        'date' => 'Tanggal',
        'phone' => 'Telp',
        'currency' => 'Mata Uang',
        'html' => 'HTML',
        'radioenum' => 'Radio',
        'relate' => 'Hubungkan',
        'address' => 'Address',
        'text' => 'TextArea',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Datetime',
        'decimal' => 'Decimal',
        'image' => 'Gambar',
    ),
    'labelTypes' => array(
        "" => "Frequently used labels",
        "all" => "All Labels",
    ),

    'parent' => 'Flex Relate',

    'LBL_ILLEGAL_FIELD_VALUE' => "Drop down key cannot contain quotes.",
    'LBL_CONFIRM_SAVE_DROPDOWN' => "You are selecting this item for removal from the dropdown list. Any dropdown fields using this list with this item as a value will no longer display the value, and the value will no longer be able to be selected from the dropdown fields. Are you sure you want to continue?",
    'LBL_POPHELP_VALIDATE_US_PHONE' => 'Select to validate this field for the entry of a 10-digit<br> .phone number, with allowance for the country code 1, and<br> to apply a U.S. format to the phone number when the record<br> is saved. The following format will be applied: (xxx) xxx-xxxx.',
    'LBL_ALL_MODULES' => 'Semua Modul',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);

