<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutorial php</title>
</head>
<body>
    <?php
    
      //single line comment
      # single line commnet
      /*multiple
       line comment */

       //print in php:
       //echo "<h1>hello worlds</h1>";
/*Date
h:12 hour  format

H:24hour format
i: minutes
s: seconds
u: microseconds
a;lowercase am and pm
I: full text for the day
F: full text month
j: day of the month
S: suffix
Y: year in 4 digits

*/

//echo date('h:i:s:u,F I')
    //   $username= $_POST['username'];
    //   $email= $_POST['email'];
    //   $password= $_POST['password'];

    //   echo"<h1> User Information</h1>";
     
    //   echo"User Name is " . $username .'</br>';
      
    //   echo"User email is " . $email .'</br>';
      
    //   echo"User password is " . $password .'</br>';

//     $str = <<<EOD
//     User name is $username and
//     his/her email address  is $email
//     and his/her password is $password
//     EOD; //no identation allowed

//    echo $str .'</br>';

   // defining a constant
   define('Pi', 3.1416);
   echo 'The value of Pi is ' . Pi .'</br>';
//operation in php
echo "5 + 2 = " . (5+2)  . '</br>';

$min = 10;
$max = 15;

if($min<$max){
    echo 'max is the biggest number by ' . ($max-$min);
}
    ?>

</body>
</html>