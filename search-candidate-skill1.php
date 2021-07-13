<?php 

include 'connection.php';

if($conn){
	$skill = $_POST['skill'];
    $output ="";
	$sql = "SELECT * FROM candidate_details WHERE key_skill = '{$skill}'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)>0){
		$output.= '<table class="table table-bordered table-striped text-center">
		              <thead class="bg-primary text-white">
		                <tr>
		                   <th>Candidate Name</th>
		                   <th>Candidate Email</th>
		                   <th>Contact Number</th>
		                   <th>Qualification</th>
		                   <th>Experience</th>
		                   <th>Address</th>
		                   <th>Resume</th>
		                </tr>
		               </thead>';
	}

	while($row = mysqli_fetch_assoc($result)){
		$output.= '<tr>
		               <td>'.$row['cname'].'</td>
		               <td>'.$row['email'].'</td>
		               <td>'.$row['mob_no'].'</td>
		               <td>'.$row['qualification'].'</td>
		               <td>'.$row['experience'].'</td>
		               <td>'.$row['address'].'</td>
		               <td>'.$row['resume'].'</td>
		            </tr>';
	}
	$output.= '</table>';

}
echo $output;
