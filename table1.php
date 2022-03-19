<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
</head>
<style type="text/css">
	#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<body>
	 <nav>
    <div class="nav-wrapper grey darken-3">
      <a href="" class="brand-logo">Articles</a>
      
    </div>
  </nav>
<table id="customers">
	<tr>
    <th>id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Title</th>
    <th>Text</th>
    <th>Article Link</th>
    
 


  </tr
<?php 
$conn=mysqli_connect("localhost", "drishtiweb2018","Okmijn123!@#","drishti2018");
if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT id,firstname,lastname,email,title,textarea,filename from articles";
$result=$conn->query($sql);
$i=1;
if($result-> num_rows>0){
   
	while($row=$result->fetch_assoc()){
	     $fileExt=explode('.', $row["filename"]);
  $fileActualExt=strtolower(end($fileExt));
  $allowed = array('pdf');
  if (in_array($fileActualExt, $allowed)){
		echo "<tr><td>".$i."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["title"]."</td><td>".$row["textarea"]."</td><td>".'<a href="http://docs.google.com/gview?embedded=true&url=http://drishti-magazine.org/2018/Articles/uploads/'.$row["filename"].'" target="_blank">'.$row["filename"].'</a>'."</td></tr>";
	$i++;}
	else{
		echo "<tr><td>".$i."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["title"]."</td><td>".$row["textarea"]."</td><td>".'<a href="http://drishti-magazine.org/2018/Articles/uploads/'.$row["filename"].'" target="_blank">'.$row["filename"].'</a>'."</td></tr>";
	$i++;	
  }
  }
  
      
  }
	
else{
	echo "0 result";
}
$conn->close();
?>
</table>
</body>
</html>
