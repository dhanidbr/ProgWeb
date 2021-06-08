<!DOCTYPE html>
<html lang="en">
<?php
include "simpan_data.php";

?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style>
    .warning {
      color: #FF0000;
    }
  </style>
  <title>Formulir</title>
</head>

<body style="padding: 30px;">

  <h1 align="center">Formulir Peserta Didik<br><span class="badge badge-primary">SMAN 1 Sidoarjo</span></h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="row container mt-5 ml-auto mr-auto">
      <div class="col">
        <!-- Registrasi Peserta Didik Start -->
        <table class="table table-borderless">
          <thead class="bg-primary text-white">
            <tr>
              <th scope="col" colspan="4">Registrasi Peserta Didik</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <label>1</label>
              </th>
              <th scope="row">
                <label>Jenis Pendaftaran</label>
              </th>
              <td>
                <input type="number" max="02" min="01" name="jenis_pendaftaran" class="form-control <?php echo ($error_jenis_pendaftaran != "" ? "is-invalid" : ""); ?>" id="jenis_pendaftaran" placeholder="Jenis Pendaftaran" value="<?php echo $jenis_pendaftaran; ?>">
                <span class="warning"><?php echo $error_jenis_pendaftaran; ?></span>
              </td>
              <td>
                <span><b>01)</b> Siswa Baru <b>02)</b> Pindahan</span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>2</label>
              </th>
              <th scope="row">
                <label>Tanggal Masuk Sekolah</label>
              </th>
              <td colspan="2">
                <input type="date" name="tanggal_masuk_sekolah" class="form-control <?php echo ($error_tanggal_masuk_sekolah != "" ? "is-invalid" : ""); ?>" id="tanggal_masuk_sekolah" placeholder="Tanggal Masuk Sekolah" value="<?php echo $tanggal_masuk_sekolah; ?>">
                <span class="warning"><?php echo $error_tanggal_masuk_sekolah; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>3</label>
              </th>
              <th scope="row">
                <label>NIS</label>
              </th>
              <td colspan="2">
                <input type="number" maxlength="10" name="nis" class="form-control <?php echo ($error_nis != "" ? "is-invalid" : ""); ?>" id="nis" placeholder="Nomor NIS" value="<?php echo $nis; ?>">
                <span class="warning"><?php echo $error_nis; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>4</label>
              </th>
              <th scope="row">
                <label>Nomor Peserta Ujian</label>
              </th>
              <td>
                <input type="text" maxlength="20" name="nomor_ujian" class="form-control <?php echo ($error_nomor_ujian != "" ? "is-invalid" : ""); ?>" id="nomor_ujian" placeholder="Nomor Peserta Ujian" value="<?php echo $nomor_ujian; ?>">
                <span class="warning"><?php echo $error_nomor_ujian; ?></span>
              </td>
              <td>
                <span>Nomor Peserta Ujian adalah nomor yang tertera di sertifikat <b>SKHUN SD</b></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>5</label>
              </th>
              <th scope="row">
                <label>Apakah anda pernah PAUD</label>
              </th>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="paud" id="paud1" value="1">
                  <label class="form-check-label" for="paud1">
                    Ya
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="paud" id="paud2" value="2">
                  <label class="form-check-label" for="paud2">
                    Tidak
                  </label>
                  <span class="warning"><?php echo $error_paud; ?></span>
                </div>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>6</label>
              </th>
              <th scope="row">
                <label>Apakah anda pernah TK</label>
              </th>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tk" id="tk1" value="1">
                  <label class="form-check-label" for="tk1">
                    Ya
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tk" id="tk2" value="2">
                  <label class="form-check-label" for="tk2">
                    Tidak
                  </label>
                  <span class="warning"><?php echo $error_tk; ?></span>
                </div>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>7</label>
              </th>
              <th scope="row">
                <label>No. Seri SKHUN Sebelumnya</label>
              </th>
              <td>
                <input type="text" maxlength="16" name="skhun" class="form-control <?php echo ($error_skhun != "" ? "is-invalid" : ""); ?>" id="skhun" placeholder="No. Seri SKHUN" value="<?php echo $skhun; ?>">
                <span class="warning"><?php echo $error_skhun; ?></span>
              </td>
              <td>
                <span>Diisi 16 Digit yang tertera di <b>SKHUN SD</b></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>8</label>
              </th>
              <th scope="row">
                <label>No. Seri Ijazah Sebelumnya</label>
              </th>
              <td>
                <input type="text" maxlength="16" name="ijazah" class="form-control <?php echo ($error_ijazah != "" ? "is-invalid" : ""); ?>" id="ijazah" placeholder="No. Seri Ijazah" value="<?php echo $ijazah; ?>">
                <span class="warning"><?php echo $error_ijazah; ?></span>
              </td>
              <td>
                <span>Diisi 16 Digit yang tertera di <b>Ijazah SD</b></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>9</label>
              </th>
              <th scope="row">
                <label>Hobi</label>
              </th>
              <td>
                <input type="number" max="06" min="01" name="hobi" class="form-control <?php echo ($error_hobi != "" ? "is-invalid" : ""); ?>" id="hobi" placeholder="Hobi" value="<?php echo $hobi; ?>">
                <span class="warning"><?php echo $error_hobi; ?></span>
              </td>
              <td>
                <span><b>01)</b> Olahraga <b>02)</b> Kesenian <b>03)</b> Membaca <b>04)</b> Menulis <b>05)</b> Traveling <b>06)</b> Lainnya</span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>10</label>
              </th>
              <th scope="row">
                <label>Cita - Cita</label>
              </th>
              <td>
                <input type="number" max="08" min="01" name="cita" class="form-control <?php echo ($error_cita != "" ? "is-invalid" : ""); ?>" id="cita" placeholder="Cita - Cita" value="<?php echo $cita; ?>">
                <span class="warning"><?php echo $error_cita; ?></span>
              </td>
              <td>
                <span><b>01)</b> PNS <b>02)</b> TNI/POLRI <b>03)</b> GURU/DOSEN <b>04)</b> DOKTER <b>05)</b> POLITIKUS <b>06)</b> WIRASWASTA <b>07)</b> SENI/LUKIS/ARTIS/SEJENIS <b>08)</b> LAINNYA</span>
              </td>
            </tr>
          </tbody>
          <thead class="bg-primary text-white">
            <tr>
              <th scope="col" colspan="4">Data Pribadi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <label>11</label>
              </th>
              <th scope="row">
                <label>Nama Lengkap</label>
              </th>
              <td colspan="2">
                <input type="text" name="nama_lengkap" class="form-control <?php echo ($error_nama_lengkap != "" ? "is-invalid" : ""); ?>" id="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>">
                <span class="warning"><?php echo $error_nama_lengkap; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>12</label>
              </th>
              <th scope="row">
                <label>Jenis Kelamin</label>
              </th>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="kelamin" id="l1" value="1">
                  <label class="form-check-label" for="l1">
                    Laki - Laki
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="kelamin" id="l2" value="2">
                  <label class="form-check-label" for="l2">
                    Perempuan
                  </label>
                  <span class="warning"><?php echo $error_kelamin; ?></span>
                </div>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>13</label>
              </th>
              <th scope="row">
                <label>NISN</label>
              </th>
              <td colspan="2">
                <input type="number" maxlength="10" name="nisn" class="form-control <?php echo ($error_nisn != "" ? "is-invalid" : ""); ?>" id="nisn" placeholder="Nomor NISN" value="<?php echo $nisn; ?>">
                <span class="warning"><?php echo $error_nisn; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>14</label>
              </th>
              <th scope="row">
                <label>NIK</label>
              </th>
              <td colspan="2">
                <input type="number" maxlength="10" name="nik" class="form-control <?php echo ($error_nik != "" ? "is-invalid" : ""); ?>" id="nik" placeholder="Nomor NIK" value="<?php echo $nik; ?>">
                <span class="warning"><?php echo $error_nik; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>15</label>
              </th>
              <th scope="row">
                <label>Tanggal Lahir</label>
              </th>
              <td colspan="2">
                <input type="date" name="tanggal_lahir" class="form-control <?php echo ($error_tanggal_lahir != "" ? "is-invalid" : ""); ?>" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>">
                <span class="warning"><?php echo $error_tanggal_lahir; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>16</label>
              </th>
              <th scope="row">
                <label>Tempat Lahir</label>
              </th>
              <td colspan="2">
                <input type="text" name="tempat_lahir" class="form-control <?php echo ($error_tempat_lahir != "" ? "is-invalid" : ""); ?>" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>">
                <span class="warning"><?php echo $error_tempat_lahir; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>17</label>
              </th>
              <th scope="row">
                <label>Agama</label>
              </th>
              <td>
                <input type="number" max="07" min="01" name="agama" class="form-control <?php echo ($error_agama != "" ? "is-invalid" : ""); ?>" id="agama" value="<?php echo $agama; ?>">
                <span class="warning"><?php echo $error_agama; ?></span>
              </td>
              <td>
                <span><b>01)</b> Islam <b>02)</b> Kristen/Protestan <b>03)</b> katholik <b>04)</b> Hindu <b>05)</b> Budha <b>06)</b> Khong Hu Chu <b>07)</b> Lainnya</span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>18</label>
              </th>
              <th scope="row">
                <label>Berkebutuhan Khusus</label>
              </th>
              <td>
                <input type="number" max="19" min="01" name="khusus" class="form-control <?php echo ($error_khusus != "" ? "is-invalid" : ""); ?>" id="khusus" value="<?php echo $khusus; ?>">
                <span class="warning"><?php echo $error_khusus; ?></span>
              </td>
              <td>
                <span><b>01)</b> Tidak <b>02)</b> Netra <b>03)</b> Rungu <b>04)</b> Grahita Ringan <b>05)</b> Grahita Sedang <b>06)</b> Daksa Ringan <b>07)</b> Daksa Sedang <b>08)</b> Laras <b>09)</b> Wicara <b>10)</b> Tuna Ganda <b>11)</b> Hiper Aktif <b>12)</b> Cerdas Istimewa <b>13)</b> Bakat Istimewa <b>14)</b> Kesulitan Belajar <b>15)</b> Narkoba <b>16)</b> Indigo <b>17)</b> Down Sindrome <b>18)</b> Autis <b>19)</b> Lainnya</span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>19</label>
              </th>
              <th scope="row">
                <label>Alamat Jalan</label>
              </th>
              <td colspan="2">
                <input type="text" name="alamat" class="form-control <?php echo ($error_alamat != "" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>">
                <span class="warning"><?php echo $error_alamat; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>20</label>
              </th>
              <th scope="row">
                <label>RT</label>
              </th>
              <td colspan="2">
                <input type="number" name="rt" class="form-control <?php echo ($error_rt != "" ? "is-invalid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>">
                <span class="warning"><?php echo $error_rt; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>21</label>
              </th>
              <th scope="row">
                <label>RW</label>
              </th>
              <td colspan="2">
                <input type="number" name="rw" class="form-control <?php echo ($error_rw != "" ? "is-invalid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>">
                <span class="warning"><?php echo $error_rw; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>22</label>
              </th>
              <th scope="row">
                <label>Dusun</label>
              </th>
              <td colspan="2">
                <input type="text" name="dusun" class="form-control <?php echo ($error_dusun != "" ? "is-invalid" : ""); ?>" id="dusun" placeholder="Dusun" value="<?php echo $dusun; ?>">
                <span class="warning"><?php echo $error_dusun; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>23</label>
              </th>
              <th scope="row">
                <label>Desa</label>
              </th>
              <td colspan="2">
                <input type="text" name="desa" class="form-control <?php echo ($error_desa != "" ? "is-invalid" : ""); ?>" id="desa" placeholder="Desa" value="<?php echo $desa; ?>">
                <span class="warning"><?php echo $error_desa; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>24</label>
              </th>
              <th scope="row">
                <label>Kecamatan</label>
              </th>
              <td colspan="2">
                <input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan != "" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>">
                <span class="warning"><?php echo $error_kecamatan; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>25</label>
              </th>
              <th scope="row">
                <label>Kode Pos</label>
              </th>
              <td colspan="2">
                <input type="number" name="kodepos" class="form-control <?php echo ($error_kodepos != "" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="Kode Pos" value="<?php echo $kodepos; ?>">
                <span class="warning"><?php echo $error_kodepos; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>26</label>
              </th>
              <th scope="row">
                <label>Tempat Tinggal</label>
              </th>
              <td>
                <input type="number" max="06" min="01" name="tempat_tinggal" class="form-control <?php echo ($error_tempat_tinggal != "" ? "is-invalid" : ""); ?>" id="tempat_tinggal" value="<?php echo $tempat_tinggal; ?>">
                <span class="warning"><?php echo $error_tempat_tinggal; ?></span>
              </td>
              <td>
                <span><b>01)</b> Bersama Orang Tua <b>02)</b> Wali <b>03)</b> Kos <b>04)</b> Asrama <b>05)</b> Panti Asuhan <b>06)</b> Lainnya</span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>27</label>
              </th>
              <th scope="row">
                <label>Moda Transportasi</label>
              </th>
              <td>
                <input type="number" max="09" min="01" name="transportasi" class="form-control <?php echo ($error_transportasi != "" ? "is-invalid" : ""); ?>" id="transportasi" value="<?php echo $transportasi; ?>">
                <span class="warning"><?php echo $error_transportasi; ?></span>
              </td>
              <td>
                <span><b>01)</b> Jalan Kaki <b>02)</b> Kendaraan Pribadi <b>03)</b> Kendaraan Umum <b>04)</b> Jemputan Sekolah <b>05)</b> Kereta Api <b>06)</b> Ojek <b>07)</b> Andong/Becak/Dokar <b>08)</b> Perahu <b>09)</b> Lainnya </span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>28</label>
              </th>
              <th scope="row">
                <label>Nomor HP</label>
              </th>
              <td colspan="2">
                <input type="number" name="hp" class="form-control <?php echo ($error_hp != "" ? "is-invalid" : ""); ?>" id="hp" value="<?php echo $hp; ?>">
                <span class="warning"><?php echo $error_hp; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>29</label>
              </th>
              <th scope="row">
                <label>Nomor Telepon</label>
              </th>
              <td colspan="2">
                <input type="number" name="telp" class="form-control <?php echo ($error_telp != "" ? "is-invalid" : ""); ?>" id="telp" value="<?php echo $telp; ?>">
                <span class="warning"><?php echo $error_telp; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>30</label>
              </th>
              <th scope="row">
                <label>Email Pribadi</label>
              </th>
              <td colspan="2">
                <input type="email" name="email" class="form-control <?php echo ($error_email != "" ? "is-invalid" : ""); ?>" id="email" value="<?php echo $email; ?>">
                <span class="warning"><?php echo $error_email; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>31</label>
              </th>
              <th scope="row">
                <label>Penerima KPS/PKH/KIP</label>
              </th>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="bantuan" id="b1" value="1">
                  <label class="form-check-label" for="b1">
                    Ya
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="bantuan" id="b2" value="2">
                  <label class="form-check-label" for="b2">
                    Tidak
                  </label>
                  <span class="warning"><?php echo $error_bantuan; ?></span>
                </div>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>32</label>
              </th>
              <th scope="row">
                <label>No. KPS/PKH/KIP</label>
              </th>
              <td colspan="2">
                <input type="number" name="no_bantuan" class="form-control <?php echo ($error_no_bantuan != "" ? "is-invalid" : ""); ?>" id="no_bantuan" value="<?php echo $no_bantuan; ?>">
                <span class="warning"><?php echo $error_no_bantuan; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>33</label>
              </th>
              <th scope="row">
                <label>Kewarganegaraan</label>
              </th>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="kewarganegaraan" id="k1" value="1">
                  <label class="form-check-label" for="k1">
                    WNI
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="kewarganegaraan" id="k2" value="2">
                  <label class="form-check-label" for="k2">
                    WNA
                  </label>
                  <span class="warning"><?php echo $error_kewarganegaraan; ?></span>
                </div>
              </td>
            </tr>
          </tbody>
          <thead class="bg-primary text-white">
            <tr>
              <th scope="col" colspan="4">Data Ayah Kandung</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <label>34</label>
              </th>
              <th scope="row">
                <label>Nama Lengkap Ayah Kandung</label>
              </th>
              <td colspan="2">
                <input type="text" name="nama_lengkap_ayah_kandung" class="form-control <?php echo ($error_nama_lengkap_ayah_kandung != "" ? "is-invalid" : ""); ?>" id="nama_lengkap_ayah_kandung" placeholder="Nama Lengkap Ayah Kandung" value="<?php echo $nama_lengkap_ayah_kandung; ?>">
                <span class="warning"><?php echo $error_nama_lengkap_ayah_kandung; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>35</label>
              </th>
              <th scope="row">
                <label>Tahun Lahir</label>
              </th>
              <td colspan="2">
                <input type="number" name="tahun_lahir_ayah_kandung" class="form-control <?php echo ($error_tahun_lahir_ayah_kandung != "" ? "is-invalid" : ""); ?>" id="tahun_lahir_ayah_kandung" placeholder="Tahun Lahir" value="<?php echo $tahun_lahir_ayah_kandung; ?>">
                <span class="warning"><?php echo $error_tahun_lahir_ayah_kandung; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>36</label>
              </th>
              <th scope="row">
                <label>Pendidikan</label>
              </th>
              <td>
                <input type="number" max="11" min="01" name="pendidikan_ayah_kandung" class="form-control <?php echo ($error_pendidikan_ayah_kandung != "" ? "is-invalid" : ""); ?>" id="pendidikan_ayah_kandung" value="<?php echo $pendidikan_ayah_kandung; ?>">
                <span class="warning"><?php echo $error_pendidikan_ayah_kandung; ?></span>
              </td>
              <td>
                <span><b>01)</b> Tidak Sekolah <b>02)</b> Putus <b>03)</b> SD Sederajat<b>04)</b> SMP Sederajat <b>05)</b> SMA Sederajat <b>06)</b> D1 <b>07)</b> D2 <b>08)</b> D3 <b>09)</b> D4/S1 <b>10)</b> S2 <b>11)</b> S3 </span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>37</label>
              </th>
              <th scope="row">
                <label>Pekerjaan</label>
              </th>
              <td>
                <input type="number" max="09" min="01" name="pekerjaan_ayah_kandung" class="form-control <?php echo ($error_pekerjaan_ayah_kandung != "" ? "is-invalid" : ""); ?>" id="pekerjaan_ayah_kandung" value="<?php echo $pekerjaan_ayah_kandung; ?>">
                <span class="warning"><?php echo $error_pekerjaan_ayah_kandung; ?></span>
              </td>
              <td>
                <span><b>01)</b> Tidak Bekerja <b>02)</b> Nelayan <b>03)</b> Petani <b>04)</b> Peternak <b>05)</b> PNS/TNI/POLRI <b>06)</b> Karyawan Swasta <b>07)</b> Pedagang Kecil <b>08)</b> Pedagang Besar <b>09)</b> Wiraswasta <b>10)</b> Wirausaha <b>11)</b> Buruh <b>12)</b> Pensiunan <b>13)</b> Lainnya </span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>38</label>
              </th>
              <th scope="row">
                <label>Penghasilan</label>
              </th>
              <td>
                <input type="number" max="06" min="01" name="penghasilan_ayah_kandung" class="form-control <?php echo ($error_penghasilan_ayah_kandung != "" ? "is-invalid" : ""); ?>" id="penghasilan_ayah_kandung" value="<?php echo $penghasilan_ayah_kandung; ?>">
                <span class="warning"><?php echo $error_penghasilan_ayah_kandung; ?></span>
              </td>
              <td>
                <span><b>01)</b> Kurang dari 500.000 <b>02)</b> 500,000 - 999.999 <b>03)</b> 1.000.000 - 1.999.999 <b>04)</b> 2.000.000 - 4.999.999 <b>05)</b> 5.000.000 - 20.000.000 <b>06)</b> Lebih dari 20.000.000 </span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>37</label>
              </th>
              <th scope="row">
                <label>Berkebutuhan Khusus</label>
              </th>
              <td>
                <input type="number" max="19" min="01" name="khusus_ayah_kandung" class="form-control <?php echo ($error_khusus_ayah_kandung != "" ? "is-invalid" : ""); ?>" id="khusus_ayah_kandung" value="<?php echo $khusus_ayah_kandung; ?>">
                <span class="warning"><?php echo $error_khusus_ayah_kandung; ?></span>
              </td>
              <td>
                <span><b>01)</b> Tidak <b>02)</b> Netra <b>03)</b> Rungu <b>04)</b> Grahita Ringan <b>05)</b> Grahita Sedang <b>06)</b> Daksa Ringan <b>07)</b> Daksa Sedang <b>08)</b> Laras <b>09)</b> Wicara <b>10)</b> Tuna Ganda <b>11)</b> Hiper Aktif <b>12)</b> Cerdas Istimewa <b>13)</b> Bakat Istimewa <b>14)</b> Kesulitan Belajar <b>15)</b> Narkoba <b>16)</b> Indigo <b>17)</b> Down Sindrome <b>18)</b> Autis <b>19)</b> Lainnya</span>
              </td>
            </tr>
          </tbody>
          <thead class="bg-primary text-white">
            <tr>
              <th scope="col" colspan="4">Data Ibu Kandung</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <label>34</label>
              </th>
              <th scope="row">
                <label>Nama Lengkap Ibu Kandung</label>
              </th>
              <td colspan="2">
                <input type="text" name="nama_lengkap_ibu_kandung" class="form-control <?php echo ($error_nama_lengkap_ibu_kandung != "" ? "is-invalid" : ""); ?>" id="nama_lengkap_ibu_kandung" placeholder="Nama Lengkap ibu Kandung" value="<?php echo $nama_lengkap_ibu_kandung; ?>">
                <span class="warning"><?php echo $error_nama_lengkap_ibu_kandung; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>35</label>
              </th>
              <th scope="row">
                <label>Tahun Lahir</label>
              </th>
              <td colspan="2">
                <input type="number" name="tahun_lahir_ibu_kandung" class="form-control <?php echo ($error_tahun_lahir_ibu_kandung != "" ? "is-invalid" : ""); ?>" id="tahun_lahir_ibu_kandung" placeholder="Tahun Lahir" value="<?php echo $tahun_lahir_ibu_kandung; ?>">
                <span class="warning"><?php echo $error_tahun_lahir_ibu_kandung; ?></span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>36</label>
              </th>
              <th scope="row">
                <label>Pendidikan</label>
              </th>
              <td>
                <input type="number" max="11" min="01" name="pendidikan_ibu_kandung" class="form-control <?php echo ($error_pendidikan_ibu_kandung != "" ? "is-invalid" : ""); ?>" id="pendidikan_ibu_kandung" value="<?php echo $pendidikan_ibu_kandung; ?>">
                <span class="warning"><?php echo $error_pendidikan_ibu_kandung; ?></span>
              </td>
              <td>
                <span><b>01)</b> Tidak Sekolah <b>02)</b> Putus <b>03)</b> SD Sederajat<b>04)</b> SMP Sederajat <b>05)</b> SMA Sederajat <b>06)</b> D1 <b>07)</b> D2 <b>08)</b> D3 <b>09)</b> D4/S1 <b>10)</b> S2 <b>11)</b> S3 </span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>37</label>
              </th>
              <th scope="row">
                <label>Pekerjaan</label>
              </th>
              <td>
                <input type="number" max="09" min="01" name="pekerjaan_ibu_kandung" class="form-control <?php echo ($error_pekerjaan_ibu_kandung != "" ? "is-invalid" : ""); ?>" id="pekerjaan_ibu_kandung" value="<?php echo $pekerjaan_ibu_kandung; ?>">
                <span class="warning"><?php echo $error_pekerjaan_ibu_kandung; ?></span>
              </td>
              <td>
                <span><b>01)</b> Tidak Bekerja <b>02)</b> Nelayan <b>03)</b> Petani <b>04)</b> Peternak <b>05)</b> PNS/TNI/POLRI <b>06)</b> Karyawan Swasta <b>07)</b> Pedagang Kecil <b>08)</b> Pedagang Besar <b>09)</b> Wiraswasta <b>10)</b> Wirausaha <b>11)</b> Buruh <b>12)</b> Pensiunan <b>13)</b> Lainnya </span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>38</label>
              </th>
              <th scope="row">
                <label>Penghasilan</label>
              </th>
              <td>
                <input type="number" max="06" min="01" name="penghasilan_ibu_kandung" class="form-control <?php echo ($error_penghasilan_ibu_kandung != "" ? "is-invalid" : ""); ?>" id="penghasilan_ibu_kandung" value="<?php echo $penghasilan_ibu_kandung; ?>">
                <span class="warning"><?php echo $error_penghasilan_ibu_kandung; ?></span>
              </td>
              <td>
                <span><b>01)</b> Kurang dari 500.000 <b>02)</b> 500,000 - 999.999 <b>03)</b> 1.000.000 - 1.999.999 <b>04)</b> 2.000.000 - 4.999.999 <b>05)</b> 5.000.000 - 20.000.000 <b>06)</b> Lebih dari 20.000.000 </span>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th scope="row">
                <label>37</label>
              </th>
              <th scope="row">
                <label>Berkebutuhan Khusus</label>
              </th>
              <td>
                <input type="number" max="19" min="01" name="khusus_ibu_kandung" class="form-control <?php echo ($error_khusus_ibu_kandung != "" ? "is-invalid" : ""); ?>" id="khusus_ibu_kandung" value="<?php echo $khusus_ibu_kandung; ?>">
                <span class="warning"><?php echo $error_khusus_ibu_kandung; ?></span>
              </td>
              <td>
                <span><b>01)</b> Tidak <b>02)</b> Netra <b>03)</b> Rungu <b>04)</b> Grahita Ringan <b>05)</b> Grahita Sedang <b>06)</b> Daksa Ringan <b>07)</b> Daksa Sedang <b>08)</b> Laras <b>09)</b> Wicara <b>10)</b> Tuna Ganda <b>11)</b> Hiper Aktif <b>12)</b> Cerdas Istimewa <b>13)</b> Bakat Istimewa <b>14)</b> Kesulitan Belajar <b>15)</b> Narkoba <b>16)</b> Indigo <b>17)</b> Down Sindrome <b>18)</b> Autis <b>19)</b> Lainnya</span>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- Registrasi Peserta Didik End -->
      </div>
    </div>
    <div class="container col border-top">
      <div class="form-group row mt-5">
        <div class="col-2 ml-auto mr-auto">
          <form method="get" action="login.php">
            <button type="submit" class="btn btn-success col"> Submit</button>
          </form>
        </div>
      </div>
    </div>
  </form>
</body>

</htransportasi