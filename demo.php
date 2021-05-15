<?php
include('/dbconfig.php');
/*
$array = array( 'one','two','three' );
// since we just initialized the array, the pointer is at the beginning:
print current( $array );
print "<br>";
//  pointer doesn't move.  prints "one".
print next( $array );
print "<br>";
//  pointer moves forward.  prints "two".
print next( $array );
print "<br>";
//print prev( $array );
//  pointer moves back/    prints "one".

//print next( $array[0] );
//  this (similar to what you're doing) should actually throw an error:
//    Warning: next() expects parameter 1 to be array ...
//  and print nothing at all/


/*
<a href="/php/art-detail.php?title_id=<?php
if(current($art) != end($art)) {
  $next= next($art);
  }else{
  $next= reset($art);
}
echo $next['teamid'];
?>">Next</a>


$sql=mysqli_query($dbC,"select * from teamregistrationtb ");
$rows = mysqli_fetch_array($sql);
print current( $rows );
print "<br>";
//  pointer doesn't move.  prints "one".
print next( $rows );
print "<br>";
//  pointer moves forward.  prints "two".
print next( $rows );
print "<br>";*/





?>

<?php/*
$sql=("select teamid from teamregistrationtb ");
$res = mysqli_query($dbC,$sql);

function mysqli_fetch_all1($res) {
   while($row=mysqli_fetch_array($res, MYSQL_BOTH)) {
       $return[] = $row;
   }
   return $return;
}

$art = mysqli_fetch_all1($res);
var_dump($art);
/*if(current($art) != end($art)) {
  $next= next($art);
  }else{
  $next= reset($art);
}
print next( $art );*/
?>
<?php
/*
// You need to do the query right away, so you get a count of how many rows are in the result ...
$result = mysqli_query($dbC,"select teamid from teamregistrationtb");

// You need to know how many are in your result, so you can wrap-around the first and last photo ...
$num_rows = mysqli_num_rows($result);

// default starting values ...
$prev=$num_rows-1;
$next=1;
$current=0;

// if the URL contains any variables (prev and next), use them instead ...
// remember that arrays start at zero (0), so if you have 50 photos,
// they will be in the array as elements 0,1,2,3 ... etc.
if(isset($_GET['prev'])){
$current=$_GET['prev'];
$prev=$current-1;
}

if(isset($_GET['next'])){
$current=$_GET['next'];
$next=$current+1;
}

// Display only the current photo ...
$c=0;
while($row = mysqli_fetch_array($result)) {
   if($c==$current){
   echo $row['teamid'];
   }
$c++;
} 
while($row = mysqli_fetch_array($result)) {
   if($p==$prev){
   echo $row['teamid'];
   }
$c++;
}
// determine the "new" prev and next values ...
// wrap around if you are at the beginning or the end of your list of photos ...
if($prev<0){
$prev=$num_rows-1;
}
if($next>($num_rows-1)){
$next=0;
}
echo"

<a href='demo.php?p=$prev'>PREV</a>
<a href='demo.php?p=$next'>NEXT</a>
";
*/
?>



<?php
/* Put mysql connection code here */

/*
if (isset($_POST['id'])) {
    $tmp = array_keys($_POST['id']);
    $curid = intval($tmp[0]);

    // Select contents from the selected id
    $sql = "SELECT teamname FROM teamregistrationtb WHERE teamid={$curid}";
    $result = mysqli_query($dbC,$sql);
    if (mysqli_num_rows($result)>0) {
        $info = mysqli_fetch_assoc($result);
    } else {
        die('Not found');
    }

    // Next id
    $sql = "SELECT teamname FROM teamregistrationtb WHERE teamid>{$curid} LIMIT 1";
    $result = mysqli_query($dbC,$sql);
    if (mysqli_num_rows($result)>0) {
        $nextid = mysqli_result($result,0);
    }

    // Prev id
    $sql = "SELECT teamname FROM teamregistrationtb WHERE teamid<{$curid} LIMIT 1";
    $result = mysqli_query($dbC,$sql);
    if (mysqli_num_rows($result)>0) {
        $previd = mysqli_result($result,0);
    }
} else {
    // No form has been submitted so use the lowest id and grab its info
    $sql = "SELECT teamname FROM teamregistrationtb WHERE teamid > 0 LIMIT 1";
    $result = mysqli_query($dbC,$sql);
    if (mysqli_num_rows($result)>0) {
        $info = mysqli_fetch_assoc($result);
    }
}

if (isset($info)) {
    $content = '<pre>'.print_r($info,true).'</pre>';
} else {
    $content =  'Nothing in the db :(';
}

*/
$result = mysqli_query($dbC,"select teamname from teamregistrationtb where collegename= '' and emailid= '' and password= '' and mobileno= '' and teamimage= ''");
$recordset = array(); $i = 0;
while ($row = mysqli_fetch_assoc($result))
{
    $recordset[$i] = $row;
    if ($i > 0) { $recordset[$i-1]['nextid'] = $row['teamname']; }
    $i++;
}
//var_dump($recordset);

foreach($recordset as $item):
    //  echo '<span>'.$item['id'].'</span>';
      echo '<span>'.$item['teamname'].'</span> <br>';
    //  echo '<span>'.$item['age'].';</span>';
 endforeach;

?>
<form name="myForm" border="1">
<input class="u-full-width" class="form-control" style="text-align:center;" align="center" type="text" readonly="true" value="TEAM NAME : <?php echo $item['teamname'];?>"  name="teamname"/><br>

<?php

// You need to do the query right away, so you get a count of how many rows are in the result ...
$result = mysqli_query($dbC,"select teamid from teamregistrationtb where collegename= '' and emailid= '' and password= '' and mobileno= '' and teamimage= ''");

// You need to know how many are in your result, so you can wrap-around the first and last photo ...
$num_rows = mysqli_num_rows($result);
var_dump($num_rows);
if($num_rows>0)
{
echo "NOT EMPTY";
}else
{
echo "EMPTY";

}
echo "<br>";
echo "<br>";echo "<br>";echo "<br>";
// You need to do the query right away, so you get a count of how many rows are in the result ...
$result = mysqli_query($dbC,"select eventid from eventstb ");

// You need to know how many are in your result, so you can wrap-around the first and last photo ...
$num_rows = mysqli_num_rows($result);
var_dump($num_rows);
if($num_rows>0)
{
echo "NOT EMPTY";
}else
{
echo "EMPTY";

}


echo "<br>";
$result = mysqli_query($dbC,"select eventname from eventstb");
$recordset = array(); $i = 0;
while ($row = mysqli_fetch_assoc($result))
{
    $recordset[$i] = $row;
    if ($i > 0) { $recordset[$i-1]['nextid'] = $row['eventname']; }
    $i++;
}
//var_dump($recordset);

foreach($recordset as $item):
    //  echo '<span>'.$item['id'].'</span>';
      echo '<span>'.$item['eventname'].'</span> <br>';
    //  echo '<span>'.$item['age'].';</span>';
 endforeach;
 
 echo $item['eventname'];
//  print next($item);
  echo "<br>";
  echo "<br>";
  
  
?>








