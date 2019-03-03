<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ID GENERATOR</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style media="screen">
    .frontStud{
      height: 550px;
      width: 30%;
      border:1px solid black;
      border-radius:18px;
      display: inline-block;
      box-shadow: 15px 15px black;
      margin-right: 30px;
    }
    .backid{
      box-shadow: 15px 15px black;
      display:inline-block;
      height: 550px;
      width: 30%;
      border:1px solid black;
      border-radius:18px;
      background-image: url('backstud.png');
      background-repeat: no-repeat;
      background-size: 100%;
      background-color: white;
    }
    .firstDiv{
      background-color: #339933;
      width: 100%;
      height: 22%;
      border-top-left-radius: 18px;
      border-top-right-radius: 18px;
    }
    .secDiv{
      background-color: #006633;
      width: 100%;
      height: 78%;
      border-bottom-left-radius: 18px;
      border-bottom-right-radius: 18px;
      background-image: url('idbgstud.png');
      background-repeat: no-repeat;
    }
    .bottompart{
      text-align: left;
      margin-left: 15px;
      font-size: 20px;
      font-weight: bolder;
    }
  </style>
  </head>
  <body style="background-image: url('footerBg.png');background-size: 100%;">
    <header>
      <div class="headerBanner">
        <a href="index.php"><center><img src="header.png" alt="logo" width="50%"></center></a>
      </div>
    </header>
    <div class="">
      <ul class="list-inline" style="margin: 0;padding: 10px; text-align:center; font-size:18.5px;">
        <li class="list-inline-item" style="margin-right:60px;"><a href="index.php" style="color:orange; text-decoration:none;">Home</a></li>
        <li class="list-inline-item" style="margin-right:60px;"><a href="" data-toggle="modal" data-target="#issue" style="color:orange; text-decoration:none;">Report an Issue</a></li>
        <li class="list-inline-item"><a href="" data-toggle="modal" data-target="#support" style="color:orange; text-decoration:none;">Support</a></li>
      </ul>
    </div>
      <div class="bodyContent">
        <div class="container">
          <h3 style="text-align:center;">Your generated Student ID</h3><br>
            <center>
              <div class="frontStud">
                <div class="firstDiv">
                  <center><br/><img src="headerLogo.png" alt="" width="90%"></center>
                </div>
                <div class="secDiv">
                  <div style="text-align:right;"><img src="driving.png" alt="" width="44%" style="margin-top:10px;"></div>
                  <?php
                    if($_POST['sex']=="Male"){
                      echo '<img src="male.png" alt="male" style="width:100%;padding:0 35px"><br/>';
                    }
                    if($_POST['sex']=='Female'){
                      echo '<img src="female.png" alt="male" style="width:100%;padding:0 35px"><br/>';
                    }
                  ?>
                  <div class="bottompart">
                    <?php
                      echo strtoupper("{$_POST['studlName']}<br>");
                      echo strtoupper("{$_POST['studfName']} {$_POST['studmName']}<br>");
                      echo strtoupper("{$_POST['level']} | {$_POST['studNumber']}");
                     ?>
                  </div>
                </div>
              </div>
              <div class="backid">
                <div style="padding:50px;">
                  <img src="sign.png" alt=""width="40%"><br>
                  Signature
                  <p>This ID is non-transferable<br>In case of emergency, please notify:<br></p>
                  <p style="text-transform: capitalize;">
                    De La Salle Lipa, inc. (ISSESO)<br>09059367512 and (043) 756 5555<br>
                    local 221 or 333
                  </p>
                  <img src="bro.png" alt="" width="40%"><br>
                  <b>Amelito M. Castillo</b>
                  <br>Director, Student Services<br><br>107-002752
                </div>
              </div>
            </center>
        </div>
      </div>
    <footer>
      <div class="footerContent" style="color:white;text-align:center;font-size:17px;">
        © 2018 - De La Salle Lipa
      </div>
    </footer>
    <div class="modal fade" id="support" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Support</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p>Call 090909 for more details about this website. Thank you!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


  <div class="modal fade" id="issue" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Report an issue</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="">Your issue</label>
                <textarea name="textarea_one" cols="10" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#sure">
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="sure" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to submit your report?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Yes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
