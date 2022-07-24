@include('includes/header')
@include('includes/nav')
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

              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Administrator</h3>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"> <span class="fa fa-plus"></span> Add new Admin</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/no</th>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email/UserID</th>
                    <th>Gender</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>

        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

     <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Admin</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                <div class="row">
                  <div class="col col-md-6">
                    <label>First name</label>
                    <input type="text" name="fname" class="form-control" placeholder="Enter First name...">
                  </div>
                  <div class="col col-md-6">
                    <label>Last name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Ente last name...">
                  </div>
                </div>
                <div class="row">
                  <div class="col col-md-6">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address...">
                  </div>
                  <div class="col col-md-6">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Ente Phone Number...">
                  </div>
                </div>
                <div class="row">
                  <div class="col col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Active Email Address...">
                  </div>
                  <div class="col col-md-6">
                    <label>Gender</label>
                    <select class="form-control" name="gender">
                      <option>--</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-md-6">
                    <label>Password</label>
                    <input type="password" name="pwd" class="form-control" placeholder="*********">
                  </div>
                  <div class="col col-md-6">
                    <label>Confrim Password</label>
                    <input type="password" name="pwd1" class="form-control" placeholder="*********">
                  </div>
                </div>
              </p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
  </div>
  <!-- /.content-wrapper -->
@include('includes/footer')

