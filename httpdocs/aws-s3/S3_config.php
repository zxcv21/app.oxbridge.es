<?
// Bucket Name
$bucket=$_POST['bucket'];
if (!class_exists('S3'))require_once($_SERVER['DOCUMENT_ROOT']."/app/aws-s3/S3.php");
			
//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);

//$s3->putBucket($bucket, S3::ACL_PUBLIC_READ);

?>