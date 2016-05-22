<html>
 <head>
   <meta charset="UTF-8">

   <!-- For IE -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <!-- For Resposive Device -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login Page</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.css" media="screen">

 </head>
 <body>
   <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-md-offset-3 col-lg-5 col-lg-offset-3">

          <div class="panel panel-primary">
           <div class="panel-heading">
             <h3 class="panel-title">Admin Login</h3>
           </div>
           <div class="panel-body">
             <form role="form" action="{{url('/handleLogin')}}" method="POST">
              <div class="form-group">
               <label>Username</label>
               <input class="form-control" name="username" placeholder="Enter Username" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
              </div>
              <button class="btn btn-default" type="submit">Login</button
             </form>
           </div>
         </div>

        </div>
      </div>
   </div>
 </body>
</html>
