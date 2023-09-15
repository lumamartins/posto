<?php
ini_set('default_charset', 'utf-8');
include_once("../config.php");
$sql = "SELECT * FROM vacina_cadastro ORDER BY id DESC";
$result = $conexao->query($sql);
?>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Calendário de Vacincas</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/evo-calendar.css"/>
        <link rel="stylesheet" type="text/css" href="css/evo-calendar.midnight-blue.css"/>
    </head>
    <body>
            <div class="hero">
                <div id="calendar"></div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/evo-calendar.js"></script>

        <script>
    $(document).ready(function() {
            $('#calendar').evoCalendar({
                theme: 'Midnight Blue',
                language: 'pt',
                todayHighlight: true,

               
                  calendarEvents: [
                    <?php
                    while($user_data = mysqli_fetch_assoc($result)) {?>
      {
        id: '<?php echo $user_data['id'] ?>',
        name: "<?php echo $user_data['nome_vacina'] ?>", // Event name (required)
        date: ["<?php echo $user_data['dt_recebimento'] ?>", "<?php echo $user_data['dt_validade'] ?>"], // Event date (required)
        type: "event", // Event type (required)
      },
    <?php } ?>
    ]

            })
        })
        </script>

    </body>
</html>