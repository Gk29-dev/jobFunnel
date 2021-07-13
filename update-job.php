<?php

include 'connection.php';
$jobid = $_POST['jobID'];
$output ="";
if($conn){

	$sql = "SELECT * FROM post_job WHERE job_id ={$jobid}";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
     
      $output.= "
    					<div class='form-group'>
    						<label>Category</label>
    						 <select name='jobcategory' id='jobcategory' class='form-control' value= ".$row['category'].">
                                        <option value='web developer'>Web Developers</option>
                                        <option value='system analyst'>System Analyst</option>
                                        <option value='tester'>Tester</option>
                                        <option value='product manager'>Product Manger</option>
                                    </select>
    					</div>

    					<div class='form-group'>
    						<label>Job Type</label>
    						<select name='jobtype' id='jobtype' class='form-control' value=".$row["job_type"].">
                                    <option value='full time'>Full Time</option>
                                    <option value='part time'>Part Time</option>
                                    <option value='contract'>Contract</option>
                                </select>
    					</div>

    					<div class='form-group'>
    						<label>Salary</label>
    						<input type='text' class='form-control' name='Salary' id='salary' value=".$row["salary"].">
    					</div>

    					<div class='form-group'>
    						<label>Experience Required</label>
    						<input type='text' class='form-control' name='experience' id='experience' value=".$row["exp_required"].">
    					</div>

    					<div class='form-group'>
    						<label>Job Expired Date</label>
    						<input type='text' class='form-control' name='job_exp_date' id='job_exp_date' value=".$row["job_exp_date"].">
    					</div>

    					<div class='form-group'>
    						<label>Employee Required</label>
    						<input type='text' class='form-control' name='emp_required' id='emp_required' value=".$row["emp_required"].">
    					</div>

    					<div class='modal-footer'>
                        <input type='submit' id='update' value='Save changes' class='btn btn-primary btn-sm'/>
                        <button class='btn btn-danger btn-sm' data-dismiss='modal'>Close</button>
                      </div>
    				

    			</div>";  
    echo $output;
	}
	
}
