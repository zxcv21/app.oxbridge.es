
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Upload Files to Amazon S3 PHP</title>
</head>

<body>

  <?php
  function getExtension($str)
  {
    $i = strrpos($str,".");
    if (!$i) { return ""; }

    $l = strlen($str) - $i;
    $ext = substr($str,$i+1,$l);
    return $ext;
  }


  $msg=''; //mensaje que devuelve al finalizar la subida
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {


    //$folder= $_POST['folder']."/";
    $folder="activities/";
    $name = $folder.$_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $tmp = $_FILES['file']['tmp_name'];
    $filetype= $_FILES['file']["type"];
    $ext = getExtension($name);

    if(strlen($name) > 0)
    {


      $ok_formato='si';

      if ($_POST['tipo_fichero']=='image'){
        $valid_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
        if(in_array($ext,$valid_formats)){
          $ok_formato='si';
        }else{
          $ok_formato='no';
        }
      }


      if($ok_formato=='si')
      {

        if($size<($_POST['imagesizeh']*$_POST['imagesizev']))
        {

          //AWS access INICIO
          $gertrudis_times = substr_count($_SERVER['PHP_SELF'],"/");
          $gertrudis_root_access = "";
          $gertrudis_i = 0;

          while ($gertrudis_i < $gertrudis_times)
          {
            $gertrudis_root_access .= "../";
            $gertrudis_i++;
          };

          if(include($gertrudis_root_access.'gertrudis/aws_function_activities.php'))
          echo "aws_function encontrado";
          else
          echo "aws_function NO encontrado";

          getAWSconfig();
          //AWS access FIN

          if(include('s3_config.php')){
            echo 'encontrado s3_config.php';
          }
          else{
            echo 'no encontrado s3_config.php';
          }

          $bucket= "ox-media-server";
          if($s3->putObjectFile($tmp, $bucket , $name, S3::ACL_PUBLIC_READ ,$filetype) )
          {
            $msg = "S3 Upload Successful.";
            $s3file='http://'.$bucket.'.s3.amazonaws.com/'.$name;
            echo "<img src='".$s3file."' style='max-width:400px'/><br/>";
            echo '<a href=\''.$s3file.'\' target="_blank">'.$s3file.'</a>';
          }
          else
          $msg = "S3 Upload Fail.";
        }
        else
        $msg = "Image size Max 1 MB";

      }
      else
      $msg = "Invalid file, please upload image file.";

    }
    else
    $msg = "Please select image file.";

  }

  echo "<br>".$msg."<br>";
  echo "nombre: ".$name."<br>bucket: ".$bucket;

  ?>

</body>
</html>
