<hr>
   <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <?= date('Y');?> Company</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/default/js/jquery.js');?>"></script>

    <link href="<?= base_url('assets/default/css/datatable.js');?>" rel="stylesheet">

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('assets/default/js/bootstrap.min.js');?>"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>

</body>

</html>
