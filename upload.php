<?php

    if(isset($_POST['assetupload'])){
        if(isset($_FILES)){
            $folder_name = 'uploads/';

            if(!empty($_FILES)) {
             $temp_file = $_FILES['file']['tmp_name'];
             $ext = strtolower(pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION));
             $location = $folder_name . $_FILES['file']['name'];

             if(move_uploaded_file($temp_file, $location)){
                //upload success
             }
            }
        }
    }