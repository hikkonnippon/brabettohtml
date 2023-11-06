
const greetingMessage = document.getElementById('greetingMessage');
const currentHour = new Date().getHours();

let greeting = '';
if (currentHour >= 5 && currentHour < 12) {
    greeting = '¡Buenos días #Brabettolover!';
} else if (currentHour >= 12 && currentHour < 19) {
    greeting = '¡Buenas tardes #Brabettolover!';
} else {
    greeting = '¡Buenas noches #Brabettolover!';
}

greetingMessage.textContent = greeting;