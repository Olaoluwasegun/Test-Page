<?php  
include 'code.php';
session_start();
header("location.php");

try{
    $con= new PDO ("mysqli:host=localhost;dbname=user","root","");
//}
if(isset($_POST["login"])){  
    $emailaddress = $_POST['emailaddress'];
    $password = $_POST['password'];
}
    
    $select=$con->prepare("SELECT * FROM userdata WHERE emailaddress= '$emailaddress' and password='$password'");  
    $select->setfetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    $data=$select->fetch();
//}
    if ($data['emailaddress']!=$emailaddress and  $data['password']!=$password) {
        echo "invalid email address or password";
    }
    elseif ($data['emailaddress']==$emailaddress and $data['password']==$password) {
        $_SESSION['emailaddress']=$data['emailaddress'];
        $_SESSION['firstname']=$data['firstname'];
    }
    header("location:dash.php");
}

    catch (PDOException $e) {
        // echo $e->getMessage();
        echo $e->getMessage();
        die();
    }
?>  
