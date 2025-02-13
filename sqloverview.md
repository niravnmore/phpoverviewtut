# SQL

What is DBMS & RDBMS and also difference?

Database management system is a software which is used to manage the database.

For example MySQL, Oracle, etc. are very popular commercial database which is used in different applications.

DBMS provides an interface to perform various operations like database creation, storing data in it, updating data, creating a table in the database and a lot more.

It provides protection and security to the database. In the case of multiple users, it also maintains data consistency.

## RDBMS

RDBMS stands for Relational Database Management Systems.
All modern database manaagement systems like MySQL, SQL, MSSQL, SQL Server, IBM DB2, Oracle, and Microsift Access are based on RDBMS.

It is called Relational Database Management System (RDBMS) because it is based on relational model introduced by E.F. Codd.

DBMS + E.F. Codd 12 Rules = RDBMS

Server / MySQL / PHP

## SQL

SQL stands for Structured Query Lanaguage
SQL lets you access and manipulate databases.

4 Types

1. DDL ( Data Definition Language) - 4 Commands ( create / alter / drop / truncate )

It is used to define the structure of databases and tables.
We can create, modify, or delete the structure of tables.

CREATE :

```sql
create database shop;

create TABLE customers( id int PRIMARY KEY AUTO_INCREMENT, cust_name varchar(100), uses_name varchar(100), 
password varchar(100), email varchar(100), mob bigint(11), address varchar(255), pincode bigint(11));

-- create
create TABLE feedbacks( id int PRIMARY KEY AUTO_INCREMENT, fed_comment varchar(100), fed_date date, 
cust_id int(11), FOREIGN KEY (cust_id) REFERENCES customers(id));

create TABLE feedback_product( id int PRIMARY KEY AUTO_INCREMENT, fed_comment varchar(100), 
fed_date date, cust_id int(11), FOREIGN KEY (cust_id) REFERENCES customers(id), prod_id int(11), 
FOREIGN KEY (prod_id) REFERENCES products(id));
```

ALTER :

```sql
-- Add column
ALTER TABLE customer add gender varchar(100) AFTER 'password';

-- Column name change
ALTER TABLE customer CHANGE 'name' 'username' varchar(255);

-- Column delete
ALTER TABLE customer DROP gender;
```

DROP :

```sql
drop database database_name; -- to delete database
drop table table_name; -- to delete table
alter table 'customer' DROP 'gender'; -- to delete column
```

TRUNCATE :

```sql
truncate table table_name; -- to delete all data in table and not the table structure
```

2. DML ( Data Manipulation Language) - 3 commands - insert / delete / update

INSERT :

```sql
insert into customer(cust_name, user_name, pass, email, mobile, address, pincode, gender) 
values ("Akshay", akshay701, 1234, akashay@gmail.com, 5646994, ahmedanad, 380022, male);

insert into customer(cust_name, user_name, pass, email, mobile, address, pincode, gender) 
values ("RAJ", akshay701, 1234, akashay@gmail.com, 5646994, ahmedanad, 380022, male);
```

UPDATE :

```sql
update customer set name="pavan nagar" password="45646"
```

3. DQL (data query language) : Select

This will select 'n' columns from the table or all records from the table

```sql
select * from customers;

select cust_id, cust_name from customer;

select * from customer where cus_id=2;

select cus_id, cus_name from customer where cus_id=2;
```

4. TCL ( Transaction Control language) rollback, commit

total basic command

DDL : create, alter, drop, truncate
DML : insert, delete update
DQL : Select
TCL : rollback, commit

Advance SQL

1. DISTINCT - to fetch unique values from column data

```sql
SELECT DISTINCT COUNTRY FROM Customers;
```

2. ORDER BY

```sql
SELECT * FROM Products ORDER BY ProductName ASC;

SELECT * FROM Products ORDER BY ProductName DESC;
```

3. AND OR NOT

```sql
SELECT * FROM Customers WHERE Country='Germany' AND City='Berlin';

SELECT * FROM Customers WHERE Country='Germany' OR Country='Mexico';

SELECT * FROM Customers WHERE NOT Country='Germany'

SELECT * FROM Customers WHERE City NOT IN ('Paris', 'London');

SELECT * FROM Customers WHERE NOT Price > 50
```

