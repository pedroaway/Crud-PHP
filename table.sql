CREATE TABLE estudantes (

    id int(6) AUTO_INCREMENT PRIMARY KEY,
    nome varchar(60) NOT NULL,
    idade int(120) NOT NULL,
    email varchar(100) NOT NULL,
    sexo varchar(15) NOT NULL,
    curso varchar(100) NOT NULL,
    anoDeIngresso int(4) NOT NULL
)
-- CONDIGO SQL DO TUTORIAL
CREATE TABLE students (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(191) NOT NULL,
    email VARCHAR(191) NOT NULL,
    phone VARCHAR(191) NOT NULL,
    course VARCHAR(191) NOT NULL
)