document.getElementById("burger-menu").addEventListener("click", function () {
  document.getElementById("nav-modal").style.display = "block";
  document.getElementById("modal-backdrop").style.display = "block";
});

document.getElementById("close-modal").addEventListener("click", function () {
  closeModal();
});

window.addEventListener("click", function (event) {
  const modal = document.getElementById("nav-modal");
  const backdrop = document.getElementById("modal-backdrop");
  if (event.target === modal || event.target === backdrop) {
    closeModal();
  }
});

const navItems = document.querySelectorAll(".nav-item-link");
navItems.forEach((item) => {
  item.addEventListener("click", function () {
    closeModal();
  });
});

function closeModal() {
  document.getElementById("nav-modal").style.display = "none";
  document.getElementById("modal-backdrop").style.display = "none";
}
