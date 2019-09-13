<?php

    /*
        Superhero Project Workshop
    */

    // Get the render_page and render_card functions
    include 'views.php';


    // Set custom settings
    $site_title = 'UNC BACS 350';
    $page_title = 'Superhero Gallery';

    $card1 = render_card("SpiderMan", "The friendly neborhood hero. This web slinging teen fight crime with only his dexterityt, fist, and spiderwebs. Although this hero has a great sence of humor and always seem happy he has one of the most trajic histories. His parents died when he was an infant and had to be raised by his uncle Ben and Aunt May. His uncle was later shot when he was 15 by a robber that he could have stoped by didn't. He was also a nerdy kid and was constally bullied but dispite his dark background he became a hero when he was bitten by a radio active spider.");
    $card2 = render_card("Iron Man", "Billionaire, Playboy, philantropis, Entrpreneur. This are jsut a few of tony starts accompleshmets in his life. After his parents died in a trajic car accident Tony took over starks industries which was a weapon building company for the US army. after one of his missels, that was sold in the black market, almost killed him he was caputered by a terrost group and forced to buil d weapon of mass distruction to fight the US. Instead with the help of a nother prisoner he builds the firts mark of the iron man suit and scapes. From this expirence he decided to help others with the new suit he had build and stop workingh on weapon but upgarde his suit to protect other. ");

    $content =  '
        <div class="container-fluid">
            <div class="row">
                ' . $card1 . $card2 . '
            </div>
        </div>
    ';


    // Create HTML and output the page
    echo render_page($site_title, $page_title, $content);

?>
