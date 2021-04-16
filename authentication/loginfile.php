
  <?php
  session_start();
  if(!isset($_SESSION['submit'])){
   $filename="Records.txt";
   $contents = file_get_contents($filename);
   $contents = explode("\n", $contents);
   foreach($contents as $values){
       $loginInfo = explode(";", $values);
          $user = $loginInfo[4];
          $password = $loginInfo[5];
          if($user == $_POST['username'] && $password == $_POST['password']){
              header('Location: page.php');
          }
          else{
              echo '<script>alert("Please verify your username and password.");</script>';
              }
   }
   }
   
  ?>