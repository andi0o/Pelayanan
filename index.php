<?php

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survei Pelayanan UPT BKN JAMBI</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <img src="h.png" alt="Logo UPT Jambi" class="logo">
  <h1>Kuesioner Survei Kepuasan Masyarakat</h1>
  <p style="text-align:center;">Mohon luangkan waktu Anda untuk mengisi kuesioner ini.</p>
  
  <form action="koneksi.php" method="post">
    
    <label for="pendidikan">Pendidikan:</label>
    <select name="pendidikan" id="pendidikan" required>
      <option value="">Pilih Pendidikan</option>
      <option value="SD">SD</option>
      <option value="SMP">SMP</option>
      <option value="SMA/SMK">SMA/SMK</option>
      <option value="DI">D1</option>
      <option value="DII">D2</option>
      <option value="DIII">D3</option>
      <option value="S1/DIV">S1/DIV</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
    </select>

    <label for="jns_Layanan">Jenis Layanan:</label>
    <select name="jns_layanan" id="jns_Layanan" required>
      <option value="">Pilih Jenis Layanan</option>
      <option value="1">Mutasi Kepegawaian</option>
      <option value="2">Seleksi Sekolah Kedinasan</option>
      <option value="3">Seleksi Pengembangan Karier</option>
      <option value="4">Seleksi CASN</option>
      <option value="5">Seleksi non ASN</option>
      <option value="6">Simulasi CAT BKN</option>
      <option value="7">Pensiun</option>
      <option value="8">Kenaikan Pangkat</option>
    </select>

    <div class="radio-group">
      <label>Jenis Kelamin:</label>
      <label><input type="radio" name="kelamin" value="1" required> Laki-laki</label>
      <label><input type="radio" name="kelamin" value="2"> Perempuan</label>
    </div>

  <div class="form-group">
  <label id="respon" name="u1">Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</label>
  <p><i><b>Informasi :</b>Tidak terdapat syarat khusus bagi masyarakat dalam menggunakan layanan konsultasi di UPT BKN Jambi</i></p>
  <input type="radio" id="u1" name="u1" value="1" required>
    <label for="respon">Sangat Tidak Mudah</label>
    <input type="radio" id="u1" name="u1" value="2">
    <label for="respon">Tidak Mudah</label>
    <input type="radio" id="u1" name="u1" value="3">
    <label for="respon">Mudah</label>
    <input type="radio" id="u1" name="u1" value="4">
    <label for="respon">Sangat Mudah</label>
</div>

<div class="form-group"><br>
  <label>Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?</label>
  <p><i><b>Informasi :</b>Pelaksanaan layanan konsultasi yang langsung tatap muka atau melalui daring dengan petugas layanan</i></p>
    <input type="radio" id="u2" name="u2" value="1" required>
    <label for="respon">Sangat Tidak Mudah</label>
    <input type="radio" id="u2" name="u2" value="2">
    <label for="respon">Tidak Mudah</label>
    <input type="radio" id="u2" name="u2" value="3">
    <label for="respon">Mudah</label>
    <input type="radio" id="u2" name="u2" value="4">
    <label for="respon">Sangat Mudah</label>
  </br></div>

<div class="form-group"><br>
  <label>Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?</label>
  <p><i><b>Informasi :</b>Kesesuaian dan ketepatan waktu saat peberian layanan konsultasi</i></p>
    <input type="radio" id="u3" name="u3" value="1" required>
    <label for="respon">Sangat Tidak Mudah</label>
    <input type="radio" id="u3" name="u3" value="2">
    <label for="respon">Tidak Mudah</label>
    <input type="radio" id="u3" name="u3" value="3">
    <label for="respon">Mudah</label>
    <input type="radio" id="u3" name="u3" value="4">
    <label for="respon">Sangat Mudah</label>
  </br></div>

<div class="form-group"><br>
  <label>Bagaimana pendapat Saudara tentang kewwajaran biaya/tarif dalam pelayanan?</label>
  <p><i><b>Informasi :</b>Seluruh layanan konsultasi yang disediakan di UPT BKN Jambi tidak dipungut biaya(gratis), kecuali layanan seleksi yang menggunakan tarif PNBP</i></p>
    <input type="radio" id="u4" name="u4" value="1" required>
    <label for="respon">Sangat Tidak Mudah</label>
    <input type="radio" id="u4" name="u4" value="2">
    <label for="respon">Tidak Mudah</label>
    <input type="radio" id="u4" name="u4" value="3">
    <label for="respon">Mudah</label>
    <input type="radio" id="u4" name="u4" value="4">
    <label for="respon">Sangat Mudah</label>
  </br></div>

