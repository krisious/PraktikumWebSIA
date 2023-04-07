function calculateIndex() {
  let quiz = document.getElementById("quiz").value;
  let tugas = document.getElementById("tugas").value;
  let uts = document.getElementById("uts").value;
  let uas = document.getElementById("uas").value;
  console.log(quiz, tugas, uts, uas);

  let final = (quiz * 0.1 + tugas * 0.2 + uts * 0.3 + uas * 0.4).toFixed(2);
  console.log(final);

  if (quiz == "" || tugas == "" || uts == "" || uas == "") {
    alert("Inputan tidak boleh kosong!!");
  } else {
    if (final >= 85 && final <= 100) {
      document.getElementById("indeks").value = "A";
      document.getElementById("info").value = "Lulus Dengan Sangat Baik";
    } else if (final >= 70 && final <= 84) {
      document.getElementById("indeks").value = "B";
      document.getElementById("info").value = "Lulus Dengan Baik";
    } else if (final >= 55 && final <= 69) {
      document.getElementById("indeks").value = "C";
      document.getElementById("info").value = "Lulus Dengan Cukup";
    } else if (final >= 40 && final <= 54) {
      document.getElementById("indeks").value = "D";
      document.getElementById("info").value = "Tidak Lulus";
    } else if (final >= 0 && final <= 39) {
      document.getElementById("indeks").value = "E";
      document.getElementById("info").value = "Tidak Lulus";
    } else {
      alert("Inputan harus berupa angka 0-100!!");
      return false;
    }
  }
}

function resetForm() {
  document.getElementById("quiz").value = "";
  document.getElementById("tugas").value = "";
  document.getElementById("uts").value = "";
  document.getElementById("uas").value = "";
  document.getElementById("indeks").value = "";
  document.getElementById("info").value = "";
}
