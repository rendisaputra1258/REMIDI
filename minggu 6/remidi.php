<?php
$merk = [
    ["Sport Vehicle ( SUV )", "Jeep Compass ", 50000000,"SUV SX1"],
    ["Sport Vehicle ( SUV )", "Chevy Traverse", 5100000,"SUV SX2"],
    ["Sport Vehicle ( SUV )", "Ford Escape ", 4910000,"SUV SX3"],
    ["Sport Vehicle ( SUV )", "Toyota Sequoia ", 3900000,"SUV SX4"],
    ["Mobil convertible", "Dodge Avenger", 310000,"CX9"],
    ["Mobil convertible", "Pontiac Sunfire", 3500000,"CX8"],
    ["Mobil convertible", "Volkswagen New Beetle", 450000,"CX7"],
    ["Sports Car","Ultima GTR", 270000,"SC4"],
    ["Sports Car","Bugatti Veyron Super Sport", 2750000,"SC6"],
    ["Sports Car","SSC Ultimate Aero TT ", 260000,"SC10"],
    ["Sports Car","Ferrari Enzo ", 2300000,"SC2"],
    ["Station Wagon","Station Wagon", 3000000,"WXC5"],
    ["Station Wagon","Honda Accord wagon", 1700000,"WX6"],
    ["Station Wagon","Volvo 245DL Wagon", 2300000,"WX7"] 
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
      <th scope="col">TYPE</th>
      <th scope="col">MERK</th>
      <th scope="col">HARGA</th>
      <th scope="col">SERI</th>
    </tr>
  </thead>
  <?php $grand_total=0; ?>
  <?php foreach ($tampilkan_merk as $key => $value): ?>
  <tbody class="bg-light">
    <tr>
      <td><?php echo $value[0]; ?></td>
      <td><?php echo $value[1]; ?></td>
      <td><?php echo $value[2]; ?></td>
      <td><?php echo $value[3]; ?></td>
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