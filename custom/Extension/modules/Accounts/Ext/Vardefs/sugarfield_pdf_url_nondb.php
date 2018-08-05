<?php
$dictionary["Account"]["fields"]["pdf_url_nondb"] = array (
  'required' => false,
    'name' => 'pdf_url_nondb',
    'vname' => 'LBL_PDF_URL_C',
    'type' => 'varchar',
    'source' => 'non-db',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'function' => 
    array (
      'name' => 'getpdf_urlHtml',
      'returns' => 'html',
      'include' => 'custom/include/pdf_url/pdf_url.php',
    ),
);
?>


