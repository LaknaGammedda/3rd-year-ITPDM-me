<?php
class fileupload extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('uploadModel');
    }
    //upload picture
    public function uploadPicture(){
        $id = "file";
        $path="img1br1com";
    
        if($_FILES[$id]["name"]==""){
                return;
            }
            $validextensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES[$id]["name"]);
            $file_extension = end($temporary);
            if ($_FILES[$id]["error"] > 0)
            {
                $alert = "Return Code: " . $_FILES[$id]["error"] . "<br/><br/>";
                echo $alert;
                return;
            }
            else
            {
                
                $sourcePath = $_FILES[$id]['tmp_name']; // Storing source path of the file in a variable
                $targetPath = str_replace("1br1", "/", $path)."/".$_FILES['file']['name'];
                move_uploaded_file($sourcePath,$targetPath);
                //set path in the database
                if($this->uploadModel->setPicturePath($targetPath)){
                    echo "uploaded";
                }else{
                    echo "uploading error occured";
                }
               
            }
    }





    public function updatePicture(){
        $id = "file";
        $path="img1br1com";
    
        if($_FILES[$id]["name"]==""){
                return;
            }
            $validextensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES[$id]["name"]);
            $file_extension = end($temporary);
            if ($_FILES[$id]["error"] > 0)
            {
                $alert = "Return Code: " . $_FILES[$id]["error"] . "<br/><br/>";
                echo $alert;
                return;
            }
            else
            {
                
                $sourcePath = $_FILES[$id]['tmp_name']; // Storing source path of the file in a variable
                $targetPath = str_replace("1br1", "/", $path)."/".$_FILES['file']['name'];
                move_uploaded_file($sourcePath,$targetPath);
                //set path in the database
                if($this->uploadModel->updatePicturePath($targetPath)){
                    echo "uploaded";
                }else{
                    echo "uploading error occured";
                }
               
            }
    }
    
}