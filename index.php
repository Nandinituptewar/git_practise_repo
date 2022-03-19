<!DOCTYPE html>
<html>
<head>
  
  <title>Article Post|DRISHTI 2019</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="copyright" content="Drishti Webteam">
        <meta name="description" contetn="Drishti is Official magazine of SGGSIE&T">
        <meta name="keywords" content="drishti,sggsie&t,sparkle,marathi,hindi,english,art,science,tech,sggs,photography,articles">
  	<meta name="author" content="Drishti Magazine">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
 
  <link href='https://fonts.googleapis.com/css?family=Acme" rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Caveat|Dancing+Script|Gloria+Hallelujah" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

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
 

  
  <div class="slider">
  <div >
    <ul class="slides">
      <li>
        <img src="bg/bg2.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 style="text-shadow: 3px 2px black; font-family: 'Quicksand'">Team Drishti 2019</h3>
          <h5 class="text-lighten-3" style="text-shadow: 1.5px 1.5px black;font-family: 'Quicksand';">Giving you a platfrom to express your thoughts...</h5>
          <a class="waves-effect waves-light btn " href="#Post">Post an article ?</a>
        </div>
      </li>
      <li>
        <img src="bg/bg100.jpeg"> <!-- random image -->
        <div class="caption right-align">
          <h3 style="text-shadow: 3px 2px black; font-family: 'Kalam';">कविता</h3>
          <h5  style="text-shadow: 2px 1px black; color: grey darken 3; font-family: 'Quicksand'; ;">You can post your own poem if you love to write...</h5>
          <a class="waves-effect waves-light btn" href="#Post">Post an article ?</a>
        </div>
      </li>
      <li>
        <img src="bg/photo.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3 style="text-shadow: 3px 2px black; font-family: 'Dancing Script', cursive;">Photography</h3>
          <h5 class="text-lighten-3" style="text-shadow: 1.5px 1.5px black; font-family: 'Quicksand';">Sometimes words are not enough to express the beauty of nature...</h5>
          <a class="waves-effect waves-light btn" href="#Post">Post a Photograph ?</a>
        </div>
      </li>
      <li>
        <img src="bg/paint.jpeg"> <!-- random image -->
        <div class="caption center-align">
          <h3 style="text-shadow: 3px 2px black; font-family: 'Gloria Hallelujah', cursive;">Love to Draw ?</h3>
          <h5 class="text-lighten-3" style="text-shadow: 1.5px 1.5px black; font-family: 'Quicksand';">Then </h5>
          <a class="waves-effect waves-light btn" href="#Post">Post a Painting ?</a>
        </div>
      </li>
    </ul>
  </div>
</div>

  <div class="container" style="margin-right:auto; margin-left:auto;">
  <div class="row"><h2 class="header center" id="Post" style="font-family: 'Caveat', cursive;">Post Here</h2></div> 
  <div class="row">
    
    <form class="col m8 offset-m2 s12  z-depth-2" action="Article1.php" method="POST" enctype="multipart/form-data" style="background-color:white;">
      <div class="row">
          
        <div class="input-field col s12 m6">
          <i class="material-icons prefix">person</i> 
          <input name="firstname" type="text" class="validate" placeholder="" required>
          <label for="firstname">First Name</label>
        </div>
        <div class="input-field col s12 m6">
            <i class="material-icons prefix"></i> 
          <input name="lastname" type="text" class="validate" placeholder="" required>
          <label for="lastname">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
          <input name="email" type="email" class="validate" placeholder="@sggs.ac.in" minlength="21" maxlength="21">
          <label for="email">College mail id</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
            <i class="material-icons prefix">title</i>
          <input name="title" type="text" class="validate" placeholder="" required>
          <label for="title">Title of the article</label>
        </div>
      </div>
      <div class="file-field input-field">
      <div class="btn grey darken-1">
        <span>File</span>
        <input type="file" name="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" name="filepath" type="text" placeholder="Only .jpg .jpeg .png and .pdf are allowed">
        <span class="grey-text">file should be less than 7 MB</span>
      </div>
    </div>
   
       <h4 class="grey-text">OR</h4>
       <div class="row">
          <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
            <textarea name="textarea" class="materialize-textarea" data-length="5000" maxlength="5000" placeholder="Paste your poem/writtings here..."></textarea>
            <label for="textarea">Textarea</label>
          </div>
        </div>
        <div style="margin-bottom: 10px;">
       <button class="btn waves-effect waves-light grey darken-1" type="submit" name="submit">Submit
    <i class="material-icons right">send</i></div>
  </button>
    </form>
    
  </div>
        </div>
      <div class="parallax-container" style="height:200px">
          
      <div class="parallax"><img src="bg/Art.jpg"></div>
    </div>
   

    <div class="container">
        
        <h2 class="header center" id="Post" style="font-family: 'Caveat', cursive;" id="About">More about Drishti</h2>
     <div class="row">
         <a href="https://www.instagram.com/team_drishti_/" target="_blank">
         <div class="col s12 m6">
      <div class="card-panel hoverable">
        <div class="card-image">
          <img src="bg/1234.JPG" height="200px" width="100%">
         
        </div>
        <div class="card-content">
          <p></p>
        </div>
        <div class="card-action">
          <p style="font-family: Dosis;font-size:20px;color:#f44336">Drishti'19 #Insta</p>
        </div>
      </div>
    </div>
    </a>
     <a href="http://drishti-magazine.org/Purvarang" target="_blank">
    <div class="col s12 m6">
      <div class="card-panel hoverable">
        <div class="card-image">
          <img src="bg/123.JPG"  height="200px" width="100%">
          
        </div>
        <div class="card-content">
          <p></p>
        </div>
        <div class="card-action">
          <p style="font-family: Dosis;font-size:20px;color:#f44336">Purvarang| Official Newsletter of SGGS</p>
        </div>
      </div>
    </div>
  </div>
  </div>
  </a>
   <div class="parallax-container" style="height:200px">
          
      <div class="parallax"><img src="bg/Art.jpg"></div>
    </div>
     <footer class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Thanks for visiting !</h5>
                <p class="grey-text text-lighten-4"></p>
              </div>
             
            </div>
          </div>
          
          <div class="footer-copyright">
            <div class="container">
<ul>
          <li>    Designed and developed with <img src="https://img.icons8.com/color/48/000000/hearts.png"> by DrishtiWeb</li>
           <li> ©Copyright DrishtiWeb 2019</li>
</ul>
            </div>
          </div>
        </footer>
  
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script type="text/javascript">
 

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
  $('#textarea').val('New Text');


  $(document).ready(function(){
    $('.parallax').parallax();
  });
  
</script>
</body>
</html>