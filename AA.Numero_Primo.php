<!DOCTYPE html>
<html>
    <body>
        <?php 
        // Test de conflicto
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