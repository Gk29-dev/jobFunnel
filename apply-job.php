<?php

session_start();
include 'connection.php';

$apply_id = $_POST['applyID'];
if (isset($apply_id)) {

  $candidate_email = $_SESSION['candi_email'];
  //fetch the Candidate Details for the applying Job

  $sql = "SELECT * FROM candidate_details WHERE email='{$candidate_email}'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $candi_id = $row['candidate_id'];
      $candi_name = $row['cname'];
      $candi_email = $row['email'];
      $key_skill = $row['key_skill'];
      $experience = $row['experience'];
    }
  }

  //fetch company Details for applying job

  $sql1 = "SELECT * FROM post_job WHERE job_id= {$apply_id}";
  $result1 = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($result1) > 0) {
    while ($row1 = mysqli_fetch_assoc($result1)) {
      $job_id = $row1['job_id'];
      $comp_name = $row1['comp_name'];
      $comp_email = $row1['comp_email'];
      $category = $row1['category'];
    }
  }



  //Insert Those Data into applied job table

  $sql2 = "INSERT INTO applied_job(candidate_id, candidate_name, candidate_email, key_skill, experience, job_id, company_name, comp_email, designation) VALUES({$candi_id}, '{$candi_name}', '{$candi_email}','{$key_skill}','{$experience}', {$job_id}, '{$comp_name}' , '{$comp_email}', '{$category}')";

  $result2 = mysqli_query($conn, $sql2);
  if ($result2) {
    echo 1;
  } else {
    echo 0;
  }
}
