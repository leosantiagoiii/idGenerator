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
  </head>
  <body style="background-image: url('footerBg.png');background-size: 100%;">
    <header>
      <div class="headerBanner">
        <a href="index.php"><center><img src="header.png" alt="logo" width="50%"></center></a>
      </div>
    </header>
    <form class="theForm" action="empID_final.php" method="post">
      <div class="">
        <ul class="list-inline" style="margin: 0;padding: 10px; text-align:center; font-size:18.5px;">
          <li class="list-inline-item" style="margin-right:60px;"><a href="index.php" style="color:orange; text-decoration:none;">Home</a></li>
          <li class="list-inline-item" style="margin-right:60px;"><a href="" data-toggle="modal" data-target="#issue" style="color:orange; text-decoration:none;">Report an Issue</a></li>
          <li class="list-inline-item"><a href="" data-toggle="modal" data-target="#support" style="color:orange; text-decoration:none;">Support</a></li>
        </ul>
      </div>
      <div class="bodyContent">
        <div class="container">
          <h3 style="text-align:center;">Let's Generate your Employee ID</h3><br>
          <table class="table" width="100%">
            <tr>
              <th><label for="empUsr">Name: </label></td>
              <td><input type="text" class="form-control" name="empName" required="required"></td>
            </tr>
            <tr>
              <th><label for="empUsr">Employee Number: </label></td>
              <td><input type="text" class="form-control" name="empNumber" required="required"></td>
            </tr>
            <tr>
              <th><label for="empUsr">Sex: </label></td>
              <td>
                <label class="radio-inline">
                  <input type="radio" name="sex" value="Male" required="required">&nbsp;Male
                </label>
                <label class="radio-inline">
                  <input type="radio" name="sex" value="Female">&nbsp;Female
                </label>
              </td>
            </tr>
            <tr>
              <th><label for="empUsr">Department: </label></th>
              <td>
                <div class="form-group">
                  <select name="department" id="" class="form-control" required="required">
                    <option value="" checked="checked">-</option>
                    <option value="IS">IS</option>
                    <option value="College">College</option>
                    <option value="Administrator">Administrator</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <th><label for="empUsr">SSS: </label></th>
              <td><input type="text" class="form-control" name="empSss" required="required"></td>
            </tr>
            <tr>
              <th><label for="empUsr">Philhealth: </label></th>
              <td><input type="text" class="form-control" name="empPhilhealth" required="required"></td>
            </tr>
            <tr>
              <th><label for="empUsr">HDMF: </label></th>
              <td><input type="text" class="form-control" name="empHdmf" required="required"></td>
            </tr>
          </table>
          <center><input type="submit" class="btn btn-success btn-med"></center>
        </div>
      </div>
    </form>
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
