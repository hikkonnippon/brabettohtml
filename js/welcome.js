// Obtén el elemento del span
const greetingMessage = document.getElementById('greetingMessage');

// Obtiene la hora actual
const currentHour = new Date().getHours();

// Determina el mensaje de saludo según la hora
let greeting = '';
if (currentHour >= 5 && currentHour < 12) {
    greeting = '¡Buenos días #Brabettolover!';
} else if (currentHour >= 12 && currentHour < 19) {
    greeting = '¡Buenas tardes #Brabettolover!';
} else {
    greeting = '¡Buenas noches #Brabettolover!';
}

// Establece el mensaje en el span
greetingMessage.textContent = greeting;
