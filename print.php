<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>UAS</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- MAXCDN BS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <!-- PRINTAREA -->
        <script src="jquery.PrintArea.js"></script>
       <!-- select2 -->
       <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
       <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            
            (function($) {
                // fungsi dijalankan setelah seluruh dokumen ditampilkan
                $(document).ready(function(e) {
                    // aksi ketika tombol cetak ditekan
                    $("#cetak").bind("click", function(event) {
                        $('#abc').printArea();
                    })
                });
            });
        </script>   
    </head>
    <body>
        <div class="container">
            <br>
            <h1 class="text-center">PILIH DATA</h1>
            <div class="text-center">
            <a class="btn mb-3 col-2 bg-info " href="index.php">Kembali</a>
            <button class="btn mb-3 text-center col-2 bg-primary" id="cetak">Print</button>
            </div>
            <select name="item" id="item" class="form-control " multiple>
            <?php
            include('koneksi.php');
            $query = $conn->query("SELECT barcode,nama FROM item ORDER BY id ASC");
            while ($row = $query ->fetch_object()) {
            $barcode = $row->barcode;
            $nama = $row->nama;
                echo '<option value="'.$nama.'">'.$barcode.' - '.$nama.'</option>';    
            }
          ?>
         </select>
        <br><br>
        <input type="hidden" name="id" id="id" />
        <div class="container-fluid" id="disini">
            <div class="row" id="abc">
            </div>
        </div>
        </div>
<script>
$(document).ready(function(){
    load_data();
    function load_data(query='')
    {
        $.ajax({
            url:("get_print.php"),
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                $('#abc').html(data);
            }
        })
    }

    $('#item').change(function(){
         $('#id').val($('#item').val());
         var query = $('#id').val();
         load_data(query);
     });
    
    $("#cetak").bind("click", function(event) {
        $('#disini').printArea();
    })

    $('#item').select2({
        allowClear: true,
        placeholder: 'Cari Data Item',
    });
});
</script>
</body>
 
</html>