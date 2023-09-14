<?php ini_set('default_charset', 'UTF-8')?>

<?php  

include_once('../vacina_estoque.php');
include_once('../config.php');
?>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Calendário de Vacincas</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/evo-calendar.css"/>
        <link rel="stylesheet" type="text/css" href="css/evo-calendar.midnight-blue.css"/>
    </head>
    <?php
    $Dados = 'Sucesso';
    ?>

    <body>
            <div class="hero">
                <div id="calendar"></div>
            </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/evo-calendar.js"></script>
        <script src="js/array.js"></script>

        <script>
    $(document).ready(function() {
            $('#calendar').evoCalendar({
                theme: 'Midnight Blue',
                language: 'pt',
                todayHighlight: true,
                format: yyyy/mm/dd,

               
                  calendarEvents: [
      {
        <?php
        while($user_data = mysqli_fetch_assoc($result)) { 
        ?>
          id: '<?php $user_data['id'] ?>',
          name: "<?php $user_data['nome_vacina']?>",
          date: ["<?php $user_data['dt_recebimento'] ?>", "<?php $user_data[dt_validade] ?>"],
          type: "event";
        ;
        <?php
         }
        ?>
      }
    ]
            })
        })
        </script>

    </body>
</html>