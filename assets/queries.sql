
CREATE TABLE car_company
(
company_id INT
auto_increment PRIMARY KEY, 
company_name VARCHAR
(20)
);


INSERT INTO car_company
(company_name)
VALUES
("Mazda"),
("Subaru"),
("Mitsubishi"),
("Toyota"),
("Honda"),
("Nissan");


CREATE TABLE car_model
(
model_id INT
auto_increment PRIMARY KEY,
model_name VARCHAR
(20),
company_id INT,
FOREIGN KEY
(company_id) REFERENCES car_company
(company_id)
);


INSERT INTO car_model
(model_name, company_id)
VALUES
("MAZDA3", 1),
("MAZDA6", 1),
("CX-3", 1),
("MX-5", 1),
("BT-50", 1);

INSERT INTO car_model
(model_name, company_id)
VALUES
("Ascent", 2),
("BRZ", 2),
("Forester", 2),
("Impreza", 2),
("Legacy", 2);

INSERT INTO car_model
(model_name, company_id)
VALUES
("Outlander", 3),
("Lancer", 3),
("Pajero", 3),
("Mirage", 3),
("Attrage", 3);


INSERT INTO car_model
(model_name, company_id)
VALUES
("Avalon", 4),
("Camry", 4),
("Corolla", 4),
("Highlander", 4),
("Land Cruiser", 4);


INSERT INTO car_model
(model_name, company_id)
VALUES
("Accord", 5),
("Amaze", 5),
("Avancier", 5),
("Ballade", 5),
("Civic", 5);


INSERT INTO car_model
(model_name, company_id)
VALUES
("Altima", 6),
("Armada", 6),
("Frontier", 6),
("Kicks", 6),
("Maxima", 6);


create table car_rental
(
rental_id int
auto_increment primary key,
rental_fromdate varchar
(20), 
rental_todate varchar
(20), 
model_name varchar
(100),
rental_fullname varchar
(100),
rental_age varchar
(10),
rental_phone varchar
(100),
rental_email varchar
(100),
rental_driver_fullname varchar
(100),
rental_driver_age varchar
(100)
);