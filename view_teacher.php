<?php
 include 'dbconnect.php';


?>











<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">

	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style. css.css">
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

<div class="d-flex" id="wrap"> 
  <div class="sidebar bg-light border-light">
  <div class="sidebar-heading"> 
  <p class="text-center">Manage students</p>
  </div>
  <ul class="list-group list-group-flush">
     <a href="menu.php" class="list-group-item  list-group-item-action">
	   <i class="fa fa-vcard-o" ></i>DashBoard</a>
	    <a href="add_teacher.php" class="list-group-item  list-group-item-action">
	   <i class="fa fa-user-o" ></i>Add Teacher Detail</a>
	    <a href="view_teacher.php" class="list-group-item  list-group-item-action">
	   <i class="fa fa-eye" ></i>View Teacher Detail</a>
	    <a href="edit_teacher.php" class="list-group-item  list-group-item-action">
	   <i class="fa fa-pencil" ></i>Edit Teacher Detail</a>
	    <a href="add_student.php" class="list-group-item  list-group-item-action">
	   <i class="fa fa-user-o" ></i>Add Student Detail</a>
	   <a href="view_student.php" class="list-group-item  list-group-item-action">
	   <i class="fa fa-eye" ></i>View Student Detail</a>
	   <a href="edit_student_deatil.php" class="list-group-item  list-group-item-action">
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
		 <h3 class="text-center text-success"><?php echo @$_GET['update_success']; echo @$_GET['update_error' 
		 ]; echo @$_GET['delete_msg'];  ?></h3>
		   <h2 class="text-center text-danger pt=3 font-weight-bold">Student Management System</h2>
		     <div class="container bg-danger" id="formsetting">
			  <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">View Teacher Detail</h3>
			  
			  <div class="row">
			   <div class="col-mid-12 col-sm-12 col-12"> 
			   <table class="table table-bordered text-white table-responsive">
			   <thead>
			      <tr>
				  
				        <th>SNO.</th>
						 <th>First name</th>
						  <th>Last name</th>
						   <th>Father name</th>
						   <th>Gender</th>
						    <th>Email</th>
				             <th>Birthdate</th>
							 <th>Mobile</th>
							 <th>City</th>
							 <th>joining date</th>
							 <th>Teaching_subject</th>
							 <th>State</th>
							 <th>Qualification</th>
							 <th>Photo</th>
							 <th>Action</th>
							 </tr>
				  
				  
				   </thead>
				   <?php
				   
				   $sql= "select * from teacher_detail";
				   $run = mysqli_query($conn,$sql);
				   $i=1;
				   while($row = mysqli_fetch_assoc($run))
					   
					   {
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   ?>
				   
				   <tbody>
		                  <tr>
                             <td><?php echo $i++  ;   ?></td>
							 <td><?php echo $row['fname']  ;   ?></td>
							 <td><?php echo $row['lname']  ;   ?></td>
							 <td><?php echo $row['father_name']  ;   ?></td>
							 <td><?php echo $row['gender']  ;   ?></td>
							 <td><?php echo $row['email']  ;   ?></td>
							 <td><?php echo $row['birthdate']  ;   ?></td>
							 <td><?php echo $row['mobile']  ;   ?></td>
                             <td><?php echo $row['city']  ;   ?></td>
							 <td><?php echo $row['joining']  ;   ?></td>
							 <td><?php echo $row['teaching_subject']  ;   ?></td>
							 <td><?php echo $row['state']  ;   ?></td>
							 <td><?php echo $row['qualification']  ;   ?></td>
					   <td><?php echo $row['photo'];   ?></td>
							 
							 <td><?php echo $row['action']  ;   ?></td>
							 
							 <td>
							 <a href="st_image/<?php  echo $row['photo']; ?>">
							 
							   <img src="st_image/<?php  echo $row['photo']; ?>" width="50"  height="50"></a> 
							   
							   
							 </td>
							 <td>
							 <a style="color: white; text-decoration: none;" href="edit_teacher_deatil.php?edit_teacher=<?php echo $row['st_id'];?>">Edit</a>   |
							  <a style="color: white; text-decoration: none;" href="delete_teacher_deatil.php?delete_teacher=<?php echo $row['st_id'];?>">Delete</a>
							 
							 </td>


                         </tr>						  
				   
				   
				   
				   
				   </tbody>
					   <?php  } ?>
			   
			   
			   
			   </table>
			   
			   
			   
			   </div>
			   </div>
			   
			 
			 
			 
			 </div>
		 </section>
		 
		 
	   
	   </div>


</div>


</body>
</html>