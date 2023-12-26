
<?php
session_start();
?>
<html>
    <head>
    <form method="post" action = "FBsignupphp.php">
    <style>
        .topdiv{
            
            background-image:url("uploads/Fb bg.jpeg");
            background-size: cover;
            text-align:center;
            margin-top: -7px;
        }
        #vertical-line{
            width:1px;
            height:500px;
            background-color:black;
        }
        .logout{
          
  background-color: #E21818;
  color: white;
  padding: 18px 17px;
  margin: 8px 0;
  border: none;
  width: 100%;
  position:relative;
  right:-63%;
  text-decoration: none;
  border-radius: 12px;
  font-weight:700;
    font-size:15px;
    font-family:Verdana, sans-serif;

}
       
.a{
  background-color: #04AA6D;
  color: black;
  padding: 18px 17px;
  margin: 8px 0;
  border: none;
  width: 100%;
  position:relative;
 text-decoration: none;
  border-radius: 12px;
 right:36%;
 font-weight:700;
    font-size:15px;
    font-family:Verdana, sans-serif;
}  

.i{
  
  background-image:url("uploads/facebook-background-with-likes-hearts.jpg");
  background-size: cover;
  height:540px;
  overflow:hidden;  
}


    </style>
    
    </head>
    
    
    <div class="topdiv">
    <center>
    <p style="font-size:60px;color:blue;margin-bottom: -15px;"><strong>FACEBOOK </strong></style></p>
    <h2>Hi <?php echo $_SESSION['name'];?>, WELCOME to your Profile</h2>
    </center>
    <br>
    <a class="logout" href='FBlogout.php'> Logout </a>

   
   
    
    <a class="a" href="FBMainprofile.php">Home</a>
    <a class="a" href="FBOthersposts.php">Suggested Feed</a>
    <a class="a" href="posts.php">My Posts</a>
    <a class="a" href="FBaccount.php">My account</a>
    <br>
    <br>
</div>
   

    
    <!--<div class="topdiv1" >
    <a class="a" href="FBMainprofile.php">Home</a>
    <a class="a" href="FBOthersposts.php">Suggested Feed</a>
    <a class="a" href="posts.php">My Posts</a>
    <a class="a" href="FBaccount.php">My account</a>
    <br>
    <br>
    <hr>

    </div>-->
    <div class="i" >
    <img  src="uploads/facebook-background-with-likes-hearts.jpg">
    </div>