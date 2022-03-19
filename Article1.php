<!DOCTYPE html>
<html>
<head>
  
  <title>Article Post|DRISHTI 2019</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  
  <link href='https://fonts.googleapis.com/css?family=Acme" rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Caveat|Dancing+Script|Gloria+Hallelujah" rel="stylesheet">


  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </style>
</head> 

<body style="background-color:#e0e0e0;">
  
      <nav class="nav-extended grey darken-3 transparent">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo" style="font-family: 'Caveat', cursive;">Drishti'19</a>
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#Post" >Post</a></li>
        <li><a href="#About">About</a></li>
      </ul>
    </div>
  </nav>
 


  <div class="container" style="margin-right:auto; margin-left:auto;">
  <?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$title=$_POST['title'];
$filepath=$_POST['filepath'];
$textarea=$_POST['textarea'];
if(!empty($filepath)||!empty($textarea))
{
    $emailExt=explode('@', $email);
    $emailActualExt=strtolower(end($emailExt));
  $allowedmail = array('sggs.ac.in');
   if (in_array($emailActualExt,  $allowedmail))
    {

    $host ="localhost";
   $dbUsername ="drishtiweb2018";
   $password ="Okmijn123!@#";
   $dbname ="drishti2018";
$conn =new mysqli($host,$dbUsername,$password,$dbname);

if(mysqli_connect_error()) 
   {
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
   }
    else
   {
        $SELECT ="SELECT title From articles Where title =? Limit 1";
         $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$title);
        $stmt->execute();
        $stmt->bind_result($title);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
   
           if ($rnum==0) {
          $stmt->close();
            
      
          if (isset($_POST['submit'])) {
  $file=$_FILES['file'];
  $fileName=$_FILES['file']['name'];
  $fileTmpName=$_FILES['file']['tmp_name'];
  $fileSize=$_FILES['file']['size'];
  $fileError=$_FILES['file']['error'];
  $fileType=$_FILES['file']['type'];
 
  $fileExt=explode('.', $fileName);
  $fileActualExt=strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf', '');
  if (in_array($fileActualExt, $allowed)) {
    if($fileSize<=7340032){
  if(!empty($filepath)){
  $fileNameNew=$title.".".$fileActualExt;
}
else
    {
     $fileNameNew="";
    }
    $INSERT ="INSERT Into articles (firstname, lastname, email, title, textarea,filename) values(?,?,?,?,?,?)";
      
          $stmt=$conn->prepare($INSERT);
          $stmt->bind_param("ssssss",$firstname,$lastname,$email,$title,$textarea,$fileNameNew);
          $stmt->execute();
          echo "<h3 class=".'style="font-family: '.'Caveat'.', cursive;'.">Your Article has been posted successfully!</h>";
           include("vendor/phpmailer/phpmailer/src/PHPMailer.php");
include("vendor/phpmailer/phpmailer/src/SMTP.php");
require("vendor/phpmailer/phpmailer/src/Exception.php");
$mail = new PHPMailer\PHPMailer\PHPMailer();

//Enable SMTP debugging. 
$mail->SMTPDebug = 0; 
                              
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "sg2plcpnl0256.prod.sin2.secureserver.net ";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "drishtiweb@drishti-magazine.org";                 
$mail->Password = "Okmijn123!@#";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "ssl";                           
//Set TCP port to connect to 
$mail->Port = 465;                                   

$mail->From = "drishtiweb@drishti-magazine.org";
$mail->FromName = "Team Drishti";

$mail->addAddress($email);

$mail->isHTML(true);

$mail->Subject = "Confirmation Mail";
$mail->Body = "We have recieved your post!<br>
It will be soon exibited on Insta-page of Drishti,the official magazine of SGGSIE&T,Nanded<br>
And it may also be exibited in the magazine of year 2019<br> 
Please do visit our social pages for further updates and more great content by our college students. <br>
Facebook : https://www.facebook.com/dristi17/<br>
Instagram : https://www.instagram.com/team_drishti_/
<br>
For any queries :<br>
Arpit Jadhav : 9527101679 <br> 
Ajeet Kaur Randhawa: 9422736813
<br><b>No matter what anybody tells you, words and ideas can change the world</b><br>
- Dead poets society";
$mail->AltBody = "Thank for your participation";
if(!$mail->send()) 
{
   echo "unable to send mail";
} 
$stmt->close();
         $conn->close();
        


     if(!empty($filepath)){
    if ($fileError==0) {

                 $fileDestination= 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                        }
    else{

      echo "<h3>
      There was an error uploading your file! <br> Try Again
      </h3>";
      header('Refresh: 4; URL=http://drishti-magazine.org/2018/Articles/');
    }
}

}
else
{
   echo "<h3 class=".'style="font-family: '.'Caveat'.', cursive;'.">File size is too big!</h3>";
       header('Refresh: 4; URL=http://drishti-magazine.org/2018/Articles/');
}
  }
   else{
  echo "<h3 class=".'style="font-family: '.'Caveat'.', cursive;'.">You cannot upload files of this type!</h3>";
       header('Refresh: 4; URL=http://drishti-magazine.org/2018/Articles/');
      }

  }
 

    
    
  }
  else 
   {  echo "<h5 class=".'style="font-family: '.'Caveat'.', cursive;'.">The entered title of the article already exists..<br>Try something new</h5>";
       header('Refresh: 4; URL=http://drishti-magazine.org/2018/Articles/');
     }
}
}
else{
    echo "<h3 class=".'style="font-family: '.'Caveat'.', cursive;'.">Enter COLLEGE registered mail id !</h3>";
       header('Refresh: 4; URL=http://drishti-magazine.org/2018/Articles/');
     }

}
else{
    echo "<h3>Select a file or write into Textarea!!!</h3>";
    header('Refresh: 4; URL=http://drishti-magazine.org/2018/Articles/');
}

?>
        </div>
        

     <footer class="page-footer grey darken-3" id="About" style="margin-top:300px;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Thanks for visiting !</h5>
                <p class="grey-text text-lighten-4"></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">More about Drishti</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" target="_blank" href="http://drishti-magazine.org/2018/Purvarang">
                     Purvarang| Official Newsletter of SGGS</a></li>
                  <li><a class="grey-text text-lighten-3" target="_blank" href="https://www.instagram.com/team_drishti_/">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" target="_blank" href="https://b-m.facebook.com/dristi17/">Facebook</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
<ul>
          <li>    Designed and developed by DrishtiWeb</li>
           <li> ©Copyright Drishti 2019</li>
</ul>
            </div>
          </div>
        </footer>
  
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script type="text/javascript">
  function loader()
  {
    var x = document.getElementById('loader');

    x.style.display = 'block';
  }

</script>
<script type="text/javascript" src="js/materialize.min.js"></script> 
<script type="text/javascript">
   $(document).ready(function(){
    $('.carousel-slider').slider();
  });

   
    $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
    $(document).ready(function(){
    $('.slider').slider();
  });
    $(document).ready(function() {
    $('textarea#textarea2').characterCounter();
  });

      

        
</script>
</body>
</html>
