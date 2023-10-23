# bitgroup

Pertanyaan 1:
<?php
$foo = 10 + '20';
echo $foo;
?>

Hasil dari $foo adalah 30. Meskipun '20' adalah string, PHP akan mencoba untuk mengkonversinya ke tipe data numerik jika terlibat dalam operasi aritmatika.

Pertanyaan 2:
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}
?>
Hasil dari looping ini akan mencetak angka dari 1 hingga 100 dengan ketentuan Fizz untuk kelipatan 3, Buzz untuk kelipatan 5, dan FizzBuzz untuk kelipatan 3 dan 5.

Pertanyaan 3:
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

Pertanyaan 4 
Disini saya asumsikan ada tabel actor karena saya cek di sample tabel ga ada name untuk actor

SELECT film.title, film.release_year, actor.name
FROM film
JOIN film_actor ON film.film_id = film_actor.film_id
JOIN actor ON film_actor.actor_id = actor.actor_id;

Pertanyaan 5
SELECT category.name AS Nama_Kategori, COUNT(film_category.category_id) AS Jumlah_Film
FROM film_category
JOIN category ON film_category.category_id = category.category_id
GROUP BY category.name
ORDER BY Jumlah_Film DESC
LIMIT 5;
Pertanyaan 6 
SELECT film.title, film.rental_rate
FROM film
ORDER BY film.rental_rate DESC
LIMIT 5;

Pertanyaan 7
SELECT category.name AS Nama_Kategori, COUNT(film_category.category_id) AS Jumlah_Film
FROM film_category
JOIN category ON film_category.category_id = category.category_id
GROUP BY category.name
ORDER BY Jumlah_Film DESC
LIMIT 3;
