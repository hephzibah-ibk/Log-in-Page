  <?php
  session_start();
  if(isset($_POST['submit'])){     
      $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $Date_of_Birth=$_POST['dob'];
      $email=$_POST['email'];
      $username=$_POST['username'];
      $password=$_POST['password'];
     
      $array_data =[
          'first_name' => $first_name,
          'last_name' => $last_name,
          'dob' => $Date_of_Birth,
          'email' => $email,
          'username' => $username,
          'password' => $password
      ];
      
      echo $first_name . $last_name  . $Date_of_Birth . $email . $username .$password;
      file_put_contents('filess/' .'Records' . ".txt", $array_data);
  }
        
  