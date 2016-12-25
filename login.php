<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DiSOL 2016|Externders </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login" style="background-color: #2a3f54;">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="row" style="">
        <div class="login_content">
          <img  src="images/disol_logo.png" alt="" width="100">
          <br/><br/>
          <img  src="images/logo1.png" alt="" width="250">
        </div>
      </div>
      <div class="clearfix"></div>
      <br />
      <div class="login_wrapper"  >

        <div class="animate form login_form"  >
          <section class="login_content">
            <form>
              <h1 style="  text-shadow: none; color: #ffffff;">Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.php">Log in</a>
                <a class="reset_pass" href="#" style="  text-shadow: none; color: #ffffff;">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link" style=" text-shadow: none; color: #ffffff;">New to site?
                  <a href="#signup" class="to_register" style="text-emphasis: none; text-shadow: none; color: #ffffff;"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />


              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1 style=" text-shadow: none; color: #ffffff;">Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link" style=" text-shadow: none; color: #ffffff;">Already a member ?
                  <a href="#signin" class="to_register" style=" text-shadow: none; color: #ffffff;"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />


              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>