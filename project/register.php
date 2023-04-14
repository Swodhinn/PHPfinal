   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Register - XYZ Hotel</title>
       <link rel="stylesheet" href="style.css">
   </head>

   <body>


       <div class="account">
           <form method="post" action="connect.php">
               <label for="name">Name</label>
               <input type="text" id="name" name="name" required>
               <label for="email">Email:</label>
               <input type="text" id="email" name="email" required>
               <label for="password">Password:</label>
               <input type="password" id="password" name="password" required>
               <label>
                   <input type="checkbox" name="terms" required>
                   I accept the <a href="legal.txt">Terms and Conditions</a>
               </label>
               <button type="submit" name="register">Register</button>
           </form>
       </div>
       <center>Already have an account? <a href=login.php>Login</a></center>
   </body>

   </html>