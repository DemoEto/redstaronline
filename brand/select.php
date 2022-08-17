<?php
    $select = $_POST['select'];
    if($select == 'msi'){
        header("Location: MSI.php");
    }elseif($select == 'asus'){
        header("Location: ASUS.php");
    }elseif($select == 'acer'){
        header("Location: ACER.php");
    }elseif($select == 'dell'){
        header("Location: DELL.php");
    }elseif($select == 'lenovo'){
        header("Location: LENOVO.php");
    }else{
        header("Location: #");
    }
?>