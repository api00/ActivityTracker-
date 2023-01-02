
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ice Cream Parlour</title>
  <link rel="icon" href="./images/favicon.png" type="image/gif" sizes="20x20">
  <link href="../CSS/index.css" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <style>
    * {
  transition: all .7s ease;
}
.container-c
{
  position: relative;
    top: 6rem;
    left: 19%;
    transition: 1s;
    transform: translate(-50%, -50%);
    height: 295px;
    width: 486px;
  background-image: url("../VIEW/images/3.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  overflow: hidden;
  border-radius: 6px;
}

.container-c:hover {
  background-size: 110%;
}

.main
{
  height: 100%;
  width: 100%;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
.main h1
{
  text-transform: uppercase;
  color: white;
  font-family: 'Lato', sans-serif;
  letter-spacing: 2px;
  border-bottom: 2px solid transparent;
  border-image: linear-gradient(to right, white, transparent) 1;
  margin: 0 auto 0 1rem;
  padding: 0.5rem 0;
}
.main p
{
  color: white;
  font-size: 18px;
  font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  padding: 0.75rem 1rem;
}
.main h1, .main p {
  position: relative;
  top: 20%;
}
.main::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 60%;
  background: linear-gradient( transparent, rgb(27, 27, 27), black);
  z-index: -1;
  opacity: 0.8;
}

.source-link {
  height: 40px;
  width: 40px;
  position: relative;
  top: 20%;
  left: 2%;
}
.info {
  position: relative;
    top: 12%;
    left: -7rem;
    width: 100%;
    color: white;
    cursor: pointer;
}
.info i {
  position: relative;
  left: 50%;
  margin: 0 0.75rem;
}
.info i {
  
}

.fa-thumbs-up:hover{
  color: rgb(113, 113, 199);
}
.fa-share:hover {
  color: rgb(204, 160, 79);
}

a:link {
  text-decoration: none;
  color: #fff;
}

body {
  background: #cecece;
  font-family: 'Quicksand', sans-serif;
}

h1 {
  font-family: 'Barriecito', cursive;
  text-align: left;
}

h3 {
  font-family: 'Quicksand', sans-serif;
  text-align: left;
  margin-top: -20px;
}

.wrapper {
  border-radius: 5px;
  display: inline-block;
  background: #fff;
  position: relative;
  margin: 0 100px;
  width: 300px;
  height: auto;
  overflow: hidden;
  box-shadow: 0px 10px 25px #999;
}

.pic {
  height: 180px;
 
  background-size: 400px;
  background-position: center;
  padding: 0 0 20px 0;
  margin-bottom: 35px;
}

.wrapper:hover .pic,
.wrapper:focus .pic {
  transform: scale(1.2);
}

p.header {
  padding: 0 20px;
  font-size: 18px;
  font-weight: bold;
  font-style: italic;
}

p.content {
  padding: 0 20px;
  font-size: 12px;
  text-align: justify;
}

a .readmore {
  height: 40px;
  width: 100px;
  float: right;
  padding-left: 10px;
  line-height: 40px;
  background-color: #8bc34a;
  margin: 20px;
  font-size: 12px;
  border-radius: 5px;
}

a .readmore:hover {
  background-color: #9fdf55;
}

a .readmore i {
  color: #fff;
  margin-left: 5px;
  transition: cubic-bezier(0.68, -0.55, 0.27, 01.55) 320ms;
}

a .readmore:hover i {
  margin: 0 0 0 20px;
}




.button-center {
  background-color: #8bc34a;
  margin-top: 20px;
}

a .leesmeer {
  height: 40px;
  width: 110px;
  padding-left: 10px;
  line-height: 40px;
  margin: 0 auto;
  font-size: 15px;
  border-radius: 5px;
}
a .button-center:hover {
  background-color: #9fdf55;
}
a .button-center i {
  color: #fff;
  margin-left: 5px;
  transition: cubic-bezier(0.68, -0.55, 0.27, 01.55) 320ms;
}
a .button-center:hover i {
  margin: 0 0 0 20px;
}
     .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
    border-radius: 83%;
    height: 258px;
}


/* Our container for the cards */
.hello{
  display: flex;
  flex-direction: column;
  gap:1rem;
  
  width: 70%;
  margin:0.5rem auto;
  padding:0.5rem;
  
   /* Change the border color if you want to see the full container for reference */
  border: thin solid white;
}

/* If the screen is less than 600 px then just make main full width */
@media screen and (max-width:600px){
  main{
    width: 100%;
  }
}

/* common card stylings */
/* What is in common on both cards - which is basically everything */
.card-h, .card-reverse{
  width: 100%;
  max-height:fit-content;
  overflow:hidden;
  
  display:flex;
  flex-wrap: wrap;
  gap:1rem;
  
   /* Change the brder color if you want to see the full card for reference */
  border: thin solid white;
  
  /* The shadow gives a nice mordrn touch to the cardsbut this is hghly decorative */
  box-shadow:3px 3px 10px rgba(0,0,0,0.2);
}

/* What is unique for the reversed card - only the row direction */

