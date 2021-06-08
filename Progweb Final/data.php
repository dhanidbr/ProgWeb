 <?php

  //  Error Handling
  $error_jenis_pendaftaran = "";
  $error_tanggal_masuk_sekolah = "";
  $error_nisn = "";
  $error_nis = "";
  $error_nomor_ujian = "";
  $error_paud = "";
  $error_tk = "";
  $error_skhun = "";
  $error_ijazah = "";
  $error_hobi = "";
  $error_cita = "";
  $error_nama_lengkap = "";
  $error_kelamin = "";
  $error_nik = "";
  $error_agama = "";
  $error_khusus = "";
  $error_alamat = "";
  $error_rt = "";
  $error_rw = "";
  $error_dusun = "";
  $error_desa = "";
  $error_kecamatan = "";
  $error_tempat_tinggal = "";
  $error_transportasi = "";
  $error_hp = "";
  $error_telp = "";
  $error_email = "";
  $error_bantuan = "";
  $error_no_bantuan = "";
  $error_nama_lengkap_ayah_kandung = "";
  $error_tahun_lahir_ayah_kandung = "";
  $error_pendidikan_ayah_kandung = "";
  $error_pekerjaan_ayah_kandung = "";
  $error_penghasilan_ayah_kandung = "";
  $error_khusus_ayah_kandung = "";
  $error_nama_lengkap_ibu_kandung = "";
  $error_tahun_lahir_ibu_kandung = "";
  $error_pendidikan_ibu_kandung = "";
  $error_pekerjaan_ibu_kandung = "";
  $error_penghasilan_ibu_kandung = "";
  $error_khusus_ibu_kandung = "";
  $error_tempat_lahir = "";
  $error_tanggal_lahir = "";
  $error_kewarganegaraan = "";
  $error_kodepos = "";

  // Variable
  $jenis_pendaftaran = "";
  $tanggal_masuk_sekolah = "";
  $nis = "";
  $nisn = "";
  $nomor_ujian = "";
  $paud = "";
  $tk = "";
  $skhun = "";
  $ijazah = "";
  $hobi = "";
  $cita = "";
  $nama_lengkap = "";
  $kelamin = "";
  $nik = "";
  $agama = "";
  $khusus = "";
  $alamat = "";
  $rt = "";
  $rw = "";
  $dusun = "";
  $desa = "";
  $kecamatan = "";
  $tempat_tinggal = "";
  $transportasi = "";
  $hp = "";
  $telp = "";
  $email = "";
  $bantuan = "";
  $no_bantuan = "";
  $nama_lengkap_ayah_kandung = "";
  $tahun_lahir_ayah_kandung = "";
  $pendidikan_ayah_kandung = "";
  $pekerjaan_ayah_kandung = "";
  $penghasilan_ayah_kandung = "";
  $khusus_ayah_kandung = "";
  $nama_lengkap_ibu_kandung = "";
  $tahun_lahir_ibu_kandung = "";
  $pendidikan_ibu_kandung = "";
  $pekerjaan_ibu_kandung = "";
  $penghasilan_ibu_kandung = "";
  $khusus_ibu_kandung = "";
  $kewarganegaraan = "";
  $kodepos = "";
  $tempat_lahir = "";
  $tanggal_lahir = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["jenis_pendaftaran"])) {
      $error_jenis_pendaftaran = "Input pendaftaran terjadi kesalahan, mohon cek kembali";
    } else {
      $jenis_pendaftaran = cek_input($_POST["jenis_pendaftaran"]);
    }
    if (empty($_POST["tanggal_masuk_sekolah"])) {
      $error_tanggal_masuk_sekolah = "Input tanggal_masuk_sekolah terjadi kesalahan, mohon cek kembali";
    } else {
      $tanggal_masuk_sekolah = cek_input($_POST["tanggal_masuk_sekolah"]);
    }
    if (empty($_POST["nis"])) {
      $error_nis = "Input nis terjadi kesalahan, mohon cek kembali";
    } else {
      $nis = cek_input($_POST["nis"]);
    }
    if (empty($_POST["nisn"])) {
      $error_nisn = "Input nisn terjadi kesalahan, mohon cek kembali";
    } else {
      $nisn = cek_input($_POST["nisn"]);
    }
    if (empty($_POST["nomor_ujian"])) {
      $error_nomor_ujian = "Input nomor_ujian terjadi kesalahan, mohon cek kembali";
    } else {
      $nomor_ujian = cek_input($_POST["nomor_ujian"]);
    }
    if (empty($_POST["paud"])) {
      $error_paud = "Input paud terjadi kesalahan, mohon cek kembali";
    } else {
      $paud = cek_input($_POST["paud"]);
    }
    if (empty($_POST["tk"])) {
      $error_tk = "Input tk terjadi kesalahan, mohon cek kembali";
    } else {
      $tk = cek_input($_POST["tk"]);
    }
    if (empty($_POST["skhun"])) {
      $error_skhun = "Input skhun terjadi kesalahan, mohon cek kembali";
    } else {
      $skhun = cek_input($_POST["skhun"]);
    }
    if (empty($_POST["ijazah"])) {
      $error_ijazah = "Input ijazah terjadi kesalahan, mohon cek kembali";
    } else {
      $ijazah = cek_input($_POST["ijazah"]);
    }
    if (empty($_POST["hobi"])) {
      $error_hobi = "Input hobi terjadi kesalahan, mohon cek kembali";
    } else {
      $hobi = cek_input($_POST["hobi"]);
    }
    if (empty($_POST["cita"])) {
      $error_cita = "Input cita terjadi kesalahan, mohon cek kembali";
    } else {
      $cita = cek_input($_POST["cita"]);
    }
    if (empty($_POST["nama_lengkap"])) {
      $error_nama_lengkap = "Input nama_lengkap terjadi kesalahan, mohon cek kembali";
    } else {
      $nama_lengkap = cek_input($_POST["nama_lengkap"]);
    }
    if (empty($_POST["kelamin"])) {
      $error_kelamin = "Input kelamin terjadi kesalahan, mohon cek kembali";
    } else {
      $kelamin = cek_input($_POST["kelamin"]);
    }
    if (empty($_POST["nik"])) {
      $error_nik = "Input nik terjadi kesalahan, mohon cek kembali";
    } else {
      $nik = cek_input($_POST["nik"]);
    }
    if (empty($_POST["agama"])) {
      $error_agama = "Input agama terjadi kesalahan, mohon cek kembali";
    } else {
      $agama = cek_input($_POST["agama"]);
    }
    if (empty($_POST["khusus"])) {
      $error_khusus = "Input khusus terjadi kesalahan, mohon cek kembali";
    } else {
      $khusus = cek_input($_POST["khusus"]);
    }
    if (empty($_POST["alamat"])) {
      $error_alamat = "Input alamat terjadi kesalahan, mohon cek kembali";
    } else {
      $alamat = cek_input($_POST["alamat"]);
    }
    if (empty($_POST["rt"])) {
      $error_rt = "Input rt terjadi kesalahan, mohon cek kembali";
    } else {
      $rt = cek_input($_POST["rt"]);
    }
    if (empty($_POST["rw"])) {
      $error_rw = "Input rw terjadi kesalahan, mohon cek kembali";
    } else {
      $rw = cek_input($_POST["rw"]);
    }
    if (empty($_POST["dusun"])) {
      $error_dusun = "Input dusun terjadi kesalahan, mohon cek kembali";
    } else {
      $dusun = cek_input($_POST["dusun"]);
    }
    if (empty($_POST["desa"])) {
      $error_desa = "Input desa terjadi kesalahan, mohon cek kembali";
    } else {
      $desa = cek_input($_POST["desa"]);
    }
    if (empty($_POST["kecamatan"])) {
      $error_kecamatan = "Input kecamatan terjadi kesalahan, mohon cek kembali";
    } else {
      $kecamatan = cek_input($_POST["kecamatan"]);
    }
    if (empty($_POST["tempat_tinggal"])) {
      $error_tempat_tinggal = "Input tempat_tinggal terjadi kesalahan, mohon cek kembali";
    } else {
      $tempat_tinggal = cek_input($_POST["tempat_tinggal"]);
    }
    if (empty($_POST["transportasi"])) {
      $error_transportasi = "Input transportasi terjadi kesalahan, mohon cek kembali";
    } else {
      $transportasi = cek_input($_POST["transportasi"]);
    }
    if (empty($_POST["hp"])) {
      $error_hp = "Input hp terjadi kesalahan, mohon cek kembali";
    } else {
      $hp = cek_input($_POST["hp"]);
    }
    if (empty($_POST["telp"])) {
      $error_telp = "Input telp terjadi kesalahan, mohon cek kembali";
    } else {
      $telp = cek_input($_POST["telp"]);
    }
    if (empty($_POST["email"])) {
      $error_email = "Input email terjadi kesalahan, mohon cek kembali";
    } else {
      $email = cek_input($_POST["email"]);
    }
    if (empty($_POST["bantuan"])) {
      $error_bantuan = "Input bantuan terjadi kesalahan, mohon cek kembali";
    } else {
      $bantuan = cek_input($_POST["bantuan"]);
    }
    if (empty($_POST["no_bantuan"])) {
      $error_no_bantuan = "Input no_bantuan terjadi kesalahan, mohon cek kembali";
    } else {
      $no_bantuan = cek_input($_POST["no_bantuan"]);
    }
    if (empty($_POST["nama_lengkap_ayah_kandung"])) {
      $error_nama_lengkap_ayah_kandung = "Input nama_lengkap_ayah_kandung terjadi kesalahan, mohon cek kembali";
    } else {
      $nama_lengkap_ayah_kandung = cek_input($_POST["nama_lengkap_ayah_kandung"]);
    }
    if (empty($_POST["tahun_lahir_ayah_kandung"])) {
      $error_tahun_lahir_ayah_kandung = "Input tahun_lahir_ayah_kandung terjadi kesalahan, mohon cek kembali";
    } else {
      $tahun_lahir_ayah_kandung = cek_input($_POST["tahun_lahir_ayah_kandung"]);
    }
    if (empty($_POST["pendidikan_ayah_kandung"])) {
      $error_pendidikan_ayah_kandung = "Input pendidikan_ayah_kandung terjadi kesalahan, mohon cek kembali";
    } else {
      $pendidikan_ayah_kandung = cek_input($_POST["pendidikan_ayah_kandung"]);
    }
    if (empty($_POST["pekerjaan_ayah_kandung"])) {
      $error_pekerjaan_ayah_kandung = "Input pekerjaan_ayah_kandung terjadi kesalahan, mohon cek kembali";
    } else {
      $pekerjaan_ayah_kandung = cek_input($_POST["pekerjaan_ayah_kandung"]);
    }
    if (empty($_POST["penghasilan_ayah_kandung"])) {
      $error_penghasilan_ayah_kandung = "Input penghasilan_ayah_kandung terjadi kesalahan, mohon cek kembali";
    } else {
      $penghasilan_ayah_kandung = cek_input($_POST["penghasilan_ayah_kandung"]);
    }
    if (empty($_POST["khusus_ayah_kandung"])) {
      $error_khusus_ayah_kandung = "Input khusus_ayah_kandung terjadi kesalahan, mohon cek kembali";
    } else {
      $khusus_ayah_kandung = cek_input($_POST["khusus_ayah_kandung"]);
    }
    if (empty($_POST["nama_lengkap_ibu_kandung"])) {
      $error_nama_lengkap_ibu_kandung = "Input nama_lengkap_ibu_kandung terjadi kesalahan, mohon cek kembali";
    } else {
      $nama_lengkap_ibu_kandung = cek_input($_POST["nama_lengkap_ibu_kandung"]);
    }
    if (empty($_POST["tahun_lahir_ibu_kandung"])) {
      $error_tahun_lahir_ibu_kandung = "Input tahun_lahir_ibu_kandung terjadi kesalahan, mohon cek kembali";
    } else {
      $tahun_lahir_ibu_kandung = cek_input($_POST["tahun_lahir_ibu_kandung"]);
    }
    if (empty($_POST["pendidikan_ibu_kandung"])) {
      $error_pendidikan_ibu_kandung = "Input pendidikan_ibu_kandung terjadi kesalahan, mohon cek kembali";
    } else {
      $pendidikan_ibu_kandung = cek_input($_POST["pendidikan_ibu_kandung"]);
    }
    if (empty($_POST["pekerjaan_ibu_kandung"])) {
      $error_pekerjaan_ibu_kandung = "Input pekerjaan_ibu_kandung terjadi kesalahan, mohon cek kembali";
    } else {
      $pekerjaan_ibu_kandung = cek_input($_POST["pekerjaan_ibu_kandung"]);
    }
    if (empty($_POST["penghasilan_ibu_kandung"])) {
      $error_penghasilan_ibu_kandung = "Input penghasilan_ibu_kandung terjadi kesalahan, mohon cek kembali";
    } else {
      $penghasilan_ibu_kandung = cek_input($_POST["penghasilan_ibu_kandung"]);
    }
    if (empty($_POST["khusus_ibu_kandung"])) {
      $error_khusus_ibu_kandung = "Input khusus_ibu_kandung terjadi kesalahan, mohon cek kembali";
    } else {
      $khusus_ibu_kandung = cek_input($_POST["khusus_ibu_kandung"]);
    }
    if (empty($_POST["kewarganegaraan"])) {
      $error_kewarganegaraan = "Input kewarganegaraan terjadi kesalahan, mohon cek kembali";
    } else {
      $kewarganegaraan = cek_input($_POST["kewarganegaraan"]);
    }
    if (empty($_POST["kodepos"])) {
      $error_kodepos = "Input kodepos terjadi kesalahan, mohon cek kembali";
    } else {
      $kodepos = cek_input($_POST["kodepos"]);
    }
    if (empty($_POST["tempat_lahir"])) {
      $error_tempat_lahir = "Input tempat_lahir terjadi kesalahan, mohon cek kembali";
    } else {
      $tempat_lahir = cek_input($_POST["tempat_lahir"]);
    }
    if (empty($_POST["tanggal_lahir"])) {
      $error_tanggal_lahir = "Input tanggal_lahir terjadi kesalahan, mohon cek kembali";
    } else {
      $tanggal_lahir = cek_input($_POST["tanggal_lahir"]);
    }
  }

  function cek_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>