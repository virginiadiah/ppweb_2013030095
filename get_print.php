<?php
include('koneksi.php');
if($_POST["query"] != '') {
    $search_array = explode(",", $_POST["query"]); 
    $search_text = "'" . implode("', '", $search_array) . "'";
    $query = $conn->query("SELECT * FROM item WHERE nama IN (".$search_text.") ORDER BY id DESC");
}else{
    $query = $conn->query("SELECT * FROM item ORDER BY nama DESC");
}
$total_row = mysqli_num_rows($query);
$output = '';
if($total_row > 0)  
   while ($row = $query ->fetch_object()) { 
    $output.= '<div class="col-4"><div class="card mt-5"><div class="card-header bg-info text-center fs-2">'.$row->nama.'</div><div class="card-body"><div class="text-center text-decoration-underline font-monospace lh-1">'.$row->barcode.'</div><h3 class="text-center">Rp. '.$row->harga.'  / '.$row->satuan.'</h3><div class="text-center">'. date("d/m/Y").' | '.$row->id.'</div></div></div></div><br>';
   }

echo $output;
?>