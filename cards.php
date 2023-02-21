<?php require_once('header.php'); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
                    </div>

                    <div class="row">

                        <!-- Total Suspected Cases -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Suspected Cases</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- confirmed not infected -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Confirmed not infected</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-thermometer-half fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Infected Cases -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Infected Cases</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-12">
                            </div>

                        </div>


                   <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Ebola Virus Facts</h1>
                    <p class="mb-4">The incubation period, that is, the time interval from infection with the virus to onset of symptoms, is from 2 to 21 days. A person infected with Ebola cannot spread the disease until they develop symptoms. 

                    </p>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Grow In Utility -->
                        <div class="col-lg-6">

                            <div class="card position-relative">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Symptoms of EVD can be sudden and include:</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                    
                                    </div>

                                            </li>
                                        </ul>
                                    </nav>
                                    <p class="mb-0 small">
                                        <ul>
                                        <li>Fever</li>
                                        <li>Fatigue</li>
                                        <li>Muscle pain</li>
                                        <li>Headache</li>
                                        <li>Sore throat</li>
                                    </ul>
                                        This is followed by:
                                        
                                        Vomiting
                                        Diarrhoea
                                        Rash
                                        Symptoms of impaired kidney and liver function
                                        In some cases, both internal and external bleeding (for example, oozing from the gums, or blood in the stools).
                                        Laboratory findings include low white blood cell and platelet counts and elevated liver enzymes.</p>
                                </div>
                            </div>

                        </div>

                        <!-- Fade In Utility -->
                        <div class="col-lg-6">

                            <div class="card position-relative">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">This is followed by;</h6>
                                </div>
                                <div class="card-body">
    
                                    <p class="mb-0 small">
                                        <ul>
                                            <li>Vomiting</li>
                                            <li>Diarrhoea</li>
                                            <li>Rash</li>
                                            <li>Symptoms of impaired kidney and liver function</li>
                                            <li>In some cases, both internal and external bleeding (for example, oozing from the gums, or blood in the stools).</li>
                                            <li>Laboratory findings include low white blood cell and platelet counts and elevated liver enzymes.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->
<!-- Basic Card Example -->
<div class="card shadow mb-4" id ="reg">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Report a suspect.</h6>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <form class="user" method="post" action="cases.php">
                <div class="form-group row">
                    <div class="col-sm-12 mb-12 mb-sm-12">
                        <input name="fullname" type="text" class="form-control form-control-user"
                            placeholder="Full Name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 mb-3 mb-sm-3">
                        <select name="day" style="color:blue" class="form-control">
                            <option value='0'>Day of Birth</option>
                            <?php for($i=1;$i<32;$i++){?>
                                <option value="<?php echo $i;?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-3">
                        <?php $months=['January','February','March','April','May','June','July','August','September','October','November','December'];?>
                        <select name="month" style="color:blue" class="form-control">
                            <option value='0'>Month of Birth</option>
                            <?php foreach($months as $month){?>
                                <option value="<?php echo array_search($month,$months)+1;?>"><?php echo $month; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-3">
                        <select name="year" style="color:blue" class="form-control">
                            <option value='0'>Year of Birth</option>
                            <?php for($i=1960;$i<2022;$i++){?>
                                <option value="<?php echo $i;?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-12 mb-sm-12">
                        <?php $statuses = ['Mild','Threatening','Severe'];?>
                        <select name="status" style="color:green" class="form-control">
                            <option value='0'>Current Status</option>
                            <?php foreach($statuses as $status){?>
                                <option value="<?php echo array_search($status,$statuses)+1;?>"><?php echo $status; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-12 mb-sm-12">
                        <textarea name="symptoms" class="form-control" rows=7 placeholder="Signs and symptoms seperated by a coma(',')"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-12 mb-sm-12">
                        <input name="location" type="text" class="form-control form-control-user"
                            placeholder="Country and District e.g. Uganda, Kampala">
                    </div>
                </div>
                <button name="report_suspect" class="btn btn-primary btn-user btn-block">
                    REPORT SUSPECT
                </button>
                <hr>
            
            </form>
        </div>

    </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; EDV tracking sys 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>