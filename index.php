<!-- Creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php -->

<?php 
$numberLenght = $_GET["numberUser"]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP STRONG PASSWORD GENERETOR</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- form -->
     <main class="container">
        <section class="row">
            <div class="col-12">
                <h1></h1>
                <form action="index.php" method="GET">
                    <div class="mb-3">
                         <label for="nome" class="form-label">Scegli la lunghezza dell password</label>
                         <input type="number" class="form-control" id="numberUser" name="numberUser" >
                          
                    </div>              
                   
                    
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>

               
            </div>
        </section>
     </main>
    
</body>
</html>
