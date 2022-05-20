<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Reg</title>
  <style>
.button {
  background-color: black;
  /*border: none;*/
  color: white;
  padding: 13px 45px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 45px;
}
    .txt{
       width: 300px;
      height: 46px;
      background-color: darkgrey;
      /*border: 0px;*/
      text-align: center;
      border-radius: 45px;
    }
    .h1{
      margin-top: -50px;
    }
    .footer{
      background: gray;
      height: 42px;
      margin-left: -9px;
      margin-right: -8px;
      margin-bottom: -15px;
      margin-top: 24px;
      text-align: right;
      padding: 9px;
    }
</style>
</head>

<body style="background: #c2f0f0"> 
  <script>
  function f1()
    {
      document.getElementById("Full_Name").value = "";
    }
  </script>
  <form method="post" name="form1" action="db_signup.php">
  <center><h1>User Registration</h1></center>
  <hr><br><br><br><br>
<table class="h1" width="619" height="250" border="1" align="center">
  <tbody>
    <tr>
     <td><h3>Full Name</h3></td>
      <td width="307" bgcolor="#E0E0E0" style="text-align: center; color: #E0E0E0;">
        <input type="text" name="Full_Name" class="txt" id="fullname"></td>
    </tr>
    <tr>
      <td><h3>Email</h3></td>
      <td bgcolor="#E0E0E0" style="text-align: center; color: #E0E0E0;">
        <input type="email" class="txt"  name="Email" id="email"></td>
    </tr>
    <tr>
      <td><h3>Password</h3></td>
      <td bgcolor="#E0E0E0" style="text-align: center; color: #E0E0E0;">
        <input type="password" name="Password" class="txt" id="inputpassword"></td>
    </tr>
    <tr>
      <td><h3>Confirm_Password</h3></td>
      <td bgcolor="#E0E0E0" style="text-align: center; color: #E0E0E0;">
        <input type="password" name="Confirm_Password" class="txt" class="txt" id="inputassword"></td>
    </tr>
    <tr>
      <td><h3>Contact</h3></td>
      <td bgcolor="#E0E0E0" style="text-align: center; color: #E0E0E0;">
        <input type="Contact" name="Contact" class="txt" id="contact"></td>
    </tr>
    <tr>
      <tr>
      <td><h3>Country</h3></td>
      <td bgcolor="#E0E0E0" style="text-align: center; color: #E0E0E0;">
        <input type="Country" name="Country" class="txt" id="country"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" class="button" value="Register" onclick="myFunction()">
      <input type="reset" name="reset" id="reset" class="button" onClick="f1()" value="Reset"></td>
    </tr>
  </tbody>
</table>
    </form>
    <div class="footer">
  <h3>Courier Management System</h3>
</div>

<script>
function myFunction() {
  alert("Your Registraion is Successfully.....");
}
</script>

</body>
</html>