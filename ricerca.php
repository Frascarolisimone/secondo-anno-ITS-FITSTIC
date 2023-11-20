<?php

    include 'conn.php';
    include 'headerdue.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['isbn'])) {
        $isbn = $conn->real_escape_string($_POST['isbn']);
        $sql = "SELECT * FROM libri_frascaroli WHERE ISBN = '$isbn'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

        } else {
            $message = "Nessun libro trovato con questo isbn";
        }
    $conn->close();
}
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricerca e Modifica Utente</title>
</head>
<body>
<div class="container-fluid d-flex-justify-content-center get-in-touch">
<h1 class="title">Ricerca Libri</h1>
    <form action="ricerca.php" method="post" class="form-isbn p-5" style="color: white; margin-bottom: 80px;">
        Inserisci ISBN: <input type="text" name="isbn" required class="modifiche">
        <input type="submit" value="Cerca" class="bottone" style="margin-bottom: 20px;">
        
    

    <?php
    if (isset($user)) {
        echo "Titolo:{$user['Titolo']}<br>";
        echo "Autore:{$user['Autore']}<br>";
        echo "Genere:{$user['Genere']}<br>";
        echo "Anno:{$user['AnnoPubblicazione']}<br>";
    }
    if ($message) {
        echo "<p>$message</p>";
    }
    ?>
    </form>
</div>
</body>
</html>

<?php
    include 'footer.php';
    ?>
