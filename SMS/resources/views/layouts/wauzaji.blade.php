@include('includes/header')
@include('includes/nav')
   <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Taarifa!</h5>
                  Mtumiaji tayari yupo</div>

   <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Taarifa!</h5>
                  Nenosiri halikulingana</div>
<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Taarifa!</h5>
              Kwenye <b>jina la kwanza</b> ni alfabeti na nafasi nyeupe zinaruhusiwa</div>
<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Taarifa!</h5>
              Kwenye <b>jina la pili</b> ni alfabeti na nafasi nyeupe zinaruhusiwa</div>
  <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Taarifa!</h5>
              Namba ya simu sio sahihi</div>
 <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Taarifa!</h5>
              Nenosiri lazima lihusishe herufi kubwa, herufi ndogo, herufi maalum kama @#&%!, nambari na zisipungue herufi 8</div>

  <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Taarifa!</h5>
                  Hongera! Taarifa zimepokelewa kikamilifu
                </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><span class="fa fa-male"></span> Wauzaji</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Nyumbani</a></li>
              <li class="breadcrumb-item active">Wauzaji</li>
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
                <h3 class="card-title"> Wauzaji waliopo</h3>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"> <span class="fa fa-plus"></span> Ongeza muuzaji</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/no</th>
                    <th>Jina Kamili</th>
                    <th>Anwani</th>
                    <th>Namba ya simu</th>
                    <th>Barua pepe</th>
                    <th>Jinsia</th>
                    <th>Tawi</th>
                    <th>jukumu</th>
                    <th>Kitendo</th>
                  </tr>
                  </thead>
                  <tbody>
                
                   <tr>
                     <td>no</td>
                     <td>fname lname</td>
                     <td>address</td>
                     <td>phone</td>
                     <td>email</td>
                     <td>gender</td>
                     <td>branchname</td>
                     <td>role</td>
                     <td>
                      <button class="btn btn-small btn-danger"><span class="fa fa-trash"></span></button>
                      <button class="btn btn-small btn-secondary"><span class="fa fa-edit"></span></button>
                    </td>
                   </tr>
                  
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>

        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <form method="post">
     <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ongeza Muuzaji</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la kwanza</label>
                    <input type="text" name="fname" class="form-control" placeholder="Weka jina la kwanza..." required>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili</label>
                    <input type="text" name="lname" class="form-control" placeholder="Weka jina la pili..." required>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-md-6">
                    <label>Anwani</label>
                    <input type="text" name="address" class="form-control" placeholder="Weka Anwani..." required>
                  </div>
                  <div class="col col-md-6">
                    <label>Namba ya simu</label>
                    <input type="text" name="phone" class="form-control" placeholder="Weka namba ya simu..." required>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-md-6">
                    <label>Barua pepe</label>
                    <input type="email" name="email" class="form-control" placeholder="Weka barua pepe..." required>
                  </div>
                  <div class="col col-md-6">
                    <label>Jinsia</label>
                    <select class="form-control" name="gender">
                      <option>--</option>
                      <option>MME</option>
                      <option>MKE</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nenosiri</label>
                    <input type="password" name="pwd" class="form-control" placeholder="*********" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Hakiki nenosiri</label>
                    <input type="password" name="pwd1" class="form-control" placeholder="*********" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col col-md-6">
                    <label>Chagua tawi</label>
                    <select class="form-control" name="selectbranch">
                      <option>--</option>
                     
                    	<option>branchname</option>
                   
                    </select>
                  </div>
                  <div class="col col-md-6">
                    <label>Chagua jukumu</label>
                    <select class="form-control" name="rolename">
                      <option>Muuzaji</option>
                      <option>Msimamizi</option>
                    </select>
                  </div>
                </div>
              </p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Funga</button>
              <button name="add" class="btn btn-primary">Ongeza</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </form>
      <!-- /.modal -->
  </div>
  <!-- /.content-wrapper -->
@include('includes/footer')