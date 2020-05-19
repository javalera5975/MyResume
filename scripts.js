let table = document.getElementById('references-table'); 
table.style.color = "Red"


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



function customizeGreeting() 
{
    let hour = getTimeOfDay();

    if (hour >=5 && hour < 12) 
    {
        message = 'Good Morning';
    } 
    else if (hour >=12 && hour < 18)
    { 
        message = 'Good afternoon';
    } 
    else if (hour >= 18)
    {
        message = 'Good Evening and Good Night';
    }
    displayGreetingMessage(message);
}    

function getTimeOfDay() 
{
    let now = new Date();
    let hour = now.getHours();
    return hour;
}

function displayGreetingMessage (message) 
{
    document.getElementById('message').innerHTML = message;
}

/* let exampleArray = new Array[3];
let exampleArray2 = [1,2,3];
let exampleArray3 = ["one etc.", "two seven", "three"]; */

function displayReferences() {
 let references = [
    {company: 'Company', contact: 'Contact', contactInfo: 'Contact Info'},
    {company: "University of Utah Redwood Pharmacy", contact: "Machaela Jaquez", contactInfo: "801-213-9950"},
    {company: "University of Utah Home Infusion", contact: "Jamie Doi", contactInfo: "801-587-8600"},
 ];

 let tableBody = document.querySelector('#references-table>tbody');


for (let reference of references) {
    let html = '';
    html += '<tr>';
    html += '<td>' + reference.company + '</td>';
    html += '<td>' + reference.contact + '</td>';
    html += '<td>' + reference.contactInfo + '</td>';
    html += '</tr>';

    tableBody.innerHTML += html;
 }
}

$(document).ready(() => {
    $('#getUserName').modal('show');
    customizeGreeting();
    displayReferences();
});

