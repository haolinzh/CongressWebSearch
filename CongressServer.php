<?php
/**
 * Created by PhpStorm.
 * User: NOVA
 * Date: 16/10/26
 * Time: PM6:57
 */
if (isset($_GET["request"]) && ($_GET["request"] == "reqlegislator")):

    if (isset($_GET["chamber"])) {
        $chamber = $_GET["chamber"];
        $reqlegislatorbychamer = "http://congress.api.sunlightfoundation.com/legislators?chamber=" . $chamber . "&apikey=4acd972a599843bd93ea4dba171a483f&per_page=all";
        $recvhtml = file_get_contents($reqlegislatorbychamer);
        echo $recvhtml;

    } else {
        $reqlegislator = "http://congress.api.sunlightfoundation.com/legislators?apikey=4acd972a599843bd93ea4dba171a483f&per_page=all";
        $recvhtml = file_get_contents($reqlegislator);
        echo $recvhtml;
    }
endif;

if (isset($_GET["request"]) && ($_GET["request"] == "reqbills")):

    if (($_GET["active"]) == 'true') {

        $reqacbills = "http://congress.api.sunlightfoundation.com/bills?history.active=true&apikey=4acd972a599843bd93ea4dba171a483f&per_page=all";
        $recvhtml = file_get_contents($reqacbills);
        echo $recvhtml;

    } else {
        $reqnwbills = "http://congress.api.sunlightfoundation.com/bills?history.active=false&apikey=4acd972a599843bd93ea4dba171a483f&per_page=all";
        $recvhtml = file_get_contents($reqnwbills);
        echo $recvhtml;
    }

endif;

?>