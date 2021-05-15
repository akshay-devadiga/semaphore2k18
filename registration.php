<?php
session_start();
error_reporting(0);
include('dbconfig.php');
include('includes/config.php');

        
if(isset($_POST['submit']))
{
    
$Collage=$_POST['Collage'];
$name=$_POST['name'];
$email=$_POST['email'];
$no=$_POST['no'];
$Contact=$_POST['Contact'];
$boy=$_POST['boy'];
$girl=$_POST['girl'];

        
            $insres = mysqli_query($dbC, "INSERT INTO `registration`(`cname`, `name`, `email`, `nop`, `contact`, `boys`, `girls`) VALUES ('$Collage','$name','$email',$no,$Contact,$boy,$girl)");
            
            if($insres)
            {
                echo "<script>alert('Record added Successfuly');</script>";
               echo "<script>window.location='index.html'</script>";
            }
            else
            {               
                $error = "Failed to insert record ".mysqli_error($dbC);
            }
    

         
}
?>
