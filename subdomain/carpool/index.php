<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
 <form action="insert.php" method="POST">
  <table>
   <tr>
    <td>First Name :</td>
    <td><input type="text" name="firstname" required></td>
    <tr>
    <td>Middle Name :</td>
    <td><input type="text" name="middlename" required></td>
    <tr>
    <td>Last Name :</td>
    <td><input type="text" name="lastname" required></td>
   </tr>
   <tr>
   <td>Phone no :</td>
    <td>
     </select>
     <input type="phone" name="phone" required>
    </td>
   </tr>
   <td>Address:</td>
    <td>
     </select>
     <input type="text" name="address" required>
    </td>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
   <td>Password :</td>
    <td><input type="password" name="password" required></td>
    
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
    <tr>

    <td><a href="registered.php" name = "list" class="btn uppercase btn-outline-light">REGISTERED LIST</a></td>
   </tr>
  </table>
 </form>
</body>
</html>