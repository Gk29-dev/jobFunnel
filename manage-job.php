<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Jobs</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <?php include 'employer-header.php'; ?>

  <div id="myJobs">

  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      //load the Post Job Table
      function loadTable() {
        $.ajax({
          url: 'load-post-job.php',
          type: 'POST',
          success: function(data) {
            if (data != "") {
              $("#myJobs").html(data);
            } else {
              alert("no Data Found");
            }
          }
        });
      }
      //When Click on The Button  
      $(document).on("click", ".update-btn", function() {
        var jobID = $(this).data("id");

        $.ajax({
          url: 'update-job.php',
          type: 'POST',
          data: {
            jobID: jobID
          },
          success: function(data) {
            if (data != "") {
              $("#edit-job-section").modal("show");
              $("#update-modal").html(data);
            } else {
              alert("failed");
            }
          }
        });

        //Update Job

        $(document).on("click", "#update", function() {
          var category = $("#jobcategory").val();
          var jobType = $("#jobtype").val();
          var salary = $("#salary").val();
          var exp_req = $("#experience").val();
          var job_exp_date = $("#job_exp_date").val();
          var emp_req = $("#emp_required").val();

          $.ajax({
            url: 'update-job1.php',
            type: 'POST',
            data: {
              jobID: jobID,
              category: category,
              jobType: jobType,
              salary: salary,
              exp_req: exp_req,
              job_exp_date: job_exp_date,
              emp_req: emp_req
            },
            success: function(data) {
              if (data == 1) {
                $("#edit-job-section").modal("hide");
                $("#updated-success-msg").modal("show");

                loadTable();

              } else {
                alert("Not Updated");
              }
            }
          });
        });
      });

      //When Click on The Delete Button

      $(document).on("click", ".delete-btn", function() {
        var jobID = $(this).data("id");
        var element = this;
        if (confirm("Are You Sure To Delete The Job?")) {
          $.ajax({
            url: 'delete-job.php',
            type: 'POST',
            data: {
              jobID: jobID
            },
            success: function(data) {
              if (data == 1) {
                $("#deleted-success-msg").modal("show");
                $(element).closest("tr").fadeOut();
              } else {
                alert("Not Deleted");
              }
            }
          });
        }
      });
      loadTable();
    });
  </script>

  <!----Edit Job---->

  <div class="modal fade" id="edit-job-section">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Your Job</h4>
          <button class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body" id="update-modal">
          <h5 class="text-center">Edit Job</h5>
        </div>


      </div>
    </div>
  </div>

  <!---Update Successfull Message---->
  <div class="modal fade" id="updated-success-msg">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title"><?php echo "HI," . $_SESSION['cname']; ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          😊😊😊 Your Changes Has Been Saved Successfully! 😊😊😊
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" id="close-modal">Ok!</button>
        </div>
      </div>
    </div>
  </div>


  <!---Update Successfull Message---->
  <div class="modal fade" id="deleted-success-msg">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title"><?php echo "HI," . $_SESSION['cname']; ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          😊😊😊 You Delete The Job Successfully! 😊😊😊
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" id="close-modal">Ok!</button>
        </div>
      </div>
    </div>
  </div>


  <?php
  include 'footer.php';
  ?>




  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>