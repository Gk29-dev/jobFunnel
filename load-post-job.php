<?php
session_start();
include 'connection.php';

if($conn){
	$comp_email = $_SESSION['email'];
	$output ="";
	$sql = "SELECT * FROM post_job WHERE comp_email ='{$comp_email}'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		$output.= '<table class="table table-bordered table-striped text-center">
	   		       <thead class="bg-primary text-white">
	   		            <tr>
		   		           <th>Category</th>
		   		           <th>Job Title</th>
		   		           <th>Job Type</th>
		   		           <th>Salary</th>
		   		           <th>Exprience Required</th>
		   		           <th>Employee Required</th>
		   		           <th>Job Expire Data</th>
		   		           <th>Action</th>
	   		            </tr>
	   		           </thead>';
	}

	while($row = mysqli_fetch_assoc($result)){
		$output.= '<tr>
                   <td>'.$row['category'].'</td>
                   <td>'.$row['job_title'].'</td>
                   <td>'.$row['job_type'].'</td>
                   <td>'.$row['salary'].'</td>
                   <td>'.$row['exp_required'].'</td>
                   <td>'.$row['emp_required'].'</td>
                   <td>'.$row['job_exp_date'].'</td>
                   <td><button class=" btn btn-warning update-btn mx-2" data-id='.$row['job_id'].'>Update
                    <button class= "btn btn-danger delete-btn" data-id='.$row['job_id'].'>Delete</button></td>
		          </tr>';
	}
	$output.= '</table>';
	echo $output;

}

?>