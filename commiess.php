<?php 
    session_start();
    $uname=$_SESSION['name'];
    $idsc=500;
    $butid=2000;
    $commid=3000;
    $conn=mysqli_connect('localhost','root','','form');
    if(!$conn){
       die("Connection Unsuccesfull");
    }
    $sql="select * from fbposts";
    $z=mysqli_query($conn,$sql);
    $cnt=mysqli_num_rows($z);

    $temu=$_SESSION['name'];
    for($i=1;$i<=$cnt;$i++){

    if(isset($_POST[strval($commid)])){
        $comis=$_POST[strval($idsc+$i-1)];
        $sql="select * from comtab where com='$temu' and imgno='$i'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)==1){
            $sql="UPDATE comtab SET comm= '$comis'  WHERE imgno='$i' and com='$temu'";
            $z=mysqli_query($conn,$sql);
            
        }else{
            $sql="INSERT into comtab(imgno,com,comm) values('$i','$temu','$comis') ";
            $z=mysqli_query($conn,$sql);
              
        }
        header('location:FBOthersposts.php');
        break;
    }
    $commid+=1;
}
