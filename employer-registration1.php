<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>


  <?php

  include 'connection.php';

  //fetch company ID

  if ($conn) {
    $sql = "SELECT MAX(c_id) AS id FROM company_details";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = ++$row['id'];
  }

  $cname = $_POST['cname'];
  $cemail = $_POST['cemail'];
  $industry = $_POST['industry'];
  $mob = $_POST['mob'];
  $website = $_POST['website'];
  $pass = $_POST['password'];
  $addr = $_POST['address'];

  //for company logo

  $logo = $_FILES['logo'];
  $logo_name = $_FILES['logo']['name'];
  $extension = pathinfo($logo_name, PATHINFO_EXTENSION);
  echo $logo_name;

  $valid_extension = array("jpeg", "jpg", "png");
  if (in_array($extension, $valid_extension)) {
    $new_name = rand() . "." . $extension;
    $path = "images/companyLogo/" . $new_name;
    if (move_uploaded_file($_FILES['logo']['tmp_name'], $path)) {

      echo '<img src ="' . $path . '" />';

      $sql1 = "INSERT INTO company_details (c_id, c_name, email, industry, mobile, website,logo, address, password) VALUES({$id}, '{$cname}', '{$cemail}', '{$industry}', '{$mob}', '{$website}', '{$logo_name}','{$addr}', '{$pass}')";

      $result1 = mysqli_query($conn, $sql1);
      if ($result1) {
  ?>

        <script type="text/javascript">
          $(document).ready(function() {
            $("#abc").modal("show");
            $("#close-modal").click(function() {
              window.location.href = "employer-login.php";
            });
          });
        </script>

  <?php
      } else {
        echo "File Not Save in Database";
      }
    } else {
      echo "file can't be Upload";
    }
  } else {
    echo "invalid File Format";
  }
  ?>


  <!---successfull Modal Message-->

  <div class="modal fade" id="abc">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title"><?php echo "HI User !" ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          You Have been Insert Record Successfully!
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal" id="close-modal">OK</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</body>

</html>