4. WHERE

```sql
SELECT * FROM Customer WHERE Country='Mexico';
```

5. BETWEEN

```sql
SELECT * FROM Products WHERE price BETWEEN 10 AND 60;

SELECT * FROM Orders WHERE Order_Date BETWEEN '2024-06-01' AND '2024-06-31';
```

6. NULL / NOT NULL

```sql
SELECT * FROM Customers WHERE Address IS NULL;

SELECT * FROM Customers WHERE Address IS NOT NULL;
```

7. LIMIT

```sql
SELECT * FROM Customers LIMIT 3;

SELECT * FROM Customers FETCH FIRST 3 ROWS ONLY;

SELECT TOP 50 PERCENT * FROM Customers;

SELECT TOP 3 * FROM Customers WHERE Country='Germany';

SELECT TOP 3 * FROM Customers ORDER BY CustomerName ASC;
```

8. Aggregate Function

MIN() - returns the smallest value within the selected column.

MAX() - returns the largest value within the selected column.

COUNT() - returns the number of rows in a set.

SUM() - returns the total sum of a numerical column.

AVG() - returns the average value of a numerical column.

---

```sql
SELECT MIN(price) from Products;

SELECT MIN(price) AS MIN_PRICE from Products;

SELECT MAX(price) from Products;

SELECT COUNT(ProductID) FROM Products;
```

9. LIKE

```sql

-- select any customer name which startss with 'ra'
SELECT TOP 3 * FROM Customers WHERE CustomerName LIKE 'ra%';

-- select any customer name which ends with 'ra'
SELECT TOP 3 * FROM Customers WHERE CustomerName LIKE '%ra';

-- select any customer name which contain 'ra'
SELECT TOP 3 * FROM Customers WHERE CustomerName LIKE '%ra%';
```

10. ALIAS / AS

```sql
-- Normal query
SELECT CustomerID FROM Customers;

-- Query using alias for Customer ID column
SELECT CustomerID AS Id FROM Customers;

-- Alias is used to rename the column name for display
SELECT min(price) AS Minuimum_Price FROM Products;
```

11. JOIN

Used for joining two or more tables to fetch required data.
A JOIN clause is used ti combine rows from two or more tables, based on a related column between them.

types of join

#### inner join / join

```sql
Select * from customer join feedback on customer.cust_id = feedback.cust_id;

select feedback.*, customers.name from customer join feedback 
on customer.cust_id=feedback.cust_id

selct * from order join customer on order.cust_id=customer.cust_id join product 
on order.prod_id = product.prod_id
```

#### outer join

Left Outer join

```sql
SELECT * FROM user_tbl LEFT OUTER JOIN feedback ON user_tbl.uid = feedback.uid;
```

right Outer join

```sql
SELECT * FROM user_tbl RIGHT OUTER JOIN feedback ON user_tbl.uid = feedback.uid;
```

Full Join

```sql
SELECT * FROM user_tbl FULL JOIN feedback;
```

Cross JOin

```sql
SELECT * FROM user_tbl CROSS JOIN feedback;
```

## Advanced SQL

### INDEX

The CREATE INDEX statement is used to create indexes in tables. Indexes are used to retrieve data from the database more quickly than otherwise.

The users cannot see the indexes, they are just used to speed up searches/queries 100 times faster. (SBI BANK find account number)

Simple : on only one table column
Composite : on more than 1 column in table

```sql
CREATE INDEX custindex ON customer(cus_id, mobile);
```

### VIEWS

In SQL a view is a virtual table based on the result-set of an SQL statemen.
A view contains rows and columns, just like a real table. The fields in a view are fields from one or more real tables in the database.
You can add SQL functions, where and join statements to a view and present the data as if the data were coming from on single table.

```sql
Create view customer_view as select cus_id, cust_name, mobile, address, pincode from customers;
```

### CURSOR /

A cursor is a temporary work area created in the system memory when a SQL statement is executed.

Two type:

