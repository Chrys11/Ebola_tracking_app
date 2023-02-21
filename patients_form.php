<?php require_once('header.php'); ?>

                    
                <!-- Begin Page Content -->
<!-- Basic Card Example -->
<div class="card shadow mb-4" id = "reg1">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add new patient</h6>
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
                        <select name="day_ob" style="color:blue" class="form-control">
                            <option value='0'>Day of Birth</option>
                            <?php for($i=1;$i<32;$i++){?>
                                <option value="<?php echo $i;?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-3">
                        <?php $months=['January','February','March','April','May','June','July','August','September','October','November','December'];?>
                        <select name="month_ob" style="color:blue" class="form-control">
                            <option value='0'>Month of Birth</option>
                            <?php foreach($months as $month){?>
                                <option value="<?php echo array_search($month,$months)+1;?>"><?php echo $month; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-3">
                        <select name="year_ob" style="color:blue" class="form-control">
                            <option value='0'>Year of Birth</option>
                            <?php for($i=1960;$i<2022;$i++){?>
                                <option value="<?php echo $i;?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-12 mb-sm-12">
                        <input name="phone" type="text" class="form-control form-control-user"
                            placeholder="Phone number">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-12 mb-sm-12">
                        <input name="location" type="text" class="form-control form-control-user"
                            placeholder="Location of Residence e.g. Uganda, Kampala">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-12 mb-sm-12">
                        <input name="nationality" type="text" class="form-control form-control-user"
                            placeholder="Nationality">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-12 mb-sm-12">
                        <input name="kin" type="text" class="form-control form-control-user"
                            placeholder="Next of Kin">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 mb-3 mb-sm-3">
                        <select name="day_oa" style="color:blue" class="form-control">
                            <option value='0'>Day of Admission</option>
                            <?php for($i=1;$i<32;$i++){?>
                                <option value="<?php echo $i;?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-3">
                        <?php $months=['January','February','March','April','May','June','July','August','September','October','November','December'];?>
                        <select name="month_oa" style="color:blue" class="form-control">
                            <option value='0'>Month of Admission</option>
                            <?php foreach($months as $month){?>
                                <option value="<?php echo array_search($month,$months)+1;?>"><?php echo $month; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-3">
                        <select name="year_oa" style="color:blue" class="form-control">
                            <option value='0'>Year of Admission</option>
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
                <button name="add_patient" class="btn btn-primary btn-user btn-block">
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