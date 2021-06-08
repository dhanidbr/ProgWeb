<?php

include "data.php";
include "koneksi.php";

mysqli_connect($servername, $username, $password) or die(mysqli_error($koneksi));
mysqli_select_db($koneksi, $dbname) or die(mysqli_error($koneksi));


$sql = "insert siswa set jenis_pendaftaran='$jenis_pendaftaran',tanggal_masuk_sekolah='$tanggal_masuk_sekolah',nis='$nis',nisn='$nisn',nomor_ujian='$nomor_ujian',paud='$paud',tk='$tk',skhun='$skhun',ijazah='$ijazah',hobi='$hobi',cita='$cita',nama_lengkap='$nama_lengkap',kelamin='$kelamin',nik='$nik',agama='$agama',khusus='$khusus',alamat='$alamat',rt='$rt',rw='$rw',dusun='$dusun',desa='$desa',kecamatan='$kecamatan',tempat_tinggal='$tempat_tinggal',transportasi='$transportasi',hp='$hp',telp='$telp',email='$email',bantuan='$bantuan',no_bantuan='$no_bantuan',nama_lengkap_ayah_kandung='$nama_lengkap_ayah_kandung',tahun_lahir_ayah_kandung='$tahun_lahir_ayah_kandung',pendidikan_ayah_kandung='$pendidikan_ayah_kandung',pekerjaan_ayah_kandung='$pekerjaan_ayah_kandung',penghasilan_ayah_kandung='$penghasilan_ayah_kandung',khusus_ayah_kandung='$khusus_ayah_kandung',nama_lengkap_ibu_kandung='$nama_lengkap_ibu_kandung',tahun_lahir_ibu_kandung='$tahun_lahir_ibu_kandung',pendidikan_ibu_kandung='$pendidikan_ibu_kandung',pekerjaan_ibu_kandung='$pekerjaan_ibu_kandung',penghasilan_ibu_kandung='$penghasilan_ibu_kandung',khusus_ibu_kandung='$khusus_ibu_kandung',kewarganegaraan='$kewarganegaraan',kodepos='$kodepos',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir'";
mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
