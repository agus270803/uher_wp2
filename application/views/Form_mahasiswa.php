<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Mahasiswa</title>
   <style>
       body {
           display: flex;
           justify-content: center;
           align-items: center;
           height: 100vh;
           background-color: #f4f4f4;
           font-family: Arial, sans-serif;
       }
       .form-container {
           background: white;
           padding: 20px;
           border-radius: 10px;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           width: 350px;
       }
       .form-container h2 {
           text-align: center;
       }
       .form-group {
           display: flex;
           align-items: center;
           justify-content: space-between;
           margin-bottom: 10px;
           gap: 5px;
       }
       .form-group label {
           flex: 1;
           font-weight: bold;
       }
       .form-group input {
           flex: 2;
           padding: 8px;
           border: 1px solid #ccc;
           border-radius: 5px;
       }
       .form-container button {
           width: 100%;
           padding: 10px;
           background-color: blue;
           color: white;
           border: none;
           border-radius: 5px;
           cursor: pointer;
           margin-top: 10px;
       }
       .form-container button:nth-child(2){
         background-color: #218838;
       }
       .form-container button:hover {
           background-color: #218838;
       }
       span{
         margin-right: 5px;
       }
   </style>
</head>
<body>
   <div class="form-container">
       <h2>Form Input Data Mahasiswa</h2>
       <form action="<?= base_url('mahasiswa/add') ?>" method="post">
           <div class="form-group">
               <label for="nim">NIM</label>
               <span>:</span><input type="text" id="nim" name="nim"  required>
           </div>
           <div class="form-group">
               <label for="nama">Nama</label>
               <span>:</span><input type="text" id="nama" name="nama"  required>
           </div>
           <div class="form-group">
               <label for="kelas">Kelas</label>
               <span>:</span><input type="text" id="kelas" name="kelas"  required>
           </div>
           <div class="form-group">
               <label for="prodi">Prodi</label>
               <span>:</span><input type="text" id="prodi" name="prodi"  required>
           </div>
           <div class="form-group">
               <label for="email">Email</label>
               <span>:</span><input type="email" id="email" name="email"  required>
           </div>
           <div class="form-group">
              <button type="submit">Simpan</button>
              <button type="reset">Batal</button>
           </div>
       </form>
   </div>
</body>
</html>