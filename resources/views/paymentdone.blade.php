<html>
<head>
</head>


<body onload="foo()" >

  <h1> DONE DONE DONE </h1>


  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test3";

$link = mysqli_connect($servername, $username, $password, $dbname);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



$sql = "INSERT INTO carforms
SELECT * FROM payments";

if($result = mysqli_query($link, $sql)){

$sqltwo = "DELETE from payments";
mysqli_query($link, $sqltwo);

}


mysqli_close($link);
?>

  <form action=" {{ url('/transfer') }} " id="search-theme-formthree"  >
   {{csrf_field()}}


 <button type="submit" class="btn btn-success">Print Policy</button>
 </form>

</body>
</html>
