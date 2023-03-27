class Mahasiswa {
  constructor() {
    this.nim = "";
    this.name = "";
    this.year = "";
    this.major = "";
    this.contract = "";
    this.semester = "";
  }

  checkInput() {
    let validate_string = /^[a-zA-Z]+$/;
    let validate_number = /^[0-9]+$/;

    this.nim = document.getElementById("nim").value;
    this.name = document.getElementById("name").value;
    this.year = document.getElementById("year").value;
    this.major = document.getElementById("major").value;
    this.contract = this.checkContract();
    this.semester = this.calculateSemester();

    if (this.nim.match(validate_string) || this.nim == "") {
      alert("NIM harus berupa angka dan wajib diisi");
    } else if (this.name.match(validate_number) || this.name == "") {
      alert("Nama harus berupa huruf dan wajib diisi");
    } else if (this.year.match(validate_string) || this.year == "") {
      alert("Tahun masuk harus berupa angka dan wajib diisi");
    } else if (this.major.match(validate_number) || this.major == "") {
      alert("Jurusan harus berupa huruf dan wajib diisi");
    }
    // else if (this.contract == "") {
    //   alert("Kontrak harus dipilih");
    // }
    else {
      console.log(this);
      this.printData();
    }
  }

  calculateSemester() {
    let currentYear = new Date().getFullYear();
    let semester = (currentYear - parseInt(this.year)) * 2;

    return semester;
  }

  checkContract() {
    let contract;

    if (document.getElementById("bd").checked) {
      contract = "<td>Basis Data - 3 SKS </td>";
    } else {
      contract = "";
    }

    if (document.getElementById("pweb").checked) {
      contract = contract + "<td>Programmer Web - 3 SKS </td>";
    } else {
      contract = contract;
    }

    if (document.getElementById("dm").checked) {
      contract = contract + "<td>Data Mining - 3 SKS </td>";
    } else {
      contract = contract;
    }

    return contract;
  }

  printData() {
    const self = this;
    const popupWindow = window.open(
      "kontrak.html",
      "Popup",
      "width=500, height=500, menubar=yes"
    );
    popupWindow.addEventListener("load", function () {
      popupWindow.postMessage(
        {
          nim: self.nim,
          name: self.name,
          major: self.major,
          semester: self.semester,
          contract: self.contract,
        },
        "*"
      );
    });
  }
}

const mahasiswa = new Mahasiswa();
