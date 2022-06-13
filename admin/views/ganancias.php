                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabla de ventas</h1>
                    <p class="mb-4">Datosd e todas las vetas y ganacias por día<a target="_blank" href="https://datatables.net">ver mas</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Datos de ventass</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre del paquete</th>
                                            <th>Fecha</th>
                                            <th>Precio</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <!-- <tr>
                                            <th colspan="2">Ganancia :</th>
                                            <th id="total"></th> -->
                                        <!-- <th>Fecha</th> -->
                                        <!-- </tr> -->
                                    </tfoot>
                                    <tbody>

                                        <?php ganacias(); ?>

                                        <!-- <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <form class="input-group date col-6 d-fex justify-content-center " id="conGanancia">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th me-4">Ganacia por fecha : </span>
                            </div>
                            <input type="date" class="form-control" name="fecha2">
                            <a class="btn btn-primary" onclick="conGanancia(); return false;"> calcular</a>
                        </form>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th colspan="2">Ganancia :</th>
                            <th id="total"></th>
                            <!-- <th>Fecha</th> -->
                        </tr>
                    </thead>
                </table>
                        <!-- /.container-fluid -->

                        </div>
                        <!-- End of Main Content -->

                        <!-- Footer -->
                        <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Copyright &copy; Your Website 2020</span>
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
                        <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <a class="btn btn-primary" onclick="cerrarSesion();">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Bootstrap core JavaScript-->
                        <script src="vendor/jquery/jquery.min.js"></script>
                        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                        <!-- Core plugin JavaScript-->
                        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                        <!-- Custom scripts for all pages-->
                        <script src="js/sb-admin-2.min.js"></script>

                        <!-- Page level plugins -->
                        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

                        <!-- Page level custom scripts -->
                        <script src="js/demo/datatables-demo.js"></script>

                        <script>
                            // var filas = document.querySelectorAll("#dataTable tbody tr");
                            // var suma = 0;
                            // var total = document.querySelector("#total");



                            // filas.forEach(function(e) {

                            //     // // obtenemos las columnas de cada fila
                            //     // var fi = e.querySelectorAll("tr");


                            //     // fi[3].textContent =suma+1;


                            //     suma += 1;
                            //     console.log(suma);
                            //     total.textContent = suma;
                            // });
                        </script>
                        </body>

                        </html>