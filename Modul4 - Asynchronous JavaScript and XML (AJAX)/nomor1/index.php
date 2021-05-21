<?php 
include('connect.php'); 

$qsel = mysqli_query($koneksi, "SELECT RolePlayer AS 'Role',COUNT(RolePlayer) AS 'Jumlah' FROM roles GROUP BY RolePlayer;"); 
$rsel = mysqli_fetch_all($qsel, MYSQLI_ASSOC); 
?> 
<html> 
  <head> 
    <script src="chart.js"></script> 
    <title>Modul IV</title> 
  </head> 
  <body> 
    <b>Tabel Jumlah Role Favorit</b> 
    <br><br> 
    <table border="1" id="datatabel"> 
    <thead> 
    <th>Role</th> 
    <th>Jumlah</th> 
    </thead> 
    <tbody> 
    <?php foreach ($rsel as $vsel) { ?> 
    <tr> 
    <td><?= $vsel['Role'] ?></td> 
    <td><?= $vsel['Jumlah']?></td> 
    </tr> 
    <?php } ?> 
    </tbody> 
    </table> 
    <br></br> 
    <canvas id="myChart" width="400" height="400"></canvas> 
    <script> 
      var ctx = document.getElementById('myChart').getContext('2d'); 
      var myChart = new Chart(ctx, { 
        type: 'radar', 
        data: { 
          labels: [<?php foreach ($rsel as $vsel) {echo"'".$vsel['Role']."',"; } ?>], 
          datasets: [{ 
            label: '# of Votes', 
            data: [<?php foreach ($rsel as $vsel) {echo"'".$vsel['Jumlah']."',";
            } ?>], 
          backgroundColor: [ 
            'rgba(60, 100, 130, 0.2)', 
            'rgba(54, 162, 235, 0.2)', 
            'rgba(60, 206, 86, 0.2)', 
            'rgba(75, 192, 192, 0.2)', 
            'rgba(153, 102, 60, 0.2)', 
            'rgba(60, 159, 64, 0.2)' 
            ], 
          borderColor: [ 
            'rgba(60, 100, 130, 1)', 
            'rgba(54, 162, 235, 1)', 
            'rgba(60, 206, 86, 1)', 
            'rgba(75, 192, 192, 1)', 
            'rgba(153, 102, 60, 1)', 
            'rgba(60, 159, 64, 1)' 
          ], 
          borderWidth: 2 
        }] 
      }, 
        options: { 
          responsive : false 
        } 
    }); 
    </script> 
  </body> 
</html>

