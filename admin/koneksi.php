<?php 
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "petsqu");

function query ($query){
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;

	}
	return $rows;
}

//function deleteproduk
function deleteproduk ($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM produk WHERE id= $id");
	return mysqli_affected_rows($koneksi);
}

//function upload img
function upload($lokasi)
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar
  if ($error === 4) {
    echo "<script>
    alert('Pilih gambar terlebih dahulu');
    </script>";
    return false;
  }

  // cek yang diupload gambar atau bukan
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
    alert('Yang diupload bukan gambar');
    </script>";
    return false;
  }

  // cek jika ukuran terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
    alert('Ukuran gambar terlalu besar');
    </script>";
    return false;
  }

  // NamaBaru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  // lolos siap upload
  move_uploaded_file($tmpName, $lokasi . $namaFileBaru);
  return $namaFileBaru;
}

//function tambahproduk
function tambahproduk($data)
{
	global $koneksi;
	$nama_produk = htmlspecialchars($data["nama_produk"]);
	$lokasiGambar = "../img/";
	$gambar = upload($lokasiGambar);
	if (!$gambar) {
		return false;
	}
	$harga_produk = htmlspecialchars($data["harga_produk"]);
	$deskripsi_produk = htmlspecialchars($data["deskripsi_produk"]);

	$insert = "INSERT INTO produk 
	VALUES (
	'',
	'$nama_produk',
	'$gambar',
	'$harga_produk',
	'$deskripsi_produk'
	)";
	mysqli_query($koneksi, $insert);

	return mysqli_affected_rows($koneksi);
}

?>