const modal = document.getElementById("modal");

document.querySelectorAll(".openModal").forEach(function (element) {
  element.addEventListener("click", function () {
    
    setTimeout(() => {
      modal.classList.remove("hidden");
    }, 300);
  });
});

document.querySelectorAll(".closeModal").forEach(function (element) {
  element.addEventListener("click", function () {

    setTimeout(() => {
      modal.classList.add("hidden");
    }, 300);
    });
});