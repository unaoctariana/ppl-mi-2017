<style type="text/css">
#button {
    display: block;
    width:150px;
    margin:10px auto;
    padding:7px 13px;
    text-align:center;
    background:#a2bb33;
    font-size:20px;
    font-family: 'Arial', sans-serif;
    color:#ffffff;
    white-space: nowrap;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;

}

#button:active {
    vertical-align: top;
    padding-top: 8px;
}

.one a {
    text-decoration: none;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<div class="one">
    <p><a id="button" href="http://localhost/matakuliah-sistem-informasi/newfolder/form.php">Form Input</a></p>
</div>

<?php
error_reporting(0);
$a=100;
$b=2;
$c=$b*$a;
$d==$c;
echo "$d";
?>
<?php
$satu= $_POST['satu'];
$dua= $_POST['dua'];
$hasil=$satu + $dua;

?>
<table>
  <tr>
    <th>Nama Lengkap</th>
    <th>Email </th>
    <th>Jenis Kelamin</th>
	<th>Saran</th>
	<th>Action</th>
  </tr>
  <?php
  $nama=$_POST['nama'];
  $email=$_POST['email'];
  $jk=$_POST['jk'];
  $saran=$_POST['saran'];
 
 echo" 
  <tr>
    <td>$nama</td>
    <td>$email</td>
    <td>$jk</td>
	<td>$saran</td>
	<td><a href='edit.php?nama=$nama'><input type='submit' value='Edit'></a></td>
  </tr>
  Hasil Count : <h1>$hasil</h1>
 ";
   ?>
</table>

