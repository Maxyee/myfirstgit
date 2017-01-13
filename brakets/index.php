<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>.: Brackets :.</title>
</head>
<body>
<h1 class="title">.: Brackets :.</h1>

<div class="wrapper">

    <div class="brackets">
    </div>

</div>

<script src="js/jquery-1.11.3.js"></script>
<script src="js/brackets.min.js"></script>

<script>
    
    var rounds;

    rounds = [


        //-- ronda 1
        

            
        //-- ronda 4
        [

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 218", winner: true, ID: 218 },
            },
        ],
        //-- Champion
        [

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
            },
        ],

    ];

    var titles = ['Ronda 5'];


    ;(function($){

        $(".brackets").brackets({
            titles: titles,
            rounds: rounds,
            color_title: 'black',
            border_color: '#00F',
            color_player: 'black',
            bg_player: 'white',
            color_player_hover: 'white',
            bg_player_hover: 'blue',
            border_radius_player: '10px',
            border_radius_lines: '10px',
        });

    })(jQuery);
</script>


        <?php 
            $min = 1;
            $max = 20;

            ;
            for($i=0; $i<20; $i++){
                $random = rand($min,$max);
                echo $random.' ';
            
            }

        ?>
</body>
</html>