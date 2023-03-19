window.addEventListener('message', function (event) {
    if (event.origin !== window.location.origin) {
            return;
    }

    const result = event.data;
    document.getElementById("print_nim").innerHTML = result.nim;
    document.getElementById("print_name").innerHTML = result.name;
    document.getElementById("print_gender").innerHTML = result.gender;
    document.getElementById("print_entry_year").innerHTML = result.entry_year;
    document.getElementById("print_semester").innerHTML = result.semester;
});