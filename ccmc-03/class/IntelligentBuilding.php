<?php
require_once("class/Building.php");
require_once("class/Iintelligence.php");
class IntelligentBuilding extends Building implements Iintelligence {
    /**
     * @override
     */
    function isAutoLocked() {
        $message = "オートロック完備しています。";
        return $message;
    }
    
    /**
     * @override
     */
    function accessWiFi() {
        $message = "無い線LAN常時接続できます。";
        return $message;
    }
}

?>
