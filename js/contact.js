const form = document.getElementById("contact-form");

form.addEventListener("submit", function(event) {
  event.preventDefault();

  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const number = document.getElementById("phone").value;
  const message = document.getElementById("message").value;

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "/enviar-email.php");
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.onload = function() {
    console.log(xhr.responseText);
  };
  xhr.send(JSON.stringify({name, email, number, message}));
});