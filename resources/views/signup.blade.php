<!DOCTYPE html>
<html>
<title>Simple Sign up from</title>

<head>
  <style>
    body {
      background: darkgrey;
    }

    .form_wrapper {
      background: lightgrey;
      width: 400px;
      max-width: 100%;
      box-sizing: border-box;
      padding: 25px;
      margin: 8% auto 0;
      position: relative;
      border-radius: 10px;
    }

    h2 {
      font-size: 1.5em;
      line-height: 1.5em;
      margin: 0;
    }

    .title_container {
      text-align: center;
      padding-bottom: 15px;
    }

    input {
      margin: 5px 45px 5px 45px;
      width: 280px;
      height: 25px;
      border-radius: 3px;
    }

    .button {
      background:darkgrey;
      border-radius:10px;
      height:35px;
      width:200px;
      margin: 5px 80px 5px 80px;
      cursor:pointer;
    }

    .button:hover {
      background:lightgrey;
    }
  </style>
</head>

<body>
  <form action="/action_page.php" method="post">
    @csrf
    <div class="form_wrapper">
      <div class="form_container">
        <div class="title_container">
          <h2>Register</h2>
        </div>
        <div class="row clearfix">
          <div class="">
            <form>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="name" placeholder="Name" />
              </div>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="phone" placeholder="Phone Number" />
              </div>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                <input type="email" name="email" placeholder="Email" required />
              </div>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                <input type="password" name="password" placeholder="Password" required />
              </div>
              <input class="button" type="submit" value="Register" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </form>

  <body>

</html>