/* making the image do what we want */
/* The image min-width sets the breakpoint for the flex-wrap - so when should it stack the elements instead of having them lined up in a row */
/* The min-height just ensures that the picture always fills out the card*/
img{
  min-width: 200px;
  min-height:100%;
  object-fit:cover;
  
  /* Flex property tells how the image should scale in reference to the other elements. It should grow and shrink in regard to original proportions*/
  flex: 1 1;
}

/* Styling for the text box */
section{
  width: fit-content;
  margin: 4rem;
  
  /* Flex property in this case scales the section to be preferably 3 times as big as the other elements when scaling up but */
  flex: 3 1;
}

/* Some extra styling on the text just because I can */
h3{
  font-size: clamp(1em, 4cqw, 3em);
}
ul{
  padding: 1rem 0.5rem;
}
button{
  padding: 0.2rem;
}
  </style>
</head>

<body>
  <header>
    <div class="row" id="navbarSection">
      <ul class="nav">
        <li>
          <a href="#homeSection">HOME</a>
        </li>
        <li>
          <a href="#aboutUsSection">ABOUT US</a>
        </li>
        <li>
          <a href="#flavourSection">BLOGS</a>
        </li>
        <li>
          <a href="#contactSection">CONTACT</a>
        </li>
       
      </ul>
    </div>
    <div class="title" id="homeSection">
      <p>Todos ;)</p>
      <a href="#aboutUsSection">
        <i class="fa fa-angle-double-down down-arrow"></i>
      </a>
    </div>
  </header>
  <div class="about-us-container" style="background-color: #ffffff;" id="aboutUsSection">
    <div class="column">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="./images/swiming.jpg" style="width:100%; height:450px">
        </div>

        <div class="mySlides fade">
          <img src="./images/2.jpg" style="width:100%; height:450px">
        </div>

        <div class="mySlides fade">
          <img src="./images/3.jpg" style="width:100% ;height:450px">
        </div>
        <div class="mySlides fade">
          <img src="./images/4.jpg" style="width:100% ;height:450px">
        </div>
        <div class="mySlides fade">
          <img src="./images/5.jpg" style="width:100% ;height:450px">
        </div>
      </div>


    </div>
    <div class="column description-container">
      <div class="description">
        <p class="about-us-title">About us</p>
        <p class="about-us-content">We help smart people who want to live their life organized. <br>The user can also track their activities and share them between others.<br> A user has to buy a subscription for unlocking premium features.
        </p>
        <a class="button" href="#flavourSection">
          <p> Blogs</p>
        </a>

      </div>


    </div>
  </div>
  <div class="">
    <p class="flavour-header">Feeds</p>
    <div class="flavour-container" id="flavourSection">
    <?php 
    
    $data1 = file_get_contents("http://localhost:8080/project_war_exploded/user/Goals");
    $data = json_decode($data1);
       for( $i=0; $i<count($data); $i++):
            ?>

        <div class="container-c">
        <div class="main">
            <h1><?php echo $data[$i]->title;?></h1>
            <p><?php echo $data[$i]->description;?>
            </p>
            <div class="source-link">
                
            </div>
            <div class="info">
            <span><?php echo $data[$i]->username;?></span>
            <i class=""><?php echo $data[$i]->from_date[0]."/" ?>
                <?php echo $data[$i]->from_date[1]. "/" ?>
                <?php echo $data[$i]->from_date[2] ?></i>
            <i class=""><?php echo $data[$i]->to_date[0]."/" ?>
                <?php echo $data[$i]->to_date[1]. "/" ?>
                <?php echo $data[$i]->to_date[2] ?></i>
            
            </div>
        </div>
        
    </div>
  <?php endfor ?>
  
     
   
      
      
    
    </div>
  </div>
  <div class="flavour-section">
    <p class="flavour-header">Blogs</p>
    <div class="flavour-container" id="flavourSection">
    <?php 
    
    $data1 = file_get_contents("http://localhost:8080/project_war_exploded/admin/blogs");
    $data = json_decode($data1);
       for( $i=0; $i<count($data); $i++):
            ?>
    <div class="wrapper">
    <div class="pic"><img src="../VIEW/images/<?php echo $data[$i]->image;?>" class="pic" alt="" sizes="" srcset=""></div>
    <p class="header">
      <p style="color: black; font-size:20px"><?php echo $data[$i]->title;?></p>
    </p>
    <p class="content" style="color: black; font-size:15px"> <?php echo $data[$i]->description ?>
    </p>
    <a href="#_">
      <div class="button-center">
        <div class="leesmeer"><b>Read </b> <i class="fas fa-angle-right"></i></div>
      </div>
    </a>
  </div>
  <?php endfor ?>
  
     
   
      
      
    
    </div>
  </div>
  <div class="contact-container" id="contactSection">
    <div class="contact-section">
      <p class="subtext">Call for orders</p>
      <div class="card phone-section">
        <div class="contactNumber">
          <i class="fa fa-phone phone-icon"></i>
          <p>CALL</p>
        </div>
      </div>
      <p class="subtext visti-text">All Credit goes to </p>
      <div class="card">
        <div class="address">
          <i class="fa fa-map-signs"></i>
          <p>Mavericks 22-23</p>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="up-arrow-section">
      <a href="#navbarSection">
        <i class="fa fa-angle-double-up up-arrow"></i>
      </a>
    </div>
  </footer>
</body>
<script src='../CONTROLLER/scripts/script.js'></script>

</html>