<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration form</title>
    
    <link rel="stylesheet"href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap');
</style>

</head>
<body>
    <form class="" action="index.html" method="post">
    <div class="container">
    <div class="inner">
    <div class="title">
    <h3>RegistrationForm</h3>
    
    <div class="content">
        <div class="txt">
    <input type="text" name="urname" value="" id="txtuser" placeholder="Username">
    <span id="c1" class="far fa-user"></span>
    

    </div>

    <div class="txt1">
        <input type="text" name="email" value="" id="txtemail" placeholder="eg @example">
        <span id="c2" class="glyphicon glyphicon-envelope"></span>
    </div>

    <div class="txt1">
        <input type="password" name="passwd" id="txtpass" placeholder="Password" value="">
        <span id="c3" class="glyphicon glyphicon-lock"></span><i class="far fa-user"></i>
    </div>

    <div class="txt1">
        <input type="password" name="cpasswd" id="txtcpass" placeholder="Confirm password" value="">
        <span id="c4" class="glyphicon glyphicon-lock"></span>

    </div>
    <div class="txt1">
    
        <input type="text" name="pnumber" id="number" placeholder="Phonenumber" value="">
        <span id="c4" class="glyphicon glyphicon-lock"></span>

    </div>
    <hr>

   <div class="fill">
<input type="text" name="fname" id="txtfname" placeholder="First name">

<input type="text" name="lname" id="txtlname" placeholder="Last name">
<div class="dates">
<label for="date">Date of Birth</label><i class="fa fa-user-circle-o" aria-hidden="true"></i>

    <input type="date" class="form-control" id="Fname" placeholder="dd/mm/yy" required>
</div>
</div>
    </div>

    <div class="radios">
       <label>Gender:</label> 
        
        <input type="radio" name="gender" value="Male">
        <label for="">Male</label>
    
        <input type="radio" name="gender" value="Female"> 
        <label for="">Female</label>
    </div>
 

    <div class="language">
      <label>Languages</label>
        <br/>
    <input type="checkbox" id="chekbox" name="check" value="">
        <span>HTML</span>

        <input type="checkbox" id="chekbox" name="check" value="">
        <span>GO</span>

        <input type="checkbox" id="chekbox" name="check" value="">
        <span>PHP</span>

        <input type="checkbox" id="chekbox" name="check" value="">
        <span>JAVASCRIPT</span>

    </div>

    <div class="ckbox">
        <input type="checkbox" id="ckbox" name="ck1" value="">
        <span>I Agree to Terms and Services</span>
        <br/>
        <input type="checkbox" name="ck2" id="ckbox2" value="">
        <span>I Want to receive news and special offers</span>

</div>
<div >
  <button class="btn-block">REGISTER</button>
</div>
</div>
</div>
</div>
    </form>


</body>
</html>