<!DOCTYPE html>
<html>
    <title>MID_TASK2</title>
<body>
    <center>
    <h1>Bank management system</h1>
    <h2>your trusted financial partner</h2>
    </center>
    <h3> customer registration form </h3>
    <table>
        <tr>
            <td> Full Name</td><td><input type ="text"></td>
        </tr>
        <tr>
            <td>Dtae of birth</td><td><input type="date"></td>
        </tr>
        <tr>
            <td>Gender :</td>
            <td> <input type ="radio"name="des"> Male
            <input type ="radio"name="des"> female
             <input type ="radio"name="des"> other</td>

        </tr>

        <tr>
            <td>Marital Status</td>
            <td><select name="">
                <option value="single">single</option>
                <option value="single">married</option>
                <option value="single">divorced</option>
            </td>
             <tr>
            <td>Account Type:</td>
            <td><select name="">
                <option value="savings">savings</option>
                <option value="current ">current</option>
                <option value="fixed">debt</option>
            </td>
            </tr>
            <tr>
            <td>
                intitial deposit amount:
            </td>
            <td><input type="number" name="initial deposit"></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><input type="number"></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><input type="email"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="textarea"row="7" column="20"></td>
            </tr>
            <tr>
                <td>Occupation:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>National ID(NID):</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Set Password:</td>
                <td><input type="text"></td>
            </tr>
    </table>
    <style>
        body{background-color:lightblue;}
    </style>
</body>
 
</html>