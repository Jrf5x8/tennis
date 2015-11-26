CREATE TABLE users (
    id int auto_increment primary key,
    username varchar(50),
    password varchar(50)
    );


CREATE TABLE addresses (
    addrID INT AUTO_INCREMENT PRIMARY KEY,
    street VARCHAR(50),
    city VARCHAR(50),
    state VARCHAR(50),
    zipcode VARCHAR(10)

);

CREATE TABLE person (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50),
    lname VARCHAR(50),
    phoneNumber VARCHAR(12),
    addrID INT,
    isDirector BOOLEAN,
    isPlayer BOOLEAN,
    FOREIGN KEY(addrID) REFERENCES addresses(addrID) ON DELETE CASCADE,
    FOREIGN KEY(id) REFERENCES users(id)

);

    
CREATE TABLE tournaments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    addrID INT,
    director INT,
    date DATE,
    FOREIGN KEY(addrID) REFERENCES addresses(addrID),
    FOREIGN KEY(director) REFERENCES person(id)
);

CREATE TABLE tournamentDirectors (
    id INT,
    tournID INT,
    FOREIGN KEY(id) REFERENCES person(id),
    FOREIGN KEY(tournID) REFERENCES tournaments(id),
    PRIMARY KEY (id, tournID)
);

CREATE TABLE matches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    tournID INT,
    player1 INT,
    player2 INT,
    winner INT,
    score VARCHAR(10),
    FOREIGN KEY(tournID) REFERENCES tournaments(id),
    FOREIGN KEY(player1) REFERENCES person(id),
    FOREIGN KEY(player1) REFERENCES person(id),
    FOREIGN KEY(winner) REFERENCES person(id)
);


INSERT INTO users (username, password) VALUES ('phil', 'test');
INSERT INTO users (username, password) VALUES ('Jack', 'test');
INSERT INTO users (username, password) VALUES ('Daniel', 'test');
INSERT INTO users (username, password) VALUES ('Ford', 'test');
INSERT INTO users (username, password) VALUES ('Jacob', 'test');
INSERT INTO users (username, password) VALUES ('Alex', 'test');
INSERT INTO users (username, password) VALUES ('Billy', 'test');


INSERT INTO addresses (street, city, state, zipcode) VALUES ('Rainbow Trout', 'Columbia', 'MO', '65203');
INSERT INTO addresses (street, city, state, zipcode) VALUES ('Steeplechase', 'Columbia', 'MO', '65203');
INSERT INTO addresses (street, city, state, zipcode) VALUES ('Vistaview', 'Columbia', 'MO', '65203');
INSERT INTO addresses (street, city, state, zipcode) VALUES ('Sabine', 'Columbia', 'MO', '65203');
INSERT INTO addresses (street, city, state, zipcode) VALUES ('Thornbrook Terrace', 'Columbia', 'MO', '65203');
INSERT INTO addresses (street, city, state, zipcode) VALUES ('Highway 163', 'Columbia', 'MO', '65203');
INSERT INTO addresses (street, city, state, zipcode) VALUES ('Shire', 'Columbia', 'MO', '65203');
INSERT INTO addresses (street, city, state, zipcode) VALUES ('Woodrail', 'Columbia', 'MO', '65203');



INSERT INTO person (fname, lname, phoneNumber, addrID, isDirector, isPlayer) VALUES ('Phil', 'Baillos', '5731112222', 1, 1, 0);
INSERT INTO person (fname, lname, phoneNumber, addrID, isDirector, isPlayer) VALUES ('Jack', 'Fay', '5734246735', 2, 0, 1);
INSERT INTO person (fname, lname, phoneNumber, addrID, isDirector, isPlayer) VALUES ('Daniel', 'Liu', '5731112223', 3, 0, 1);
INSERT INTO person (fname, lname, phoneNumber, addrID, isDirector, isPlayer) VALUES ('Ford', 'Zitsch', '5731112224', 4, , 1);
INSERT INTO person (fname, lname, phoneNumber, addrID, isDirector, isPlayer) VALUES ('Jacob', 'Winton', '5731112225', 5, 0, 1);
INSERT INTO person (fname, lname, phoneNumber, addrID, isDirector, isPlayer) VALUES ('Billy', 'Swift', '5731112226', 6, 0, 1);
INSERT INTO person (fname, lname, phoneNumber, addrID, isDirector, isPlayer) VALUES ('Alex', 'Jones', '5731112227', 7, 0, 1);


INSERT INTO tournaments (name, addrID, director, date) VALUES ('Columbia Open', 8, 1, '2014-08-13');
INSERT INTO tournamentdirectors(id, tournID) VALUES (1, 1);
INSERT INTO matches(date, tournID, player1, player2, winner, score) VALUES ('2014-08-13', 1, 2, 3, 2, '6-4 6-1');
