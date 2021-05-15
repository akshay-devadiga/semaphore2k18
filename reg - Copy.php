<?php
include('dbconfig.php');
//counts the nof rows
$result = mysqli_query($dbC,"SELECT COUNT(*)  FROM eventstb where eventname !=''");
$row = mysqli_fetch_assoc($result);
$size = $row['COUNT(*)'];

//reteives tem
$sql=mysqli_query($dbC,"select teamname AS ts ,teamid AS ti from teamregistrationtb where collegename= '' and emailid= '' and password= '' and mobileno= '' and teamimage= '' and status!='1' ");
$res=mysqli_fetch_assoc($sql);
//event 
$sql=mysqli_query($dbC,"select eventname AS e1 from eventstb where eventid='101'");
$res1=mysqli_fetch_assoc($sql);
$sql=mysqli_query($dbC,"select eventname AS e2 from eventstb where eventid='102'");
$res2=mysqli_fetch_assoc($sql);
$sql=mysqli_query($dbC,"select eventname AS e3 from eventstb where eventid='103'");
$res3=mysqli_fetch_assoc($sql);
$sql=mysqli_query($dbC,"select eventname AS e4 from eventstb where eventid='104'");
$res4=mysqli_fetch_assoc($sql);
$sql=mysqli_query($dbC,"select eventname AS e5 from eventstb where eventid='105'");
$res5=mysqli_fetch_assoc($sql);
$sql=mysqli_query($dbC,"select eventname AS e6 from eventstb where eventid='106'");
$res6=mysqli_fetch_assoc($sql);
$sql=mysqli_query($dbC,"select eventname AS e7 from eventstb where eventid='107'");
$res7=mysqli_fetch_assoc($sql);
$sql=mysqli_query($dbC,"select eventname AS e8 from eventstb where eventid='108'");
$res8=mysqli_fetch_assoc($sql);
$sql=mysqli_query($dbC,"select eventname AS e9 from eventstb where eventid='109'");
$res9=mysqli_fetch_assoc($sql);
extract($_POST);


