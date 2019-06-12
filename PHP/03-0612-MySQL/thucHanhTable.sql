-- tao kho aptech
CREATE DATABASE aptech_php_18_PGKhanh;
-- tao bang
CREATE TABLE aptech_php_18_PGKhanh.users(
	id int,
	name varchar(50),
	email varchar(255),
	phone varchar(12)
);
-- them du lieu
INSERT INTO aptech_php_18_PGKhanh.users(id,name) value (1,'	Cardinal');
INSERT INTO aptech_php_18_PGKhanh.users(email,phone) value ('Nullam.vitae.diam@lorem.org','08454646');
INSERT INTO aptech_php_18_PGKhanh.users(id,name,email,phone) value (3,'Zeus Kirk','	et.risus@metus.co.uk','08000625853');
-- xem du lieu
SELECT * FROM aptech_php_18_PGKhanh.users;
-- Xoa bang
DROP
-- Xoa DU LIEU	
-- DELETE
DELETE FROM aptech_php_18_PGKhanh.users Where id=3;
-- Sua DU LIEU
-- UPDATE

UPDATE aptech_php_18_PGKhanh.users
SET email='tellus@Donecconsectetuermauris.org', phone='35352825'
WHERE id=1;
-- loi 1175 
SET SQL_SAFE_UPDATES = 0;
UPDATE aptech_php_18_PGKhanh.users
SET name='Trevor Travis', email='nec.ante.Maecenas@SednequeSed.net'
WHERE phone='08454646';

CREATE TABLE aptech_php_18_PGKhanh.post(
id INT PRIMARY KEY AUTO_INCREMENT,
title varchar(255)
);
INSERT INTO aptech_php_18_PGKhanh.post(title) 
value ('Bai viet 1'),('Bai viet 2');
SELECT * FROM aptech_php_18_PGKhanh.post;
-- JOIN noi bang