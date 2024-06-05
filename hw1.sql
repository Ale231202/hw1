CREATE TABLE users (
	id INTEGER PRIMARY KEY auto_increment,
    nome VARCHAR(30) not null,
    cognome VARCHAR(30) not null,
    nascita DATE,
    email VARCHAR(40) not null unique,
    password VARCHAR(100) not null,
    preferenza VARCHAR(10) not null,
    INDEX new_prf(preferenza),
    FOREIGN KEY(preferenza) REFERENCES preferenze(tipo_preferenza),
    newsletter BOOLEAN
);

CREATE TABLE preferenze (
	tipo_preferenza VARCHAR(10) PRIMARY KEY
);