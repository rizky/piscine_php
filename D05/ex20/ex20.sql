SELECT
	film.id_genre,
	genre.nom AS 'nom genre',
	film.id_distrib,
	distrib.nom AS 'nom distrib',
	titre AS 'titre film'
FROM
	film
INNER JOIN
	distrib ON film.id_distrib = distrib.id_distrib
INNER
	JOIN genre ON film.id_genre = genre.id_genre
WHERE
	film.id_genre BETWEEN 4 AND 8;
