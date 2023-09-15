document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('submit').addEventListener('click', function(event) {
        event.preventDefault(); // Previne o comportamento padrão do formulário (envio da página)

        var ID = document.getElementById('ID').value;
        var name = document.getElementById('name').value;
        var date = document.getElementById('date').value;
        var type = "event"; // Definindo o valor 'event' para o campo 'type'

        // Agora, calendarEvents é um objeto que contém as informações do formulário
        var calendarEvents = {
            ID: ID,
            name: name,
            date: date,
            type: type // Adicionando o campo 'type' com valor 'event'
        };

        // Agora você tem o objeto calendarEvents que contém as informações do formulário
        console.log('Eventos do Calendário:', calendarEvents);
    });
});
// 2
// Vacina 1
//September/11/2023