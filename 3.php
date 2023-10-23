<?php

// Segitiga
for ($i = 1; $i <= 5; $i++) {
    echo str_repeat('*', $i) . "\n";
}

// Segitiga Terbalik
for ($i = 5; $i >= 1; $i--) {
    echo str_repeat('*', $i) . "\n";
}

// Ketupat
for ($i = 1; $i <= 5; $i += 2) {
    echo str_repeat(' ', (5 - $i) / 2) . str_repeat('*', $i) . "\n";
}
for ($i = 3; $i >= 1; $i -= 2) {
    echo str_repeat(' ', (5 - $i) / 2) . str_repeat('*', $i) . "\n";
}
?>