<?php
##query of employees table
//This will return all the rows and columns from the employees table.
 SELECT * FROM employees;

//This will return only the name and salary columns of the employees whose salary is greater than 50000.

 SELECT name, salary FROM employees WHERE salary > 50000;

//This will return the average salary of all employees.
 SELECT AVG(salary) FROM employees;

 //This will count the number of employees whose department_id matches the id of the Marketing department.

 SELECT COUNT(*) FROM employees WHERE department_id = (SELECT id FROM departments WHERE name = 'Marketing');

//is will update the salary of the employee with id 1001 to 60000.

 UPDATE employees SET salary = 60000 WHERE id = 1001;

//This will delete all the rows from the employees table whose salary is less than 30000.
 DELETE FROM employees WHERE salary < 30000;

 ##query of departments table
 //This will return all the rows and columns from the departments table.
 
 SELECT * FROM departments;
 
 //This will return only the name and manager columns of the Finance department.
 
 SELECT name, manager FROM departments WHERE name = 'Finance';

 //This will calculate the total number of employees in each department by joining the employees and departments tables and grouping them by department name.

 SELECT departments.name, COUNT(*) FROM employees JOIN departments ON employees.department_id = departments.id GROUP BY departments.name;

//This will insert a new row into the departments table with the name "Research" and manager "John Doe".
 INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe');
