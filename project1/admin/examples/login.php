<?php include 'des/header.php'; ?>
<body>
  <div class="container">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Log in</div>
        <div class="panel-body">
          <form action="database/login.php" method="post">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
              </div>
              <input type="submit" name="submit" value = "login" class="btn btn-info">
              
              </fieldset>
          </form>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->  

  </div>
  

<script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
