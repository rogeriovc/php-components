<?php
function input($label, $name, $type = "text") {
    echo "<label>$label</label><br>";
    echo "<input type='$type' name='$name' style='width: 100%; padding: 8px; margin-bottom: 10px;'><br>";
}
?>
