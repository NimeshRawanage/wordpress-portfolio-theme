document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.createElement("button");
  toggleButton.innerText = "Toggle Dark Mode";
  toggleButton.style.position = "fixed";
  toggleButton.style.top = "20px";
  toggleButton.style.right = "20px";
  toggleButton.style.padding = "10px 15px";
  toggleButton.style.backgroundColor = "#0056b3";
  toggleButton.style.color = "#FFF";
  toggleButton.style.border = "none";
  toggleButton.style.cursor = "pointer";
  toggleButton.style.fontSize = "16px";
  toggleButton.style.borderRadius = "5px";

  document.body.appendChild(toggleButton);

  toggleButton.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
  });
});
