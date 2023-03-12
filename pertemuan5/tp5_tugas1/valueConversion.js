function conversion() {
  var nilai = document.getElementById("nilai");

  var validate_angka = /^[0-9]+$/;

  if (nilai.value.match(validate_angka)) {
    if (nilai.value >= 85 && nilai.value <= 100) {
      document.getElementById("predikat").innerHTML = "A";
    } else if (nilai.value >= 70 && nilai.value <= 84) {
      document.getElementById("predikat").innerHTML = "B";
    } else if (nilai.value >= 55 && nilai.value <= 69) {
      document.getElementById("predikat").innerHTML = "C";
    } else if (nilai.value >= 40 && nilai.value <= 54) {
      document.getElementById("predikat").innerHTML = "D";
    } else if (nilai.value >= 0 && nilai.value <= 39) {
      document.getElementById("predikat").innerHTML = "E";
    } else {
      alert("Inputan harus berupa angka 0-100!!");
      return false;
    }
  } else {
    alert("Inputan harus berupa angka!!");
    return false;
  }
}
