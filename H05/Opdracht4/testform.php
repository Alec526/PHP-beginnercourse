<?php
/*
print_r($_POST);
JSC($_POST);
*/

if($_POST['inlognaam'] == "doetje123" && $_POST['email'] == 'piet@worldonline.nl'){
    echo "welcome admin";
}
if($_POST['inlognaam'] == "snoepje777" && $_POST['email'] == 'klaas@carpets.nl'){
    echo "welcome admin";
}
if($_POST['inlognaam'] == "truushendriks@wegweg.nl" && $_POST['email'] == 'arkiearkie   201'){
    echo "welcome admin";
}

/*
function JSC($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
*/