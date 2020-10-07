<?php
$merk = [
    ["Sport Vehicle ( SUV )", "Jeep Compass ", 50000000,"1.jpg"],
    ["Sport Vehicle ( SUV )", "Chevy Traverse", 5100000,"2.jpg"],
    ["Sport Vehicle ( SUV )", "Ford Escape ", 5910000,"3.jpg"],
    ["Mobil convertible ", "Ford Escape ", 3910000,"4.jpg"],
    ["Mobil convertible ", " bmw ", 4500000,"11.jpg"],
    ["Station Wagon ", "bmw ", 300000,"10.jpg"],
    ["Station Wagon ", "pajero ", 2500000,"7.jpg"],
    ["Sports Car", "ferary ", 6000000,"8.jpg"],
];



// Membuat Pilihan
$temp_arr=[];

foreach ($merk as $key) {
//    var_dump($key[0]);
   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
// var_dump($pilihan);

// End pilihan

// Blok filter
$tampilkan_merk=[];
if(isset($_POST['filter']))
{
    // echo "tes";
    // var_dump($_POST['filter']);
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $tampilkan_merk=$merk;
    }else{
        foreach($merk as $key)
        {
            if($key[0] == $filter){
                $tampilkan_merk[]=[$key[0],$key[1],$key[2],$key[3]];
            }
        }
    }
}else{
    $tampilkan_merk=$merk;
}
// var_dump($tampilkan_merk);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <body class="bg-info">
    <div class="d-flex mx-auto">
    <h3 class="d-flex mx-auto">JENIS MOBIL DAN SERI</h3>
  </div>

  <div class="d-flex">
    <form class="d-flex mx-auto" action="remidi.php" method="post">
        <select name="filter">
            <option value="">
                Tampilkan Semua
            </option>
            <?php foreach ($pilihan as $key): ?>
                <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
            <?php endforeach; ?>      
        </select>
        <input type="submit" value="filter">
    </div>
    </form>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">GAMBAR</th>
      <th scope="col">TYPE</th>
      <th scope="col">MERK</th>
      <th scope="col">HARGA</th>
    </tr>
  </thead>
  <?php $grand_total=0; ?>
  <?php foreach ($tampilkan_merk as $key => $value): ?>
  <tbody class="bg-light">
    <tr>
      <td><img src="image/<?php echo $value[3]; ?>" alt="" width="150px" height="100px"></td>
      <td><?php echo $value[0]; ?></td>
      <td><?php echo $value[1]; ?></td>
      <td><?php echo $value[2]; ?></td>
    </tr>
</tbody>
<?php $grand_total+=$value[2]; ?>
<?php endforeach; ?>
<thead class="thead-light">
    <tr>
      <th scope="col" class="bg-danger">Total Keseluruhan</th>
      <th scope="col"></th>
      <th scope="col"><?php echo $grand_total; ?></th>
      <th scope="col"></th>
    </tr>
  </thead>

</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>