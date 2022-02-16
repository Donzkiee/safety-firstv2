<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAFETY FIRST</title>
  <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
</head>
<body>
    <?php

      $fullname = $_POST['fname'];
      $number = $_POST['number'];
      $email = $_POST['email'];

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://g.payx.ph/payment_request',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
        'x-public-key' => 'pk_c49be1039ab873fa1e6bde51f8250558',
        'amount' => '200',
        'description' => 'Payment for services rendered',
        'customername' =>  $fullname,
        'customermobile' =>   $number,
        'customeremail' =>  $email,
        'fee' => '60' ,
        'merchantname' => 'SAFETY FIRST',
        ),
      ));

      $response = curl_exec($curl);

     

      curl_close($curl);
      
      $jasonarray = json_decode($response,true);

      $datavalues = array_values($jasonarray['data']);
      
      $checkouturl = $datavalues[29];

      header("location: $checkouturl");

    ?>

  </body>
</html>