implicit : DML statement insert/update/delete and Select only one row
explicit : Select more than one row data

### PROCEDURE /

### TRIGGER

A MySQL trigger is a stored program which is executed automatically to respond to a specific event such as insertion, updation or deletion occuring in a table.

BEFORE INSERT = activated before data is inserted into the table.
AFTER INSERT = activated after data is inserted in the table.
BEFORE Update =
AFTER UPDATE =
BEFORE DELETE =
AFTER DELETE =

```sql
create table reg_log( uid int(100), unm varchar(100), pass varchar(100), gen varchar(100), 
lag varchar(100), cid varchar(100), img varchar(100), status varchar(100), entry_date_time datetime);
```

# Lecture file 


Database

What is DBMS & RDBMS and also Difference ?
•	Database management system is a software which is used to manage the database. For example: MySQL, Oracle, etc are a very popular commercial database which is used in different applications.
•	DBMS provides an interface to perform various operations like database creation, storing data in it, updating data, creating a table in the database and a lot more.
•	It provides protection and security to the database. In the case of multiple users, it also maintains data consistency.
Rdbms 
RDBMS stands for Relational Database Management Systems..
All modern database management systems like MYsql,SQL, MS, SQL Server, IBM DB2, ORACLE, My-SQL and Microsoft Access are based on RDBMS.
It is called Relational Database Management System (RDBMS) because it is based on relational model introduced by E.F. Codd.

DBMS + DR. E.F. Codd 12 Rules =  RDBMS.

Server / mySql / php  

XAMPP  https://www.apachefriends.org/download.html 
X 	CROSS PLATFORM
A	 APATCH SERVER
M 	MYSQL
P 	PERL
P 	PHP

1)	Xampp-control
Xampp/xampp-control -> open
Apache / Mysql -> start
Google : localhost/phpmyadmin

2)	Htdocs

Create all php file & pages in htdocs
Google : localhsot/filename.php
=====================================================================================

SQL What is SQL & TYPES?
•	SQL stands for Structured Query Language
•	SQL lets you access and manipulate databases
 4 Types 
1.	DDL Data Definition Language -----> 4 Commands  create / alter / drop / truncate
•	It is used to define the structure of databases and tables. 
•	We can create, modify or delete the structure of tables.

Create :

=>create database shop

=>create table customers(id int PRIMARY key AUTO_INCREMENT, cust_name varchar(100),user_name varchar(100), password varchar(100),email varchar(100), mob bigint(11), address varchar(255), pincode bigint(11))
===================================================================
1 foreign key

=>create table feedbacks(id int PRIMARY key AUTO_INCREMENT, fed_comment varchar(100), fed_date date,cus_id int(11), FOREIGN key(cus_id) REFERENCES customers(id));  

2 foreign key

=>create table feedback_product(id int PRIMARY key AUTO_INCREMENT, fed_comment varchar(100), fed_date date, cus_id int(11),FOREIGN key(cus_id) REFERENCES customers(id), pro_id int(11), FOREIGN key(pro_id) REFERENCES product(id));     
	
	=============================================================
alter:

	Column add 
ALTER TABLE  customer add gender varchar(100)  AFTER ‘password’;  // add column

	Column name change
ALTER TABLE `customers` CHANGE `name` `username` VARCHAR(255) 

	Column delete
ALTER TABLE `customer` DROP `gender`;   // column delete


===================================================================
drop:  // Delete 
drop database database_name  // drop database delete 
drop table tbl_name   // drop table delete 
ALTER TABLE `customer` DROP `gender`;   //  table column delete

===================================================================
truncate:  / delete all data from table /empty table
truncate table tabl_name  // delete all table data not table


=====================================================================

2.	DML  Data Manipulation Language    3 command   insert / delete / update
•	 insert:
insert into customer(cust_name,user_name,pass,email,mobile,address,pincode,gender) values("Akshay","akashay701","12 34","akashay@gmail.com","5646944","Ahmedabad","325874","Male")

INSERT INTO customers (cust_name,user_name,password,email,mob,gender,dob,address,pincode) VALUES ("Raj","raj@gmail.com","1234","raj@gmail.com","123467891","Male","1990-11-17","Chandlodia","382481");
 
