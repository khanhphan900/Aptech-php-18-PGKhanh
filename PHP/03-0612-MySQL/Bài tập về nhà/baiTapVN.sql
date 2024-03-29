CREATE DATABASE aptech_php_18;
DROP DATABASE aptech_php_18_2;

CREATE TABLE aptech_php_18.users(
id int,
last_name varchar(255),
fist_name varchar(255),
email varchar(255) unique,
created_at datetime,
modified_ad datetime,
deleted_ad datetime
);

CREATE TABLE aptech_php_18.users2(id int,name varchar(255));
DROP TABLE aptech_php_18.users2;

ALTER TABLE aptech_php_18.users ADD dod date, ADD sex date;

SELECT * FROM aptech_php_18.users;

ALTER TABLE aptech_php_18.users CHANGE id ID int;

ALTER TABLE aptech_php_18.users	
DROP COLUMN sex;

INSERT INTO aptech_php_18.users (last_name) 
value ('Nam'),
('John'),
('Henry'),
('Christiaan'),
('Vicky');

-- thay đổi ID >> auto 1 - 5
ALTER TABLE aptech_php_18.users
CHANGE ID id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY;
-- sửa lại giá trị
ALTER TABLE aptech_php_18.users
CHANGE created_at created_at varchar(255),
CHANGE modified_ad uState varchar(255),
CHANGE deleted_ad uCreatedDate varchar(255);
-- thêm thông tin
INSERT INTO aptech_php_18.users(last_name,fist_name,email,created_at,uState,uCreatedDate)
VALUE ('Nam', 'Nguyen', 'namnh.website@gmail.com', 1, 1, NOW()),
    ('John', 'Cenna', 'cenna.john@hotmail.com', 2, 1, NOW()),
    ('Henry', 'Tran', 'tranhe@resolutioninc.com', 2, 1, NOW()),
    ('Christiaan', 'Hunter', 'ch.pageworth@pageworth.com', 1, 1, NOW()),
    ('Vicky', 'Nguyen', 'vicky06@gmail.com', 2, 1, NOW());
UPDATE aptech_php_18.users
SET fist_name= 'Nguyen'
WHERE id = 5;
DELETE FROM aptech_php_18.users Where id=5;
-- 7.1
SELECT * FROM aptech_php_18.users;
-- 7.2
SELECT last_name FROM aptech_php_18.users;
SELECT DISTINCT last_name,fist_name
FROM aptech_php_18.users;
-- 7.3
SELECT * FROM aptech_php_18.users
LIMIT 3;
-- 7.4
SELECT * FROM aptech_php_18.users
WHERE created_at = 1 and uState = 1;
-- 11
ALTER TABLE aptech_php_18.users
CHANGE dod Dod varchar(12) NOT NULL;

ALTER TABLE aptech_php_18.users
CHANGE dod Dod varchar(12) NOT NULL;
ALTER TABLE aptech_php_18.users
CHANGE Dod dod MEDIUMINT NOT NULL AUTO_INCREMENT;
