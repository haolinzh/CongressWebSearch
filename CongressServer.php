<?php
header('Access-Control-Allow-Origin: *');
/**
 * Created by PhpStorm.
 * User: NOVA
 * Date: 16/10/26
 * Time: PM6:57
 */
if (isset($_GET["request"]) && ($_GET["request"] == "reqlegislator")):

    if (isset($_GET["chamber"])) {
        $chamber = $_GET["chamber"];
        $reqlegislatorbychamer = "http://104.198.0.197:8080/legislators?chamber=" . $chamber . "&apikey=4acd972a599843bd93ea4dba171a483f&per_page=all";
        $recvhtml = file_get_contents($reqlegislatorbychamer);
        echo $recvhtml;

    } else if (isset($_GET["bioid"])) {
        $bioid = $_GET["bioid"];
        $reqlegislatorbychamer = "http://104.198.0.197:8080/legislators?bioguide_id=" . $bioid . "&apikey=4acd972a599843bd93ea4dba171a483f";
        $recvhtml = file_get_contents($reqlegislatorbychamer);
        echo $recvhtml;

    } else {
        $reqlegislator = "http://104.198.0.197:8080/legislators?apikey=4acd972a599843bd93ea4dba171a483f&per_page=all";
        $recvhtml = file_get_contents($reqlegislator);
        echo $recvhtml;
    }
endif;

if (isset($_GET["request"]) && ($_GET["request"] == "reqbills")):

    if (($_GET["active"]) == 'true') {

        $reqacbills = "http://104.198.0.197:8080/bills?apikey=3e10ee5ae4ca4e5f884cbedf3ef2372a&per_page=50&history.active=true";
        $recvhtml = file_get_contents($reqacbills);
        echo $recvhtml;

    }
    else if(($_GET["active"]) == 'false'){
        $reqnwbills = "http://104.198.0.197:8080/bills?apikey=3e10ee5ae4ca4e5f884cbedf3ef2372a&per_page=50&history.active=false";
        $recvhtml = file_get_contents($reqnwbills);
        echo $recvhtml;
    }

    else if(isset($_GET["bioid"])){
        $bioid = $_GET["bioid"];
        $reqlbillforleg = "http://104.198.0.197:8080/bills?sponsor_id=".$bioid."&apikey=3e10ee5ae4ca4e5f884cbedf3ef2372a&per_page=5";
        $recvhtml = file_get_contents( $reqlbillforleg);
        echo $recvhtml;
    }
    else if(isset($_GET["billid"])){
        $bill = $_GET["billid"];
        $reqlspecbill = "http://104.198.0.197:8080/bills?bill_id=".$bill."&apikey=3e10ee5ae4ca4e5f884cbedf3ef2372a";
        $recvhtml = file_get_contents( $reqlspecbill);
        echo $recvhtml;
    }


endif;


if (isset($_GET["request"]) && ($_GET["request"] == "reqcommittee")):

    if (isset($_GET["bioid"])) {

        $bioid=$_GET["bioid"];
        $reqcomforleg = "http://104.198.0.197:8080/committees?member_ids=".$bioid."&apikey=3e10ee5ae4ca4e5f884cbedf3ef2372a&per_page=5";
        $recvhtml = file_get_contents($reqcomforleg);
        echo $recvhtml;

    } else if(isset($_GET["chamber"])){
        $chamber=$_GET["chamber"];
        $reqhcom="http://104.198.0.197:8080/committees?chamber=".$chamber."&apikey=3e10ee5ae4ca4e5f884cbedf3ef2372a&per_page=all";
        $recvhtml = file_get_contents($reqhcom);
        echo $recvhtml;
    }

endif;

?>