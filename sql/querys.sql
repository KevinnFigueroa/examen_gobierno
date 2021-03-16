/* 1 exercise */
SELECT *
FROM taxista 
WHERE email <> '' AND dominio IS NULL;

/* 2 exercise */
select * FROM clientes WHERE lastLogin >= now() - INTERVAL 1 DAY;

/* 3 exercise */
select estado FROM viaje; 

/* 4 exercise */
SELECT * FROM viajes WHERE 