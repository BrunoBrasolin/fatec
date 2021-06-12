function checkPassword() {
  let registerPassword = document.querySelector("#registerPassword").value;
  let confirmPassword = document.querySelector("#confirmPassword").value;
  if (registerPassword.length < 8 || registerPassword.length > 20) document.querySelector("#passwordHelpBlock").classList.add("text-danger");
  else document.querySelector("#passwordHelpBlock").classList.remove("text-danger");
  if (registerPassword !== "" && registerPassword !== confirmPassword) document.querySelector("#confirmPasswordText").style.display = "block";
  else document.querySelector("#confirmPasswordText").style.display = "none";
}

document.querySelectorAll("nav button").forEach(button => {
  button.addEventListener("click", () => {
    document.getElementById("navbar").classList.remove("show");
  });
});
