<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/sidebar.php'; ?>
<?php include_once 'includes/topbar.php'; ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
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
                        <div class="form-group col-lg-4">
                            <label>Marca</label>
                            <input type="text" name="mixture_name" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Modelo</label>
                            <input type="text" name="mixture_name" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Año</label>
                            <select type="text" name="mixture_name" id="" class="form-control" required>
                                <?php 
                                for($x = date('Y') + 1; $x > 1900 ; $x--):
                                ?>
                                    <option><?php echo $x; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    
                    

                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label>Tipo de Placas</label>
                            <select  name="mixture_name" id="" class="form-control" required>
                                <option>Seleccione</option>
                                <option>Opciones</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Placas</label>
                            <input type="text" name="mixture_name" id="" class="form-control" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Numero de Serie</label>
                            <input type="text" name="mixture_name" id="" class="form-control" required>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label>Observaciones</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-lg-12 right">
                            <button class="btn btn-success"><i class="uil uil-camera-plus"></i></button>
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