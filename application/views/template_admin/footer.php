        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/');?>js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/');?>js/scripts.js"></script>
       <!-- Page level plugins -->
       <script src="<?= base_url('assets/vendor/datatables/js/jquery.dataTables.min.js');?>"></script>
        <script src="<?= base_url('assets/vendor/datatables/js/dataTables.bootstrap5.min.js');?>"></script>

    </body>
    <script>
        $(document).ready(function(){
            $('#tabel-data').DataTable();
        });
    </script>
</html>
