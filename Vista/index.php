<!DOCTYPE html>
<html>
<head>
    <title>PHP, Ajax CRUD Datatable - Adrian Lovo</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>


<body>
    
	<div class="container">
	    <p><h1>PHP, Ajax CRUD Datatable</h1></p>
	    
	    <p><a class="btn btn-success" href="javascript:void(0)" id="createNewProduct">Agregar Nuevo Registro</a></p>

	    <table class="table table-bordered data-table" id="datatable">
	        <thead>
	            <tr>
	                <th>#</th>
	                <th>Nombre</th>
	                <th>Apellido</th>
	                <th>Edad</th>
	                <th>Genero</th>
	                <th>Fecha Nacimiento</th>
	                <th>Imagen</th>
	                <th style="width:80px">Action</th>
	            </tr>
	        </thead>
	        <tbody>
	        </tbody>
	    </table>
	</div>
   
	<div class="modal fade" id="ajaxModel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title" id="modelHeading"></h4>
	            </div>
	            <div class="modal-body">
	                <form id="productForm" name="productForm" class="form-horizontal">
	                   <input type="hidden" name="product_id" id="product_id">
	                    <div class="form-group">
	                        <label for="name" class="col-sm-2 control-label">Name</label>
	                        <div class="col-sm-12">
	                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
	                        </div>
	                    </div>
	     
	                    <div class="form-group">
	                        <label class="col-sm-2 control-label">Details</label>
	                        <div class="col-sm-12">
	                            <textarea id="detail" name="detail" required="" placeholder="Enter Details" class="form-control"></textarea>
	                        </div>
	                    </div>
	      
	                    <div class="col-sm-offset-2 col-sm-10">
	                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
	                     </button>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
    
</body>
    
    <script type="text/javascript" src="../Controller/ControladorPersona.js"></script>
	
</html>