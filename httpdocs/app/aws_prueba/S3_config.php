<?
// Bucket Name
//$bucket=$_POST['bucket'];
if (!class_exists('S3')){
  if(require_once("S3.php"))
    echo "incluido S3";
  else
    echo "no incluido S3";
}

//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);

//$s3->putBucket($bucket, S3::ACL_PUBLIC_READ);

?>