<div class="form-group"><br>
  <label>Bagaimana pendapat Saudara tentang kesesuaian produ pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?</label>
  <p><i><b>Informasi :</b>Tidak terdapat syarat khusus bagi masyarakat dalam menggunakan layanan konsultasi di UPT BKN Jambi</i></p>
    <input type="radio" id="u5" name="u5" value="1" required>
    <label for="respon">Sangat Tidak Mudah</label>
    <input type="radio" id="u5" name="u5" value="2">
    <label for="respon">Tidak Mudah</label>
    <input type="radio" id="u5" name="u5" value="3">
    <label for="respon">Mudah</label>
    <input type="radio" id="u5" name="u5" value="4">
    <label for="respon">Sangat Mudah</label>
  </br></div>

<div class="form-group"><br>
  <label>Bagaimana pendapat Saudara tentang kompetensi/kemampuan petugas dalam pelayanan?</label>
  <p><i><b>Informasi :</b>Kemampuan dan kompetensi dalam memberikan penjelasan, memcahkan permasalahan, dan memberikan solusi</i></p>
    <input type="radio" id="u6" name="u6" value="1" required>
    <label for="respon">Sangat Tidak Mudah</label>
    <input type="radio" id="u6" name="u6" value="2">
    <label for="respon">Tidak Mudah</label>
    <input type="radio" id="u6" name="u6" value="3">
    <label for="respon">Mudah</label>
    <input type="radio" id="u6" name="u6" value="4">
    <label for="respon">Sangat Mudah</label>
  </br></div>

<div class="form-group"><br>
  <label>Bagaimana pendapat Saudara terhadap perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?</label>
  <p><i><b>Informasi :</b>Sikap dan perilaku petugas dalam melayani peserta dengan 3S(Senyum, Sapa, Salam) dan keramahanselama menjelaskan secara daring</i></p>
    <input type="radio" id="u7" name="u7" value="1" required>
    <label for="respon">Sangat Tidak Mudah</label>
    <input type="radio" id="u7" name="u7" value="2">
    <label for="respon">Tidak Mudah</label>
    <input type="radio" id="u7" name="u7" value="3">
    <label for="respon">Mudah</label>
    <input type="radio" id="u7" name="u7" value="4">
    <label for="respon">Sangat Mudah</label>
  </br></div>

<div class="form-group"><br>
  <label>Bagaimana pendapat Saudara tentang penangan pengaduan pengguna layanan?</label>
  <p><i><b>Informasi :</b>Respons dalam menanggapi pengaduan/permasalahan pada sistem support-siasn.bkn.go.id atau media sosial(Facebook, Instagram, dan WhatsApp) yang dikelola oleh UPT BKN Jambi</i></p>
    <input type="radio" id="u8" name="u8" value="1" required>
    <label for="respon">Sangat Tidak Mudah</label>
    <input type="radio" id="u8" name="u8" value="2">
    <label for="respon">Tidak Mudah</label>
    <input type="radio" id="u8" name="u8" value="3">
    <label for="respon">Mudah</label>
    <input type="radio" id="u8" name="u8" value="4">
    <label for="respon">Sangat Mudah</label>
  </br></div>

<div class="form-group"><br>
 <label>Bagaimana pendapat Saudara tentang kualitas sara dan prasarana?</label>
  <p><i><b>Informasi :</b> Fasilitas yang disediakan oleh UPT BKN Jambi termasuk Ruang Tamu Layanan dan platform pengaduan</i></p>
    <input type="radio" id="u9" name="u9" value="1" required>
    <label for="respon">Sangat Tidak Mudah</label>
    <input type="radio" id="u9" name="u9" value="2">
    <label for="respon">Tidak Mudah</label>
    <input type="radio" id="u9" name="u9" value="3">
    <label for="respon">Mudah</label>
    <input type="radio" id="u9" name="u9" value="4">
    <label for="respon">Sangat Mudah</label>
  </br></div>

    <textarea name="pesan" rows="5" placeholder="Pesan Anda" required></textarea>
    <button type="submit">Kirim Pesan</button>
  </form>
</div>
</body>
</html>