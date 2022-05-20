<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  position: fixed;
  margin-right: -8px;
  margin-left: -8px;
}

* {
  box-sizing: border-box;
}
.outer{
  background: cadetblue;
  margin-top: -10px;
 
}
nav .menu{
  margin-left: 82%;
}
nav .logo {
    width: 90%;
    margin-left: 129px;
    border-radius: 50%;
    margin-bottom: -65px;
    margin-right: -10px;
    padding: 21px 30px;
    color: white;
    font-size: 30px;
    font-weight: bold;
}
nav .menu {
  padding: 20px 6px;
  /*width: 70%;*/
  text-align: center;
  margin-right: -33px;
  margin-left: 1055px;
}
nav .menu a { 
   padding: 0px 10px;
   text-decoration: none;
   font-weight: bold;
}
div .menu .btnsig{
  border-radius: 20px;
  padding: 8px 8px 8px 8px;
  color: white;
  font-size: 17px;
}
div .menu .btnsig{
  color: White;
}
.pic{
  width: 115%;
  height: 64%;
  margin-right: -22px;
}

.row {
  display: flex;
}

/* Left column (menu) */
.left {
  height:660px;
  padding: 15px 15px;
}

.left h2 {
  padding-left: 44px;
}


.right {
  margin-left:-1px;   
  flex: 65%;
  /*padding: 15px;*/
  margin-right: 22px;
  
}

#mySearch {
  width: 200px;
  font-size: 18px;
  padding: 3px;
  border: 1px solid #ddd;
  margin-left: 3px;
  border-radius: 12px;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block;
  padding-left: 44px;
  border-radius: 12px;
}
.left:hover {
  background-color: #3e8e41
}

#myMenu li a:hover { 
  background-color: #eee;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #595959;
   color: white;
   text-align: right;
   padding-right: 20px;
}

.dropdown {
    margin-left: 30px;
    margin-top: 4px;
    padding: 8px;

}

.dropdown-content {
  display: none;  
  position: absolute;
  background-color: lightcyan;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.drop {
    border-radius: 4px;
    width: 91px;
    height: 38px;
}


</style>
</head>
<body>
   <div class="outer">
    <header>
      <nav>
        <div class="logo"><em>Online Courier Management System</em></div>
        <div class="menu">
          <a href="signup.php" class="btnsig">SIGN UP</a>
          <a href="login.php" class="btnsig">LOGIN</a>
          <a href="login.php" class="btnsig">LOGOUT</a>
          <a href=""><i class="fa fa-fw fa-settings"></i>        
        </div>  
      </nav>
    </header>
  </div>

    <div class="row">
      <div class="left" style="background-color:#bbb;">
        <h2>Menu</h2>
        <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
        <ul id="myMenu">
    <div class="dropdown">
      <button class="drop">Branch</button>
    <div class="dropdown-content">
      <a href="newstaff.php">Staff Registration</a>
      <a href="oldstafflist.php">Staff Record</a>
      <a href="register1.php">Item list</a>
    </div>
  </div>

        <li><a href="Registration.php">Registration</a></li>
        <li><a href="biometric.php">Bio-Metric</a></li>
        <li><a href="shippment.php">Shipped</a></li>
        <li><a href="location.php">Arrived At destination</a></li>
        <li><a href="#">Report</a></li>
      </ul>
  </div> 
    <div class="right">
      <img src="./images/back.jpg" alt="background" class="pic">
    </div>
  </div>

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
<div class="footer">
  <p>Courier Management System</p>
</div>
</body>
</html>
