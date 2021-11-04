
create table enigme (
    id int PRIMARY key AUTO_INCREMENT,
    titre varchar(30),
    resume varchar(300),
    histoire varchar(400)
)

create table personne (
    id int primary key AUTO_INCREMENT,
    firstname varchar(50),
    lastname varchar(50),
    description varchar(400),
    lien_photo varchar(100)
)

CREATE TABLE scenario_personne (
    id INT PRIMARY KEY AUTO_INCREMENT,
    personne_id INT,
    enigme_id INT,
    role varchar(10),
    FOREIGN KEY (personne_id) REFERENCES personne(id),
    FOREIGN KEY(enigme_id) REFERENCES enigme(id)
)

create table question (
    id int primary key AUTO_INCREMENT,
    intitule varchar(200)
)

create table reponse (
    question_id int,
    scenario_personne_id int,
    intitule varchar(200),
    indice varchar(200),
    FOREIGN KEY(question_id) REFERENCES question(id),
    FOREIGN KEY(scenario_personne_id) REFERENCES scenario_personne(id)
)

create table utilisateur (
    id INT PRIMARY KEY AUTO_INCREMENT,
    pseudo varchar(30),
    mail varchar(50)
)

INSERT into enigme(resume,description) values("Le bibliothécaire Sean McNulty a été assassiné !
C’est la chercheuse Rose-Mary Baken qui a  retrouvé son corps dans son bureau ! Heuresement, watson se trouvait à la bibliothèque et le secteur  a rapidement été bouclé.
Sherlock Holmes a réussi à identifier 3 suspects, mais il n’arrive pas à identifier le coupable, il t’as donc appelé à la rescousse pour que  tu identifie toi même le vrai coupable ! ", "lorem ipsum")

INSERT INTO 