<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D</title>
</head>
<body>
    <?php
        $paragraph = "Nel mezzo del cammin di nostra vita
        mi ritrovai per una selva oscura,
        ché la diritta via era smarrita.
        
        Ahi quanto a dir qual era è cosa dura
        esta selva selvaggia e aspra e forte
        che nel pensier rinova la paura!
        
        Tant' è amara che poco è più morte;
        ma per trattar del ben ch'i' vi trovai,
        dirò de l'altre cose ch'i' v'ho scorte.
        
        Io non so ben ridir com' i' v'intrai,
        tant' era pien di sonno a quel punto
        che la verace via abbandonai.
        
        Ma poi ch'i' fui al piè d'un colle giunto,
        là dove terminava quella valle
        che m'avea di paura il cor compunto,
        
        guardai in alto e vidi le sue spalle
        vestite già de' raggi del pianeta
        che mena dritto altrui per ogne calle.
        
        Allor fu la paura un poco queta,
        che nel lago del cor m'era durata
        la notte ch'i' passai con tanta pieta.
        
        E come quei che con lena affannata,
        uscito fuor del pelago a la riva,
        si volge a l'acqua perigliosa e guata,
        
        così l'animo mio, ch'ancor fuggiva,
        si volse a retro a rimirar lo passo
        che non lasciò già mai persona viva.
        "
    ?>

    <h1>Paragrafo normale</h1>
    <p>
        <?php
            echo $paragraph;
        ?>
    </p>
    <h1>
        Paragrafo scomposto
    </h1>
    <ul>
        <?php
            $paragraphExploded = explode(".", $paragraph);
            for ($i = 0; $i < count($paragraphExploded) - 1; $i++) {
        ?>
        <li>
            <?php
                echo $paragraphExploded[$i] . ".";
                }
            ?>
        </li>
    </ul>
</body>
</html>