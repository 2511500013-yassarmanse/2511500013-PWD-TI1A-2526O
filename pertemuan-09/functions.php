<?php
// functions.php

/**
 * Helper function to safely get a value from an array (or Session).
 * Returns default value if key doesn't exist.
 */
function getValue($array, $key, $default = "") {
    if (isset($array[$key]) && !empty($array[$key])) {
        return htmlspecialchars($array[$key]); // Basic sanitation for display
    }
    return $default;
}

/**
 * Function to render a biodata row HTML.
 * Using this function reduces HTML repetition in index.php.
 */
function renderBiodataRow($label, $value, $emoji = "") {
    if (!empty($value)) {
        return "<p><strong>{$label}:</strong> {$value} {$emoji}</p>";
    }
    return "<p><strong>{$label}:</strong> - </p>";
}
?>
