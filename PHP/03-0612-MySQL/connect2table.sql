-- kết nối 2 table với nhau
USE aptech_php_18;

CREATE TABLE posts(
 id INT AUTO_INCREMENT PRIMARY KEY,
 title varchar (50)
);

INSERT INTO posts(title) value ('test 1'),('test 2'),('test 3'),('test 4'),('test 5'),('test 6'),('test 7'),('test 8'),('test 9');

CREATE TABLE categories(
 id INT AUTO_INCREMENT PRIMARY KEY,
 name varchar (69)
);

INSERT INTO categories(name) value ('Author 1'),('Author 2'),('Author 3');

CREATE TABLE categories_post (
 id INT AUTO_INCREMENT PRIMARY KEY,
 post_id INT,
 category_id INT,
 UNIQUE (post_id, category_id),
 FOREIGN KEY (post_id) REFERENCES posts(id),
 FOREIGN KEY (category_id) REFERENCES categories(id)
);

INSERT INTO categories_post(post_id, category_id)
VALUES (1,1), (1,2),(2,1),(1,3),(2,2);


SELECT * FROM categories_post ORDER BY id;  

SELECT * FROM 
categories_post as A
JOIN posts as B ON A.post_id = B.id
JOIN categories as C ON A.category_id = C.id
WHERE A.post_id = 1;