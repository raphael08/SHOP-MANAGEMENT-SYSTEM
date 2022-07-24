@include('includes/header')
@include('includes/nav')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="nav-icon fa  fa-bar-chart"></i> Historia ya mauzo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Nyumbani</a></li>
              <li class="breadcrumb-item active">Historia ya mauzo</li>
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
                <h3 class="card-title">Mauzo Uliyofanya</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/no</th>
                    <th>Tarehe</th>
                    <th>Namba ya mauzo (invoice)</th>
                    <th>Muuzaji</th>
                    <th>Jina la bidhaa</th>
                    <th>Idadi</th>
                    <th>Jumla</th>
                    <th>Kitendo</th>
                  </tr>
                  </thead>
                  <tbody>

                      <tr>
                        <td> no</td>
                        <td>saledate</td>
                        <td>invoice</td>
                        <td>fname and lname</td>
                        <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lg"> <span class="fa fa-eye"></span> Bonyeza kuona bidhaa</button>
                      </td>

                      <form method="post">
                       <div class="modal fade" id="modal-lg">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Historia ya mauzo <b class="text-primary">invoice</b> Tarehe <b class="text-bold text-primary">saledate</b></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>
                                  <center>
                                  <div class="row text-bold">
                                    <div class="col col-md-1">S/n</div>
                                    <div class="col col-md-3">Jina la Bidhaa</div>
                                    <div class="col col-md-2">Idadi</div>
                                    <div class="col col-md-3">Bei</div>
                                    <div class="col col-md-3">Jumla</div>
                                  </div>

                               
                                  <div class="row">
                                    <div class="col col-md-1">no</div>
                                    <div class="col col-md-3">productname</div>
                                    <div class="col col-md-2">quantity</div>
                                    <div class="col col-md-3">amount</div>
                                    <div class="col col-md-3">quantity have amount</div>
                                  </div>
                                    <br>

                                  <div class="row text-bold">
                                    <div class="col col-md-1"></div>
                                    <div class="col col-md-3 ">JUMLA</div>
                                  <div class="col col-md-2" style="background: #ffc108; color: white;">
                                      
                                    </div>
                                    <div class="col col-md-3 text-bold"></div>
                                  <div class="col col-md-3" style="background: #007bff; color: white;">
                                     <i>/=Tsh</i>
                                     
                                  </div>
                                  </div>
                                  </center>
                                </p>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        </form>

                      <td>seldist</td>
                      <td>jjj</td>
                      <td><a href="{{ route('risiti') }}" class="btn btn-small btn-warning"><span class="fa fa-print"></span> Printi risiti</a></td>
                      </tr>
               
                  </tbody>
                 <tr>
                   <th colspan="5"></th>
                   <th>Jumla ya Bidhaa</th>
                   <th colspan="2">Jumla ya Bei</th>
                 </tr>
                 <tr>
                   <th colspan="5">Jumla</th>
                   <th  style="background: #ffc108; color: white;">
                   total
                   </th>
                   <th colspan="2" style="background: #007bff; color: white;">
                      <i>/=Tsh</i>
                      
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
  </div>
  <!-- /.content-wrapper -->
@include('includes/footer')