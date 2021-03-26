DROP TABLE IF EXISTS buyer;
DROP TABLE IF EXISTS product;
DROP TABLE IF EXISTS address;
DROP TABLE IF EXISTS paymentMethod;
DROP TABLE IF EXISTS orderTotal;
DROP TABLE IF EXISTS orderedProduct;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS question;
DROP TABLE IF EXISTS answer;
DROP TABLE IF EXISTS admin;

-- Types
 
CREATE TYPE media AS ENUM ('CD', 'DVD', 'VHS', 'Slides', 'Photos', 'MP3');
 
-- Tables

CREATE TABLE buyer (
    id SERIAL PRIMARY KEY,
    name text NOT NULL,
    email text NOT NULL CONSTRAINT user_email_uk UNIQUE,
    phoneNumber INTEGER NOT NULL
);
 
CREATE TABLE product (
    id SERIAL PRIMARY KEY,
    name text NOT NULL,
    price INTEGER NOT NULL,
    category text NOT NULL,
    description text NOT NULL,
    quantity INTEGER NOT NULL
);
 
CREATE TABLE address (
    id SERIAL PRIMARY KEY,
    city text NOT NULL,
    postalcard text NOT NULL,
    door text,
    address text NOT NULL
);
 
CREATE TABLE paymentMethod (
    id SERIAL PRIMARY KEY,
    cardNumber text NOT NULL,
    securityCode text NOT NULL,
    expirationDate TIMESTAMP WITH TIME zone NOT NULL
);
 
CREATE TABLE orderTotal (
    id SERIAL PRIMARY KEY,
    date TIMESTAMP WITH TIME zone NOT NULL,
    total FLOAT NOT NULL,
    paymentMethod text NOT NULL,
    id_buyer INTEGER NOT NULL REFERENCES buyer (id) ON UPDATE CASCADE,
    id_product INTEGER NOT NULL REFERENCES product (id) ON UPDATE CASCADE
);
 
CREATE TABLE orderedProduct (
    id_buyer INTEGER NOT NULL REFERENCES buyer (id) ON UPDATE CASCADE,
    id_product INTEGER NOT NULL REFERENCES product (id) ON UPDATE CASCADE,
    PRIMARY KEY (id_buyer, id_product),
    quantity INTEGER NOT NULL
);
 
CREATE TABLE review (
    id_buyer INTEGER NOT NULL REFERENCES buyer (id) ON UPDATE CASCADE,
    id_product INTEGER NOT NULL REFERENCES product (id) ON UPDATE CASCADE,
    PRIMARY KEY (id_buyer, id_product),
    reviewText text NOT NULL,
    date TIMESTAMP WITH TIME zone NOT NULL,
    rating INTEGER NOT NULL CONSTRAINT rating_ck CHECK (((rating > 0) OR (rating <= 5)))

);
 
CREATE TABLE question (
    id SERIAL PRIMARY KEY,
    questionText text NOT NULL,
    date TIMESTAMP WITH TIME zone NOT NULL,
    id_buyer INTEGER NOT NULL REFERENCES buyer (id) ON UPDATE CASCADE,
    id_product INTEGER NOT NULL REFERENCES product (id) ON UPDATE CASCADE
);
 

 
CREATE TABLE admin (
	id SERIAL PRIMARY KEY,
    name text NOT NULL,
    email text NOT NULL CONSTRAINT admin_email_uk UNIQUE,
    password text NOT NULL,
    phoneNumber INTEGER NOT NULL,
    super BOOLEAN DEFAULT False NOT NULL
);

CREATE TABLE answer (
    id SERIAL PRIMARY KEY,
    answerText text NOT NULL,
    date TIMESTAMP WITH TIME zone NOT NULL,
    id_question INTEGER NOT NULL REFERENCES question (id) ON UPDATE CASCADE,
    id_admim INTEGER NOT NULL REFERENCES admin (id) ON UPDATE CASCADE
);
