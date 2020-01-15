<?php 


// validation 
print_r($_POST);
if(isset($_POST) && $_POST["submit"] == "register"){

        if($_POST["email"] != "" && $_POST["password"] != ""){

            // $con = msqli_connect(); 
            // db connecion 

            // $query = "Insert into  users(email, password) values '$_POST[\"email\"]'";

            $res = mysqli_query($query, $con);

            if($res){
                echo "User registered successfully."
            }
        }else{
            echo "Please enter email or password";
        }


        

}else{
    exit("This method not allowed.");
}
?>