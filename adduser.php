<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/sidebar.php'; ?>
<?php include_once 'includes/topbar.php'; ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><b>Dashboard</b></h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><iclass="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

 <!-- Area Chart -->
 <div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div>
            
                <div class="col-lg-8 offset-lg-2">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>Nombre</label>
                            <input type="text" name="mixture_name" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Apellidos</label>
                            <input type="text" name="mixture_name" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Correo electronico</label>
                            <input type="email" name="mixture_name" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Numero de telefono</label>
                            <input type="phone" name="mixture_name" id="" class="form-control phone" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Celular</label>
                            <input type="cell" name="mixture_name" id="" class="form-control phone" required>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="form-group col-lg-12 right">
                            <button style="float: right;" name="" id="" class="btn btn-primary right"><i class="uil uil-save"></i>&nbsp;&nbsp;Guardar</button>
                        </div>
                        <br><br>
                    </div>
                

                </div>
            </div>
        </div>
    </div>
</div>
    
</div>


<?php include_once 'includes/footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>


<script>
$(document).ready(function(){
    $('.phone').inputmask('(999)-999-9999');
});
</script>