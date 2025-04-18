const cross = document.querySelector(".cross");
let card = document.querySelector(".user-card");
cross.addEventListener("click", () => {
  card.style.display = "none";
});
