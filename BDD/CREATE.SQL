CREATE TABLE Utilisateur (
    idUser INT,
    username VARCHAR(50),
    password VARCHAR(255),
    lastConnection DateTime,
    CONSTRAINT USER_PK PRIMARY KEY (idUser)
);

CREATE TABLE Article (
    idArticle INT AUTO_INCREMENT,
    title VARCHAR(50),
    body VARCHAR(MAX),
    image VARCHAR(MAX),
    postedAt DATETIME,
    idUser INT,
    CONSTRAINT ARTICLE_PK PRIMARY KEY (idArticle),
    CONSTRAINT ARTICLE_USER_FK FOREIGN KEY (idUser) REFERENCES User(idUser)
);