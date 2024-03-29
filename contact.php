<!DOCTYPE html>
<html lang="en">
<head>
<title>Receipt POS </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/menu.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body>
 <header>
    <div class="container">
        <div class="row">
          <div class="col-md-4">
             <img class="imgsize" src="assets/images/1.png">
          </div>
         
          <div class="col-sm col-lg menu2">
            <ul class="nav justify-content-end ">
                <li class="nav-item">
                  <a class="nav-link menunav" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link menunav" href="#">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link menunav" href="faq.html">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menunav" href="pricing.html">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menunav" href="contact.html">Contact Us</a>
                </li>
                <div class="flex menu23">
                  <button type="button" onclick="window.location.href='https://billing.receiptspos.com/index.php?rp=/login'" class="btn buttonorange-outline">Login</button>
                  <button type="button" onclick="window.location.href='https://billing.receiptspos.com/register.php'" class="btn buttonorange-outline">Create</button>
               </div>
                
                
            </ul>
         
          </div>
         
        </div>
      </div>
 </header>



<?php $name = $_POST['name'];
$subject = $_POST['email'];
$email = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "info@receiptspos.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

?>


<h2 class="thankyoup">Thank You For Contacting us</h2>

<h5 class="thanks">One Of Agent will Contact You</h5>


<footer class="footer">
  <div class="container bottom_border">
    <div class="row">
    <div class=" col-sm-4 col-md col-sm-4  col-12 col">
    <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
    <!--headin5_amrc-->
    <p class="mb10">POS system using flexible to very Ecommerce Industry and our system is demand according to the client with support with any web browser</p>
    <p><i class="fa fa-location-arrow"></i> 512/9 Highlevel Road Pannipitya </p>
    <p><i class="fa fa-phone"></i>  +94729784444  </p>
    <p><i class="fa fa fa-envelope"></i> info@receiptspos.com </p>
    
    
    </div>
    
    
    <div class=" col-sm-4 col-md  col-6 col">
    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
    <!--headin5_amrc-->
    <ul class="footer_ul_amrc">
      <li><a href="#">About</a></li>
      <li><a href="#">Features</a></li>
      <li><a href="#">API & Integrations</a></li>
      <li><a href="#">Billing</a></li>
    
      </ul>
      <!--footer_ul_amrc ends here-->
      </div>
      
      
      <div class=" col-sm-4 col-md  col-6 col">
      <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
      <!--headin5_amrc-->
      <ul class="footer_ul_amrc">
      <li><a  href="#">Terms and Condition</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Software Policy</a></li>
      >
      </ul>
      <!--footer_ul_amrc ends here-->
      </div>
    
    <div class=" col-sm-4 col-md  col-12 col">
    <h5 class="headin5_amrc col_white_amrc pt2">Payment Method</h5>
    <!--headin5_amrc ends here-->
    
    <ul class="footer_ul2_amrc">
   
    </ul>
    <!--footer_ul2_amrc ends here-->
    </div>
    </div>
    </div>
    
    
    <div class="container">
    
    <!--foote_bottom_ul_amrc ends here-->
    <p class="text-center">Copyright <script>document.write(new Date().getFullYear())</script> | Designed With by <a class="whitep" href="#">Receipt POS</a></p>
    
    <ul class="social_footer_ul">
    <li><a href="https://www.facebook.com/receiptpos"><i class="fab fa-facebook-f"></i></a></li>
   
    </ul>
    <!--social_footer_ul ends here-->
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </footer>
</body>
</html>