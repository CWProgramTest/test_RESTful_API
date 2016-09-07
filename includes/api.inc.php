<?php 
$error = 'Malformed request.';

/*	if(strpos($_SERVER['REQUEST_URI'], ".php?") !== false){
		$type = $_SERVER['REQUEST_METHOD'];
	
	}
*/
$type = $_SERVER['REQUEST_METHOD'];

if(isset($type)){

	if($type == 'GET'){
		if(!empty($_GET['username'])){
			$user=$_GET['username'];

			if(!empty($_GET['password'])){
				$pass=$_GET['password'];

				respond(200,"Success!", 300);

			} else {
				respond(300, $error, 0);
			}
		} else {
			respond(300, $error, 0);
		}
	}
	if($type == 'POST'){
		if(!empty($_POST['username'])){
			$user=$_POST['username'];

			if(!empty($_POST['password'])){

				respond(200, "Success!", 300);

			} else {
				respond(304, $error,0);
			}
				
		} else {
			respond(304, $error, 0);
		}
	}
} else{
	respond(304,"Outside else statement", 0);
}

function respond ($status, $status_message,$data){

	header("HTTP/1.1 $status $status_message $data");

	$response['status']=$status;
	$response['status_message']=$status_message;
	if($data!=0){
		$response['data']=$data;
	}
	$json_response = json_encode($response);
	echo $json_response;

}
?>