if(isset($save))
{

/*$query1="insert into teamsparticipantstb values('101','101','sdf')";
mysqli_query($dbC,$query1);*/



/* $query1="INSERT INTO teamsparticipantstb (eventid,teamid,participantname1)  
VALUES ('df','sdf','sdf');";
    mysqli_query($dbC,$query1); */
	  
	
	
	
  if($cname!=''&&$email!=''&&$password!=''&&$mob!='')
  {
   $query="UPDATE teamregistrationtb SET collegename = '$cname',emailid= '$email',password='$password',mobileno='$mob',status='1' WHERE teamname = '$res[ts]' and teamid = '$res[ti]' ";
      mysqli_query($dbC,$query);
 
 if($size ==1)
 {
    $query1="INSERT INTO teamsparticipantstb (eventid,teamid,participantname1)  
VALUES ('101','$res[ti]','$pfe11');";
    mysqli_query($dbC,$query1); 
 }else if ($size ==2)
 {
  $query21="INSERT INTO teamsparticipantstb (eventid,teamid,participantname1)  
VALUES ('101','$res[ti]','$pfe21');";
	mysqli_query($dbC,$query21);
	$query22="INSERT INTO teamsparticipantstb (eventid,teamid,participantname1)  
VALUES ('102','$res[ti]','$pfe22');";
	mysqli_query($dbC,$query22);
    
	
	
 }else if ($size ==3)
 {
    $query31="INSERT into teamsparticipantstb  values ('101','$res[ti]','$pfe31')";
    mysqli_query($dbC,$query31);
	$query32="INSERT into teamsparticipantstb  values ('102','$res[ti]','$pfe32')";
    mysqli_query($dbC,$query32);
	$query33="INSERT into teamsparticipantstb  values ('103','$res[ti]','$pfe33')";
    mysqli_query($dbC,$query33);
   
 }else if ($size ==4)
 {
    $query41="INSERT into teamsparticipantstb  values ('101','$res[ti]','$pfe41'";
    mysqli_query($dbC,$query41);
	$query42="INSERT into teamsparticipantstb  values ('102','$res[ti]','$pfe42'";
    mysqli_query($dbC,$query42);
	$query43="INSERT into teamsparticipantstb  values ('103','$res[ti]','$pfe43'";
    mysqli_query($dbC,$query43);
	$query44="INSERT into teamsparticipantstb  values ('104','$res[ti]','$pfe44'";
    mysqli_query($dbC,$query44);
 
 }else if ($size ==5)
 {
 $query1="INSERT into teamsparticipantstb  values ('101','$res[ti]','$pfe51'";
    mysqli_query($dbC,$query1);
	$query2="INSERT into teamsparticipantstb  values ('102','$res[ti]','$pfe52'";
    mysqli_query($dbC,$query2);
	$query3="INSERT into teamsparticipantstb  values ('103','$res[ti]','$pfe53'";
    mysqli_query($dbC,$query3);
	$query4="INSERT into teamsparticipantstb  values ('104','$res[ti]','$pfe54'";
    mysqli_query($dbC,$query4);
	$query5="INSERT into teamsparticipantstb  values ('105','$res[ti]','$pfe55'";
    mysqli_query($dbC,$query5);
 
 }else if ($size ==6)
 {
     $query1="INSERT into teamsparticipantstb  values ('101','$res[ti]','$pfe61'";
    mysqli_query($dbC,$query1);
	$query2="INSERT into teamsparticipantstb  values ('102','$res[ti]','$pfe62'";
    mysqli_query($dbC,$query2);
	$query3="INSERT into teamsparticipantstb  values ('103','$res[ti]','$pfe63'";
    mysqli_query($dbC,$query3);
	$query4="INSERT into teamsparticipantstb  values ('104','$res[ti]','$pfe64'";
    mysqli_query($dbC,$query4);
	$query5="INSERT into teamsparticipantstb  values ('105','$res[ti]','$pfe65'";
    mysqli_query($dbC,$query5);
	$query6="INSERT into teamsparticipantstb  values ('106','$res[ti]','$pfe66'";
    mysqli_query($dbC,$query6);
	
 }else if ($size ==7)
 {
     $query1="INSERT into teamsparticipantstb  values ('101','$res[ti]','$pfe71'";
    mysqli_query($dbC,$query1);
	$query2="INSERT into teamsparticipantstb  values ('102','$res[ti]','$pfe72'";
    mysqli_query($dbC,$query2);
	$query3="INSERT into teamsparticipantstb  values ('103','$res[ti]','$pfe73'";
    mysqli_query($dbC,$query3);
	$query4="INSERT into teamsparticipantstb  values ('104','$res[ti]','$pfe74'";
    mysqli_query($dbC,$query4);
	$query5="INSERT into teamsparticipantstb  values ('105','$res[ti]','$pfe75'";
    mysqli_query($dbC,$query5);
	$query6="INSERT into teamsparticipantstb  values ('106','$res[ti]','$pfe76'";
    mysqli_query($dbC,$query6);
	$query7="INSERT into teamsparticipantstb  values ('107','$res[ti]','$pfe77'";
    mysqli_query($dbC,$query7);
 
 }else if ($size ==8)
 { 
     $query1="INSERT into teamsparticipantstb  values ('101','$res[ti]','$pfe81'";
    mysqli_query($dbC,$query1);
	$query2="INSERT into teamsparticipantstb  values ('102','$res[ti]','$pfe82'";
    mysqli_query($dbC,$query2);
	$query3="INSERT into teamsparticipantstb  values ('103','$res[ti]','$pfe83'";
    mysqli_query($dbC,$query3);
	$query4="INSERT into teamsparticipantstb  values ('104','$res[ti]','$pfe84'";
    mysqli_query($dbC,$query4);
	$query5="INSERT into teamsparticipantstb  values ('105','$res[ti]','$pfe85'";
    mysqli_query($dbC,$query5);
	$query6="INSERT into teamsparticipantstb  values ('106','$res[ti]','$pfe86'";
    mysqli_query($dbC,$query6);
	$query7="INSERT into teamsparticipantstb  values ('107','$res[ti]','$pfe87'";
    mysqli_query($dbC,$query7);
	$query8="INSERT into teamsparticipantstb  values ('108','$res[ti]','$pfe88'";
    mysqli_query($dbC,$query8);
	
 
 }else if ($size ==9)
 {
    $query1="INSERT into teamsparticipantstb  values ('101','$res[ti]','$pfe91'";
    mysqli_query($dbC,$query1);
	$query2="INSERT into teamsparticipantstb  values ('102','$res[ti]','$pfe92'";
    mysqli_query($dbC,$query2);
	$query3="INSERT into teamsparticipantstb  values ('103','$res[ti]','$pfe93'";
    mysqli_query($dbC,$query3);
	$query4="INSERT into teamsparticipantstb  values ('104','$res[ti]','$pfe94'";
    mysqli_query($dbC,$query4);
	$query5="INSERT into teamsparticipantstb  values ('105','$res[ti]','$pfe95'";
    mysqli_query($dbC,$query5);
	$query6="INSERT into teamsparticipantstb  values ('106','$res[ti]','$pfe96'";
    mysqli_query($dbC,$query6);
	$query7="INSERT into teamsparticipantstb  values ('107','$res[ti]','$pfe97'";
    mysqli_query($dbC,$query7);
	$query8="INSERT into teamsparticipantstb  values ('108','$res[ti]','$pfe98'";
    mysqli_query($dbC,$query8);
	$query9="INSERT into teamsparticipantstb  values ('109','$res[ti]','$pfe99'";
    mysqli_query($dbC,$query9);
 }else if ($size ==10)
 {
    $query1="INSERT into teamsparticipantstb  values ('101','$res[ti]','$pfe101'";
    mysqli_query($dbC,$query1);
	$query2="INSERT into teamsparticipantstb  values ('102','$res[ti]','$pfe102'";
    mysqli_query($dbC,$query2);
	$query3="INSERT into teamsparticipantstb  values ('103','$res[ti]','$pfe103'";
    mysqli_query($dbC,$query3);
	$query4="INSERT into teamsparticipantstb  values ('104','$res[ti]','$pfe104'";
    mysqli_query($dbC,$query4);
	$query5="INSERT into teamsparticipantstb  values ('105','$res[ti]','$pfe105'";
    mysqli_query($dbC,$query5);
	$query6="INSERT into teamsparticipantstb  values ('106','$res[ti]','$pfe106'";
    mysqli_query($dbC,$query6);
	$query7="INSERT into teamsparticipantstb  values ('107','$res[ti]','$pfe107'";
    mysqli_query($dbC,$query7);
	$query8="INSERT into teamsparticipantstb  values ('108','$res[ti]','$pfe108'";
    mysqli_query($dbC,$query8);
	$query9="INSERT into teamsparticipantstb  values ('109','$res[ti]','$pfe109'";
    mysqli_query($dbC,$query9);
	$query10="INSERT into teamsparticipantstb  values ('110','$res[ti]','$pfe1010'";
    mysqli_query($dbC,$query10);
 }else if ($size ==11)
 {
  $query1="INSERT into teamsparticipantstb  values ('101','$res[ti]','$pfe101'";
    mysqli_query($dbC,$query1);
	$query2="INSERT into teamsparticipantstb  values ('102','$res[ti]','$pfe102'";
    mysqli_query($dbC,$query2);
	$query3="INSERT into teamsparticipantstb  values ('103','$res[ti]','$pfe103'";
    mysqli_query($dbC,$query3);
	$query4="INSERT into teamsparticipantstb  values ('104','$res[ti]','$pfe104'";
    mysqli_query($dbC,$query4);
	$query5="INSERT into teamsparticipantstb  values ('105','$res[ti]','$pfe105'";
    mysqli_query($dbC,$query5);
	$query6="INSERT into teamsparticipantstb  values ('106','$res[ti]','$pfe106'";
    mysqli_query($dbC,$query6);
	$query7="INSERT into teamsparticipantstb  values ('107','$res[ti]','$pfe107'";
    mysqli_query($dbC,$query7);
	$query8="INSERT into teamsparticipantstb  values ('108','$res[ti]','$pfe108'";
    mysqli_query($dbC,$query8);
	$query9="INSERT into teamsparticipantstb  values ('109','$res[ti]','$pfe109'";
    mysqli_query($dbC,$query9);
	$query10="INSERT into teamsparticipantstb  values ('110','$res[ti]','$pfe1010'";
    mysqli_query($dbC,$query10);
	$query11="INSERT into teamsparticipantstb  values ('111','$res[ti]','$pfe1011'";
    mysqli_query($dbC,$query11);
 }
 else
 {
   echo "OOps no events details to enter";
   
 }
 
 
  }else
  {
      $teamdetils="PLEASE ENTER VALID DETAILS ";
  }

 
 
 }else
 {
 echo "OOps no  details to enter";
 }
      if(!empty($_GET['success'])){

      if($_GET['success'] == 'yes'){

     $Success = 'data submitted successfully';

 }

}

