<?php
include "dbconnect.php";








?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Student Management System</title>
	<meta charset='utf-8'>
	
<meta name='viewport' content='width=device-width, initial-scale=1'>

	 <!-- Latest compiled and minified CSS -->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>

<!-- jQuery library -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>

<!-- Latest compiled JavaScript -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script> 
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' type='text/css' href='style. css.css'>
<script> 
   jQuery(document).ready(function($){
	     $('#toggler').click(function(event){
			 {
				 event.preventDefault();
				 $('#wrap').toggleClass('toggled');
				 
			 }
		 });
   });
</script>
</head>







<body>

<div class='d-flex' id'wrap'> 
  <div class="sidebar bg-light border-light">
  <div class="sidebar-heading"> 
  <p class="text-center">Manage students</p>
  </div>
  <ul class="list-group list-group-flush">
     <a href="main.php" class="list-group-item  list-group-item-action">
	   <i class="fa fa-vcard-o" ></i>DashBoard</a>
	    <a href="add_teacher" class="list-group-item  list-group-item-action">
	   <i class="fa fa-user-o" ></i>Add Teacher Detail</a>
	    <a href="view_teacher" class="list-group-item  list-group-item-action">
	   <i class="fa fa-eye" ></i>View Teacher Detail</a>
	    <a href="edit_teacher" class="list-group-item  list-group-item-action">
	   <i class="fa fa-pencil" ></i>Edit Teacher Detail</a>
	    <a href="add_student" class="list-group-item  list-group-item-action">
	   <i class="fa fa-user-o" ></i>Add Student Detail</a>
	   <a href="view_student" class="list-group-item  list-group-item-action">
	   <i class="fa fa-eye" ></i>View Student Detail</a>
	   <a href="edit_student" class="list-group-item  list-group-item-action">
	   <i class="fa fa-pencil" ></i>Edit Student Detail</a>
	   <a href="logout.php" class="list-group-item  list-group-item-action">
	   <i class="fa fa-sign-out" ></i>Logout</a>
	   </ul>
	   </div>
	   <div class="main-body"> 
	     <button class="btn btn-outline-light bg-danger mt-3 "id="toggler">
		 <i class="fa fa-bars"></i>
		 </button>
		 <section id="main-form">
		
		
		   <h2 class="text-center text-danger pt=3 font-weight-bold">Student Management System</h2>
		     <div class="container bg-danger" id="formsetting">
			  <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">Edit Student Detail</h3>
			  <?php
			  if(isset($_POST['edit_student'])){
				  
				  
				$edit_st_id= $_POST['edit_student']; 
				  $query= "select * from student_deatil where st_id='$edit_st_id'";
				  $run= mysqli_query($conn,$query); 
				  while($row = mysqli_fetch_assoc($run))
				
			  
			  
			  {
				 
			 			?>
			  <form method="post" action="" enctype="multipart/form-data">
			  
			  <div class="row">
			     <div class="col-md-5 col-sm-5 col-12 m-auto">  
				 <div class="form-group">
				    <label class="text-white" >First name </label>
					<input type="text" name="fname" placeholder="Enter your first name" class="form control" required="required"
                    value="<?php echo $row['fname']; ?>" > 
				 </div>
				
				 <div class="form-group">
				    <label class="text-white" > Email </label>
					<input type="email" name="email" placeholder="Enter your email" class="form control" required="required"> 
				 </div>
				 <div class="form-group">
				    <label class="text-white" >Father name </label>
					<input type="" name="fathername" placeholder="Enter your father name" class="form control" required="required"> 
				 </div>
				 <div class="form-group">
				    <label class="text-white" >Gender </label>
					<input type="radio" name="gender" value="male" class="form-check-input ml-2 ">
					<label class="form-check-label text-white pl-4">Male</label>
					<input type="radio" name="gender" value="female" class="form-check-input ml-2 ">
					<label class="form-check-label text-white pl-4">Female</label>
				 </div>
				 <div class="form-group">
				    <label class="text-white" >City </label>
					<input type="text" name="city" placeholder="Enter your city" class="form control" required="required"> 
				 </div>
				 <div class="form-group">
				    <label class="text-white" >Nationality </label>
					<input type="text" name="nationality" placeholder="Enter your nationality" class="form control" required="required"> 
				 </div>
				 
			  </div>
			  <div class="col-md-5 col-sm-5 col-12 m-auto">
			  <div class="form-group">
				    <label class="text-white" >Last name </label>
					<input type="text" name="lname" placeholder="Enter your last name" class="form control" required="required"> 
				 </div>
                 <div class="form-group">
				    <label class="text-white" >Birthdate </label>
					<input type="date" name="birthdate" placeholder="Enter your birthdate" class="form control" required="required"> 
				 </div>
				  <div class="form-group">
				    <label class="text-white" >Mobile </label>
					<input type="text" name="mobile" placeholder="Enter your mobile" class="form control" required="required"> 
				 </div>
			   <div class="form-group">
				    <label class="text-white" >District </label>
					<input type="text" name="district" placeholder="Enter your district" class="form control" required="required"> 
				 </div>
				  <div class="form-group">
				    <label class="text-white" >State </label>
					<input type="text" name="state" placeholder="Enter your state" class="form control" required="required"> 
				 </div>
				<div class="input-group">
			
				      <div class="input-group-prepend"> <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
					   </div>
					   <div class="custom-file">
					   <input type="file" class="custom-file-input" id="inputGroupFile01"
					    aria-describedby="inputGroupFileAddon01" name="image">
					   <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
					  
					   </div> 
			  
					 
			     
			  </div> 
			  <input type="submit" name=" submit" value="Add detail" class="btn btn-success px-5 mt-2">
			   
			  
			  
			  </div>
			  </form>
			 
			 
			 
			 </div>
		 </section>
		 
		 </div>
	   
	   </div>





</body>
</html> 