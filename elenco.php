<?php
        include 'conn.php';
        include 'headerdue.php';
        $sql = "SELECT * FROM libri_frascaroli";
        $result = $conn->query($sql);
            ?>

<div class="container-fluid d-flex-justify-content-center get-in-touch">
<h1 class="title">Elenco Libri</h1>
<table class="table table-striped table-hover" style="font-size: large; text-align: center; border: #5543ca; border-style: solid;">

    
        <tr>
            <th>Titolo</th>
            <th>Autore</th>
            <th>Genere</th>
            <th>Anno di pubblicazione</th>
            <th>ISBN</th>
            <th>Altre info</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['Titolo'] . "</td>";
                echo "<td>" . $row['Autore'] . "</td>";
                echo "<td>" . $row['Genere'] . "</td>";
                echo "<td>" . $row['AnnoPubblicazione'] . "</td>";
                echo "<td>" . $row['ISBN'] . "</td>";
                echo "<td>" . $row['AltreInformazioni'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>Nessun libro presente nella tabella.</td></tr>";
        }
        ?>
       
</table>
</div>
    </body>
    </html>

    <?php
    $conn->close();
    include 'footer.php';
    ?>
