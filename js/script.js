fetch('ambil_data.php')
.then(response => response.json())
.then(data => {
  // Cek apakah data berhasil diambil
  if (data && data[0]?.username) {
    document.getElementById('name').value = data[0].username;
  } else {
    console.log('Data tidak ditemukan');
  }
})
.catch(error => console.error('Error:', error));