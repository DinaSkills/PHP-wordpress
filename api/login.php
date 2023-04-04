<?php
    session_set_cookie_params([
        'lifetime' => 3600,
        'path' => '/',
        'domain' => $_SERVER['HTTP_HOST'],
        'secure' => true,
        'httponly' => true,
       
    ]);
    

session_name('Mandalorian');
session_start(); 


$username = ""; 
$errors = array();  
$_SESSION['success'] = ""; 
   

if (isset($_POST['g'])) { 

 
    $username = $_POST['email']; 
    $password= $_POST['password']; 

  
    if (empty($username)) { array_push($errors, "Username is required"); } 
    if (empty($password)) { array_push($errors, "Password is required"); } 

   
    // If the form is error free, then register the user 
    if (count($errors) == 0) { 
    
            $url = 'https://symfony-skeleton.q-tests.com/api/v2/token'; 
            $ch = curl_init($url);
            curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_SSL_VERIFYHOST  => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POSTFIELDS =>'{
                "email": "'.$username.'",
                "password": "'.$password.'"
            }',
            CURLOPT_HTTPHEADER => array(
                'accept: application/json',
                'Content-Type: application/json'
            )));

            
            $response = json_decode(curl_exec($ch));
           
            if ($response == false) {
                echo 'Error: ' . curl_error($ch);
            }
            curl_close($ch);

         if(isset($response->code)){
               if($response->code == 403){
                    array_push($errors, "Username or password incorrect"); 
               }
             
            }
        if(count($errors) == 0){
            $_SESSION['username'] = $username; 
            // Welcome message 
            $_SESSION['success'] = "You have logged in";
            setcookie('token_key', $response->token_key, time() + (86400 * 30), "/"); // 86400 = 1 day
     
        // Page on which the user will be 
     
       
        // redirected after logging in 
            //$t->header("Location:" .TEMPLATES_PATH. '/landing.php');
    } 
} 
}

?>






