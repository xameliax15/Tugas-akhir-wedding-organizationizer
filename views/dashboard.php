<h1>Dashboard Admin</h1>
<!-- Kalender sederhana -->
<table class="calendar">
    <tr>
        <th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th><th>S</th>
    </tr>
    <?php
    // Kalender statis contoh
    for ($i=0; $i<5; $i++) {
        echo "<tr>";
        for ($j=1; $j<=7; $j++) {
            echo "<td></td>";
        }
        echo "</tr>";
    }
    ?>
</table> 