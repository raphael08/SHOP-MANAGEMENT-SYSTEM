
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
             <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-cogs"></i>
                  Start Application
                </h3>
              </div>
              <div class="card-body">
              	<div class="row">
              		<div class="col col-md-6">
              			<label>First name</label>
              			<input type="text" name="fname" class="form-control" placeholder="Enter your First name...">
              		</div>
              		<div class="col col-md-6">
              			<label>Last name</label>
              			<input type="text" name="lname" class="form-control" placeholder="Enter your Last name...">
              		</div>
              	</div>
              	<div class="row">
              		<div class="col col-md-6">
              			<label>Address name</label>
              			<input type="text" name="address" class="form-control" placeholder="Enter your Address...">
              		</div>
              		<div class="col col-md-6">
              			<label>Phone name</label>
              			<input type="text" name="phone" class="form-control" placeholder="Enter your Phone number...">
              		</div>
              	</div>
              	<div class="row">
              		<div class="col col-md-6">
              			<label>Registration No</label>
              			<input type="text" name="regno" class="form-control" placeholder="Enter Registration Number...">
              		</div>
              		<div class="col col-md-6">
              			<label>First Time Applicant?</label>
              			<select name="newapplicant" class="form-control">
              				<option>--</option>
              				<option>YES</option>
              				<option>NO</option>
              			</select>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col col-md-12">
              			<label>Choose Branch</label>
              			<select name="branch" class="form-control">
              				<option>--</option>
              			</select>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col col-md-12">
              			<label>State why you need this hostel?</label>
              			<textarea class="form-control" name="describe" placeholder="not more than 250 words..."></textarea>
              		</div>
              	</div><br>
              	<div class="row">
              		<div class="col col-md-12">
              			<button class="btn btn-primary btn-block">Submit Application</button>
              		</div>
              	</div>

              </div>
              <!-- /.card -->
            </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
