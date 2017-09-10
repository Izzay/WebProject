<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1>Student Management System</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h1>MENU</h1>
			<a href="view_students.php" style="text-decoration: underline; font-family: verdana; font-size: 25pt">STUDENTS</a><br>
			<a href="new_students.php" style="text-decoration: underline; font-family: verdana; font-size: 25pt">COURSES</a>
		</div>
		<div class="col-md-8 contents">
			<h1> WELCOME TO SMS! </h1>
			<h4> (List of Students) </h4>
			<br>
			<table class="table table-striped table-hover table-condensed table-responsive">
				<thead>
					<tr>
						<th>ID NO.</th>
						<th>LAST NAME</th>
						<th>COURSE</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
				<tbody>
				<?php
				foreach($students as $s){
					echo '	<tr>	
								<td>'.$s['idno'].'</td>
								<td>'.$s['lname'].'</td>
								<td>'.$s['course'].'</td>
								<td>
									<a href="'.base_url('students/profile/'.$s['idno']).'">View</a> 
								</td>
							</tr>
							';
				}
				?>
				</tbody>
			</table>
			<div class="">
				<a href="Boots/new_student" class="btn btn-primary btn-xs">New Student</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Star Na Si Van Damme Stallone.
		</div>
	</div>
</div>





