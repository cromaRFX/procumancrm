<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $db;

if(!isset($_REQUEST['type']) && empty($_REQUEST['id'])) {
    die("Not a Valid Entry Point");
}
else {
    require_once("data/BeanFactory.php");
    $file_type=''; // bug 45896
    require_once("data/BeanFactory.php");
    ini_set('zlib.output_compression','Off');//bug 27089, if use gzip here, the Content-Length in header may be incorrect.
    // cn: bug 8753: current_user's preferred export charset not being honored
    //$GLOBALS['current_user']->retrieve($_SESSION['authenticated_user_id']);
    //$GLOBALS['current_language'] = $_SESSION['authenticated_user_language'];
	if(empty($current_language)) {
		$current_language = $sugar_config['default_language'];
	}

    $app_strings = return_application_language($current_language);
    $mod_strings = return_module_language($current_language, 'ACL');
    $file_type = strtolower($_REQUEST['type']);
    if(!isset($_REQUEST['isTempFile'])) {
        //Custom modules may have capitalizations anywhere in their names. We should check the passed in format first.
        require('include/modules.php');
        $module = $db->quote($_REQUEST['type']);
        if(empty($beanList[$module])) {
            //start guessing at a module name
            $module = ucfirst($file_type);
            if(empty($beanList[$module])) {
                die($app_strings['ERROR_TYPE_NOT_VALID']);
            }
        }
        $bean_name = $beanList[$module];
        if(!file_exists('modules/' . $module . '/' . $bean_name . '.php')) {
            die($app_strings['ERROR_TYPE_NOT_VALID']);
        }

        $focus = BeanFactory::newBean($module);
        $focus->retrieve($_REQUEST['id']);
        // Pull up the document revision, if it's of type Document
        if ( isset($focus->object_name) && $focus->object_name == 'Document' ) {
            // It's a document, get the revision that really stores this file
            $focusRevision = new DocumentRevision();
            $focusRevision->retrieve($_REQUEST['id']);
			
            if ( empty($focusRevision->id) ) {
                // This wasn't a document revision id, it's probably actually a document id,
                // we need to grab the latest revision and use that
                $focusRevision->retrieve($focus->document_revision_id);

                if ( !empty($focusRevision->id) ) {
                    $_REQUEST['id'] = $focusRevision->id;
                }
            }
        }
    } // if
    
	$temp = explode ( "_" , $_REQUEST['id'], 2  );
    if(is_array($temp)){
        $image_field = $temp[1];
        $image_id = $temp[0];
    }
    
    $local_location = "upload://{$_REQUEST['id']}";
    

    if(!file_exists( $local_location ) || strpos($local_location, "..")) {

        if(isset($image_field)) {
            header("Content-Type: image/png");
            header("Content-Disposition: attachment; filename=\"No-Image.png\"");
            header("X-Content-Type-Options: nosniff");
            header("Content-Length: " . filesize('include/SugarFields/Fields/Image/no_image.png'));
            header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + 2592000));
            set_time_limit(0);
            readfile('include/SugarFields/Fields/Image/no_image.png');
            die();
        }else {
            die($app_strings['ERR_INVALID_FILE_REFERENCE']);
        }
    } else {
        $doQuery = true;
 
        if($file_type == 'documents') {
            // cn: bug 9674 document_revisions table has no 'name' column.
            $query = "SELECT filename name FROM document_revisions INNER JOIN documents ON documents.id = document_revisions.document_id ";
            $query .= "WHERE document_revisions.id = '".$db->quote($_REQUEST['id'])."' ";
        } elseif($file_type == 'kbdocuments') {
            $query="SELECT document_revisions.filename name	FROM document_revisions INNER JOIN kbdocument_revisions ON document_revisions.id = kbdocument_revisions.document_revision_id INNER JOIN kbdocuments ON kbdocument_revisions.kbdocument_id = kbdocuments.id ";
            $query .= "WHERE document_revisions.id = '" . $db->quote($_REQUEST['id']) ."'";
        }  elseif($file_type == 'notes') {
            $query = "SELECT filename name, file_mime_type FROM notes ";
            $query .= "WHERE notes.id = '" . $db->quote($_REQUEST['id']) ."'";
        } elseif( !isset($_REQUEST['isTempFile']) && !isset($_REQUEST['tempName'] ) && isset($_REQUEST['type']) && $file_type!='temp' && isset($image_field) ) { //make sure not email temp file.
            $query = "SELECT " . $image_field ." FROM " . $file_type . " LEFT JOIN " . $file_type . "_cstm cstm ON cstm.id_c = " . $file_type . ".id ";
            $query .= "WHERE " . $file_type . ".id= '" . $db->quote($image_id) . "'";
        }elseif( !isset($_REQUEST['isTempFile']) && !isset($_REQUEST['tempName'] ) && isset($_REQUEST['type']) && $file_type!='temp' ){ //make sure not email temp file.
            $query = "SELECT filename name FROM ". $file_type ." ";
            $query .= "WHERE ". $file_type .".id= '".$db->quote($_REQUEST['id'])."'";
        }elseif( $file_type == 'temp'){
            $doQuery = false;
        }

        $mime_type = 'application/octet-stream';
        if($doQuery && isset($query)) {
            $rs = $GLOBALS['db']->query($query);
            $row = $GLOBALS['db']->fetchByAssoc($rs);

            if(empty($row)){
                die($app_strings['ERROR_NO_RECORD']);
            }

            if(isset($image_field)){
                $name = $row[$image_field];
            }else {
                $name = $row['name'];
            }
            // expose original mime type only for images, otherwise the content of arbitrary type
            // may be interpreted/executed by browser
            if (isset($row['file_mime_type']) && strpos($row['file_mime_type'], 'image/') === 0) {
                $mime_type = $row['file_mime_type'];
            }
            if(isset($_REQUEST['field'])){
                $id = $row[$id_field];
                $download_location = "upload://{$id}";
            }else{
                $download_location = "upload://{$_REQUEST['id']}";
            }

        } else if(isset(  $_REQUEST['tempName'] ) && isset($_REQUEST['isTempFile']) ){
            // downloading a temp file (email 2.0)
            $download_location = $local_location;
            $name = isset($_REQUEST['tempName'])?$_REQUEST['tempName']:'';
        } else if(isset($_REQUEST['isTempFile']) && ($_REQUEST['type']=="SugarFieldImage")) {
            $download_location = $local_location;
            $name = isset($_REQUEST['tempName'])?$_REQUEST['tempName']:'';
        }

        if(isset($_SERVER['HTTP_USER_AGENT']) && preg_match("/MSIE/", $_SERVER['HTTP_USER_AGENT']))
        {
            $name = urlencode($name);
            $name = str_replace("+", "_", $name);
        }

        header("Pragma: public");
        header("Cache-Control: maxage=1, post-check=0, pre-check=0");
        if(isset($_REQUEST['isTempFile']) && ($_REQUEST['type']=="SugarFieldImage")) {
            $mime = getimagesize($download_location);
            if(!empty($mime)) {
                header("Content-Type: {$mime['mime']}");
            } else {
                header("Content-Type: image/png");
            }
        } else {
            header('Content-type: ' . $mime_type);
            header("Content-Disposition: attachment; filename=\"".$name."\";");

        }
        // disable content type sniffing in MSIE
        header("X-Content-Type-Options: nosniff");
        header("Content-Length: " . filesize($local_location));
        header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + 2592000));
        set_time_limit(0);

        // When output_buffering = On, ob_get_level() may return 1 even if ob_end_clean() returns false 
        // This happens on some QA stacks. See Bug#64860
        while (ob_get_level() && @ob_end_clean());

        readfile($download_location);
    }
}
