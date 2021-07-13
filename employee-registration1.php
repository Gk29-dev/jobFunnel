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

  if ($conn) {
    // Fetch the highest value of the candidate id in the table
    $sql = "SELECT MAX(candidate_id) As id FROM candidate_details";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = ++$row['id'];
    echo $id;
  }


  $name = $_POST['name'];
  $email = $_POST['email'];
  $mob = $_POST['mob'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $skill = $_POST['skill'];
  $quali = $_POST['qualification'];
  $experience = $_POST['experience'];
  $password = $_POST['pass'];
  $resume = $_FILES['resume']['name'];
  $address = $_POST['address'];

  $sql1 = "INSERT INTO candidate_details (candidate_id,cname,email,mob_no,age,gender,key_skill,qualification,experience,c_password,resume,address
     ) VALUES 
     ({$id},'{$name}', '{$email}','{$mob}','{$age}', '{$gender}', '{$skill}', '{$quali}', '{$experience}', '{$password}', '{$resume}', '{$address}')";

  $result1 = mysqli_query($conn, $sql1);

  if ($result1) {
  ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#abc").modal("show");
        $("#close-modal").click(function() {
          window.location.href = "employee-login.php";
        });
      });
    </script>

  <?php

  } else {
    echo '<script>alert("Record Not Inserted")</script>';
  }


  ?>

  <!---Registration successfull Modal Message-->

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