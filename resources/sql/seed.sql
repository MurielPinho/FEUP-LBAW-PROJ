DROP TABLE IF EXISTS address;
DROP TABLE IF EXISTS paymentMethod;
DROP TABLE IF EXISTS orderTotal;
DROP TABLE IF EXISTS orderedProduct;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS answer;
DROP TABLE IF EXISTS cupon;
DROP TABLE IF EXISTS whishlist;
DROP TABLE IF EXISTS promotion;
DROP TABLE IF EXISTS cartProduct;
DROP TABLE IF EXISTS question;
DROP TABLE IF EXISTS product;
DROP TABLE IF EXISTS buyer;
DROP TABLE IF EXISTS category;


-- Tables

CREATE TABLE category(
	id SERIAL PRIMARY KEY,
	name TEXT UNIQUE NOT NULL

);

CREATE TABLE buyer (
    id SERIAL PRIMARY KEY,
    name text NOT NULL,
    email text NOT NULL CONSTRAINT user_email_uk UNIQUE,
    phoneNumber text NOT NULL,
    password text NOT NULL,
    isAdmin BOOLEAN DEFAULT false
);

CREATE TABLE product (
    id SERIAL PRIMARY KEY,
    name text NOT NULL,
    price INTEGER NOT NULL,
    category_id INTEGER REFERENCES category,
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
    buyer_id INTEGER NOT NULL REFERENCES buyer (id) ON DELETE CASCADE ON UPDATE CASCADE,
    product_id INTEGER NOT NULL REFERENCES product (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE orderedProduct (
    id SERIAL PRIMARY KEY,
    buyer_id INTEGER NOT NULL REFERENCES buyer (id) ON DELETE CASCADE ON UPDATE CASCADE,
    product_id INTEGER NOT NULL REFERENCES product (id) ON DELETE CASCADE ON UPDATE CASCADE,
    quantity INTEGER NOT NULL
);

CREATE TABLE review (
    id SERIAL PRIMARY KEY,
    buyer_id INTEGER NOT NULL REFERENCES buyer (id) ON DELETE CASCADE ON UPDATE CASCADE,
    product_id INTEGER NOT NULL REFERENCES product (id) ON DELETE CASCADE ON UPDATE CASCADE,
    message text NOT NULL,
    rating INTEGER NOT NULL CONSTRAINT rating_ck CHECK (((rating > 0) OR (rating <= 5)))

);

CREATE TABLE question (
    id SERIAL PRIMARY KEY,
    message text NOT NULL,
    buyer_id INTEGER NOT NULL REFERENCES buyer (id) ON DELETE CASCADE ON UPDATE CASCADE,
    product_id INTEGER NOT NULL REFERENCES product (id) ON DELETE CASCADE ON UPDATE CASCADE
);




CREATE TABLE answer (
    id SERIAL PRIMARY KEY,
    answerText text NOT NULL,
    question_id INTEGER NOT NULL REFERENCES question (id) ON DELETE CASCADE ON UPDATE CASCADE,
    buyer_id INTEGER NOT NULL REFERENCES buyer (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE cupon (
	id SERIAl PRIMARY KEY,
	name text NOT NULL,
	discount INTEGER NOT NULL CONSTRAINT discoun_ck CHECK (discount > 0),
	validUntil TIMESTAMP NOT NULL DEFAULT NOW()
);

CREATE TABLE cartproduct(
    id SERIAL PRIMARY KEY,
	buyer_id INTEGER NOT NULL REFERENCES buyer (id) ON DELETE CASCADE ON UPDATE CASCADE,
	product_id INTEGER NOT NULL REFERENCES product (id) ON DELETE CASCADE ON UPDATE CASCADE,
	quantity INTEGER NOT NULL CONSTRAINT quantity_ck CHECK (quantity > 0)

);

CREATE TABLE whishlist(
	buyer_id INTEGER NOT NULL REFERENCES buyer (id) ON DELETE CASCADE ON UPDATE CASCADE,
	product_id INTEGER NOT NULL REFERENCES product (id) ON DELETE CASCADE ON UPDATE CASCADE,
	PRIMARY KEY (buyer_id,product_id)

);



CREATE TABLE promotion(
	id SERIAL PRIMARY KEY,
	discount INTEGER NOT NULL CONSTRAINT discount2_ck CHECK (discount > 0),
	validUNTIL TIMESTAMP NOT NULL DEFAULT NOW()

);

insert into address (city, postalcard, door, address) values ('Kōfu-shi', '955-624', '21', 'Fuller');


insert into buyer (name, email, phonenumber, password) values ('Etta Shingles', 'eshingles0@bing.com', '6643028663', 'a0HnX7J');
insert into buyer (name, email, phonenumber, password) values ('ola', 'ola@teste.com', '3424242342', 'a0HnX7J');
insert into buyer (name, email, phonenumber, password,isAdmin) values ('emantrigo', 'emantrigo@hotmail.com', '3424242342', '$2y$10$AKKnQyFYTpwlvJHdJMEazOUGCLvdRqn17FhCQ.ra0nHM3Z0qLdAs.',true);



insert into category ( name) values ('Smartphone');
insert into category ( name) values ('Mouse');
insert into category ( name) values ('Notebook');
insert into category ( name) values ('Wearable');
insert into category ( name) values ('Headset');
insert into category ( name) values ('Graphics Card');
insert into category ( name) values ('Storage');
insert into category ( name) values ('Keyboard');
insert into category ( name) values ('Motherboard');
insert into category ( name) values ( 'RAM');

insert into cupon ( name, discount, validUntil) values ('Alpha', 5, '2021-04-26 18:06:54');
insert into cupon ( name, discount, validUntil) values ('Tresom', 21, '2021-04-24 03:43:36');
insert into cupon ( name, discount, validUntil) values ('Fixflex', 9, '2021-05-13 15:09:46');
insert into cupon ( name, discount, validUntil) values ('Cardify', 1, '2021-05-26 05:09:25');
insert into cupon ( name, discount, validUntil) values ('Namfix', 21, '2021-06-01 23:02:49');
insert into cupon ( name, discount, validUntil) values ('Flexidy', 15, '2021-06-08 04:35:13');
insert into cupon ( name, discount, validUntil) values ('Home Ing', 8, '2021-05-28 07:44:39');
insert into cupon ( name, discount, validUntil) values ('Cookley', 16, '2021-06-10 16:51:52');
insert into cupon ( name, discount, validUntil) values ('Cookley', 15, '2021-05-09 04:04:20');
insert into cupon ( name, discount, validUntil) values ( 'Bytecard', 16, '2021-04-24 23:20:54');

insert into product ( name, price, category_id, description, quantity) values ('Steelseries Aerox 3 RGB', 110, 1, 'Mouse', 25);
insert into product ( name, price, category_id, description, quantity) values ('HyperX Cloud II', 85, 5, 'Headset', 34);
insert into product ( name, price, category_id, description, quantity) values ('Xiaomi Poco F3', 400, 1, 'Smartphone', 45);
insert into product ( name, price, category_id, description, quantity) values ('Crucial Ballistix 8GB DDR4-2666MHz', 42, 10, 'RAM', 31);


insert into paymentMethod ( cardnumber, securityCode, expirationDate) values ('3570580897969528', '287', '2024-02-19 23:03:05');
insert into paymentMethod ( cardnumber, securityCode, expirationDate) values ('3572471383449183', '842', '2022-06-13 08:49:38');
insert into paymentMethod ( cardnumber, securityCode, expirationDate) values ('3547550174085413', '609', '2025-03-23 15:01:58');

insert into orderTotal ( date, total, paymentMethod, buyer_id, product_id) values ('1/17/2021', 811.78, 1, 1,1);



insert into whishlist (buyer_id, product_id) values (1, 1);

insert into question ( message, buyer_id, product_id) values ('Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam.', 1, 1);
insert into question ( message, buyer_id, product_id) values ( 'Maecenas ut massa quis augue luctus tincidunt.', 2, 1);


insert into answer ( answerText, question_id, buyer_id) values ('Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla.', 1, 1);


insert into promotion ( discount, validUNTIL) values (24, '2022-01-31 06:01:08');
insert into promotion ( discount, validUNTIL) values (25, '2023-11-01 04:17:17');
insert into promotion ( discount, validUNTIL) values (5, '2022-09-08 05:11:42');
insert into promotion ( discount, validUNTIL) values (11, '2022-07-20 02:24:44');
insert into promotion ( discount, validUNTIL) values (22, '2021-09-23 19:55:45');
insert into promotion ( discount, validUNTIL) values (17, '2024-02-22 07:57:37');
insert into promotion ( discount, validUNTIL) values (23, '2023-11-01 01:08:22');
insert into promotion ( discount, validUNTIL) values (3, '2024-02-22 09:50:07');
insert into promotion ( discount, validUNTIL) values (20, '2022-01-17 15:02:52');
insert into promotion ( discount, validUNTIL) values ( 9, '2021-06-03 05:33:22');

insert into review (buyer_id, product_id, message, rating) values (1, 1, 'Etiam vel augue.', 4);
insert into review (buyer_id, product_id, message, rating) values (2, 1, 'Etiam vel augue.', 5);
insert into review (buyer_id, product_id, message, rating) values (3, 1, 'Etiam vel augue.', 3);

insert into orderedProduct (buyer_id, product_id, quantity) values (1, 1, 2);
insert into orderedProduct (buyer_id, product_id, quantity) values (1, 2, 3);

insert into cartProduct (buyer_id, product_id, quantity ) values (1, 1, 3);
insert into cartProduct (buyer_id, product_id, quantity ) values (1, 2, 1);
insert into cartProduct (buyer_id, product_id, quantity ) values (2, 1, 1);
insert into cartProduct (buyer_id, product_id, quantity ) values (2, 2, 1);



