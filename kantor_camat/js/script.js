let dataAntrian = [];
let urutAktif = false;

/* Ambil data dari database */
function ambilAntrian() {
  fetch("api/ambil.php")
    .then((res) => res.json())
    .then((data) => {
      dataAntrian = data;
      tampilkanTabel();
    });
}

/* Tampilkan ke tabel */
function tampilkanTabel() {
  let tabel = document.getElementById("tabelAntrian");
  tabel.innerHTML = "";

  let dataTampil = [...dataAntrian];

  if (urutAktif) {
    dataTampil.sort((a, b) => a.nama.localeCompare(b.nama));
  }

  dataTampil.forEach((item, index) => {
    tabel.innerHTML += `
      <tr>
        <td>${index + 1}</td>
        <td>${item.nama}</td>
        <td>${item.nik}</td>
        <td>${item.layanan}</td>
      </tr>
    `;
  });
}

/* Tombol URUTKAN */
function urutkanNama() {
  urutAktif = !urutAktif;
  tampilkanTabel();
}

/* Tambah antrian */
function tambahAntrian() {
  let nama = document.getElementById("nama").value;
  let nik = document.getElementById("nik").value;
  let layanan = document.getElementById("layananSelect").value;

  if (nama === "" || nik === "") {
    alert("Nama dan NIK wajib diisi!");
    return;
  }

  fetch("api/tambah.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: `nama=${nama}&nik=${nik}&layanan=${layanan}`,
  }).then(() => {
    ambilAntrian();
    document.getElementById("nama").value = "";
    document.getElementById("nik").value = "";
  });
}

/* Panggil antrian (hapus dari database) */
function panggilAntrian() {
  fetch("api/panggil.php")
    .then((res) => res.json())
    .then((data) => {
      if (!data) {
        document.getElementById("antrianDipanggil").innerText =
          "Tidak ada antrian";
        return;
      }

      let teks = `Nomor antrian, atas nama ${data.nama}, silakan menuju loket`;

      document.getElementById("antrianDipanggil").innerText = "🔊 " + teks;

      let suara = new SpeechSynthesisUtterance(teks);
      suara.lang = "id-ID";
      window.speechSynthesis.speak(suara);

      ambilAntrian();
    });
}

/* Load awal */
ambilAntrian();
