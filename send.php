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

$to = strip_tags($x["email"]);

$subject = 'Welcome to deSECULARIZE!';

$output = '<span style="font-family:Verdana; color:#000000; font-size:10pt;"><div>Welcome!</div><div><br></div><div>I"m please to present to you the beta version of the deSECULARIZE app. To install, open up either Chrome or Firefox and go to&nbsp;<a target="_blank" href="http://desecularize.com/#/download" style="">http://desecularize.com/#/download</a>&nbsp;click on your browser that you want to install it on and follow the directions below:</div><div><br></div><div><b>On Firefox:&nbsp;</b></div><div>When you click on the Firefox link, a download should start (desecularize.xpi) after it finishes, you should double click and install it. Watch for this email to receive new versions as they come out.&nbsp;</div><div><br></div><div><b>On Google Chrome:&nbsp;</b></div><div>Installing on Google chrome is easy! Simply follow the link and click "Add to Chrome" You will automatically receive the new versions as they come out.&nbsp;</div><div><br></div><div>You are an alpha tester, which means that there might be some things wrong with the app. Please reply to this email indicating your experience with it, and if you had any issues or not. <i>please offer suggestions! </i>If you are a Google chrome user and you really like it, leave a review on the chrome download page!&nbsp;</div><div><br></div><div><i>You can uninstall this at any time! You can also turn it off at any time by clicking on the "desecularize" button in your Facebook or Twitter page.&nbsp;</i></div><div><br></div><div><b>Thanks and God Bless!</b></div><div>-Spencer Sims</div></span>';


$headers = "From: " . strip_tags($x["email"]) . "\r\n";
$headers .= "Reply-To:contact@desecularize.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to, $subject, $output, $headers);



?>