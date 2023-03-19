class Mahasiswa {
  constructor() {
    this.nim = "";
    this.name = "";
    this.gender = "";
    this.entry_year = "";
    this.semester = "";
  }

  /* A function that is used to check the input of the user. */
  checkInput() {
    let validate_string = /^[a-zA-Z]+$/;
    let validate_number = /^[0-9]+$/;

    this.nim = document.getElementById("nim").value;
    this.name = document.getElementById("name").value;
    this.gender = this.checkGender();
    this.entry_year = document.getElementById("entry_year").value;
    this.semester = this.calculateSemester();

    console.log(this, "this disini");

    if (this.nim.match(validate_string) || this.nim == "") {
      alert("NIM harus berupa angka dan wajib diisi");
      document.getElementById("nim").value = "";
    } else if (this.name.match(validate_number) || this.name == "") {
      alert("Nama harus berupa huruf dan wajib diisi");
      document.getElementById("name").value = "";
    } else if (this.gender == null) {
      alert("Jenis kelamin harus dipilih");
    } else if (
      this.entry_year.match(validate_string) ||
      this.entry_year == ""
    ) {
      alert("Tahun masuk harus berupa angka dan wajib diisi");
      document.getElementById("entry_year").value = "";
    } else {
      this.printData();
    }
  }

  /**
   * If the radio button with the id of "pria" is checked, return "Pria", otherwise if the radio button
   * with the id of "perempuan" is checked, return "Perempuan".
   * @returns the value of the checked radio button.
   */
  checkGender() {
    if (document.getElementById("pria").checked) {
      return "Pria";
    } else if (document.getElementById("perempuan").checked) {
      return "Perempuan";
    }
  }

  /**
   * It takes the current year and month, subtracts the entry year from the current year, multiplies
   * the result by 2, and then subtracts 1 if the current month is between February and July.
   *
   * The result is the semester number.
   * @returns The semester is being returned.
   */
  calculateSemester() {
    let currentYear = new Date().getFullYear();
    let currentMonth = new Date().getMonth() + 6;

    this.semester = (currentYear - parseInt(this.entry_year)) * 2;

    if (currentMonth >= 2 && currentMonth <= 7) {
      this.semester--;
    }

    return this.semester;
  }

  /**
   * The function opens a new window, and when the new window is loaded, it sends a message to the new
   * window with the data.
   */
  printData() {
    const self = this;
    const popupWindow = window.open(
      "print.html",
      "Popup",
      "width=500, height=500, menubar=yes"
    );
    popupWindow.addEventListener("load", function () {
      popupWindow.postMessage(
        {
          nim: self.nim,
          name: self.name,
          gender: self.gender,
          entry_year: self.entry_year,
          semester: self.semester,
        },
        "*"
      );
    });
  }
}

const mahasiswa = new Mahasiswa();
