SELECT etage.nom ,salles.nom
FROM salles 
INNER JOIN etage ON salles.id_etage = etage.id
