BEGIN TRANSACTION;

DROP TABLE IF EXISTS infosJeu;

CREATE TABLE infosJeu
  (NumJeu	INTEGER	NOT NULL,
   Nom		TEXT NOT NULL,
   Prix		INTEGER NOT NULL,
   DateSortie	TEXT NULL,
   Style	TEXT NULL,
   Editeur	TEXT NOT NULL,
   PEGI		INTEGER NOT NULL,
   Langue	TEXT NULL,
   NumPlateforme INTEGER NOT NULL,
   PRIMARY KEY (NumPlateforme,NumJeu)
  );

INSERT INTO InfosJeu VALUES(1,'Tom Clancys Rainbow Six: Siege',10,'7 avril 2015','shooter','Ubisoft',18,'Français',1);
INSERT INTO InfosJeu VALUES(2,'GTAV',10,'17 septembre 2013','action/avanture','Rockstar Games',18,'Français/Anlgais',1);
INSERT INTO InfosJeu VALUES(3,'Assassins Creed Valhalla',40,'10 novembre 2020','action/avanture','Ubisoft',18,'Français',2);
INSERT INTO InfosJeu VALUES(4,'Resident Evil Village',50,'18 avril 2021','survival horror','Capcom',18,'Français',2);
INSERT INTO InfosJeu VALUES(5,'FIFA 21',25,'5 octobre 2020','sport','Electronic Arts',3,'Français',3);
INSERT INTO InfosJeu VALUES(6,'NBA 2K21',70,'4 septembre 2020','sport','2K Sports',3,'Français/Anlgais',3);

DROP TABLE IF EXISTS infosClient;

CREATE TABLE infosClient
  (NumClient INTEGER NOT NULL,
   Nom TEXT NOT NULL,
   MDP TEXT	NOT NULL,
   AdresseMail TEXT NOT NULL,
   NumPanier INTEGER	NOT NULL,
   PRIMARY KEY (NumPanier,NumCLient)
  );

INSERT INTO InfosClient VALUES(456781,'Jean Poirier','azerty','jean.poirier@gmail.com',94642);
INSERT INTO InfosClient VALUES(456782,'Alfred Bleu','12345','alfred.bleu@gmail.com',94643);
INSERT INTO InfosClient VALUES(456783,'Michel Rouge','michel33160','michel.rouge@gmail.com',94644);
INSERT INTO InfosClient VALUES(456784,'Enzo Vert','djiqzj2732','enzo.vert@gmail.com',94645);

DROP TABLE IF EXISTS infosPayement;

CREATE TABLE infosPayement
  (NumCommande INTEGER	NOT NULL,
   NumCarte	TEXT NOT NULL,
   CVC INTEGER NOT NULL,
   DateExpiration	TEXT NOT NULL,
   PRIMARY KEY (NumCommande)
  );

INSERT INTO InfosPayement VALUES(786632,'1234 1234 1234 1234',932,'23/04/2022');
INSERT INTO InfosPayement VALUES(786633,'2345 2345 2345 2345',933,'24/04/2022');
INSERT INTO InfosPayement VALUES(786634,'3456 3456 3456 3456',934,'25/04/2023');
INSERT INTO InfosPayement VALUES(786635,'4567 4567 4567 4567',935,'26/04/2023');


DROP TABLE IF EXISTS panier;

CREATE TABLE panier
  (NumPanier INTEGER	NOT NULL,
   Quantité	INTEGER NOT NULL,
   PrixTot	INTEGER NOT NULL,
   NumClient INTEGER NOT NULL,
   NumJeu	INTEGER NOT NULL,
   PRIMARY KEY (NumCLient,NumJeu,NumPanier)
  );

INSERT INTO Panier VALUES(09231,1,40,456781,3);
INSERT INTO Panier VALUES(09232,1,10,456782,1);
INSERT INTO Panier VALUES(09233,1,50,456783,4);
INSERT INTO Panier VALUES(09234,1,70,456784,6);

DROP TABLE IF EXISTS infosEditeur;

CREATE TABLE infosEditeur
  (NumEditeur	INTEGER NOT NULL,
   Nom	TEXT NOT NULL,
   DateCreation	TEXT NOT NULL,
   Style	TEXT NULL,
   PRIMARY KEY (NumEditeur)
  );

INSERT INTO InfosEditeur VALUES(231,'Ubisoft','12 mars 1986','action/avanture');
INSERT INTO InfosEditeur VALUES(232,'Rockstar Games','décembre 1998','action/avanture');
INSERT INTO InfosEditeur VALUES(233,'Capcom','30 mai 1979','survival horror');
INSERT INTO InfosEditeur VALUES(234,'Electronic Arts','27 mai 1982','sport');
INSERT INTO InfosEditeur VALUES(235,'2K Sports','25 janvier 2005','sport');

DROP TABLE IF EXISTS infosplateforme;

CREATE TABLE infosPLateforme
  (NumPlateforme INTEGER NOT NULL,
   NomPlat TEXT NOT NULL,
   PRIMARY KEY (NumPlateforme)
  );

INSERT INTO InfosPLateforme VALUES(1,'PC');
INSERT INTO InfosPLateforme VALUES(2,'PS4');
INSERT INTO InfosPLateforme VALUES(3,'XboxONE');

DROP TABLE IF EXISTS achat;

CREATE TABLE achat
  (NumAchat INTEGER NOT NULL,
   NumJeu		INTEGER NOT NULL,
   Quantité	INTEGER NOT NULL,
   NumClient INTEGER NOT NULL,
   PRIMARY KEY (NumCLient,NumJeu,NumAchat)
  );

INSERT INTO Achat VALUES(7652,3,1,456781);
INSERT INTO Achat VALUES(7652,1,1,456782);
INSERT INTO Achat VALUES(7652,4,1,456783);
INSERT INTO Achat VALUES(7652,6,1,456784);

COMMIT;
