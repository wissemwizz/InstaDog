-- VDC

CREATE DATABASE InstaDog; 

CREATE USER 'adminInstadog'@'localhost' IDENTIFIED BY 'Inst@D0g';
GRANT ALL ON Instadog.* TO 'adminInstadog'@'localhost';
FLUSH PRIVILEGES;

CREATE TABLE User
(
    id INT (100) AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    userName VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    dateConnect DATE  NOT NULL,
    mailAdress VARCHAR (255)
);

CREATE TABLE Dog
(
    id INT (100) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    race VARCHAR(50) NOT NULL,
    mix BOOLEAN,
    birthdate DATE,
    sex VARCHAR,
    image VARCHAR (255),
    userId INT(100),
  FOREIGN KEY (userId) REFERENCES User(id) 
);

CREATE TABLE Article
(
    id INT (100) AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) NOT NULL,
    text VARCHAR (255),
    publicationDate VARCHAR (50),
    dogId INT (100),
    FOREIGN KEY (dogId) REFERENCES Dog(id)
);

CREATE TABLE Comment 
(
    id INT (100) AUTO_INCREMENT PRIMARY KEY,
    text VARCHAR(255) NOT NULL,
    publicationDate VARCHAR (255),
    userId INT (100),
    FOREIGN KEY (userId) REFERENCES User(id),
    articleId INT (100),
    FOREIGN KEY (articleId) REFERENCES Article(id)
);

