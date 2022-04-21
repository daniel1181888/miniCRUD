var input1 = document.getElementById("username");
var input2 = document.getElementById("password");


const inputs = document.querySelectorAll("input:not(type=submit)");
const button = document.querySelector("button");
const form = document.querySelector("form");


// button.addEventListener("click", (e) => {
//     e.preventDefault();

//     let errors = false;

//     inputs.forEach((input) => {
//         if (input.value === "" || input.value.length > 8) {
//             errors = true;
//             input.style.backgroundColor = "red";
//         } else {
//             input.style.backgroundColor = "white";
//         }
//     })

//     if (!errors){
//         form.submit();
//     }

// });

function changeColor(input){
    
    
    if (input === "" || input.length > 15) {
        
        input1.style.backgroundColor = "red";

        input2.style.backgroundColor = "red";
    } else {
        input1.style.backgroundColor = "white";

        input2.style.backgroundColor = "white";
    }
}