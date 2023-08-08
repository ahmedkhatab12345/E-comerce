<?php

namespace App\services;

class UploadService {
public function uploadImage($photo,$folder){
    $file_extention=$photo ->getClientOriginalExtension();
    $file_name= time().'.'.$file_extention;
    $path=$folder;
    $photo ->move($path, $file_name);
    return $file_name;

    }

}
