<!DOCTYPE html>
<head>
 <title>Kalkulator</title>
 <!-- Kode CSS -->
 <style>
  .bg{
   margin: 40px auto;
   width: 400px;
   padding: 10px;
   background-color: #FFC0CB;
   text-align: center;
   box-shadow: 5px 4px 5px #A5A5A5FF;
  }
  h2{
   color: #330033;
  }
  form,#submit{
   
  }
  form,input,select,.hasil{
   font-size: 18px;
   width: 100%;
   margin-bottom: 10px;
   padding: 5px;
   -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
           box-sizing: border-box;
  }
  #submit{
   border:2px solid #663399;
   border-radius: 10px;
   color: crimson;
   background-color: #CCFFFF;
   cursor: pointer;
  }
  #submit:hover{
   border:2px solid #DC143C;
   color: #663399;
   background-color: white;
  }
 </style>
</head>
<body>
 <?php
  if (isset($_POST['submit'])) {
   $angka1  = $_POST['angka1'];
   $angka2  = $_POST['angka2'];
   $operator  = $_POST['operator'];
   switch ($operator) {
    case 'tambah':
     $hasil = $angka1 + $angka2;
     break;
    case 'kurang':
     $hasil = $angka1 - $angka2;
     break;
    case 'kali':
     $hasil = $angka1 * $angka2;
     break;
    case 'bagi':
     $hasil = $angka1 / $angka2;
     break;
     case 'modulus':
     $hasil = $angka1 % $angka2;
     break;
   }
  }
 ?>
 <div class="bg">
  <h2>Kalkulator</h2>
  <form action="kalkulator.php" method="post">
   <input type="number" autocomplete="off" name="angka1" placeholder="Angka Pertama">
   <input type="number" autocomplete="off" name="angka2" placeholder="Angka Kedua">
   <select name="operator" id="operator">
    <option value="">Pilih Operator</option>
    <option value="tambah">+ (Tambah)</option>
    <option value="kurang">- (Kurang)</option>
    <option value="kali">* (Kali)</option>
    <option value="bagi">/ (Bagi)</option>
    <option value="modulus">% (Modulus)</option>

   </select>
   <input type="submit" id="submit" name="submit" value="Hasil">
   <div class="hasil">
    hasil = 
    <?php 
     if (isset($_POST['submit']))
      echo $hasil;
     ?>
   </div>
  </form>
  <font size="3"><i>alfanisa</i></font><br>
</div>
</body>
</html>