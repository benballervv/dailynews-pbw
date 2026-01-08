<?php 
function upload_foto($File){
    $uploadOk = 1;
    $hasil = array();
    $FileName = $File['name'];
    $TmpLocation = $File['tmp_name'];
    $FileSize = $File['size'];
    $FileExt = strtolower(pathinfo($FileName, PATHINFO_EXTENSION));
    $Allowed = array('jpg', 'png', 'gif', 'jpeg');

    if ($FileSize > 500000) {
        $hasil['status'] = false;
        $hasil['message'] = "File terlalu besar (max 500KB)";
        return $hasil;
    }

    if(!in_array($FileExt, $Allowed)){
        $hasil['status'] = false;
        $hasil['message'] = "Format file tidak diizinkan";
        return $hasil;
    }

    $NewName = date("YmdHis"). '.' . $FileExt;
    $UploadDestination = "img/". $NewName;

    if (move_uploaded_file($TmpLocation, $UploadDestination)) {
        $hasil['status'] = true;
        $hasil['message'] = $NewName;
    } else {
        $hasil['status'] = false;
        $hasil['message'] = "Gagal upload ke folder img";
    }
    return $hasil;
}
?>