//Then place this where ever you want the message to appear.






// Changed the query - there's no need for DISTINCT
// and aliased the count as "num"
//$data = mysqli_query($dbC,'SELECT COUNT(eventid) AS num FROM eventstb') or die(mysql_error());

// A COUNT query will always return 1 row
// (unless it fails, in which case we die above)
// Use fetch_assoc for a nice associative array - much easier to use
//$row = mysqli_fetch_assoc($data);

// Get the number of uses from the array
// 'num' is what we aliased the column as above
//$value = $row['num'];
//$query = "SELECT COUNT(*) AS numberOfRows FROM eventstb ";

//$result = mysqli_query($dbC, $query); // Result resource

//$row = mysqli_fetch_array($result); // Use something like this to get the result
//echo $row['numberOfRows'];

//echo $size;


?>
		<html lang="en">
<head>
<div class="hero">
<div class="u-full-width"> 
  <center><h3><b><font color=red>S</font>EMAPHORE <font color=red>R</font>EGISTRATION <font color=red>S</font>YSTEM</b></h3></center>
  </div>
  <!-- Basic Page Needs –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Mobile Specific Metas–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- FONT –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
 <!-- CSS –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">
  <script type="text/javascript" src="particles.js"></script>
  <!-- Favicon–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
<style>
input {
    width: 400px;
}
</style>
<title>Select DIV to show</title>
<script type="text/javascript">
function show(obj) {
no ="<?php echo$size;?>";
//no = obj.options[obj.selectedIndex].value;
//count = obj.options.length;
count ="<?php echo$size;?>";
for(i=1;i<count;i++)
document.getElementById('myDiv'+i).style.display = 'none';
if(no>0)
document.getElementById('myDiv'+no).style.display = 'block';
 document.getElementById("3").selected=true;
}
</script>

