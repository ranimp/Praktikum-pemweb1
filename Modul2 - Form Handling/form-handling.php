<html>
  <head>
  <title>Modul 2 Form Handling</title>
  </head>
  <body>
    <h3>Form Handling</h3>
    <?php
      // Membuat variabel
      $username="";
      $pass = "";
      $usernameErr = "";
      $passErr = "";
      $username_valid = true;
      $username_valid_msg = "";
      $valid_jenis_pass = true;
      $valid_jenis_pass_msg = "";
      
      // Cek form sudah di klik submit/belum
      if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $pass = trim($_POST['pass']);
        
        // Cek input kosong
        if(empty($username)){
          $usernameErr = "Username masih kosong.<br>";
        }
        if(empty($pass)){
          $passErr = "Password masih kosong.<br>";
        }
        
        // validasi username
        if(!preg_match("/^[a-zA-Z][a-zA-Z0-9-_\.]{0,6}$/",$username)) {
          $username_valid = false;
          $username_valid_msg = "Username yang dimasukkan tidak boleh lebih dari tujuh karakter. <br>";
        }
        
        // validasi password
        if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\[^\'£$%^&*()}{@:\'#~?><>,;@\|\-=\-_+\-¬\`\]]).{10,}/",$pass)){
          $valid_jenis_pass = false;
          $valid_jenis_pass_msg = "password yang dinputkan harus terdiri dari huruf kapital, huruf kecil, angka, karakter khusus dan tidak boleh kurang dari 10 karakter.<br>";
        } 
      }
    ?>
    <form action="form-handling.php" method="post">
      Username : 
      <input type="text" name="username" value="<?php echo $username; ?>"><br>
      <?php echo $usernameErr.$username_valid_msg; ?>
      <br>
      Password : 
      <input type="password" name="pass" id="myInput" value="<?php echo $pass; ?>"><br>
      <?php echo $passErr.$valid_jenis_pass_msg; ?><br>
      <input type="checkbox" onclick="myFunction()">Show Password<br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php
      // Cek semua input sudah diisi apa belum
      if(!empty($username) and !empty($pass) and $username_valid and $valid_jenis_pass){
        echo "Selamat semua input sudah diisi dengan benar.<br>";
      }
    ?>
  </body>
  <script>
      function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
  </script>
</html>
