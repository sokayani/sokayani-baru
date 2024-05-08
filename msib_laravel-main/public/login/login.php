<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
  </head>
  <body>
    <header>
      <img src="/images/logo.png" alt />
      <nav class="navbar">
        <a href="/">Home</a>
        <a href>About</a>
        <a href>Contact</a></nav>
        <!-- Menampilkan username di navbar -->
        <div id="username-display" class="logged-in-user"
          style="display:none; color: #d10505; left: 40px;"><h2>Welcome, <span id="username-span" style="color: #ffffff;"></span></h2>
          <button id="logout-btn" style="display:none; color: #ffffff; background-color: #f80000f8; position: absolute; top: 65px; width: 100px; right: 150px;">Logout</button></div>
      </nav>
      <div class="button-navbar" style="display:none;">
        <a href="login.php">
          <button class="button-register">Register</button>
          <button class="button-login">Login</button>
        </a>
      </div>
    </header>

    <!-- form login-->
    <div class="login-form">
      <h2>Login Data</h2>
      <form id="login-form" action="#" method="post">
        <input type="text" id="username" name="username"
          placeholder="Insert Username" required>
        <input type="password" id="password" name="password"
          placeholder="Insert Password" required>
        <button type="submit">Login</button>
      </form>
    </div>

    <script>
    $(document).ready(function(){
      // Menampilkan username di navbar 
      var storedUsername = localStorage.getItem('username');
      if (storedUsername) {
        $('#username-display').show();
        $('#username-span').text(storedUsername);
        $('.button-navbar').hide(); // Sembunyikan tombol login/register
        $('#logout-btn').show(); // Tampilkan tombol logout
      } else {
        $('.button-navbar').show(); // Tampilkan tombol login/register
      }
      
      // Listener untuk form login
      $('#login-form').submit(function(event){
        event.preventDefault(); // Mencegah pengiriman form default
        var username = $('#username').val();
        var password = $('#password').val();
        
        // Simpan username ke localStorage setelah login sukses
        localStorage.setItem('username', username);
        // Menampilkan username di navbar setelah login
        $('#username-display').show();
        $('#username-span').text(username);
        $('.button-navbar').hide(); // Sembunyikan tombol login/register
        $('#logout-btn').hide(); // Tampilkan tombol logout
      });
      
      // Toggle logout saat nama pengguna diklik
      $('#username-display').click(function(){
        $('#logout-btn').toggle(); // Toggle tombol logout
      });
      
      // Logout
      $('#logout-btn').click(function(){
        localStorage.removeItem('username'); // Hapus username dari localStorage
        $('#username-display').hide(); // Sembunyikan div username-display
        $('.button-navbar').show(); // Tampilkan tombol login/register
      });
    });
  </script>
  </body>
</html>
