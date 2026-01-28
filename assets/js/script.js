function validasi() {
  let user = document.getElementById("username").value;
  let pass = document.getElementById("password").value;
  let error = document.getElementById("errorMsg");

  if (user === "" || pass === "") {
    error.style.display = "block";
    error.innerText = "Username/email dan password wajib diisi!";
    return false;
  }
  if (pass.length < 5) {
    error.style.display = "block";
    error.innerText = "Password minimal 5 karakter!";
    return false;
  }

  return true;
}