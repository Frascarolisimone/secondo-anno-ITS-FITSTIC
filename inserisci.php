<?php
        include 'headerdue.php';
            ?>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <section class="get-in-touch">
    <h1 class="title">Inserisci Libri</h1>
    <form class="contact-form row" method="post" action="inserisci.php">
        <div class="form-field col-lg-6">
            <input size="255" maxlength="255" id="titolo" name="titolo" class="input-text js-input" type="text" required>
            <label class="label" for="titolo">Titolo</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input size="255" maxlength="255" id="autore" name="autore" class="input-text js-input" type="text" required>
            <label class="label" for="autore">Autore</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input size="50" maxlength="50" id="genere" name="genere" class="input-text js-input" type="text" required>
            <label class="label" for="genere">Genere</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="anno_pubblicazione" name="anno_pubblicazione" class="input-text js-input" type="int" required>
            <label class="label" for="anno_pubblicazione">Anno di pubblicazione</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input size="13" maxlength="13" id="isbn" name="isbn" class="input-text js-input" type="varchar" required>
            <label class="label" for="isbn">ISBN</label>
        </div>
        <div class="form-field col-lg-12">
            <input id="altre_informazioni" name="altre_informazioni" class="input-text js-input" type="text" required>
            <label class="label" for="altre_informazioni">Altre informazioni</label>
        </div>
        <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
        </div>
    </form>
</section>



<?php
        include 'conn.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $titolo = $conn->real_escape_string($_POST['titolo']);
        $autore = $conn->real_escape_string($_POST['autore']);
        $genere = $conn->real_escape_string($_POST['genere']);
        $anno_pubblicazione = $conn->real_escape_string($_POST['anno_pubblicazione']);
        $isbn= $conn->real_escape_string($_POST['isbn']);
        $altre_informazioni = $conn->real_escape_string($_POST['altre_informazioni']);
        
        $sql = "INSERT INTO libri_frascaroli (Titolo, Autore, Genere, AnnoPubblicazione, ISBN, AltreInformazioni) 
        VALUES ('$titolo', '$autore', '$genere', '$anno_pubblicazione', '$isbn', '$altre_informazioni')";
        
        $conn ->query($sql);
        $conn -> close();

    }
        include 'footer.php';
            ?>