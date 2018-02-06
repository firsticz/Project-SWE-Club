<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css">
  <style>
    body,
    html {
      height: 100%;
      background-repeat: no-repeat;
      background-color: #d3d3d3;
      font-family: 'Oxygen', sans-serif;
    }

    .main {
      margin-top: 70px;
    }

    h1.title {
      font-size: 50px;
      font-family: 'Passion One', cursive;
      font-weight: 400;
    }

    hr {
      width: 10%;
      color: #fff;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      margin-bottom: 15px;
    }

    input,
    input::-webkit-input-placeholder {
      font-size: 11px;
      padding-top: 3px;
    }

    .main-login {
      background-color: #fff;
      /* shadows and rounded borders */
      -moz-border-radius: 2px;
      -webkit-border-radius: 2px;
      border-radius: 2px;
      -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .main-center {
      margin-top: 30px;
      margin: 0 auto;
      max-width: 330px;
      padding: 40px 40px;
    }

    .login-button {
      margin-top: 5px;
    }

    .login-register {
      font-size: 11px;
      text-align: center;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark text-white">
    <div class="container">
      <a class="navbar-brand" href="#">SWE</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Contact us</a>
          </li>
          <div align="left"> </div>
        </ul>
        <a class="btn navbar-btn ml-2 text-white btn-secondary"><i class="fa d-inline fa-lg fa-user-circle-o" href="Login.php"></i> Sign in</a>
        <a class="btn navbar-btn ml-2 text-white btn-secondary"><i class="fa d-inline fa-lg fa-user-circle-o" href="register.php"></i> Sign up</a>
      </div>
    </div>
  </nav>
  <html>
<head>
<title>ThaiCreate.Com Tutorials</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="save_register.php">
  Register Form <br>
  <table width="400" border="1" style="width: 400px">
    <tbody>
      <tr>
        <td width="125"> &nbsp;Username</td>
        <td width="180">
          <input name="txtUsername" type="text" id="txtUsername" size="20">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Confirm Password</td>
        <td><input name="txtConPassword" type="password" id="txtConPassword">
        </td>
      </tr>
      <tr>
        <td>&nbsp;Name</td>
        <td><input name="txtName" type="text" id="txtName" size="35"></td>
      </tr>
      <tr>
        <td> &nbsp;Status</td>
        <td>
          <select name="ddlStatus" id="ddlStatus">
            <option value="ADMIN">ADMIN</option>
            <option value="USER">USER</option>
          </select>
</td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Save">
</form>
</body>
</html>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:180px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  </pingendo>
</body>

</html>