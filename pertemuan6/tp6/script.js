class Mahasiswa {
  constructor() {
    this.nim = "";
    this.name = "";
    this.gender = "";
    this.entry_year = "";
    this.semester = "";
  }

  checkInput() {
    let validate_string = /^[a-zA-Z]+$/;
    let validate_number = /^[0-9]+$/;

    this.nim = document.getElementById("nim").value;
    this.name = document.getElementById("name").value;
    this.gender = this.checkGender();
    this.entry_year = document.getElementById("entry_year").value;
    this.semester = this.calculateSemester();

    console.log(this);

    if (this.nim.match(validate_string) || this.nim == "") {
      alert("NIM harus berupa angka dan wajib diisi");
    } else if (this.name.match(validate_number) || this.name == "") {
      alert("Nama harus berupa huruf dan wajib diisi");
    } else if (this.gender == null) {
      alert("Jenis kelamin harus dipilih");
    } else if (
      this.entry_year.match(validate_string) ||
      this.entry_year == ""
    ) {
      alert("Tahun masuk harus berupa angka dan wajib diisi");
    } else {
      this.printData();
    }
  }

  checkGender() {
    if (document.getElementById("pria").checked) {
      return "Pria";
    } else if (document.getElementById("perempuan").checked) {
      return "Perempuan";
    }
  }

  calculateSemester() {
    this.entry_year = document.getElementById("entry_year").value;

    let currentYear = new Date().getFullYear();
    let currentMonth = new Date().getMonth() + 1;

    this.semester = (currentYear - parseInt(this.entry_year)) * 2;

    if (currentMonth >= 2 && currentMonth <= 7) {
      this.semester--;
    }

    return this.semester;
  }

  printData() {
    this.nim = document.getElementById("nim").value;
    this.name = document.getElementById("name").value;
    this.gender = this.checkGender();
    this.entry_year = document.getElementById("entry_year").value;

    window.open("print.html", "_blank", "width=500, height=500, menubar=yes");
    document.getElementById("print_nim").innerHTML = this.nim;
    document.getElementById("print_name").innerHTML = this.name;
    document.getElementById("print_gender").innerHTML = this.gender;
    document.getElementById("print_entry_year").innerHTML = this.entry_year;
    document.getElementById("print_semester").innerHTML =
      this.calculateSemester().toString();
  }
}

const mahasiswa = new Mahasiswa();
