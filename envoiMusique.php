
<?php

if(isset($_POST['submit']))
{

  $path = "/var/www/html/concours-chants-projet-commun/uploads"; //file to place within the server
  $valid_formats1 = array("mp3", "ogg", "flac"); //list of file extention to be accepted
  if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
    {
        $file1 = $_FILES['file1']['name']; //input file name in this code is file1
        $size = $_FILES['file1']['size'];

        if(strlen($file1))
            {
                list($txt, $ext) = explode(".", $file1);
                if(in_array($ext,$valid_formats1))
                {
                        $actual_image_name = $txt.".".$ext;
                        $tmp = $_FILES['file1']['tmp_name'];
                        if(move_uploaded_file($tmp, $path.$actual_image_name))
                            {
                            echo "cool.";
                            }
                        else
                            echo "failed";              
                    }
        }
    }
}

?>
