<?PHP
$data = file_get_contents("php://input");
//$data = file_get_contents("data.json");
$x = json_decode($data, true); 

$output = $data;

$to = 'desecularize@spencersims.com';

$subject = 'New Secularize Sign Up';

$headers = "From: " . strip_tags($x["email"]) . "\r\n";
$headers .= "Reply-To: ". strip_tags($x["email"]) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
if(mail($to, $subject, $output, $headers)){
	echo true;
}else{
	echo false;
}



?>