<?php
function select($label, $name, $options) {
    echo "<label>$label</label><br>";
    echo "<select name='$name' style='width: 100%; padding: 8px; margin-bottom: 10px;'>";
    foreach ($options as $opt) {
        echo "<option value='$opt'>$opt</option>";
    }
    echo "</select><br>";
}
?>
