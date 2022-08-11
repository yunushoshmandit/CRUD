<?php



/* ************ CRUD  *******************
CREATE

INSERT INTO students_tbl (ID, St_Name, Father_Name, Certification_Program, Reg_Date) VALUES(7, 'Mohsen', 'Rajab Ali', 'CSS', 11-08-2022);
INSERT INTO students_tbl VALUES (9, 'Mahdi Mohammadiyan', 'Hassan Mohammadiyan', 'AJAX', '2022-08-11');
INSERT INTO students_tbl VALUES (10, 'Mahdi Mohammadiyan', 'Hassan Mohammadiyan', 'jQuery', '2022-08-11');
INSERT INTO students_tbl VALUES (11, 'Mahdi Mohammadiyan', 'Hassan Mohammadiyan', 'jQuery', '2022-08-11');
INSERT INTO students_tbl VALUES (12, 'Mahdi Mohammadiyan', 'Hassan Mohammadiyan', 'jQuery', '2022-08-11');
INSERT INTO students_tbl VALUES (13, 'Mahdi Mohammadiyan', 'Hassan Mohammadiyan', 'jQuery', '2022-08-11');
INSERT INTO students_tbl VALUES (14, 'Mahdi Mohammadiyan', 'Hassan Mohammadiyan', 'jQuery', '2022-08-11');
INSERT INTO students_tbl VALUES (15, 'Mahdi Mohammadiyan', 'Hassan Mohammadiyan', 'jQuery', '2022-08-11');
INSERT INTO trainers (T_ID, T_Name, T_Email, T_Dept) VALUES (1, 'Kazem Hussiani', 'Kazem.Hussaini@synapse.com', 'Software Engineering');
INSERT INTO trainers (T_ID, T_Name, T_Email, T_Dept) VALUES (3, 'Mark Zuckerberg', 'Mark.Zuckerberg@facebook.com', 'Graphic Designer');
INSERT INTO trainers (T_ID, T_Name, T_Email) VALUES (4, 'Jeff Bezos', 'Jeff.Bezos@amazon.com');
INSERT INTO trainers (T_Name, T_Email, T_Phone) VALUES ('Elon Musk', 'Elon.Musk@spacex.com', '+1 2345 987654');


READ

SELECT * FROM `students_tbl`
SELECT * FROM `students_tbl` WHERE 1
SELECT * FROM students_tbl WHERE Certification_Program = "HTML";
SELECT * FROM students_tbl WHERE St_Name='Mahdi Mohammadiyan';
SELECT * FROM students_tbl WHERE St_Name='Mahdi Mohammadiyan' AND Certification_Program = 'AJAX';


UPDATE
UPDATE students_tbl SET Certification_Program = "PHP" WHERE St_Name='Ozra';
UPDATE students_tbl SET Certification_Program = 'Laravel', St_Name = 'Kazem' WHERE St_Name = 'Ozra';
UPDATE trainers SET T_Phone='+1 2222 345678' WHERE T_ID = 3;

DELETE
DELETE FROM students_tbl WHERE ID = 5;

*/


/*

ALTER TABLE `trainers` CHANGE `T_Dept` `T_Dept` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Computer Science';
ALTER TABLE `trainers` CHANGE `T_ID` `T_ID` INT(11) NOT NULL AUTO_INCREMENT;


*/
