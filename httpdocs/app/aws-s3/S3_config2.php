<?
// Bucket Name
$bucket='ox-firmas';
if (!class_exists('S3'))require_once('S3_2.php');

//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);

//$s3->putBucket($bucket, S3::ACL_PUBLIC_READ);

?>
