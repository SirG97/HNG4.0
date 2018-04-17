
<!DOCTYPE html>
<html>
<head>
	<title>Congredia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
  <link rel="stylesheet" type="text/css" href="css/hng.css">
</head>
<body>
<!-- This is the landing page -->
<div class="navigation">
  <div class="title">
    <a href="#">HNGInternship 4.0</a>

    <ul class="inline-form">
          <form class="" method="POST" action="">
              <li class="form-collapse">
                <input class="input" type="Email"  placeholder="Email">
                <input class="input" type="Password"  placeholder="Password">
                <button type="submit" class="btn btn-login" >Login</button>
              </li>
          </form>
      </ul>
  </div>
  
</div>
<div id="cover">
  <div class="time-box">
    <div class="time">
      <?php
        echo "Today is " . date("l") . "<br>";
        echo "The time is " . date("h:i:s");
     ?>
    </div>
    <div class="join">Join the best remote internship in<br> Africa and <br> learn how to code</div>
    <div class="btn-container">
       <button type="submit" class="btn btn-join" >Join</button>
    </div>
   
  </div>
  
</div> 
</body>