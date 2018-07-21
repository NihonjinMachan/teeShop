DROP TABLE Purchase;
DROP TABLE Product;
DROP TABLE Customer;



CREATE TABLE Customer (
custID INT PRIMARY KEY AUTO_INCREMENT,
userName VARCHAR(12),
password VARCHAR(50),
email VARCHAR(25),
customerPoints INT
)ENGINE=INNODB;

CREATE TABLE Product (
productID INT PRIMARY KEY AUTO_INCREMENT,
productName VARCHAR(50),
imgSrc VARCHAR(50),
bimgSrc VARCHAR(50),
description VARCHAR(500),
price INT,
loyaltyPoints INT
)ENGINE=INNODB;

CREATE TABLE Purchase (
custID INT,
productID INT,
PRIMARY KEY (custID, productID),
FOREIGN KEY (custID) REFERENCES Customer (custID),
FOREIGN KEY (productID) REFERENCES Product (productID) 
)ENGINE=INNODB;

INSERT INTO Product VALUES (null, 'Alien T-Shirt', 'images/1272x920shirt_guys_03.jpg', 'images/bAlienshirt.jpg', 'A cool alien t-shirt for all ages and science fiction lovers. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel libero id urna tempor semper. Quisque convallis dui a purus ornare scelerisque vitae sit amet lacus.', 70, 1);
INSERT INTO Product VALUES (null, 'Lord of the Rings T-shirt ', 'images/1272x920shirt_guys_01.jpg', 'images/bLotr.jpg', 'A cool alien t-shirt for all ages and science fiction lovers. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel libero id urna tempor semper. Quisque convallis dui a purus ornare scelerisque vitae sit amet lacus.', 85, 7);
INSERT INTO Product VALUES (null, 'Mario T-Shirt', 'images/mario.jpg', 'images/bMario.jpg', 'A cool alien t-shirt for all ages and science fiction lovers. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel libero id urna tempor semper. Quisque convallis dui a purus ornare scelerisque vitae sit amet lacus.', 80, 6);
INSERT INTO Product VALUES (null, 'Assassins Creed T-Shirt', 'images/gameing.jpg', 'images/bAc.jpg', 'A cool alien t-shirt for all ages and science fiction lovers. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel libero id urna tempor semper. Quisque convallis dui a purus ornare scelerisque vitae sit amet lacus.', 90, 8);
INSERT INTO Product VALUES (null, 'Gaming T-Shirt', 'images/gaming.jpg', 'images/bGame.jpg', 'A cool alien t-shirt for all ages and science fiction lovers. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel libero id urna tempor semper. Quisque convallis dui a purus ornare scelerisque vitae sit amet lacus.', 75, 2);
INSERT INTO Product VALUES (null, 'Zelda T-Shirt', 'images/gaming3.jpg', 'images/bZelda.jpg', 'A cool alien t-shirt for all ages and science fiction lovers. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel libero id urna tempor semper. Quisque convallis dui a purus ornare scelerisque vitae sit amet lacus.', 95, 10);