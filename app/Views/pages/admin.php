<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    table, th, td {
        border: 2px solid black;
    }
    table {
        width: 71%;
    }
    th {
        height: 65px;
    }
    td, th {
        text-align: center;
    }
</style>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="section">
    
    
<aside id="sidebar">

    <div class="widget-box">
        <center>
            <h5 class="title">Sedang dilayani</h5>
            <h3>Antrian</h3>
            <h1>
                1
            </h1>
            
        <button class="btn btn-warning">Selesai</button>
        </center>
       
        
    </div>
</aside>
<br><br>
<div class="container">
          <p align="center">
  <input type="button" class="btn btn-warning" value="Daftar Antrian Selanjutnya." />
</p>

<table border="1" 
           align="center">
  
        <tr>
            <th>No Antrian</th>
            <th>Panggil</th>
            <th>Keterangan</th>
        </tr>
        <tr>
            <td>1</td>
            <td><script>
      function play() {
        var audio = document.getElementById("audio");
        audio.play();
      }
    </script>

    <input type="button" value="Panggil" onclick="play()">
    <audio id="audio" src="/suara.mp3"></audio></td>
            <td>tidak ada</td>
        </tr>
        <tr>
            <td>2</td>
            <td><script>
      function play() {
        var audio = document.getElementById("audio");
        audio.play();
      }
    </script>

    <input type="button" value="Panggil" onclick="play()">
    <audio id="audio" src="/suara2.mp3"></audio></td>
            <td>tidak ada</td>
        </tr>
        <tr>
            <td>3</td>
            <td><script>
      function play() {
        var audio = document.getElementById("audio");
        audio.play();
      }
    </script>

    <input type="button" value="Panggil" onclick="play()">
    <audio id="audio" src="/suara1.mp3"></audio></td>
            <td>tidak ada</td>
        </tr>
        
    </table>
  
   
 
    </div>
    <br>
    <br>
    <?= $this->endSection(); ?>