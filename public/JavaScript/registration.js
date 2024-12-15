let  userName=document.getElementById("username")
let   lastName=document.getElementById("lastname")
let emailInput = document.getElementById("email");
let  passwordInput=document.getElementById("inputPassword5")
let  repasswordInput=document.getElementById("repassword")
let  studentId=document.getElementById("studentid")
let  registerForm=document.getElementById("register")
let paragraph= document.getElementById("paragraph");

let  nameRegex = /^[a-zA-Z]{3,50}$/;
let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
let  passwordRegex = /^[a-zA-Z0-9]{3,50}$/;
let  studentIdRegex=/^[0-9]{5,10}$/;


userName.addEventListener("input",function(){
    checkInput(userName, nameRegex.test(userName.value))
})
lastName.addEventListener("input",function(){
    checkInput(lastName, nameRegex.test(lastName.value))
})
emailInput.addEventListener("input", function () {
    checkInput(emailInput, emailRegex.test(emailInput.value))});

passwordInput.addEventListener("input",function(){
    checkInput(passwordInput, passwordRegex.test(passwordInput.value))
})

repasswordInput.addEventListener("input", function () {
   checkInput(repasswordInput, passwordInput.value == repasswordInput.value )
})
studentId.addEventListener("input",function(){
    checkInput(studentId, studentIdRegex.test(studentId.value))
})

// userName.addEventListener("input",function(){
//     checkInput(userName, nameRegex.test(userName.value))
// })

function checkInput(input, condition){
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

registerForm.addEventListener("submit", function (e) {
    e.preventDefault();
    let nameBool = checkInput(userName, nameRegex.test(userName.value))
    let lastBool=checkInput(lastName, nameRegex.test(lastName.value))
    let emailBool = checkInput(emailInput, emailRegex.test(emailInput.value))
let passwordBool = checkInput(passwordInput, passwordRegex.test(passwordInput.value))
let repasswordBool = checkInput(repasswordInput, passwordInput.value == repasswordInput.value && passwordInput.value)
let studentIdBool=checkInput(studentId, studentIdRegex.test(studentId.value))



if (emailBool && lastBool && passwordBool && repasswordBool &&studentIdBool && nameBool) {

    //delete it when im gonn asen ti to backend team
    window.location.href="https://getbootstrap.com/docs/5.3/migration/#documentation-changes";

}
else if( !emailBool && !passwordBool && !repasswordBool && !studentIdBool && !nameBool){
    paragraph.innerHTML=` <p class="text-center text-danger">all inputs are invalid</p>`;
}
else if (!emailBool){
    console.log(10);
    paragraph.innerHTML=` <p class="text-center text-danger">email is invalid</p>`;
}
else if(!passwordBool){
    paragraph.innerHTML=` <p class="text-center text-danger">password is invalid</p>`;
}
else if(!repasswordBool){
    paragraph.innerHTML=` <p class="text-center text-danger">re-password is invalid</p>`;
}
else if(!studentIdBool){
    paragraph.innerHTML=` <p class="text-center text-danger">studentid is invalid</p>`;
}
})


