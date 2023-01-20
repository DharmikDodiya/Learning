--------------------------------------------- Database Query------------------------------------------------------
create database Mydb;
use Mydb;
show databases;
Drop database Mydb;
CREATE DATABASE Mydb_copy;  

--------------------------------------------- table & View----------------------------------------------------------

CREATE TABLE Employee(  
    id int NOT NULL AUTO_INCREMENT,  
    ename varchar(45) NOT NULL,  
    occupation varchar(35) NOT NULL,  
    age int NOT NULL,  
    salary int check(salary>0),
    PRIMARY KEY (id)  
);  

insert into Employee Value(1,'dharmik','Developer',21,20000),
(2,'harpit','ceo',21,22000),
(3,'dhrumil','job',21,24000),
(4,'sarman','cs',21,25000),
(5,'shivang','ca',21,26000),
(6,'pujan','business',21,28000),
(7,'kartik','hr',21,29000),
(8,'kaushik','developer',21,30000);
 
origin 

show Tables;
DESCRIBE Employee;

ALTER TABLE Employee  
ADD email varchar(40) NOT NULL;  

ALTER TABLE Employee  
MODIFY occupation(40);  

ALTER TABLE Employee  
DROP COLUMN salary;

ALTER TABLE  Employee  
CHANGE COLUMN age eage int NOT NULL; 

ALTER TABLE Employee  
RENAME TO Employee_info;  

SHOW TABLES FROM Mydb;

ALTER TABLE Employee_info  
RENAME TO Employee;  

TRUNCATE TABLE Employee;

DROP TABLE Employee;


-- Copy Table
CREATE TABLE Employee_info  
SELECT * 
FROM Employee  
WHERE ;  

ALTER TABLE Employee  
DROP COLUMN email;

SHOW COLUMNS FROM Employee FROM Mydb;  
OR 
SHOW COLUMNS FROM Mydb.Employee;  

SHOW COLUMNS FROM Employee;  

ALTER TABLE Employee   
CHANGE COLUMN eage age int;  



-----------------------------------------------Mysql Queries--------------------------------------------------------
DELETE FROM Employee WHERE id = 4;  


DELETE FROM Employee  
WHERE name = 'kartik'   
ORDER BY id,name  
LIMIT 3;


SELECT ename,age FROM Employee;

SELECT ename, occupation, SUM(age) AS "Total age"    
FROM Employee    
GROUP BY ename    
HAVING SUM(Total age) > 15; 

REPLACE INTO Employee (id, occupation)  
VALUES(4,'job'); 

select * from studentinfo
where s_city like 'm%';

select * from studentinfo
where s_city = 'rajkot';

select * from studentinfo
where ename <> 'dharmik';

UPDATE Employee     
SET occupation = 'ca',age=24   
WHERE id = 3;


DELETE FROM Employee 
WHERE id = 4;  


DELETE FROM Employee 
WHERE ename = 'sarman';  

SELECT ename, occupation,age,salary SUM(salary) AS "Total salary"    
FROM Employee    
GROUP BY ename    
HAVING SUM(salary) > 25000;  
------------------------------------------------------All Constraint------------------------------------------------
create table students(
sid varchar (20)PRIMARY KEY,
sname varchar(20) NOT NULL,
sage int check(sage>18),
city varchar(30),
dress Enum('shirt','pent','tie') not null,
email varchar(40) UNIQUE
);


---------------------------------------------Indexes In Mysql-------------------------------------------------------

CREATE TABLE contacts
( contact_id INT(11) NOT NULL AUTO_INCREMENT,
  last_name VARCHAR(30) NOT NULL,
  first_name VARCHAR(25),
  CONSTRAINT contacts_pk PRIMARY KEY (contact_id)
);

CREATE INDEX contacts_idx
  ON contacts (last_name, first_name);

CREATE UNIQUE INDEX contacts_idx
  ON contacts (last_name, first_name);

DROP INDEX contacts_idx
  ON contacts;

SHOW INDEX IN contacts from Mydb;



------------------------------------------------- Mysql Join--------------------------------------------------------


