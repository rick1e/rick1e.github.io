<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Mars Rover Programming Challenge</title>
  <script src="../blockly_compressed.js"></script>
  <script src="../blocks_compressed.js"></script>
  <script src="../javascript_compressed.js"></script>
  <script src="../msg/js/en.js"></script>
  <script src="custom_blocks/blocks.js"></script>
  <script src=" ://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
  <script src="world/levels.js"></script>
  <!--<script src="world.js"></script>-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="world/styles.css">
  
  <link rel="stylesheet" href="world/styles2.css">
  <style>
    :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: 0.75rem;
}

.login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('https://mars.nasa.gov/system/news_items/main_images/8351_PIA22486-1440.jpg');
  background-size: cover;
  background-position: center;
}

.login-heading {
  font-weight: 300;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
  border-radius: 2rem;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
  height: auto;
  border-radius: 2rem;
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  cursor: text;
  /* Match the input under the label */
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}

nav
{
    position: absolute!important;
    width: 100%;
    z-index: 1;
}
  </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
        <a class="navbar-brand" href="#">Mars Rover Programming Challenge</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
                    </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="levels.php">Levels</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    
    <!-- Full Page Image Header with Vertically Centered Content -->
    <div class="container-fluid">
            <div class="row no-gutter">
              <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
              <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-9 col-lg-8 mx-auto">
                        <h3 class="login-heading mb-4">Welcome!</h3>
                        <p>
                          This 'challenge' is still under construction however you have been given early access.
                        </p>
                        <!--<form>
                          <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                            <label for="inputEmail">Email address</label>
                          </div>
          
                          <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <label for="inputPassword">Password</label>
                          </div>
          
                          <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                          </div>
                          <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                          <div class="text-center">
                            <a class="small" href="#">Forgot password?</a></div>
                        </form>-->

                        <a id='nllink' class="btn btn-success " href="http://localhost/blockly/rover/rover/stage.php " role="button">Let's Go!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</body>
</html>