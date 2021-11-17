DROP DATABASE IF EXISTS sherlock;

create Database sherlock;

use sherlock;

create table enigme (
    id int PRIMARY key AUTO_INCREMENT,
    titre varchar(30),
    resume Text,
    histoire Text
);

create table personne (
    id int primary key AUTO_INCREMENT,
    firstname varchar(50),
    lastname varchar(50),
    description Text,
    role varchar(10),
    lien_photo varchar(100)
);

CREATE table question (
    id int primary key AUTO_INCREMENT,
    intitule Text
);

create table reponse_question (
    personne_id int,
    enigme_id int,
    question_id int,
    reponse Text,
    indice Text,
    FOREIGN KEY(personne_id) REFERENCES personne(id),
    FOREIGN KEY(enigme_id) REFERENCES enigme(id),
    FOREIGN KEY(question_id) REFERENCES question(id)
);

create table utilisateur (
    id INT PRIMARY KEY AUTO_INCREMENT,
    pseudo varchar(30),
    password varchar(30)
);

INSERT into enigme (titre, resume, histoire) values ("Le meurtre de Rose-Marie Mayer", "Nous sommes le mardi 13 Novembre 1883. 

Vous incarnez le personnage du Dr Watson, célèbre assistant du plus grand enquêteur du XIXème siècle, Sherlock Holmes. Très tôt ce matin, Sherlock Holmes a reçu un télégramme de l'inspecteur de police Jack Stapleton.",
 "Nous sommes le mardi 13 Novembre 1883. 

Vous incarnez le personnage du Dr Watson, célèbre assistant du plus grand enquêteur du XIXème siècle, Sherlock Holmes. Très tôt ce matin, Sherlock Holmes a reçu un télégramme de l'inspecteur de police Jack Stapleton  :

> *Nous avons retrouvé le corps d'une jeune femme à 6h ce matin. Madame Rose-Marie Mayer. Elle a été retrouvée morte dans son salon, à l'angle de la 13ème de BakerStreet à Londres. D'après l'estimation de notre légiste, son meurtre a été commis aux alentours de minuit. Nous n'avons pas trouvé de traces de coups et de blessures sur le corps. La fouille de la maison n'a révélé que très peu d'indices. Cependant une étrange odeur embaumait la maison, une odeur d'amande amère. J'ai besoin de vous, Sherlock Holmes, pour résoudre cette enquête. Je sais que vous êtes déjà sur une autre enquête, sur la disparition du chimiste, le professeur Clay Millington. Mais peut-être que votre coéquipier, le dr Watson peut vous aider à résoudre cette enquête ? J'attends votre réponse dans les plus brefs délais. Signé l'inspecteur Jack Stapleton.*
> 

Sherlock Holmes s'est déjà penché sur l'enquête. Il a identifié trois suspects. Il vous demande à vous, Dr Watson de les interroger. D'après une liste de 6 questions que vous a préparé Sherlock Holmes, vous devez n'en choisir que trois à poser pour chaque suspect. Mais sont-elle toutes pertinentes ? 

Les réponses des suspects se présenteront sous forme de carte de trois types : des indices, des preuves ou des témoignages. Attention, les suspects peuvent vous emmener vers de fausses pistes ! 

A vous de choisir les bonnes questions.. 

A vous de jouer ! 

Les suspects ont été interpellés et arrêtés dès le lendemain du meurtre.");

Insert into enigme(titre) values ("enigme 2"), ("enigme 3");

Insert into personne(firstname, lastname, description, role, lien_photo) values 
("James", "Moriarty", "le professeur James Moriarty est un génie mathématicien et est titulaire de la chaire de mathématiques dans une université de Londres. C'est aussi un brillant scientifique. Tout donnait à croire qu'il allait faire une carrière brillante. Cependant, le professeur est dôté d'un côté sombre, des méfaits sont mêlés à ce personnage. Il n'a jamais été inculpé mais son nom est cité dans de nombreuses enquêtes.", "coupable", "public/assets/images/moriarty_carte.png"),
("Wilson", "Baker", "Wilson Baker est un marchand d'art. C'est un homme opportuniste. Il a épousé sa femme Annabel Longdam, riche famille d'armurier, afin d'hériter de sa dotte. C'est un homme sournois, agissant dans l'ombre. Il est impliqué dans plusieurs affaires de trafiques d'art.", "suspect", "public/assets/images/baker_carte.png"),
("Pr.", "James", "Le professeur James est un célèbre chimiste travaillant sur la radioactivité de l'uranium. Il est fier de ses recherches. C'est un personnage hautain, ayant une forte opinion de lui. Il est connu pour être violent. Cet homme est prêt à tout pour arriver à ses fins, il a soudoyé plus d'un journaliste pour être connu de tous. Il s'est imposé dans le monde scientifique mais en empruntant de sombres chemins.", "suspect", "public/assets/images/james_carte.png");


INSERT into question(intitule) values("Ou étiez-vous hier soir aux alentours de minuit ?"), ("Il y a t'il des témoins qui peuvent attester votre alibi ?"), ("Quels sont vos liens avec Madame Marie Mayer ?"),
 ("Est-ce que vous fumez ? Si oui, que fumez-vous ? J'aurai besoin d'un échantillon "), ("Que portiez-vous comme chaussures le soir du meurtre ? "),("Vous avez été aperçu par un témoin, la veille du meutre, près d'une ancienne usine de fabrication de pesticide, que faisiez-vous là-bas ?");

INSERT INTO reponse_question(personne_id, enigme_id, question_id, reponse, indice) values
(1, 1, 1,"J'ai dîné en compagnie des Lockwood dans leur manoir situé à l'angle de 9ème de Liverstreet", "Moriarty a été aperçu par le majordome du manoir des Lockwood : Augustus Bravehart : C'est vrai, monsieur l'inspecteur, j'ai aperçu monsieur Moriarty quittant la demeure de mes maîtres à 22h."),
(1, 1, 2,"Bien entendu. Les Lockwood se feront une joie d'attester ma présence dans leur demeure hier soir. Il était plus de minuit lorsque je suis partie. Nous échangions avidement sur la reine Victoria", "Parti à plus de minuit ? ... Un élément à confirmer..."),
(1, 1, 3,"Je n'ai aucun lien de parenté avec madame Mayer. Nous nous sommes rencontré lors de l'ouverture du musée d'histoire naturelle il y a 2 mois de cela", "Une parution dans le journal The Daily Telegraph atteste la présence de ces deux personnages."),
(1, 1, 4,"Oui, je fume des cigares. Euh.. Je ne sais plus. Pourquoi vous donnerai-je mon tabac ? ", "Contre son gré, Moriarty donne son cigare contenu dans sa veste. Tiens, tiens ne serais-ce pas du tabac indien ?"),
(1, 1, 5,"Mes chaussures ? Je ne sais pas ce que vous cherchez comme preuve, mais vous ne trouverez rien ! Je ne suis pas l'assassin!", "De la boue et des graviers... Intéressant."),
(1, 1, 6,"Je ne vois pas de quoi vous parlez inspecteur. Je me promenais dans les rues de Londres, peut être à côté de l'usine en effet. Je ne me souviens plus.", "Moriarty a été aperçu par madame Minerva Gloucestershire près de l'usine : Monsieur l'inspecteur, j'ai vu cet homme mystérieux, Moriarty rentrer dans l'usine désafectée. Il en est ressorti 10 minutes plus tard. Il avait quelque chose dans les mains mais j'étais trop loin pour apercevoir ce que c'était. Ca ressemblait à un grand récipient. Un baril peut être ?");

INSERT INTO reponse_question(personne_id, enigme_id, question_id, reponse, indice) values
(3, 1, 1,"Le Dr Grimesby Roylott et moi-même étions dans l'humble demeure de Sir Arthur Conan Doyle située au nord de Londres, à Clerkenwell. Il avait besoin de notre savoir scientifique pour étayer son dernier roman.", "Une photo des trois compères a été prise par un journaliste hier soir à 21h30 dans la demeure du célèbre écrivain."),
(3, 1, 2,"Vous n'avez pas écouté ce que je viens de vous dire inspecteur ? Interrogez donc Dr Grimesby Roylott et Sir Arthur Conan Doyles.", " La demeure de l'écrivain se situe au nord de Londres, à plus de 5h à cheval de la maison de Marie Mayer."),
(3, 1, 3,"Madame Marie Mayer était mon assistante. Mais si vous voulez mon avis, elle était plus doué pour préparer le thé plutôt que de m'aider dans mes recherches sur la radioactivité de l'uranium. Je suis un très grand scientifique, vous savez, et je batterai le scientifique Becquerel, un français de bas étage si vous voulez mon avis.", " Madame Marie Mayer et le professeur James ont eu une liaison qui a durée plus de deux ans. Mais l'égocentrisme du célèbre scientifique a eu raison de leur amour et madame Marie Mayer a mis fin à leur relation il y a 3 mois de cela. "),
(3, 1, 4,"Oui, je fume la pipe. Du tabac brun. Vous posez d'étranges questions. J'ai quelques doutes sur vos compétences d'enquêteurs.", "C'est en effet du tabac brun contenu dans la pipe du professeur James."),
(3, 1, 5,"Vous plaisantez Dr Watson ? N'avez vous pas remarqué que je marche difficilement ? Je me déplace en fauteuil roulant !", "En effet, on dirait que les chaussures du professeur James sont comme neuves!"),
(3, 1, 6,"J'ai été récupéré des composants pour mes recherches sur la radioactivité de l'uranium. L'usine désafectée est remplie d'anciens composants chimiques.", "Après avoir fouillé la maison du chimiste, nous avons en effet retrouvé des composants de l'usine et ses cahiers de recherche sur l'uranium.");

INSERT INTO reponse_question(personne_id, enigme_id, question_id, reponse, indice) values
(2, 1, 1, "J'étais dans ma maison de campagne situé à Leatherhead dans le comté de Surrey", "Leatherhead est situé à une journée à cheval de la maison de madame Marie"),
(2, 1, 2, "Je vous donne l'autorisation d'interroger ma femme. Elle vous confirmera ma présence.", "Oui inspecteur, nous étions bien dans notre maison de campagne à Leatherhead. Nous sommes parti de Londres le dimanche."),
(2, 1, 3, "Madame Mayer est la cousine de ma femme. Nous ne la cotoyons que très peu.", "Un courrier de la banque a été retrouvé dans la maison de Madame Mayer. Marie Mayer aurait hérité lors du décès de son mari il y a plus de 5 ans d'une somme importante : plus 200 000 sterling ! Marie Mayer n'a pas de descendant. "),
(2, 1, 4, "Oui, je fume des cigares, je ne prends jamais les mêmes.", "W.Baker a en sa possession deux cigares, un contenant du tabac indien, l'autre un tabac mexicain. Serais-ce un indice ?"),
(2, 1, 5, "Je ne comprends pas l'intérêt de votre demande, mais si vous insistez, voilà mes chaussures.", "De la boue. "),
(2, 1, 6, "Je suis rentrée à Londres lundi pour voir ma soeur, Lady Chamberley. Et en effet, elle habite près de cette ancienne usine désafectée", "Mon frère Wilson Baker m'a rendu en effet visite lundi. Nous avons pris le thé. Pourquoi cette question, inspecteur ?");


INSERT INTO utilisateur(pseudo, password) values ("Karl", "1234");
