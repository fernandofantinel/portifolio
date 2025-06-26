const modal = document.getElementById("modal");
const thumbnails = document.querySelectorAll(".thumb");
const modalImage = document.getElementById("modal-image");

thumbnails.forEach((thumb) => {
  thumb.addEventListener("click", () => {
    const src = thumb.getAttribute("src");
    modalImage.setAttribute("src", src);
  
    const alt = thumb.getAttribute("alt");
    modalImage.setAttribute("alt", alt);
  });
});

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