<?php 

include 'connection.php';

if($conn){
	$minisalary = $_POST['minsalary'];
	$maxsalary = $_POST['maxsalary'];
    $output ="";
	$sql = "SELECT * FROM post_job WHERE salary BETWEEN {$minisalary} AND {$maxsalary}";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)>0){
		$output.= '<table class="table table-bordered table-striped text-center">
		              <thead class="bg-primary text-white">
		                <tr>
		                   <th>Category</th>
		                   <th>Job Title</th>
		                   <th>Job Type</th>
		                   <th>Skill Required</th>
		                   <th>Experience Required</th>
		                   <th>Job Location</th>
		                   <th>Job Expired Date</th>
		                   <th>Action</th>
		                </tr>
		               </thead>';
	}

	while($row = mysqli_fetch_assoc($result)){
		$output.= '<tr>
		               <td>'.$row['category'].'</td>
		               <td>'.$row['job_title'].'</td>
		               <td>'.$row['job_type'].'</td>
		               <td>'.$row['skill_required'].'</td>
		               <td>'.$row['exp_required'].'</td>
		               <td>'.$row['job_location'].'</td>
		               <td>'.$row['job_exp_date'].'</td>
		               <td><button type="button" class="btn btn-info btn-sm" data-jobid='.$row['job_id'].'>Apply Now</button></td>
		            </tr>';
	}
	$output.= '</table>';

}
echo $output;
?>