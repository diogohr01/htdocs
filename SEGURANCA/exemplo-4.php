<script src="https://www.google.com/recaptcha/api.js"></script>
<form action="cadastrar.php" method="post">

    <div class="g-recaptcha" data-sitekey="6Lf_NnwpAAAAANQlzf7bSXnQzinl8y4EAN5rNDMn"></div>
    <input type="email" name="inputEmail">
    <button type="submit">Enviar</button>
<p id="aviso"></p>
</form>

<?php
// exemplo-4.php

// Verifique se a mensagem de aviso foi definida
if(isset($_GET["aviso"])) {
    $aviso = $_GET["aviso"];
    echo "<p>$aviso</p>";
}
?>
