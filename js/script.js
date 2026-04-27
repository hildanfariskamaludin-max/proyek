document.addEventListener("DOMContentLoaded", function () {

  const form = document.querySelector("form");
  const nama = document.querySelector("input[name='nama_project']");
  const desk = document.querySelector("textarea[name='deskripsi']");

  // VALIDASI FORM
  form.addEventListener("submit", function (e) {
    if (nama.value.trim() === "" || desk.value.trim() === "") {
      alert("Semua field harus diisi!");
      e.preventDefault();
    } else {
      const konfirmasi = confirm("Yakin mau tambah project?");
      if (!konfirmasi) {
        e.preventDefault();
      }
    }
  });

  // NOTIFIKASI SUKSES (dari PHP)
  const success = document.getElementById("success");
  if (success) {
    alert("Project berhasil ditambahkan!");
  }

  // ANIMASI MUNCUL
  const cards = document.querySelectorAll("div");
  cards.forEach((card, index) => {
    card.style.opacity = 0;
    setTimeout(() => {
      card.style.transition = "0.5s";
      card.style.opacity = 1;
    }, index * 200);
  });

});