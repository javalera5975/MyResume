document.getElementById('my-paragraph').innerHTML = 'Thank you for visiting my resume site!';

let table = document.getElementById('references-table'); table.style.color = "Red"

$(document).ready(() => {
    $('#getUserName').modal('show');
});

function greetUser() {
let name = document.getElementById('greetingName').value;
document.getElementById('userName').innerHTML = name;
}

function getContactData() {
    let name = document.getElementById('name').value
    let phonenumber = document.getElementById('phonenumber').value;
    let emailaddress = document.getElementById('emailaddress').value;

    console.log(name);
    console.log(emailaddress);
    console.log(phonenumber);


}
