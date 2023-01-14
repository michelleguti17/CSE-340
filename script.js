// Last Update
const months = ["January", "February", "March","April", "May", "June", "July", "August", "September", "October", "November", "December"];
const weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
const currentDate = new Date()
let actualDate = ` ${weekdays[currentDate.getDay()]}, ${currentDate.getDate()}, ${months[currentDate.getMonth()]}, ${currentDate.getFullYear()}`;
document.getElementById("date").innerHTML = actualDate;
