<?php
// Contenido del popup
echo "<h2>¡Hola desde el popup!</h2>";
echo "<p>Este es el contenido del popup generado desde el archivo PHP.</p>";
?>
<button onclick="cerrarPopup()">Cerrar</button>
<script>
    function cerrarPopup() {
        var popup = document.getElementById('popup-container');
        popup.style.display = 'none';
    }
</script>
