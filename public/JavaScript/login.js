// declare the elements you wanna do action on

var emailInput = document.querySelector("#exampleFormControlInput1");
var passwordInput = document.querySelector("#inputPassword5");
var signUpForm = document.querySelector("#signUpForm");
var paragraph= document.querySelector("p");
// ended declaration

var emailRegex = /^[a-z]{3,50}@[a-z]{3,50}\.[a-z]{3,50}$/
var passwordRegex = /^[a-zA-Z0-9]{3,50}$/

passwordInput.addEventListener("input", function () {
    checkInput(passwordInput, passwordRegex.test(passwordInput.value))});

emailInput.addEventListener("input", function () {
    checkInput(emailInput, emailRegex.test(emailInput.value))});
signUpForm.addEventListener("submit", function (e) {
    e.preventDefault();
    var emailBool = checkInput(emailInput, emailRegex.test(emailInput.value));
    var passwordBool = checkInput(passwordInput, passwordRegex.test(passwordInput.value))

    if (emailBool && passwordBool) {
        window.location.href="https://getbootstrap.com/docs/5.3/migration/#documentation-changes";
 
    }
    else if( !emailBool && !passwordBool){
        paragraph.innerHTML=` <p class="text-center text-danger">all inputs are invalid</p>`;
    }
    else if (!emailBool){
        console.log(10);
        paragraph.innerHTML=` <p class="text-center text-danger">email is invalid</p>`;
    }
    else if(!passwordBool){
        paragraph.innerHTML=` <p class="text-center text-danger">password is invalid</p>`;
    }
})

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