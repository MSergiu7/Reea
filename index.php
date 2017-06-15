<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Examen Reea</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">

            <form id="signUpForm" class="form-horizontal">

              <div class="success text-center bg-success text-success">
                <p>The user has been registered!</p>
              </div>

              <div class="form-group">
                <label for="inputFirstName" class="col-sm-4 control-label">First Name</label>
                <div class="col-sm-8">
                  <input name="firstName" type="text" class="form-control" id="inputFirstName" placeholder="Enter First Name...">
                  <div class="error bg-danger text-danger text-center">
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputLastName" class="col-sm-4 control-label">Last Name</label>
                <div class="col-sm-8">
                  <input name="lastName" type="text" class="form-control" id="inputLastName" placeholder="Enter Last Name...">
                  <div class="error bg-danger text-danger text-center">
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputDate" class="col-sm-4 control-label">Date of Birth</label>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-5">
                      <select name="month" class="form-control">
                        <?php
                        for ($i=1; $i <=12 ; $i++) {
                          $month = date('F', mktime(0,0,0,$i));
                          if ($i==5) {
                            echo "<option selected value=".$month.">".$month."</option>";
                          }else {
                            echo "<option value=".$month.">".$month."</option>";
                          }
                        } ?>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <select name="day" class="form-control">
                        <?php
                        for ($i=1; $i <32 ; $i++) {
                          if ($i==5) {
                            echo "<option selected value=".$i.">".$i."</option>";
                          }else {
                            echo "<option value=".$i.">".$i."</option>";
                          }
                        } ?>
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <select name="year" class="form-control">
                        <?php
                        for ($i=1980; $i <2006 ; $i++) {
                          if ($i==1985) {
                            echo "<option selected value=".$i.">".$i."</option>";
                          }else {
                            echo "<option value=".$i.">".$i."</option>";
                          }
                        } ?>
                      </select>
                    </div>
                  </div>
                  <div class="error bg-danger text-danger text-center">
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputGender" class="col-sm-4 control-label">Gender</label>
                <div class="col-sm-8">
                  <label>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                  </label>
                  <div class="error bg-danger text-danger text-center">
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputContry" class="col-sm-4 control-label">Country</label>
                <div class="col-sm-8">
                  <select class="form-control">
                    <?php
                     ?>
                  </select>
                  <div class="error bg-danger text-danger text-center">
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8">
                  <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Enter Email...">
                  <div class="error bg-danger text-danger text-center">
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputPhone" class="col-sm-4 control-label">Phone</label>
                <div class="col-sm-8">
                  <input name="phone" type="text" class="form-control" id="inputPhone" placeholder="Enter Phone...">
                  <div class="error bg-danger text-danger text-center">
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputPassword" class="col-sm-4 control-label">Password</label>
                <div class="col-sm-8">
                  <input name="password" type="password" class="form-control" id="inputPassword">
                  <div class="error bg-danger text-danger text-center">
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputConfirmPassword" class="col-sm-4 control-label">Confirm Password</label>
                <div class="col-sm-8">
                  <input name="confirmPassword" type="password" class="form-control" id="inputConfirmPassword">
                  <div class="error bg-danger text-danger text-center">
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                  <div class="checkbox">
                    <label>
                      <input name="agree" type="checkbox"> I agree to the Terms of Use
                    </label>
                    <div class="error bg-danger text-danger text-center">
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>

            </form>
          </div> <!--end of col-sm-12-->
        </div> <!--end of row-->
      </div> <!--end of modal body-->

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" id="submit" class="btn btn-primary">Register</button>
      </div>

    </div> <!--end of modal-content-->
  </div> <!--end of modal-dialog-->
</div> <!--end of modal-fade-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/ajax.js">

    </script>
  </body>
</html>
