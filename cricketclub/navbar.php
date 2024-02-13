<style>
  .btn {
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    margin-right: 10px;
}

.btn-outline-success {
    color: #28a745;
    border: 2px solid #28a745;
}

.btn-outline-primary {
    color: #007bff;
    border: 2px solid #007bff;
}

.btn-outline-danger {
    color: #dc3545;
    border: 2px solid #dc3545;
}

.btn:hover {
    opacity: 0.8;
}
</style>
  
  
  <nav>
          <a><img src="Photos/logo2.png" alt="..."></a>
          <div class="nav-links" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i>
              <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="">About Us</a></li>
                  <li><a href="">Courses</a></li>
                  <li><a href="">Gallery</a></li>
                  <li><a href="">Contact Us</a></li>
                  <li><a class="nav-link" href="welcome.php">Profile</a></li>
              </ul>
              <form class="d-flex">
    <button class="btn btn-outline-success" type="button" onclick="window.location.href='signup.php'">Signup</button>
    <button class="btn btn-outline-primary" type="button" onclick="window.location.href='login.php'">Login</button>
    <button class="btn btn-outline-danger" type="button" onclick="window.location.href='logout.php'">Logout</button>
    </form>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
  </nav>

