const inputs = document.querySelectorAll("input:not(type=submit)");
const button = document.querySelector("button");
const form = document.querySelector("form");


button.addEventListener("click", (e) => {
    e.preventDefault();

    let errors = false;

    inputs.forEach((input) => {
        if (input.value === "" || input.value.length > 8) {
            errors = true;
            input.style.backgroundColor = "red";
        } else {
            input.style.backgroundColor = "white";
        }
    })

    if (errors == false){
        form.submit();
    }

});