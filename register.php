<?php





$conn = mysqli_connect("localhost", "root", "", "test");

    if(isset($_POST['register'])){
        $username = $_POST['user'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $role = 'USER';



        $s = "select * from login where Username = '$username'";

        $result = mysqli_query($conn,$s);

        $num = mysqli_num_rows($result);

        if($num == 1){
            echo " Username Already Exists";
        }
        else{
            
            $password = md5($password);
            $sql = "INSERT INTO login(Username,Password,Phone,Email,Role) values('$username', '$password','$phone','$email','$role')";
            mysqli_query($conn,$sql);
            header("location:login.html");
        
        }





    }


?>
