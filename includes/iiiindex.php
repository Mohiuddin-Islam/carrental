<?php require_once "connect.php"; ?>
<?php
$name="";

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM register WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    /*if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        $name=$fetch_info['username'];
}*/
}

/*if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
 
if(true){
   
    if($run_Sql){
        
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                echo "reset";
                header('Location: reset-code.php');
            }
        }else{
            echo "user-otp";
            header('Location: user-otp.php');
        }
    }
}else{
    echo "login-user";
    header('Location: login-user.php');
}*/
?>


<!DOCTYPE html>
<html>
    <head><title>
        Road Trip Rental
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html{
            height: 100%;
        }
        body{

           background-color: white;
        }
        .nav a{
            float: left;
            font-size: 22px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        div.nav{
            
             top: 0;
            border-style: solid;
        border-color:white;
        border-width: 1px;
        background-color: rgb(28, 13, 82);height: 135px;
        overflow: hidden;
        }
        
        
        .final{
            border-style: solid;
        border-color:rgb(250, 247, 247);
        border-width: 1px;
        background-color: darkgray;
        height: 200px;
        }
        .p a:hover{
            color: red;
        }
        a:hover{
            color: red;
        }
        ul{
            padding-left: 80px;
            list-style: disc;
            font-size: 40px;
        }
        ul li{
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        }
        .f{
            font-size: 25px;
        }
        .card {
            box-shadow: 1px 10px 18px rgb(78, 77, 77);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
        background-color: rgb(10, 10, 10);
        
        }
        .row:after {
  content: "";
  display: table;
  clear: both;
}
.fa {
  padding: 10px;
  font-size: 40px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 60%;
}
.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-instagram {
  background: linear-gradient(red,blue);
  color: white;
}
    </style>
    
    </head>
    <body>

        <div class="nav">
            <img src="https://www.freelogodesign.org/file/app/client/thumb/1d0dc938-b616-4ddb-9731-bca48e583150_200x200.png?1605102362910" style="padding-bottom: 30px;" width="170" height="170">
          <a href="index.php" style="text-shadow: 1px 1px 2px rgb(236, 46, 46), 0 0 25px rgb(236, 30, 23);">HOME</a>
          <a href="#" style="text-shadow: 1px 1px 2px rgb(236, 46, 46), 0 0 25px rgb(236, 30, 23);">ABOUT US</a>
          <a href="#" style="text-shadow: 1px 1px 2px rgb(236, 46, 46), 0 0 25px rgb(236, 30, 23);">CONTACT US</a>
          
          <p class="p"><a href="signup.php" style="text-shadow: 1px 1px 2px rgb(236, 46, 46), 0 0 25px rgb(236, 30, 23);">SIGN UP</a><i class="glyphicon glyphicon-user" style="font-size: 30px;color: rgb(253, 252, 252);padding-top: 10px;float: right;"></i></p>
          <?php 
//isset($_SESSION['email']
                  if(isset($_SESSION['username'] ))

                  {
                    echo "<a href=' login/logout-user.php' style='text-shadow: 1px 1px 2px rgb(236, 46, 46), 0 0 25px rgb(236, 30, 23)'>LOGOUT</a>";

                  }
                  else {
                    echo "<p class='p' ><a href='login/login-user.php' style='text-shadow: 1px 1px 2px rgb(236, 46, 46), 0 0 25px rgb(236, 30, 23);'>LOG IN</a><i class='glyphicon glyphicon-log-in' style='font-size: 30px;color: rgb(253, 250, 250);padding-top: 10px;float: right;'></i></p>" ;
                  }

           ?>
          
        </div>
        <p style="text-align: center; font-size:10px">Welcome 
        <?php 
        if(isset($_SESSION['email']) )
            {$name=$_SESSION['username'];  
                  echo $name ;
                      
                  }
        ?>
        </p>
        <div>
        <img src="https://1.bp.blogspot.com/-U4xYlQyD9JI/XuH_R1DBkYI/AAAAAAACvIM/wxTG3r1v-yMVmi-JAvqUWmHYNsIJDa4pQCLcBGAsYHQ/s1600/2020%2BVolkswagen%2BGolf%2B8%2BStyle%2Bby%2BPaddy%2BMcGrath-45.jpg" style="width:100%" height="620" >
        <div style="position:absolute;
        top: 32%;
        left: 18%;">
            <h1 style="font-size: 50px;color: whitesmoke;text-shadow: -1px 0 rgb(10, 126, 54), 0 1px rgb(10, 119, 25), 1px 0 rgb(12, 129, 28), 0 -1px rgb(17, 119, 48);"><u>SAFETY IS OUR FIRST PRIORITY</u></h1>
            <a href="#" style="color: rgb(250, 4, 4);" class="f"><button type="button" class="btn btn-success" style="font-size: 25px;color: rgb(247, 252, 251);">START YOUR BOOKING HERE</button></a>
        </div>
        </div><br><br><br><br>
        <div>
            <img src="https://d3h256n3bzippp.cloudfront.net/XC90-white-background-2.jpg" width="500" height="300">
            <img src="https://www.pngitem.com/pimgs/m/10-100442_innova-car-png-transparent-innova-car-png-png.png" width="500" height="250">
            <img src="https://wallpapercave.com/wp/wp4364877.jpg" width="500" height="300">
        </div>
        <div>
            <a href="#" style=" color: rgb(248, 108, 15);
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;padding-left: 150px;" class="f"><u>VOLVO</u></a>
            <a href="#" style="color: rgb(240, 105, 15);
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;padding-left: 470px;" class="f"><u>INNOVA</u></a>
            <a href="#" style="color: rgb(248, 118, 12);
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black; padding-left: 450px;" class="f"><u>VERNA</u></a><br><br>
            
            <div style="
            position: absolute;
            left: 80px;
            width: 300px;
            border: 3px solid rgb(5, 15, 15);
            box-shadow: 1px 10px 18px red;
            padding: 10px;"><p style="color: rgb(17, 5, 5);font-size: 15px;" >Price Starting at ৳ 70/hr (Fuel Free) - CARS AVAILABLE: VOLVO, MARUTI SWIFT, INNOVA, VERNA, I20, AUDI</p></div>
            <div style="
            position: absolute;
            left: 600px;
            width: 300px;
            border: 3px solid #080d0e;
            box-shadow: 1px 10px 18px red;
            padding: 10px;"><p style="color: rgb(14, 3, 3);font-size: 15px;">Price Starting at ৳ 70/hr (Fuel Free) - CARS AVAILABLE: VOLVO, MARUTI SWIFT, INNOVA, VERNA, I20, AUDI</p></div>
            <div style="
            position: absolute;
            left: 1150px;
            width: 300px;
            border: 3px solid #090f0f;
            box-shadow: 1px 10px 18px red;
            padding: 10px;"><p style="color: rgb(14, 4, 4);font-size: 15px;">Price Starting at ৳ 70/hr (Fuel Free) - CARS AVAILABLE: VOLVO, MARUTI SWIFT, INNOVA, VERNA, I20, AUDI</p><br></div>
        </div>
        <br><br><br><br><br><br><br><br><br>
        <div>
            <img src="https://i.pinimg.com/originals/11/24/2f/11242f62a5ceb9847b4d1a3845ace78c.jpg" width="500" height="300">
            <img src="https://imgd.aeplcdn.com/1056x594/n/u60vnra_1420170.jpg?q=85" width="500" height="300">
            <img src="https://c4.wallpaperflare.com/wallpaper/644/910/550/2016-audi-rs-7-wallpaper-preview.jpg" width="500" height="300">
        </div>
        <div>
            <a href="#" style=" color: rgb(248, 120, 15);
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;padding-left: 150px;" class="f"><u>SWIFT</u></a>
            <a href="#" style="color: rgb(240, 97, 15);
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;padding-left: 470px;" class="f"><u>I20</u></a>
            <a href="#" style="color: rgb(248, 118, 12);
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black; padding-left: 450px;" class="f"><u>AUDI</u></a><br><br>
            
            <div style="
            position: absolute;
            left: 80px;
            width: 300px;
            border: 3px solid rgb(5, 15, 15);
            box-shadow: 1px 10px 18px red;
            padding: 10px;"><p style="color: rgb(17, 5, 5);font-size: 15px;" >Price Starting at ৳ 70/hr (Fuel Free) - CARS AVAILABLE: VOLVO, MARUTI SWIFT, INNOVA, VERNA, I20, AUDI</p></div>
            <div style="
            position: absolute;
            left: 600px;
            width: 300px;
            border: 3px solid #080d0e;
            box-shadow: 1px 10px 18px red;
            padding: 10px;"><p style="color: rgb(14, 3, 3);font-size: 15px;">Price Starting at ৳ 70/hr (Fuel Free) - CARS AVAILABLE: VOLVO, MARUTI SWIFT, INNOVA, VERNA, I20, AUDI</p></div>
            <div style="
            position: absolute;
            left: 1150px;
            width: 300px;
            border: 3px solid #090f0f;
            box-shadow: 1px 10px 18px red;
            padding: 10px;"><p style="color: rgb(14, 4, 4);font-size: 15px;">Price Starting at ৳ 70/hr (Fuel Free) - CARS AVAILABLE: VOLVO, MARUTI SWIFT, INNOVA, VERNA, I20, AUDI</p><br></div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="row">
        <div class="card" style="float: left;">
            <img src="https://easychairmedia.wpengine.com/wp-content/uploads/2015/02/Mobile-apps-image.jpg" alt="Mobile apps" style="width:100%">
            <h1 style="color: white;text-shadow: 1px 1px 2px black, 0 0 25px rgb(153, 226, 255), 0 0 5px rgb(96, 230, 248);">FREE MOBILE APPS</h1><br><br>
            <p style="font-size: 15px;color: aqua;">Use our iPhone and Android apps to administer your account on the go. We also have a frontend app for your customers so they can quickly make bookings with you and see your news and promotions.</p><br><br>
          </div>
          <div class="card" >
            <img src="https://flydeal.net/image/cache/catalog/categories/MAGIC%20VOUCHER-250x250.jpg" alt="Mobile apps" width="300" height="250">
            <h1 style="color: white;text-shadow: 1px 1px 2px black, 0 0 25px rgb(153, 226, 255), 0 0 5px rgb(96, 230, 248);">OFFERS & COUPONS</h1><br>
            <p style="font-size: 15px;color: aqua;">Vouchers, coupons, gift certificates, packages, bundles: the features make it easy to market, present and sell your offer in an attractive way while making sure overbooking will never happen.</p><br><br>
          </div>
          <div class="card" style="float: right;">
            <img src="https://i.pinimg.com/originals/1c/09/60/1c096085aeaf06f169dd9e0fe65e90db.png" alt="Mobile apps" width="300" height="250">
            <h1 style="color: white;text-shadow: 1px 1px 2px black, 0 0 25px rgb(153, 226, 255), 0 0 5px rgb(96, 230, 248);">EMAIL & SMS</h1><br><br>
            <p style="font-size: 15px;color: aqua;">Save time by having Instinct seekers send personalized emails and sms messages to your customers and staff. You can have extra messages sent at specific times. Use your own FROM address</p><br><br>
          </div>
        </div><br><br><br><br>
        <div style="background-color:rgb(106, 107, 106); height: 200px;">
        
         <center><a href="#" class="fa fa-facebook" ></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a></center><br><br><br>
    <center><p style="font-size: 20px;">&copy; CopyRight|<a href="#">Road Trip Rental</a></p></center>
    <center><p style="font-size: 20px;">Privacy Policy|<a href="#" target="blank">About US</a></p></center></div>
    </body>
</html>