•	update:    data update as per id
•	UPDATE customer set name="pavan Nagar" ,  password="abc" where id=3



•	delete:  data delete as per id
delete  from  customer  where id=3

============================================================


3.	DQL  Data Query Language  :   Select 
•	Select Description: This will select  ‘n‘ columns from the table. Or To select all records from the database.


	

Select * from customer      // get all data with all column 
Select cus_id,cust_name from customer  // get all data with particular column


Select * from customer where cus_id=2  
Select cus_id,cust_name from customer where cus_id=2  

=====================================================================

4.	TCL Transaction Control Language
=> rollback  ctl+z  undo 
=> commit  ctl+s  save as    


Total basic command
DDL : create ,alter , drop , truncate
DML: insert , update, delete
DQL : select
TCl : roleback , commit


 
8 COMMAND QUERIES 10 TIMES WRITE IN BOOK
https://www.w3schools.com/MySQL/default.asp 

 



Advance SQL 
SELECT * FROM TABLENAME




1) DISTINCT  ( UNIQ  COLUM DATA GET )
SELECT  DISTINCT  COUNTRY  FROM Customers;

2) ORDER BY
SELECT * FROM Products ORDER BY ProductName ASC
SELECT * FROM Products ORDER BY ProductName DESC

3) AND OR NOT
SELECT * FROM Customers WHERE Country="Germany" AND City="Berlin"
SELECT * FROM Customers WHERE Country="Germany" OR Country =" Mexico "
SELECT * FROM Customers WHERE  Not Country="Germany”
SELECT * FROM Customers WHERE City NOT IN ('Paris', 'London');
SELECT * FROM products WHERE NOT price > 50;

4) BETWEEN 
SELECT * FROM products WHERE price BETWEEN 10 AND 60;
SELECT * FROM order WHERE ord_date BETWEEN “2024-06-01” AND “2024-06-31”;

5)NUL / NOT NULL
SELECT * FROM Customers WHERE Address IS NULL;
SELECT * FROM Customers WHERE Address IS NOT NULL;
6) LIMIT
SELECT * FROM Customers LIMIT 3;
SELECT * FROM Customers FETCH FIRST 3 ROWS ONLY;

SELECT TOP 50 PERCENT * FROM Customers;
SELECT TOP 3 * FROM Customers WHERE Country='Germany';
SELECT TOP 3 * FROM Customers ORDER BY CustomerName DESC;

7) Aggregate Function
•	MIN() - returns the smallest value within the selected column
•	MAX() - returns the largest value within the selected column
•	COUNT() - returns the number of rows in a set
•	SUM() - returns the total sum of a numerical column
•	AVG() - returns the average value of a numerical column
SELECT MIN(Price) FROM Products;
SELECT MIN(Price) AS MIN_PRICE FROM Products;

SELECT MAX(Price) FROM Products;
SELECT COUNT(ProductID) FROM Products;

8) Like 
SELECT * FROM Customers WHERE CustomerName LIKE 'raj%';  start with raj
SELECT * FROM Customers WHERE CustomerName LIKE '%raj';   end with raj 
SELECT * FROM Customers WHERE CustomerName LIKE '%raj%';   start or middle or end with raj 
============================================================================================


9) Aliases / AS

SELECT CustomerID FROM Customers;
SELECT CustomerID  AS  ID FROM Customers;
SELECT min(price) as minimum_price FROM Products;

=====================================================================================
10) Join   
A JOIN clause is used to combine rows from two or more tables, based on a related column between them.
Types Of Join : 3 Types   1) inner join / join  2) outer join 3) cross join
1) Inner Join /Join 
customer           	 	Feedabck        		                       
cust_id            	PK	fed_id    PK   		  
cust_name        		cust_id   FK    		  
pass		  	msg		 	


•	select * from customer inner join / join feedback   on   customer.cust_id = feedback.cust_id 
•	select feedback.*,customers.name from customer join feedback   on   customer.cust_id = feedback.cust_id 





customer           	 	order         		  product  
                    
