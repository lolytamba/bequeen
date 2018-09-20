<?php
include('../koneksi.php');
$output='';
$sql="SELECT * FROM test_book ORDER BY id DESC";
$result=mysqli_query($con,$sql);
$output='
<div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <th width="10%">No</th>
      <th width="25%">Service/Paket</th>
      <th width="25%">Arrival</th>
      <th width="25%">Booking</th>
      <th width="15%">Pilihan</th>
    </tr>';
if (mysqli_num_rows($result)>0) {
  while ($row=mysqli_fetch_array($result)) {
    $output='<td>'.$row["id"].'</td>
              <td class="SerPac" data-id1="'.$row["id"].'"
              contenteditable>'.$row["SerPac"].'</td>
              <td class="arrival" data-id2="'.$row["id"].'"
              contenteditable>'.$row["arrival"].'</td>
               <td class="bookDate" data-id3="'.$row["id"].'"
              contenteditable>'.$row["bookDate"].'</td>
              <td><button name="btn_delete" id="btn_delete"
              data-id4="'.$row["id"].'">x</button></td>
              ';
  }
  $output='<tr>
              <td></td>
              <td id="SerPac" contenteditable></td>
              <td id="arrival" contenteditable></td>
              <td id="bookDate" contenteditable></td>
              <td><button name="btn_add" id="btn_add" class="btn btn-xs
              btn-success">+</button></td>
            </tr>
  ';
}else{
  $output='<tr>
              <td colspan="4">Data not Found</td>
            </tr>';
}
$output='</table>
  </div>';
 ?>
