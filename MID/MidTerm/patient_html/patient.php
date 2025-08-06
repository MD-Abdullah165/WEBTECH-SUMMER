<!DOCTYPE html>
<html>
<head>
    <title> patient registration</title>
    <link re1="stylesheet"href="../css/style.css">
</head>
  
  <body>
    <center>clinic patient registration</center>


  <form id="REGI FORM">
    <label for="patientname">Full name :</label>
    <input type="text" id = "patientname" name= "patientname"required><br>
    <label for="nameerror" id="nameerror" style="color:red"></label><br>


    <label for="age">age:</label><br>
    <input type="number"id="age"  required min ="0"><br>
    <label for="ageerror"id="ageerror"style="color.red;"></label><br>

    <label for="phone">phone number:</label><br>
    <input type="text"id="phone"name="phone"required><br>
    <label for="phoneerror"id="phoneerror"style="color.red"></label><br>


    <label for="email">Email:</label><br>
    <input type="text"id="email"name="email"required><br>
    <label for="emailerror"id="emailerror"></label><br>

    <label for="insurance">insurance provider:</label>
<select name="insurance" id="insurance" required>
    <option value ="">select your insurance provider</option>
    <option value="provider1">provider1</option>
    <option value="provider2">provider2</option>
</select><br>
<label for="insuranceerror"id="insuranceerror"style="color:red"></label><br>
<label for="policunumber"name="policynumber" required></label><br>
<label for="policyerror"id="policyerror"style="color:red"></label><br>

<label for="password">confirm password:</label><br>
<input type id="password"name="password"required><br>
<label for="passworderror"id="passworderror"style="color:red";></label><br>

<label for="confirmpassword">confirm password</label>
<input type="password"id="confirmpassword"name="confirmpassword" required><br>
<label for="confirmpassworderror"id="passworderror"style="color:red;"></label>
<button type="submit">register</button>
</form>
<style>body{background-color: lightblue};</style>

    
</body>





</html>