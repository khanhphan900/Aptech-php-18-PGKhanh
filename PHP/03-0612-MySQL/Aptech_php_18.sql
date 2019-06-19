-- Distinct xoa 1 trong 1 dong giong nhau (xoa first) +oderby (xoa second)

CREATE DATABASE aptech_php_18;
use aptech_php_18;
CREATE table posts(
 id int auto_increment primary key,
 title varchar(255) not null);
 
 insert into posts(title) value ('Bai viet 1'),('Bai viet 2'),('Bai viet 3'),('Bai viet 4'),('Bai viet 5'),('Bai viet 6'),('Bai viet 7');
 
 CREATE table categories(
 id int auto_increment primary key,
 name varchar(255) not null);

insert into categories(name) value ('Doan Du'),('Tieu Phong'),('Hu Truc'),('Tieu Phong'),('Hu Truc'),('Doan Du'),('TIeu Phong');
select * from aptech_php_18.categories;