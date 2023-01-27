--Affiche toutes les données.

SELECT * FROM students;
ou SELECT * FROM students, school;

-- Affiche uniquement les prénoms.
SELECT prenom FROM students;

-- Affiche les prénoms, les dates de naissance et l’école de chacun.
SELECT prenom, datenaissance, school FROM students;

-- j'ai aussi essayer 
SELECT DISTINCT prenom, datenaissance, school.school
FROM students, school;

SELECT prenom, datenaissance, idschool
FROM students
JOIN school ON students.school = school.idschool
--Affiche uniquement les élèves qui sont de sexe féminin.
SELECT * FROM students
WHERE genre LIKE 'F';


--Affiche uniquement les élèves qui font partie de l’école d'Addy.
SELECT * FROM students
WHERE school LIKE 1;

-- Affiche uniquement les prénoms des étudiants, par ordre inverse à l’alphabet (DESC). Ensuite, la même chose mais en limitant les résultats à 2.
SELECT prenom FROM students ORDER BY prenom DESC;

SELECT prenom FROM students ORDER BY prenom DESC LIMIT 2;

--Ajoute Ginette Dalor, née le 01/01/1930 et affecte-la à Bruxelles, toujours en SQL.
INSERT INTO `students` ( `nom`, `prenom`, `datenaissance`, `genre`, `school`) VALUES
('Dalor', 'Ginette', '1930-01-01', 'F', 1);

--Modifie Ginette (toujours en SQL) et change son sexe et son prénom en “Omer”.