CREATE TABLE raceDog 
(
    id INT (100) AUTO_INCREMENT PRIMARY KEY,
    race VARCHAR(255) NOT NULL
);
INSERT INTO raceDog (race) VALUES ("Affenpinscher"), ("Aïdi"), ("Aïnou "),("Airedale Terrier"), ("Akbash"), ("Akita Inu"), ("Akita américain"), ("Alangu Mastiff"), ("Alano espagnol "),("Alapaha Blue Blood Bulldog"), ("Alaskan Klee Kai "), ("Alaunt"),
("Alopekis"), ("American Bully"), ("American Hairless terrier "),("Anglo-Français de petite vénerie"), ("Ariegeois"), ("Armant dog"),
("Bangkaew de Thaïlande"), ("Barbet"), ("Basset artésien normand "),("Basset d'Artois"), ("Basset bleu de Gascogne"), ("Basset des Alpes"),
("Basset fauve de Bretagne"), ("Basset hound"), ("Basset suédois "),("Basset de Westphalie"), ("Beagle"), ("Beagle-Harrier"),
("Beaglier "), ("Bedlington Terrier"), ("Berger allemand  "),("Berger d'Anatolie"), ("Berger anglais ancestral"), ("Berger d'Asie centrale"),
("Berger australien "), ("Berger d'Auvergne"), ("Berger basque "),("Berger de Beauce"), ("Berger belge"), ("Berger de Bergame "),
("Berger blanc suisse"), ("Berger de Bosnie-Herzégovine et de Croatie "), ("Berger de Brie "),("Berger catalan"), ("Berger du Caucase"), ("Berger croate"),
("Berger finnois de Laponie"), ("Berger hollandais "), ("Berger islandais "),("Berger du Karst"), ("Berger de Majorque"), ("Berger de la Maremme et des Abruzzes "),
("Berger picard "), ("Berger polonais de plaine "), ("Berger Portugais  "),("Berger des Pyrénées"), ("Berger de Russie méridionale"), ("Berger de Savoie "),
("Berger de Shiloh"), ("Berger des Shetland "), ("Berger des Tatras  "),("Berger yougoslave de Charplanina"), ("Bichon à poil frisé"), ("Bichon bolonais"),
("Billy"), ("Bluetick coonhound"), ("Boerboel "),("Border collie"), ("Border Terrier"), ("Bouledogue|Bouledogue français"),
("Bouvier australien"), ("Bouvier australien à courte queue"), ("Bouvier bernois "),("Bouvier de l’Appenzell"), ("Bouvier de l'Entlebuch"), ("Bouvier des Ardennes"),
("Bouvier des Flandres"), ("Boxer"), ("Boykin Spaniel "),("Brachet allemand"), ("Brachet noir et feu"), ("Brachet de Styrie à poil dur"),
("Brachet polonais"), ("Brachet tyrolien"), ("Braque Allemand|Braque allemand à poil court "),("Braque d'Auvergne"), ("Braque de Burgos"), ("Braque de l’Ariège"),
("Braque du Bourbonnais"), ("Braque français"), ("Braque de Weimar "),("Braque hongrois à poil court"), ("Braque italien"), ("Braque portugais"),
("Braque Saint-Germain"), ("Broholmer"), ("Bruno du Jura "),("Buhund norvégien"), ("Bull Boxer"), ("Bull Terrier"),
("Bulldog anglais"), ("Cairn Terrier"), ("Caniche "),("Caniche Royal Bicolore"), ("Carlin"), ("Cockapoo"),
("Colley"), ("Dalmatien"), ("Dandie Dinmont Terrier "),("Deerhound"), ("Dingo"), ("Dogue du Tibet"),
("Dobermann"), ("Dogue allemand"), ("Dogue argentin "),("Dogue de Bordeaux"), ("Dogue des Canaries"), ("Dogue de Majorque]"),
("English Coonhound"), ("Épagneul"), ("Grand Münsterländer"),("Petit Münsterländer]"), ("Papillon"), ("Field Spaniel]"),
("Fila Brasileiro"), ("Foxhound anglais"), ("Fox Terrier "),("Griffon"), ("Barbu tchèque"), ("Harrier"),
("Jack Russell Terrier"), ("Jindo coréen"), ("Kai "),("Keeshond"), ("King Charles Spaniel"), ("Kishu"),
("Komondor"), ("Kooikerhondje"), ("Koolie "),("Kromfohrländer"), ("Kuvasz"), ("Labernois"),
("Labradinger"), ("Labradoodle"), ("Labrador "),("Laïka de Sibérie occidentale"), ("Lakeland Terrier"), ("Landseer"),
("Leonberg"), ("Levesque"), ("Petit lévrier italien "),("Lévrier afghan"), ("Lévrier arabe"), ("Lévrier australien"),
("Azawakh"), ("Lévrier Bakhmull"), ("Podenco d'Ibiza "),("Chien de garenne des Canaries"), ("Caravan hound"), ("Lévrier Chortaj"),
("Deerhound"), ("Lévrier Galgo"), ("Lévrier grec "),("Lévrier greyhound"), ("Lévrier hongrois"), ("Irish wolfhound"),
("Saluki"), ("Lévrier de Pharaon"), ("Chart polski "),("Lévrier Rampur"), ("Barzoï"), ("Lévrier whippet"),
("Lhassa Apso"), ("Loulou de Poméranie"), ("Lurcher "),("Malamute d'Alaska"), ("Manchester terrier"), ("Mastiff"),
("Mâtin de l'Alentejo"), ("Norfolk Terrier"), ("Old English Bulldog "),("Pékinois"), ("Perro fino Colombiano"), ("Petit basset griffon Vendéen"),
("Petit bleu de Gascogne"), ("Petit brabancon"), ("Pointer anglais "),("Poitevin"), ("Pomsky"), ("Porcelaine"),
("Pudelpointer"), ("Puggle"), ("Puli "),("Pumi"), ("Ratier de Prague"), ("Redbone Coonhound"),
("Chesapeake Bay Retriever"), ("Labrador Retriever"), ("Retriever de la Nouvelle-Écosse "),("Retriever à poil bouclé"), ("Flat-Coated Retriever"), ("Rhodesian Ridgeback"),
("Sabueso español"), ("Saint-bernard"), ("Samoyède "),("Schapendoes néerlandais"), ("Schillerstövare"), ("Schipperke"),
("Schnauzer"), ("Schnauzer nain"), ("Schnauzer moyen "),("Schnauzer géant"), ("Schweizer Laufhund"), ("Sealyham Terrier"),
("Setter"), ("Shar Pei"), ("Shiba "),("Shih Tzu"), ("Shikoku"), ("Skye Terrier"),
("Smous des Pays-Bas"), ("Spitz allemand"), ("spitz moyen "),("Petit spitz"), ("Spitz de Norrbotten"), ("Spitz des Visigoths"),
("Spitz finlandais"), ("Volpino italien"), ("Spitz japonais "),("Spitz-loup"), ("Staffie"), ("American Staffordshire Terrier"),
("Sussex Spaniel"), ("Talbot"), ("Tamaskan "),("Tchouvatch slovaque"), ("Teckel"), ("Terre-neuve"),
("Terrier australien"), ("Terrier brésilien"), ("Terrier de Boston "),("Parson russel terrier"), ("Terrier écossais"), ("Welsh terrier"),
("Glen of Imaal Terrier"), ("Terrier irlandais"), ("Terrier japonais "),("Terrier Kerry Blue"), ("Terrier tibétain"), ("West Highland White Terrier"),
("Welsh Corgi Cardigan"), ("Welsh Corgi Pembroke"), ("Welsh Springer Spaniel "),("West Highland White Terrier"), ("Yorkillon"), ("Yorkshire Terrier"),
("Yorkshire teacup"), ("Zuchon");