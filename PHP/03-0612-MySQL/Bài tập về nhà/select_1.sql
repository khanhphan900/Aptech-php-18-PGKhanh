-- xem tat ca
SELECT * FROM employees;

-- xem tung cot
SELECT lastname, firstName FROM employees;

-- xem tung cot cua chuc danh VP Sales
SELECT lastName, firstName, Email
FROM employees
WHERE jobTitle = 'VP Sales';

-- liet ke cac nghe
SELECT DISTINCT jobTitle
FROM employees;

-- sắp xếp theo thứ tự a b c
SELECT firstName
FROM employees
ORDER by firstName ASC;

-- sắp xếp theo thứ tự giảm dần z y x 
SELECT firstName
FROM employees
ORDER by firstName DESC;
