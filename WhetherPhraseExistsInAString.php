<?php
$text = '<div class="verified" style="display:none;"></div>';

if (strpos($text, 'display:none;') !== false) {
    $newV = "False";
} else {
    $newV = "Verified";
}

echo $newV; // Output will depend on the presence of "display:none;"
?>
