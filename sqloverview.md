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

create database shop;

create TABLE customers( id int PRIMARY KEY AUTO_INCREMENT, cust_name varchar(100), uses_name varchar(100), password varchar(100), email varchar(100), mob bigint(11), address varchar(255), pincode bigint(11));

//create 
create TABLE feedbacks( id int PRIMARY KEY AUTO_INCREMENT, fed_comment varchar(100), fed_date date, cust_id int(11), FOREIGN KEY (cust_id) REFERENCES customers(id));

create TABLE feedback_product( id int PRIMARY KEY AUTO_INCREMENT, fed_comment varchar(100), fed_date date, cust_id int(11), FOREIGN KEY (cust_id) REFERENCES customers(id), prod_id int(11), FOREIGN KEY (prod_id) REFERENCES products(id));


ALTER :

// Add column
ALTER TABLE customer add gender varchar(100) AFTER 'password';

// Column name change
ALTER TABLE customer CHANGE 'name' 'username' varchar(255);

// Column delete
ALTER TABLE customer DROP gender;

DROP :

drop database database_name; // to delete database
drop table table_name; // to delete table
alter table 'customer' DROP 'gender'; // to delete column

TRUNCATE :

truncate table table_name; // to delete all data in table and not the table structure

2. DML ( Data Manipulation Language) - 3 commands - insert / delete / update

INSERT :

insert into customer(cust_name, user_name, pass, email, mobile, address, pincode, gender) values ("Akshay", akshay701, 1234, akashay@gmail.com, 5646994, ahmedanad, 380022, male)

insert into customer(cust_name, user_name, pass, email, mobile, address, pincode, gender) values ("RAJ", akshay701, 1234, akashay@gmail.com, 5646994, ahmedanad, 380022, male)

UPDATE :

update customer set name="pavan nagar" password="45646"


3. DQL (data query language) : Select

This will select 'n' columns from the table or all records from the table

select * from customers;

select cust_id, cust_name from customer;

select * from customer where cus_id=2;

select cus_id, cus_name from customer where cus_id=2;

4. TCL ( Transaction Control language) rollback, commit

total basic command 

DDL : create, alter, drop, truncate