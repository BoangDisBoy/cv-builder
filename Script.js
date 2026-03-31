const inputs = document.querySelectorAll("input, textarea");

function addWork() {
  const container = document.getElementById("work-container");

  const newBlock = document.createElement("div");
  newBlock.classList.add("work-block");

  newBlock.innerHTML = `
        <input type="text" name="company[]" placeholder="Company Name">
        <input type="text" name="work_year[]" placeholder="Year (e.g., 2023 - 2025)">
        <textarea name="work_desc[]" placeholder="Describe your role..."></textarea>
        <hr>
    `;

  container.appendChild(newBlock);
}

inputs.forEach((input, index) => {
  input.addEventListener("keydown", function (e) {
    if (e.key === "Enter" && this.tagName !== "TEXTAREA") {
      e.preventDefault();
      const next = inputs[index + 1];
      if (next) next.focus();
    }
  });
});
