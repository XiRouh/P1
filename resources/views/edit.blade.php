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
<form action = "/edit/<?php echo $id[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="form_wrapper">
      <div class="form_container">
        <div class="title_container">
          <h2>This is Edit</h2>
        </div>
        <div class="row clearfix">
          <div class="">
            <form>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
              <p>Name:</p><input type = 'text' name = 'name' 
                     value = '<?php echo$id[0]->name; ?>'/>
              </div>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
              <p>Phone:</p><input type = 'text' name = 'phone' 
                     value = '<?php echo$id[0]->phone; ?>'/>
              </div>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
              <p>Email:</p><input type = 'text' name = 'email' 
                     value = '<?php echo$id[0]->email; ?>'/>
              </div>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
              <p>Password:</p><input type = 'text' name = 'password' 
                     value = '<?php echo$id[0]->password; ?>'/>
              </div>
              <input class="button" type = 'submit' value = "Edit" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </form>

  <body>

</html>