cust_id            		 order_id       		  prod_id
cust_name        		 cust_id    fk   		  pro_name 
pass		  	 prod_id   fk		  pro_price	
				ord_date

select * from order join customer on order.cust_id=customer.cust_id 
join product on order.prod_id=product.prod_id

 select order.*,customer.cust_name, product.pro_name  from order join customer on order.cust_id=customer.cust_id  join product on order.prod_id=product.prod_id


2) Outer Join
•	Left Outer Join
	select * from user_tbl  left outer join  feedback on user_tbl.uid=feedback.uid


•	Right Outer Join
	select * from user_tbl right outer join feedback on user_tbl.uid=feedback.uid


•	Full join
select * from user_tbl full join feedback

	 

3) Cross Join
		select * from user_tbl cross join feedback

2 data customer  *    3 data order  = 6 data matrix data 


==================================================================================


11)  index in SQL 
INDEX
The CREATE INDEX statement is used to create indexes in tables. Indexes are used to retrieve data from the database more quickly than otherwise. 
The users cannot see the indexes, they are just used to speed up searches/queries 100 times faster.  (SBI BANK   find Account Number)
Type : 2 type


Simple:   on only one table column
Composite : on more than 1 column in table 
Syntex :CREATE INDEX custindex ON customer(cus_id,mobile))




Views  (Security Concept/ sub table virtual table)  Exa: (BANK DUPLICATE TABLE)
In SQL, a view is a virtual table based on the result-set of an SQL statement.
A view contains rows and columns, just like a real table. The fields in a view are fields from one or more real tables in the database.
You can add SQL functions, WHERE, and JOIN statements to a view and present the data as if the data were coming from one single table.

CREATE VIEW customer_view AS SELECT cus_id,cust_name,mobile,address,pincode FROM customer



12) Cursor /Procedure/Trigger 
Cursor
A cursor is a temporary work area created in the system memory when a SQL 
statement is executed
Two Type :
Implicit : DML statement insert/update/delete/              Select only one row 
Explicit : Select more than one row data



Procedure


function abc (aid,aname,aemail)
{
	“insert in to customer (id,name,email) value (aid, aname, aemail)”
}

abc(“1”,”nagar”,”nagar@gmail.com”);
abc(“2”,”raj”,”raj@gmail.com”)


Procedure :
A stored procedure is a prepared SQL code that you can save, so the code 
can be reused over and over again.So if you have an SQL query that you write over 
and over again, save it as a stored procedure, and then just call it to execute it.

Create procedure insert_cust(
In cust_name varchar(255),
In user_name varchar(255),
In password varchar(255),
In email varchar(255),
In mobile bigint(11),
in address varchar(255),
in pincode bigint(11)
)
Begin
insert into customer(cust_name,user_name,password,email,mobile,address,pincode) values(cust_name,user_name,password,email,mobile,address,pincode);
End
//
than 
=>call insert_cust('janak','janak@123','1234','janak@gmail.com','21231541','Maninagar','123456')
=>call insert_cust('raj','raj@123','1234','janak@gmail.com','21231541','Maninagar','123456')

Trigger :
A MySQL trigger is a stored program (with queries) which is executed automatically to respond to a specific event such as insertion, updation or deletion occurring in a table.
BEFORE INSERT – activated before data is inserted into the table.
AFTER INSERT- activated after data is inserted into the table.
BEFORE UPDATE – activated before data in the table is updated.
AFTER UPDATE - activated after data in the table is updated.
BEFORE DELETE – activated before data is removed from the table.
AFTER DELETE – activated after data is removed from the table
=>create table reg_log( uid int(100),unm varchar(100),pass varchar(100),gen varchar(100),lag varchar(100),cid varchar(100),img varchar(100),status varchar(100),entry_date_time datetime);

=>CREATE TRIGGER insert_trigger_reg BEFORE INSERT ON reg FOR EACH ROW
BEGIN
insert into reg_log(uid,unm,pass,gen,lag,cid,img,status,Entry_date_time) values (new.uid,new.unm,new.pass,new.gen,new.lag,new.cid,new.img,new.status,now());
END//


 



