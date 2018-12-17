</main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url ('assets/js/jquery-slim.min.js');?>"><\/script>')</script>
    <script src="<?php echo base_url ('assets/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url ('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url ('assets/js/holder.min.js');?>"></script>
    <script src="<?php echo base_url ('assets/offcanvas.js');?>"></script>

    <script>
        $(document).ready(function(){
            $("#pasien").submit(function(e){
                e.preventDefault();
                var identitas= $("#identitas").val();
                var nama1 = $('#nama1').val();
                var nama = $('#nama').val();
                var namaleng = nama1 + " " + nama;
                var jk = $("input[name='jeniskelamin']:checked").val();
                var goldarah = $('#goldarah').val();
                var tmptlahir = $('#tempatlahir').val();
                var ttl = $('#tnggllahir').val();
                var nohp = $('#nohp').val();
                var alamat = $('#alamat').val();
                var jenis = $('#jenis').val();

                var arrayData = {
                  identitas: identitas,
                  nama: namaleng,
                  jk: jk,
                  goldarah: goldarah,
                  tmptlahir: tmptlahir,
                  ttl: ttl,
                  nohp: nohp,
                  alamat: alamat,
                  jenis: jenis
                };
                // var success = {
                //   result: "true"
                // }; 
                $.post("<?php echo base_url() ?>/home/add_pasien",  arrayData ,
                      function(data){
                        // if(data === success) {
                        //   console.log("TRUE BRO");
                        // } else {
                        //   console.log("FALSE BRO");
                        // }
                        console.log(data)
                        // console.log(success['result']);
                      });
            });
        });
    </script>
  </body>
</html>