CREATE TABLE MANAGERS (
manager_id varchar(45) PRIMARY KEY NOT NULL,
firstname varchar(45) NOT NULL,
lastname varchar(45) NOT NULL,
workinghours int NOT NULL,
mage int NOT NULL
);

INSERT INTO MANAGERS(manager_id,firstname,lastname,workinghours,mage)
VALUES
(21,'dharmik','dodiya',8,21),
(22,'kartik','dhamecha',6,23),
(23,'shivang','bhatt',8,25),
(24,'kaushik','bharda',10,27),
(25,'hitesh','rupavtiya',7,20),
(26,'pujan','dodiya',6,30);


CREATE TABLE COMPANY (
company_id varchar(45) PRIMARY KEY NOT NULL,
cname varchar(45) NOT NULL,
manager_id varchar(45),
FOREIGN KEY (manager_id)  
REFERENCES MANAGERS(manager_id)
);

describe Company;

INSERT INTO COMPANY(company_id,cname,manager_id)
VALUES
('31','zignuts',22),
('32','radixweb',25),
('33','zignuts',23),
('34','saligram',26),
('35','brainperol',22),
('36','saligram',21);

-- inner join
SELECT MANAGERS.firstname, MANAGERS.lastname, COMPANY.cname  
FROM MANAGERS   
INNER JOIN COMPANY  
ON MANAGERS.manager_id = COMPANY.company_id; 

-- left join
SELECT  MANAGERS.firstname, MANAGERS.lastname, COMPANY.cname  
FROM MANAGERS  
LEFT JOIN COMPANY  
ON MANAGERS.manager_id = COMPANY.company_id;  


-- RIGHT join
SELECT  MANAGERS.firstname, MANAGERS.lastname, COMPANY.cname  
FROM MANAGERS  
RIGHT JOIN COMPANY  
ON MANAGERS.manager_id = COMPANY.company_id; 

-- inner join
SELECT m.firstname, m.lastname, m.workinghours, c.cname    
FROM MANAGERS m  
INNER JOIN COMPANY c  
ON m.manager_id = c.manager_id;  


SELECT firstname, lastname, workinghours, cname    
FROM MANAGERS   
INNER JOIN COMPANY    
USING (manager_id) WHERE cname = "zignuts";


SELECT firstname, lastname, workinghours, cname    
FROM MANAGERS   
INNER JOIN COMPANY    
USING (manager_id) WHERE cname = "zignuts"
ORDER by lastname;  


SELECT firstname, lastname, workinghours, cname  
FROM MANAGERS  
INNER JOIN COMPANY  
WHERE workinghours>5; 

-- left outer join
SELECT MANAGERS.manager_id, firstname, lastname, mage  
FROM MANAGERS  
LEFT JOIN COMPANY ON MANAGERS.manager_id = COMPANY.manager_id;

SELECT MANAGERS.manager_id, firstname, lastname, mage  
FROM MANAGERS  
LEFT JOIN COMPANY USING(manager_id); 

SELECT firstname, lastname, cname, workinghours, mage  
FROM MANAGERS LEFT JOIN COMPANY ON workinghours=6;


-- RIGHT Join

SELECT MANAGERS.manager_id,firstname, lastname, mage, workinghours  
FROM MANAGERS  
RIGHT JOIN COMPANY ON MANAGERS.manager_id = COMPANY.manager_id  
ORDER BY  manager_id;  


SELECT * FROM MANAGERS
RIGHT JOIN COMPANY USING(manager_id)
WHERE workinghours > 5;

-- cross join

SELECT * 
FROM MANAGERS
CROss JOIN COMPANY;

-- self join

SELECT  m1.manager_id, m1.firstname  
FROM MANAGERS AS m1, MANAGERS m2  
WHERE m1.manager_id=m2.manager_id; 
 

SELECT  m1.manager_id, m1.firstname  
FROM MANAGERS AS m1, MANAGERS m2  
WHERE m1.manager_id=m2.manager_id; 
AND m1.manager_id<>m2.manager_id;  