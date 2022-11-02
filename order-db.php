<?php
    if(isset($_POST['submit'])){
        print_r($_POST['equipid']);
        foreach($_POST['equipname'] as $key => $value){
            echo $_POST['equipname'][$key];
            echo '<br>';
            echo $_POST['equip_price'][$key];
            echo '<br>';
        }
    }
?>