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

create TABLE customers( id int PRIMARY KEY AUTO_INCREMENT, cust_name varchar(100), uses_name varchar(100), password varchar(100), email varchar(100), mob bigint(11), address varchar(255), pincode bigint(11));

-- create
create TABLE feedbacks( id int PRIMARY KEY AUTO_INCREMENT, fed_comment varchar(100), fed_date date, cust_id int(11), FOREIGN KEY (cust_id) REFERENCES customers(id));

create TABLE feedback_product( id int PRIMARY KEY AUTO_INCREMENT, fed_comment varchar(100), fed_date date, cust_id int(11), FOREIGN KEY (cust_id) REFERENCES customers(id), prod_id int(11), FOREIGN KEY (prod_id) REFERENCES products(id));
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
insert into customer(cust_name, user_name, pass, email, mobile, address, pincode, gender) values ("Akshay", akshay701, 1234, akashay@gmail.com, 5646994, ahmedanad, 380022, male)

insert into customer(cust_name, user_name, pass, email, mobile, address, pincode, gender) values ("RAJ", akshay701, 1234, akashay@gmail.com, 5646994, ahmedanad, 380022, male)
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

select feedback.*, customers.name from customer join feedback on customer.cust_id=feedback.cust_id

selct * from order join customer on order.cust_id=customer.cust_id join product on order.prod_id = product.prod_id
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
create table reg_log( uid int(100), unm varchar(100), pass varchar(100), gen varchar(100), lag varchar(100), cid varchar(100), img varchar(100), status varchar(100), entry_date_time datetime);
```
