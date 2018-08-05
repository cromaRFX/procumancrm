<?php
 
class Viewbreadcrumb extends SugarView {

	function Viewbreadcrumb() {
 		parent::SugarView();
	}


 function display() 
 {
 global $app_list_strings;

 $result='';
 $relarray=findRelationshipByModules($_REQUEST["module1"],$_REQUEST["module0"]);
 
 if(!empty($relarray))
 {  
     
    $mod_name1 = $app_list_strings['moduleList'][$_REQUEST["module1"]];   
    $bean = BeanFactory::getBean($_REQUEST["module1"]);
    $list = $bean->get_full_list("", $relarray['table'].".id='".$_REQUEST["id1"]."'");
    foreach($list as $item)
    {   
      $item->load_relationship($relarray['name']);
      foreach ($item->$relarray['name']->getBeans() as $item2) {
        if($item2->id==$_REQUEST["id0"])
            $result='<a  href="index.php?module='.$_REQUEST["module1"].'&action=DetailView&record='.$_REQUEST["id1"].'">'.$mod_name1.': '.$item->name.'</a>&nbsp;>>&nbsp;';
      }   
    }
    
    $rel1array=findRelationshipByModules($_REQUEST["module2"],$_REQUEST["module1"]);
    if(!empty($rel1array))
    {  
       $mod_name2 = $app_list_strings['moduleList'][$_REQUEST["module2"]];   
       $bean = BeanFactory::getBean($_REQUEST["module2"]);
       $list = $bean->get_full_list("", $rel1array['table'].".id='".$_REQUEST["id2"]."'");     
       foreach($list as $item)
       {     
         $item->load_relationship($rel1array['name']);
         foreach ($item->$rel1array['name']->getBeans() as $item2) {
           if($item2->id==$_REQUEST["id1"])
           {
              $result='<a  href="index.php?module='.$_REQUEST["module2"].'&action=DetailView&record='.$_REQUEST["id2"].'">'.$mod_name2.': '.$item->name.'</a>&nbsp;>>&nbsp;'.$result;
           }
         } 
       }    
    }
 }
 $mod_name0 = $app_list_strings['moduleList'][$_REQUEST["module0"]];
 if(empty($_REQUEST["parent_id"])&&empty($_REQUEST["record"]))
     $result='<h2>'.$mod_name0.': '.$_REQUEST["module0name"].'</h2>';
 else  
   if($_REQUEST["parent_name"]==$_REQUEST["module0name"])
    $result='<h2>'.$result.'<a  href="index.php?module='.$_REQUEST["module0"].'&action=DetailView&record='.$_REQUEST["id0"].'">'.$mod_name0.' '.$_REQUEST["parent_name"].': '.$_REQUEST["module0name"].'</a></h2>';
   else   
    $result='<h2>'.$result.'<a  href="index.php?module='.$_REQUEST["module0"].'&action=DetailView&record='.$_REQUEST["id0"].'">'.$mod_name0.': '.$_REQUEST["module0name"].'</a></h2>';
 
 echo $result;    
 
 }                      

}          

function findRelationshipByModules ($m1, $m2)
{
  global $db,$dictionary,$beanList;
  $rel = new Relationship;
  if($rel_info = $rel->retrieve_by_sides($m1, $m2, $db)){
    $bean = BeanFactory::getBean($m1);
    $rel_name = $rel_info['relationship_name'];
    foreach($bean->field_defs as $field=>$def){
      if(isset($def['relationship']) && $def['relationship']==$rel_name) {
         return array('name'=>$def['name'],'table'=>$rel_info['lhs_table']);
      }
    }
  } 
  /*elseif($rel_info = $rel->retrieve_by_sides($m2, $m1, $db)){
    $bean = BeanFactory::getBean($m2);
    $rel_name = $rel_info['relationship_name'];
    foreach($bean->field_defs as $field=>$def){
      if(isset($def['relationship']) && $def['relationship']==$rel_name) {
        return $def['name'];
      }
    }
  }
  */
  return(FALSE);
}
function findRelationshipByModulesOLD($lhs, $rhs)
  {
          global $db,$dictionary,$beanList;
          $rel = new Relationship;
          if($rel_info = $rel->retrieve_by_sides($lhs, $rhs, $db)){
           
             return $rel_info['lhs_table'];
          }
        //  else
     //       if($rel_info = $rel->retrieve_by_sides($rhs, $lhs, $db)){
       //        return $rel_info['relationship_name'];
        //
          return '';
  }  
?>

  