</head>
<body >
<h1><?php /*echo "count $size";*/?></h1>
<!--<h1>
<?php/*echo "ss  <script>document.getElementById('3').selected=true;</script>";
header("Refresh:0030");
*/?></h1>-->
<center>
<script type="text/javascript">
	particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 135,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "star",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 12
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.42490419612936353,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 56.1194221302933,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 176.3753266952075,
      "color": "#2874a6",
      "opacity": 1,
      "width": 2.0844356791251797
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "repulse"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
</script>
<div class="container" id="particles-js" >

<h1><?php /*echo $res1['e1'];
   echo $res['ti'];
   echo $pfe21;*/?></h1>
<form name="myForm" method="post" enctype="multipart/form-data" border="1" autocomplete="off">
<input class="u-full-width" class="form-control" style="text-align:center;" align="center" type="text" readonly="true" value="TEAM NAME : <?php echo $res['ts'];?>"  name="teamname"/><br>
<input  class="u-full-width" type="text"  name="cname" placeholder="College name" class="form-control" style="border:1px solid "/><br>
 <input class="u-full-width" type="email"  class="form-control" name="email" placeholder="Email" style="border:1px solid " required/><br>
 <input class="u-full-width" type="password"  class="form-control" name="password" placeholder="Password"style="border:1px solid " required/><br>
 <input  class="u-full-width" type="number" class="form-control"  placeholder="Mobileno" style="border:1px solid " name="mob" required/><br>
 <br><select  class="u-full-width" onChange="show(this)">
<option value="0">SELECT HERE</option>
<option value="1" >EVENTS</option>
<!--
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
<option value="4">Four</option>
<option value="5">Five</option>
<option value="6">Six</option>
<option value="7">Seven</option>
<option value="8">Eight</option>
<option value="9">Nine</option>
<option value="10">Ten</option>-->
</select>

