var divSignin = document.querySelector('#signin')
var divSignup = document.querySelector('#signup')
var btnColor = document.querySelector('.btnColor')

document.querySelector('#btnSignin')
  .addEventListener('click', () => {
    divSignin.style.left = "25px"
    divSignup.style.left = "450px"
    btnColor.style.left = "0px"
})

document.querySelector('#btnSignup')
  .addEventListener('click', () => {
    divSignin.style.left = "-550px"
    divSignup.style.left = "25px"
    btnColor.style.left = "110px"
})
