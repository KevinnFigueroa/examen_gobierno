/* 1 exercise */
SELECT *
FROM taxista 
WHERE email IS NOT NULL AND dominio IS NULL;

/* 2 exercise */
SELECT * FROM clientes WHERE lastLogin >= NOW() - INTERVAL 1 DAY;

/* 3 exercise */
SELECT estado, COUNT(*) cantidad 
FROM viaje
GROUP BY estado 

/* 4 exercise */
SELECT * 
FROM viaje viajes
JOIN taxista taxistas ON viajes.idTaxista = taxistas.id
JOIN cliente clientes ON viajes.idCliente = clientes.id
WHERE taxistas.email = x
AND clientes.email = y  