<div id="myDiv1" style="display:none">

<input class="u-full-width" name="pfe11" placeholder="Enter participant name for <?php echo $res1['e1'];?>"  type="text" ><br>
<input class="u-full-width"  type="submit"/>

</div>


<div id="myDiv2" style="display:none">

<input class="u-full-width" type="text" name="pfe21" placeholder="Enter participant name for <?php echo $res1['e1'];?>" ><br>
<input class="u-full-width" type="text" name="pfe22" placeholder="Enter participant name for <?php echo $res2['e2'];?>"/><br>

</div>


<div id="myDiv3" style="display:none">

<input class="u-full-width" type="text" name="pfe31" placeholder="Enter participant name for <?php echo $res1['e1'];?>"/><br>
<input class="u-full-width" type="text" name="pfe32" placeholder="Enter participant name for <?php echo $res2['e2'];?>"/><br>
<input class="u-full-width" type="text" name="pfe33" placeholder="Enter participant name for <?php echo $res3['e3'];?>"/><br>

</div>

<div id="myDiv4" style="display:none">

<input class="u-full-width" type="text" name="pfe41" placeholder="Enter participant name for <?php echo $res1['e1'];?>" ><br>
<input class="u-full-width" type="text" name="pfe42" placeholder="Enter participant name for <?php echo $res2['e2'];?>"/><br>
<input class="u-full-width" type="text" name="pfe43" placeholder="Enter participant name for <?php echo $res3['e3'];?>" ><br>
<input class="u-full-width"  type="text" name="pfe44" placeholder="Enter participant name for <?php echo $res4['e4'];?>"/><br>
</div>
<div id="myDiv5" style="display:none">

<input class="u-full-width" type="text" name="pfe51" placeholder="Enter participant name for <?php echo $res1['e1'];?>"><br>
<input class="u-full-width" type="text" name="pfe52" placeholder="Enter participant name for <?php echo $res2['e2'];?>"/><br>
<input class="u-full-width" type="text" name="pfe53" placeholder="Enter participant name for <?php echo $res3['e3'];?>"><br>
<input class="u-full-width" type="text" name="pfe54" placeholder="Enter participant name for <?php echo $res4['e4'];?>"/><br>
<input class="u-full-width" type="text" name="pfe55" placeholder="Enter participant name for <?php echo $res5['e5'];?>"/><br>
</div>
<div id="myDiv6" style="display:none">

<input class="u-full-width" type="text" name="pfe61" placeholder="Enter participant name for <?php echo $res1['e1'];?>"><br>
<input class="u-full-width" type="text" name="pfe62" placeholder="Enter participant name for <?php echo $res2['e2'];?>"><br>
<input class="u-full-width" type="text" name="pfe63" placeholder="Enter participant name for <?php echo $res3['e3'];?>"/><br>
<input class="u-full-width" type="text" name="pfe64" placeholder="Enter participant name for <?php echo $res4['e4'];?>"><br>
<input class="u-full-width" type="text" name="pfe65" placeholder="Enter participant name for <?php echo $res5['e5'];?>"/><br>
<input class="u-full-width" type="text" name="pfe66" placeholder="Enter participant name for <?php echo $res6['e6'];?>"/><br>
</div>
<div id="myDiv7" style="display:none">

<input class="u-full-width" type="text" name="pfe71" placeholder="Enter participant name for <?php echo $res1['e1'];?>"><br>
<input class="u-full-width" type="text" name="pfe72" placeholder="Enter participant name for <?php echo $res2['e2'];?>"><br>
<input class="u-full-width" type="text" name="pfe73" placeholder="Enter participant name for <?php echo $res3['e3'];?>"/><br>
<input class="u-full-width" type="text" name="pfe74" placeholder="Enter participant name for <?php echo $res4['e4'];?>"><br>
<input class="u-full-width" type="text" name="pfe75" placeholder="Enter participant name for <?php echo $res5['e5'];?>"/><br>
<input class="u-full-width" type="text" name="pfe76" placeholder="Enter participant name for <?php echo $res6['e6'];?>"/><br>
<input class="u-full-width" type="text" name="pfe77" placeholder="Enter participant name for <?php echo $res7['e7'];?>"/><br>
</div>

