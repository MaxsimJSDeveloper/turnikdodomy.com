document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault();

  this.reset();

  const successMessage = document.getElementById("successMessage");
  successMessage.style.display = "block";

  const message = document.getElementById("successMessage");
  message.classList.add("show");

  setTimeout(() => {
    message.classList.remove("show");
  }, 3000);
});
