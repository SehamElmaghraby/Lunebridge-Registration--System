let forgetForm=document.getElementById("forgetpassword");
let emailInput = document.getElementById("email");
let paragraph= document.querySelector("p");

let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

function checkInput(input, condition) {
    if (condition) {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        return true;
    }
    else {
        input.classList.remove("is-valid")
        input.classList.add("is-invalid")
        return false;
     }
}

forgetForm.addEventListener("input", function () {
    checkInput(emailInput, emailRegex.test(emailInput.value))});

    forgetForm.addEventListener("submit", function (e) {
        e.preventDefault();
        var emailBool = checkInput(emailInput, emailRegex.test(emailInput.value));
    
    
        if (emailBool) {
            paragraph.innerHTML=` <p class="text-center text-success">success</p>`;
     
        }
        else 
            paragraph.innerHTML=` <p class="text-center text-danger">email is invalid</p>`;
        }


    
    )