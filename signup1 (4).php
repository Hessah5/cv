



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  
    <div class="signupFrm">
      <form action="s.php" class="form" method="POST">
          <h6 class="title">Create New accaount</h6>
    
          <div class="inputContainer">
            <input type="text" class="input" placeholder="Enter Name" name="name">
            <label for="last name" class="label">First Name</label>
          </div>    
          <div class="inputContainer">
            <input type="text" class="input" placeholder="Enter Last Name" name="lastname">
            <label for="last name" class="label">Last Name</label>
          </div>         
          <div class="inputContainer">
            <input type="email" class="input" placeholder="Enter Email" name="email">
            <label for="email" class="label">Email</label>
          </div>
          <div class="inputContainer">  
            <input type="email" class="input" placeholder="Confirm Email" name="confirm email">
            <label for="confirm email" class="label">Confirm Email</label>
          </div>   
    
          <div class="inputContainer">
            <input type="password" class="input" placeholder="Enter Password" name="password">
            <label for="password" class="label">Password</label>
          </div>
    
          <div class="inputContainer">
            <input type="password" class="input" placeholder="Confirm Password" name = "confirm password">
            <label for="confirm password" class="label">Confirm Password</label>
          </div>

          <div class="inputContainer">
            <input type="tel" class="input" placeholder="Enter Number" name="phone">
            <label for="phone" class="label">Phone</label>
          </div>
          <div class="inputContainer">
            <input type="submit" class="submitBtn" value="Sign up" name="create">
          </div>
      </form>
      
    </div>
      <footer>
        <div class="icons">
            <div class="copyright">
                <p>&copy; 2023 Land of Drinks, all rights
                    reserved.</p>
            </div>
        </div>
    </footer>
  
  
</body>
</html>