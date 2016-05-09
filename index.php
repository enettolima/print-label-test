<?php

$data = $_GET;

//print_r($data);

if(strlen($_GET['product_code'])==6){
  $myfile = fopen("print_files/newfile.txt", "w") or die("Unable to open file!");
  $txt = "John Doe\n";
  fwrite($myfile, $txt);
  $txt = "Jane Doe\n";
  fwrite($myfile, $txt);

  fwrite($myfile, "Product code: ".$_GET['product_code']);
  fclose($myfile);
  $response['code'] = 200;
  $response['message'] = "File has been written!";
}else{
  $response['code'] = 400;
  $response['message'] = "Invalid string! The string should contain 6 digits";
}

http_response_code($response['code']);
echo json_encode($response);
?>
