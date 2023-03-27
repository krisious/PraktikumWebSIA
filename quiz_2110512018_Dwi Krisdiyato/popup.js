window.addEventListener("message", function (event) {
  if (event.origin !== window.location.origin) {
    return;
  }

  const result = event.data;
  document.getElementById("print_nim").innerHTML = result.nim;
  document.getElementById("print_name").innerHTML = result.name;
  document.getElementById("print_major").innerHTML = result.major;
  document.getElementById("print_semester").innerHTML = result.semester;
  document.getElementById("print_contract").innerHTML = result.contract;
});
