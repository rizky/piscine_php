SELECT
	title,
	summary
FROM
	movies
WHERE
	summary LIKE '%vincent%'
ORDER BY
	id_film;