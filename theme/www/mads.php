<?php
$access_item["/"] = false;
$access_item["/frandsen"] = true;
$access_item["/ringblom"] = true;

if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();
print_r($action);

$page->bodyClass("front");
$page->pageTitle("User Profile - Mads");

if(count($action) == 1) {
    if($action[0] == "ringblom") {

        $page->page(array(
            "templates" => "pages/mads_ringblom.php"
        ));
        exit();
    
    }
    else if($action[0] == "frandsen") {
    
        $page->page(array(
            "templates" => "pages/mads_frandsen.php"
        ));
        exit();
    
    }
}
$page->page(array(
	"templates" => "pages/mads.php"
	)
);
exit();


?>
 