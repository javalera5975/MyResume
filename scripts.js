

let table = document.getElementById('references-table'); table.style.color = "Red"

$(document).ready(() => {
    $('#getUserName').modal('show');
});





function greetUser() 
{
    let name = document.getElementById('greetingName').value;
    document.getElementById('userName').innerHTML = name;
    $('#getUserName').modal('hide');
    $('#greetUser').modal('show');
}

function getContactData() 
{
    let name = document.getElementById('name').value
    let phonenumber = document.getElementById('phonenumber').value;
    let emailaddress = document.getElementById('emailaddress').value;

    console.log(name);
    console.log(emailaddress);
    console.log(phonenumber);
}
/*---------------------time of day code--------------*/
function custoizeGreeting() {
    let hour = getTimeOfDay
    let message = 'Early Bird Special';

    if (hour >=5 && hour < 12) {
        message = 'Good Morning';
    } else if (hour >=12 && hour < 18) { 
        message = 'Good afternoon';
    } else if (hour >= 18) {
        message = 'Good Evening and Good Night';
    }
}    


function getTimeOfDay() 
{
 let now = new Date();
 let hour = now.getHours();
 return hour;
}

