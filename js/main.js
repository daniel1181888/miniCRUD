const inputs = document.querySelectorAll("form input")
const form = document.querySelectorAll("form")

inputs.forEach((input) => {
    input.addEventListener("input", () => {

    });
});

form.addEventListener("submit", (e) => {
    e.preventDefault();
    console.log(e);
}); 