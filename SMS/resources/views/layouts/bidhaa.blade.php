@include('includes/header')
@include('includes/nav')
        <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Taarifa!</h5>
                        Hongera! Taarifa zimepokelewa kikamilifu
                      </div>

 

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
            <h1 class="m-0 text-dark"><i class="nav-icon fa fa-product-hunt"></i> Bidhaa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Nyumbani</a></li>
              <li class="breadcrumb-item active">Bidhaa</li>
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
    
              <div class="card-body text-center text-bold ">
              	JUMLA YA BIDHAA : <i class="text-success"></i><br>
              	BIDHAA <i class="text-danger"></i> ZIPO CHINI YA 5
              </div>
              <div class="row">
              	<div class="col col-md-4">
              		<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"> <span class="fa fa-plus"></span> Weka Bidhaa Mpya</button>
              	</div>
                <div class="col col-md-4"><center>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg-file"> <span class="fa fa-file"></span> Weka File  la Bidhaa mpya</button></center>
                </div>
              	<div class="col col-md-4">
              		<button type="button" class="btn btn-warning float-left" data-toggle="modal" data-target="#modal-lg"> <span class="fa fa-print"></span> Print Barcode ya bidhaa</button>
              	</div>
              </div><br>

              <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Bidhaa zilizopo</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/no</th>
                    <th>Jina la bidhaa</th>
                    <th>Aina</th>
                    <th>Namba ya Barcode</th>
                    <th>Bei</th>
                    <th>Idadi</th>
                    <th>Jumla</th>
                    <th>Tarehe</th>

                    <th>Vitendo</th>

                  </tr>
                  </thead>
                  <tbody>

                   <tr>
                     <td>no</td>
                    
                     <td style="background: #b92c28;" class="text-white">productname</td>

                    <td>productname                                                                                   </td>

                     <td>producttype</td>
                     <td>barcode</td>
                     <td>amount</td>
                     <td>quantity</td>
                     <td>amount</td>
                     <td>productdate</td>
                     
                       <td>
                      <button class="btn btn-small btn-danger"><span class="fa fa-trash"></span></button>
                      <button class="btn btn-small btn-secondary"><span class="fa fa-edit"></span></button>
                      </td>

                   </tr>
                   no
                   
                  </tbody>
                  <tr>
                     <th colspan="6">Jumla</th>
                     <th colspan="3">
                      
 
                     </th>
                   </tr>
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
              <h4 class="modal-title">Ongeza Bidhaa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
              	<div class="row">
              		<div class="col col-md-6">
              			<label>Jina la Bidhaa</label>
              			<input type="text" name="productname" class="form-control" placeholder="Weka Jina la bidhaa...">
              		</div>
              		<div class="col col-md-6">
              			<label>Aina</label>
              			<input type="text" name="producttype" class="form-control" placeholder="Weka aina ya bidhaa...">
              		</div>
              	</div>
              	<div class="row">
              		<div class="col col-md-6">
              			<label>Bei ya Bidhaa</label>
              			<input type="text" name="productamount" class="form-control" placeholder="Weka Bei ya bidhaa...">
              		</div>
              		<div class="col col-md-6">
              			<label>Idadi</label>
              			<input type="number" name="productquantity" class="form-control" placeholder="Weka idadi ya bidhaa...">
              		</div>
              	</div>
              </p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Funga</button>
              <button name="addproduct" class="btn btn-primary">Ongeza</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      </form>

          <form method="post" enctype="multipart/form-data">
            <div class="modal fade" id="modal-lg-file">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ongeza Bidhaa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                <div class="row">
                  <div class="col col-md-12">
                    <label>Weka File hapa (*SCV)</label>
                    <input type="file" name="file" class="form-control">
                  </div>
                </div>
              </p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Funga</button>
              <a href="includes/file/file.csv" class="btn btn-warning" ><span class="fa fa-download"></span> Pakua sampuli ya file</a>
              <button name="fileadd" class="btn btn-primary">Ongeza</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      </form>
  </div>
  <!-- /.content-wrapper -->
@include('includes/footer')
 