<div id="myDiv8" style="display:none">

<input class="u-full-width" type="text" name="pfe81" placeholder="Enter participant name for <?php echo $res1['e1'];?>"><br>
<input class="u-full-width" type="text" name="pfe82" placeholder="Enter participant name for <?php echo $res2['e2'];?>"><br>
<input class="u-full-width" type="text" name="pfe83" placeholder="Enter participant name for <?php echo $res3['e3'];?>"><br>
<input class="u-full-width" type="text" name="pfe84" placeholder="Enter participant name for <?php echo $res4['e4'];?>"/><br>
<input class="u-full-width" type="text" name="pfe85" placeholder="Enter participant name for <?php echo $res5['e5'];?>"><br>
<input class="u-full-width" type="text" name="pfe86" placeholder="Enter participant name for <?php echo $res6['e6'];?>"/><br>
<input class="u-full-width" type="text" name="pfe87" placeholder="Enter participant name for <?php echo $res7['e7'];?>"/><br>
<input class="u-full-width" type="text" name="pfe88" placeholder="Enter participant name for <?php echo $res8['e8'];?>"/><br>
</div>
<div id="myDiv9" style="display:none">

<input class="u-full-width" type="text" name="pfe91" placeholder="Enter participant name for <?php echo $res1['e1'];?>"><br>
<input class="u-full-width" type="text" name="pfe92" placeholder="Enter participant name for <?php echo $res2['e2'];?>"><br>
<input class="u-full-width" type="text" name="pfe93" placeholder="Enter participant name for <?php echo $res3['e3'];?>"><br>
<input class="u-full-width" type="text" name="pfe94" placeholder="Enter participant name for <?php echo $res4['e4'];?>" ><br>
<input class="u-full-width" type="text" name="pfe95" placeholder="Enter participant name for <?php echo $res5['e5'];?>"/><br>
<input class="u-full-width" type="text" name="pfe96" placeholder="Enter participant name for <?php echo $res6['e6'];?>"><br>
<input class="u-full-width" type="text" name="pfe97" placeholder="Enter participant name for <?php echo $res7['e7'];?>"/><br>
<input class="u-full-width" type="text" name="pfe98" placeholder="Enter participant name for <?php echo $res8['e8'];?>"/><br>
<input class="u-full-width" type="text" name="pfe99" placeholder="Enter participant name for <?php echo $res9['e9'];?>"/><br>
</div>
<div id="myDiv10" style="display:none">

<input class="u-full-width" type="text" name="pfe101" placeholder="Enter participant name for <?php echo $res1['e1'];?>" ><br>
<input class="u-full-width" type="text" name="pfe102" placeholder="Enter participant name for <?php echo $res2['e2'];?>"><br>
<input class="u-full-width" type="text" name="pfe103" placeholder="Enter participant name for <?php echo $res3['e3'];?>"><br>
<input class="u-full-width" type="text" name="pfe104" placeholder="Enter participant name for <?php echo $res4['e4'];?>"><br>
<input class="u-full-width" type="text" name="pfe105" placeholder="Enter participant name for <?php echo $res5['e5'];?>"/><br>
<input class="u-full-width" type="text" name="pfe106" placeholder="Enter participant name for <?php echo $res6['e6'];?>"><br>
<input class="u-full-width" type="text" name="pfe107" placeholder="Enter participant name for <?php echo $res7['e7'];?>"/><br>
<input class="u-full-width" type="text" name="pfe108" placeholder="Enter participant name for <?php echo $res8['e8'];?>"/><br>
<input class="u-full-width" type="text" name="pfe109" placeholder="Enter participant name for <?php echo $res9['e9'];?>"/><br>
<input class="u-full-width" type="text" name="pfe1010" placeholder="Enter participant name for <?php echo $res10['e10'];?>"/><br>
</div>


<input class="button-primary"  type="submit" name="save"/>
<input class="button-primary" type="reset"  value="Reset"/>
</form>
</div>
</div>
<div><h1><?php if(isset($Success)){

echo $Success;
echo  $teamdetils;
}?></h1></div>

</center>
</body>
</html>
