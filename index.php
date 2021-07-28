<?php 
include('inc/header.php');
session_start();
?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/data.js"></script>	
<?php include('inc/container.php');?>

<div class="container contact">	
	<h2>Example: Datatables Add Edit Delete with Ajax, PHP & MySQL</h2>	
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   		
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" name="add" id="addEmployee" class="btn btn-success btn-xs">Add Employee</button>
				</div>
			</div>
		</div>
		<table id="employeeList" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>					
					<th>Designation</th>					
					<th>Salary</th>					
					<th>Date</th>					
					<th></th>
					<th></th>					
				</tr>
			</thead>
		</table>
		<div class="form-group">
			<button onclick="Export()" class="btn btn-primary">Export to CSV File</button>
		</div>
    </div>
	</div>
	<div id="employeeModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="employeeForm">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit User</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group"
							<label for="name" class="control-label">Name</label>
							<input type="text" class="form-control" id="empName" name="empName" placeholder="Name" required>			
						</div>
						<div class="form-group">
							<label for="age" class="control-label">Email</label>							
							<input type="text" class="form-control" id="empEmail" name="email" placeholder="Email">							
						</div>	   	
						<div class="form-group">
							<label for="lastname" class="control-label">Designation</label>							
							<input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">			
						</div>						
						<div class="form-group">
							<label for="lastname" class="control-label">Salary</label>							
							<input type="text" class="form-control" id="salary" name="salary" placeholder="Salary">			
						</div>						
						<div class="form-group">
							<label for="lastname" class="control-label">Date</label>							
							<input type="text" class="form-control" id="date" name="date" placeholder="Date">			
						</div>						
						<div class="form-group">
							<label for="captcha">Please Enter the Captcha Text</label>
							<img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
							<br>
							<input type="text" id="vercode" name="vercode" class="form-control" placeholder="Verfication Code" required="required">
						</div>						
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="empId" id="empId" />
    					<input type="hidden" name="action" id="action" value="" />
    					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>	
<?php include('inc/footer.php');?>
<script>
	function Export(){
		var conf = confirm("Export users to CSV?");
		
		if(conf == true){
			window.open("export.php", '_blank');
		}
	}
</script>
