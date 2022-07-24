@include('includes/header')
@include('includes/nav')
		<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Taarifa!</h5>
              Bidhaa uliochagua tayari imewekwa kwenye mkokoteni. Ondoa kwenye mkokoteni kisha iweke tena</div>

		<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Taarifa!</h5>
              Bidhaa uliochagua ipo chini ya idadi uliyoeka</div>
    <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Taarifa!</h5>
                  Bidhaa imewekwa kwenye mkokoteni
                </div>


	  <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Taarifa!</h5>
                  Mauzo yenye namba <b></b> yamefanyika kikamilifu. bonyeza <a href="{{ route('historiamauzo') }}">hapa</a> kuprinti risiti.
                </div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-shopping-cart"></i> Fanya Mauzo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Nyumbani</a></li>
              <li class="breadcrumb-item active">Mauzo</li>
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
                  <i class="fas fa-shopping-cart"></i>
                  Weka Kwenye Mkokoteni
                </h3>
              </div>
              <div class="card-body">
              	<form method="post">
              	<div class="row">
              		<div class="col col-md-6">
              		<select class="form-control select2" name="product">
                    <option selected disabled>-Chagua Bidhaa-</option>
                   
              				<option value="productid">productname:  Aina = producttype:   Bei = amount</option>
              		
                  	</select>
              		</div>
              		<div class="col-md-3">
              			<input type="number" min="0" placeholder="-Weka idadi-" name="quantity" class="form-control">
              		</div>
              		<div class="col col-md-3">
              			<button class="btn btn-primary btn-block" name="cartbtn"><span class="fas fa-shopping-cart"></span>  Ongeza kwenye mkokoteni</button>
              		</div>
              	</div>
              	</form>
              </div>
              <!-- /.card -->
            </div>
        <!-- /.row -->
              <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title"><span class="fas fa-shopping-cart "></span> Ulivoviweka kwenye Mkokoteni</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S/no</th>
                    <th>Jina la Bidhaa</th>
                    <th>Aina</th>
                    <th>Idadi</th>
                    <th>Bei</th>
                    <th>Jumla</th>
                    <th>Kitendo</th>
                  </tr>
                  </thead>
                  <tbody>
               
                  	 <tr>
                  	 	<td> no </td>
                  	 	<td> nameproduct </td>
                  	 	<td> typeproduct</td>
                  	 	<td> quantity</td>
                  	 	<td> amountproduct </td>
                  	 	<td> amount </td>
                  	 	<td>
	                      <button class="btn btn-small btn-danger" data-toggle="modal" data-target="modal-danger "><span class="fa fa-trash"></span></button>
                    	</td>
                    	<!-- modal -->
                    	<div class="modal fade" id="">
				        <div class="modal-dialog">
				          <div class="modal-content bg-danger">
				            <div class="modal-header">
				              <h4 class="modal-title">Ondoa kwenye mkokoteni</h4>
				              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                <span aria-hidden="true">&times;</span>
				              </button>
				            </div>
				            <div class="modal-body">
				            <form method="post">
				            	<input type="hidden" name="proid" value="">
				              <p>Bidhaa hii itaondolewa kwenye mkokoteni</p>
				            </div>
				            <div class="modal-footer justify-content-between">
				              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Funga</button>
				              <button name="remove" class="btn btn-outline-light">Ondoa</button>
				              </form>
				            </div>


				          </div>
				          <!-- /.modal-content -->
				        </div>
				        <!-- /.modal-dialog -->
				      </div>
      <!-- /.modal -->
                  	 </tr>
      
                  </tbody>
                 <tr>
                 	<th colspan="5">Jumla</th>
                 	<th colspan="2">
                 		<i>/= (Tsh)</i>
                      
                      
                 	</th>
                 </tr>
                </table> <br>
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-md"><span class="fa fa-plus"></span> Fanya Mauzo</button>
              </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <form method="post"> 
    <div class="modal fade" id="modal-md">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Fanya Mauzo</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                <div class="row">
                  <div class="col col-md-4">
                	 <label>Mteja</label>
                  </div>
                  <div class="col col-md-8">
                    <select name="customername" class="form-control select2">
                    	<option>--</option>
                    
                    	 <option>fullname</option>
                    	
                    </select>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col col-md-4">
                	 <label>Jumla</label>
                  </div>
                  <div class="col col-md-8">
                  	amount
                       
                     <input type="hidden" name="totalmoney" value="">
                    <input type="text"  class="form-control"  value="" disabled>
                
                  </div>
                </div><br>
                <div class="row">
                  <div class="col col-md-4">
                	 <label>Punguzo/Discount</label>
                  </div>
                  <div class="col col-md-8">
                    <input type="number" min="0" name="discount" class="form-control" placeholder="Weka punguzo" required>
                  </div>
                </div><br>	
                <div class="row">
                  <div class="col col-md-4">
                	 <label>Kiasi alichotoa mteja</label>
                  </div>
                  <div class="col col-md-8">
                    <input type="number" min="0" name="checkout" class="form-control" placeholder="Weka kiasi alichotoa mteja" required>
                  </div>
                </div>
              </p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Funga</button>
              <button name="sell" class="btn btn-primary">Uza</button>
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
