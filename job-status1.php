<?php

session_start();

$comp_email = $_SESSION['email'];
$category = $_POST['category'];

include 'connection.php';

$output="";
$sql1 ="SELECT COUNT(*) AS total FROM applied_job WHERE designation ='{$category}'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
if(isset($comp_email)){
	if($conn){

        $sql= "SELECT * FROM post_job WHERE comp_email= '{$comp_email}' AND category='{$category}'";
		$result= mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){

				$output.= '<table class="table table-bordered table-striped text-center">
				             <thead class="bg-primary text-white">
								   <tr>
									<th>Job ID</th>
									<th>Category</th>
									<th>Job Title</th>
									<th>Job Type</th>
									<th>Salary</th>
									<th>Employee Required</th>
									<th>Number of Employee Applied</th>
									<th>Action</th>
								</tr>
							</thead>';

		
		
			while($row= mysqli_fetch_assoc($result)){

		            $output.= '<tr>
				            	<td>'.$row["job_id"].'</td>
				            	<td>'.$row["category"].'</td>
				            	<td>'.$row["job_title"].'</td>
				            	<td>'.$row["job_type"].'</td>
				            	<td>'.$row["salary"].'</td>
				            	<td>'.$row["emp_required"].'</td>
				            	<td>'.$row1['total'].'</td>
				                <td><a href="interview.php?id='.$row["job_id"].'">Contact</a></td>

		            </tr>';
				
			}

		 $output.= '</table>';
		}
		echo $output;


	}

	else{
			echo $output;
		}



}
