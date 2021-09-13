<?php
/*
    # Checck the username and password is empty or not
    # Check password is greater the 6 character or not
    # username=admin and password=admin123 - say Credential Match otherwise say Wrong Username and Password
*/
$username = "admin";
$password ="admi";
//strlen returns the length of the string
$length=strlen($password);
if(empty($username) && empty($password))
{
    echo "Username and password must not be empty";
}
else{
    if($length<=5)
    {
    echo "Password must be greater than 6 char";
    }
     else
        {
            if($username=="admin" && $password=="admin123")
            {
                echo "Credential Match";
            }
            else{
                echo "Wrong Username and Password";
                }
        }
    }
?>