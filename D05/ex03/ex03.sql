INSERT INTO 
	ft_table (login, group, creation_date)
SELECT
	last_name,
	'other',
	birthdate
FROM 
	user_card
WHERE
	nom LIKE '%a%' AND LENGTH(nom) < 9
ORDER BY
	nom
LIMIT 
	10;