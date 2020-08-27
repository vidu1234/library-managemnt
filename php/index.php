<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hide and Show Div elements in javascript</title>
	<link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>







   <div class="wrapper-nav">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">Library Management</div>
      <ul>


              <!--login button eka---------------------------------------------------------------------------------------------->
  <div>
    <a href="#" id="button-signup" class="button-signup">sign up</a>
  </div>



          <!--login button eka-------------------------------------------------------------------------------------------------------->
  <div>
    <a href="#" id="button" class="button">Login</a>
  </div>


  


  <!--uda search ekai notification thunai-------------------------------------------------------------------------------------------->
        <li><a href="#">
          <i class="fas fa-search"></i></a></li>
        <li><a href="#">
          <i class="fas fa-bell"></i>
          </a></li>
        <li><a href="#">
          <i class="fas fa-user"></i>
          </a></li>
      </ul>
    </div>
  </div>




























<div class="wrapper">
  <div class="wrapper_left">
    <ul>
      <li data-li="angular" class="active">
        <p>Dashboard</p>
      </li>
      <li data-li="nodejs">
        <p>Books</p>
      </li>
      <li data-li="reactjs">
        <p>Members</p>
      </li>
      <li data-li="vuejs">
        <p>News Paper</p>
      </li>
      <li data-li="Magazine">
        <p>Magazine</p>
      </li>
      <li data-li="Returned">
        <p>Returned</p>
      </li>
    </ul>
  </div>

























  <div class="wrapper_right">
    
    <div class="container">
      <div class="item angular">
        <div class="item_info">
          <div class="img"></div>
          <div class="card">
<div class="inner">
  <img class="card-img-top" src="38995.jpg" alt="Card image cap">
</div>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>




    <div class="card1">
<div class="inner">
  <img class="card-img-top" src="4646.jpg" alt="Card image cap">
</div>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>



  <div class="card2">
<div class="inner">
  <img class="card-img-top" src="teenager-student.jpg" alt="Card image cap">
</div>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

  </div>
</div>








<!--modal section log in form eke-------------------------------------------------------------------------------------------->
<div class="bg-modal">
  <div class="modal-content">
    <div class="close">+</div>
    <img src="signup.png" class="signup-img">


    <form action="">
      <input type="text" placeholder ="name">
      <input type="text" placeholder ="E-mail">
      <a href=""class="button">submit</a>

    </form>
    

  </div>
</div>










<!--modal section sign in form eke----------------------------------------------------------------------------------------------------->
<div class="bg-modal-signup">
  <div class="modal-content-signup">
    <div class="close-signup">+</div>
    <img src="signup.png" class="signup-img">


    <form action="/action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <input type="text" placeholder="Enter Name" name="Name" id="Name" required>

    
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

  
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signup">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
    

  </div>
</div>




























  <script src="js/signup-form.js"></script>    
	<script src="scripts.js"></script>
  <script src="js/signup.js"></script>
  




</body>
</html>