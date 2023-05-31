<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- main css -->
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
   

    <body>
        <!-- PESANAN SECTION -->
        
        <section class="pesanan-section">
          <div class="container">
            <div class="row">
              <div class="section-title">
                <h2>Buat Pesanan</h2>
              </div>
            </div>
            <div class="row">
              <div class="pesanan-form">
                <form enctype="multipart/form-data" class="form" action="proses.php" method="POST" >

                  <div class="row">
                    <div class="input-group">
                      <label>Type Desain</label>
                      <select class="input-control" name="desain">
                        <option value="1">Desain 1</option>
                        <option value="2">Desain 2</option>
                        <option value="3">Desain 3</option>
                        <option value="4">Desain 4</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                      <div class="input-group">
                      <label>Nama Pengantin Pria</label>
                      <input type="text" placeholder="Nama Lengkap : Lee Jongsuk" class="input-control" name="nama_pengantin_pria">
                      </div> 
                  </div>

                  <div class="row">
                    <div class="input-group">
                      <Label>Nama Pengantin Wanita</Label>
                      <input type="text" placeholder="Nama Lengkap : Im Yoon Ah" class="input-control" name="nama_pengantin_wanita">
                    </div> 
                  </div>

                  <div class="row">
                    <div class="input-group">
                      <label>Nomor HP/Whatsapp</label>
                      <input type="text" placeholder="Nomor : 0829-0080-0705" class="input-control" name="nomor_hp">
                    </div> 
                  </div>

                  <div class="row">
                    <div class="input-group">
                      <label>Lokasi Acara</label>
                      <input type="text" placeholder="Lokasi Acara" class="input-control" name="lokasi_acara">
                    </div> 
                  </div>

                  <div class="row">
                    <div class="input-group">
                      <label>Waktu Acara</label>
                      <input type="text" placeholder="Waktu Acara : 08:00 - selesai" class="input-control" name="waktu_acara">
                    </div>  
                  </div>

                  <div class="row">
                    <div class="input-group">
                      <label for="date">Tanggal Acara</label>
                      <input type="date" class="input-control" name="tanggal_acara">
                    </div> 
                  </div>

                  <div class="row">
                    <div class="input-group">
                      <label>Nama Orang Tua Pengantin Pria</label>
                    </div>
                    <div class="input-group w50">
                      <input type="text" placeholder="Nama Ayah : Abdul" class="input-control" name="nama_ayah_pengantin_pria">
                    </div>
                    <div class="input-group w50">
                      <input type="text" placeholder="Nama Ibu : Maria" class="input-control" name="nama_ibu_pengantin_pria">
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-group">
                      <label>Nama Orang Tua Pengantin Wanita</label>
                    </div>
                    <div class="input-group w50">
                      <input type="text" placeholder="Nama Ayah : Situmorang" class="input-control" name="nama_ayah_pengantin_wanita">
                    </div>
                    <div class="input-group w50">
                      <input type="text" placeholder="Nama Ibu : Riana" class="input-control" name="nama_ibu_pengantin_wanita">
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-group">
                      <label>Ayat Kitab Suci</label>
                      <textarea placeholder="Ayat Kitab Suci : “Wanita yang baik adalah untuk lelaki yang baik. Lelaki yang baik untuk wanita yang baik pula (begitu pula sebaliknya). Bagi mereka ampunan dan reski yang melimpah (yaitu Surga).” (QS. An Nuur (24):26)" class="input-control" name="ayat_kitab_suci"></textarea>
                    </div>
                  </div>

                 

                  <div class="row">
                    <div class="input-group w50">
                      <label>Foto Pengantin Pria</label>
                      <input type="file"  name="foto_pengantin_pria" class="input-control">
                    </div>
                    <div class="input-group w50">
                      <label>Foto Pengantin Wanita</label>
                      <input type="file"  name="foto_pengantin_wanita" class="input-control">
                    </div>
                  </div>     
                  
                  <div class="row">
                    <div class="input-group">
                      <label>Foto Prewedding (Maksimal 3 Foto)</label>
                      <input type="file"  name="foto_prewedd" class="input-control" multiple>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-group">
                      <label>Foto Galeri (Maksimal 6 Foto)</label>
                      <input type="file"  name="foto_galeri" class="input-control" multiple>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-group">
                      <label>Nomor Rekening</label>
                    </div>
                    <div class="input-group w50">
                      <input type="text" placeholder="No.Rek Pengantin Pria" class="input-control" name="norek_pengantin_pria">
                    </div>
                    <div class="input-group w50">
                      <input type="text" placeholder="No.Rek Pengantin Wanita" class="input-control" name="norek_pengantin_wanita">
                    </div>
                  </div>     
                  
                  <div class="row">
                    <div class="input-group">
                      <label>Lagu</label>
                      <input type="text" placeholder="Judul Lagu : It's You - Sezairi" class="input-control" name="lagu" >
                    </div>
                  </div>
                         

                  <div class="row">
                    <div class="input-group">
                      <button type="submit" class="btn-1">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
    </body>
</html>