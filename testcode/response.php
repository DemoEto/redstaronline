<?php
    function topic(){
        $topic = $_POST["topic"];
        return $topic;
    }
    echo topic();
?>