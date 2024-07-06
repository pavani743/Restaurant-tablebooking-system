<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    if(!empty($email) && !empty($password))
    {
        $query="select * from sign where email='$email' limit 1";
        $result=mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['pass'] == $password)
                {
                    header("location: login.php");
                    die;

                }
                                
            }
        }
        echo "<script type='text/javascript'> alert('successfully  Signup')</script>";
        
    }
    else
        echo "<script type='text/javascript'> alert('wrong password')</script>";

}                    
?>
