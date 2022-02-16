<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
    <title>SAFETY FIRST</title>
</head>
<body>
<style>
    .main-info{
        font-weight: bold;
    }
    h5{
        color: red;
    }
    .address{
        margin: auto;
        text-align: left;
        border: 1px solid #cfcccc;
        border-radius: 10px;
        padding: 2%;
    }
    .row{
        padding: 3%;
    }
    .gcash-btn{

        width: 50%;
      
    }
    .end{
        border-top: 2px dashed #cfcccc;
    }
    @media (max-width: 500px) {

        
        .address{
       
            padding: 4%;
         }
    }
    input{

        border-style: none;
    }
</style>
   

    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Checkout Form</a>
    </div>
    </nav>
    
    <div class="container">
       
        <div class="row mt-3">
           
           
                <?php



                   $fullname = $_POST["fullname"];
                   $number = $_POST["number"];
                   $email = $_POST["emailadd"];
                   $address = $_POST["address"];
                   $st = $_POST["street"];
                   $postal = $_POST["postal"];

        
                   
                   require_once('./phpmailer/PHPMailerAutoload.php');

                    $mail = new PHPMailer();
                    $mail ->isSMTP();
                    $mail->SMTPAuth =true;
                    $mail ->SMTPSecure = 'ssl';
                    $mail ->Host = 'smtp.gmail.com';
                    $mail->Port = '465';
                    $mail->isHTML();
                    $mail ->Username = 'safetyfirst062021@gmail.com';
                    $mail ->Password = 'p5ECy62vNhGxUK8';
                    $mail->SetFrom('safetyfirst062021@gmail.com');
                    $mail->Subject = "$fullname $number $email $postal $st $address ";
                    $mail->Body = 'Gas Detector Buyer';
                    $mail->addAddress('cuarterolyndon06@gmail.com');
                    
                    $mail->send();
                
                ?>
               
             <div class="col-lg-6 address">
               
                
                    <form action="gcash.php" method="POST"> 
                        <h5><i class="fas fa-map-marker-alt"></i> Delivery Location</h5>    
                        <?php
                           
                           echo "<input type='text' name='fname' value='$fullname' >";
                           echo "<input type='text' name='number' value='$number' >";
                           echo "<input type='text' name='email' value='$email' ><br>";
                           echo "<p class='main-info'>$postal $st $address </p>";
                        ?>
                        <hr>
                        <h5><i class="fas fa-box"></i> Product Ordered</h5>
                        <div class="row">
                            
                                <div class="col-lg-12 mt-2">
                                    <p class="main-info">85db Gas Leak Detector/Alarm</p>
                                    <p>High quality gas detecting alarm sensor, sensitive in detecting coal gas, natural gas, liquefied petroleum gas leakage.</p>
                                </div>   
                        </div>
                        
                        <hr class="end">
                        <p><b>Price:</b> PHP 495</p>
                        <p><b>Shipping Fee:</b>: PHP 60</p>
                        <hr>
                        <button type='submit' class='btn btn-primary mb-1 '>Pay Via Gcash</button>
                    </form>
            
            </div>

        </div>
       

    </div>
        
       

         <script src="https://kit.fontawesome.com/48bafc4542.js" crossorigin="anonymous"></script>
</body>
</html>





