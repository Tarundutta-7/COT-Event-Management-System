function validateForm() {
  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();

  if (name === "" || email === "") {
    alert("Please fill in all fields.");
    return false;
  }

  if (!email.includes("@")) {
    alert("Please enter a valid email.");
    return false;
  }

  return true;
}
