<!DOCTYPE html>
<html>
    <body>
        <?php 
        //Esto es un comentario realizado por Kevin en la actividad de David
            function prime ($number) {
                $counter = 0;
                for ($i=$number; $i > 0 ; $i--) { 
                    if ($number % $i == 0) {
                        $counter++;
                    }
                }
                if ($counter == 2) {
                    return "Es primo";
                } else {
                    return "No es primo";
                }
            }
            echo prime(2);
        ?>
    </body>
</html>