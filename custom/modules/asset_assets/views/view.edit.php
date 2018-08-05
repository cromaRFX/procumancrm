<?php

require_once 'include/MVC/View/views/view.edit.php';

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class CustomAsset_assetsViewEdit extends ViewEdit
{

	public function __construct(){
        parent::__construct();
     }


	public function display() {
        parent::display();

        echo "<script>";

            echo "var companyCode;";
            echo "var assetClass;";
            echo "var description;";
            echo "var description2;";
            echo "var assetMainNoText;";
            echo "var inventoryNumber;";
            echo "var businessArea;";
            echo "var costCenter;";
            echo "var evalGp1;";
            echo "var evalGp2;";
            echo "var evalGp3;";
            echo "var evalGp4;";
            echo "var evalGp5;";
            echo "var location;";

            echo "$(document).ready(function(){";

                echo "$('#EditView').attr('action','#');";
                echo "$('#EditView').submit(function(event){ event.preventDefault(); });";
                echo "$('[id=\'SAVE\']').remove();";

                echo "$('[id=\'CANCEL\']').before('<input type=\'button\' value=\'save\' id=\'save_btn\' />');";

                echo "$('[id=\'save_btn\']').click(function(){ $.ajax({ type : 'POST', url : 'phpsource/asset/save_process.php', data : { companyCode : $('#company_code_c').val(), assetClass : $('#asset_class_c').val(), description : $('#description').val(), description2 : $('#description_2_c').val(), assetMainNoText : $('#asset_main_no_text_c').val(), inventoryNumber : $('#inventory_number_c').val(), businessArea : $('#business_area_c').val(), costCenter : $('#cost_center_c').val(), evalGp1 : $('#evaluation_gp_1_c').val(), evalGp2 : $('#evaluation_gp_2_c').val(), evalGp3 : $('#evaluation_gp_3_c').val(), evalGp4 : $('#evaluation_gp_4_c').val(), evalGp5 : $('#evaluation_gp_5_c').val(), location : $('#location_c').val() }, success : function(mssg){ if(mssg=='Data has been saved...'){alert(mssg); location.reload();}else{alert(mssg)} } }) });";

            echo "});";

        echo "</script>";

        /* get login user id
        global $current_user;
        $id = $current_user->id;
        echo $id;
        */
    }
}
?>