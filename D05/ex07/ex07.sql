SELECT
	title,
	summary
FROM
	movies
WHERE
	title LIKE '%42%' OR summary LIKE '%42%'
ORDER BY
	duration;
