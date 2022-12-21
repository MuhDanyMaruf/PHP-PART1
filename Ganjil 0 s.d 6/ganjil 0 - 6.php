<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2> Ganjil 0 s.d 6</h2>
        <?php
	
	    for($no=1;$no<=25;$no++)
        {
            if($no % 2 == 0)
                {echo "$no = Bilangan Genap<br>";}
            else
                {echo "$no = Bilangan Ganjil<br>";}
        }
	
        ?>
    </body>
</html>