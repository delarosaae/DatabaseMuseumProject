#All the Queries are embedded inside PHP files 



#Stored Proc for Art In each Wing
CREATE DEFINER=`root`@`%` PROCEDURE `ArtinWing`(in input varchar(20))
BEGIN
SELECT a.title FROM DatabaseProject.ArtPiece as a,DatabaseProject.Wing as w
where a.wingId = w.wingId and w.wing_Name=input;
END




#These are query 10 to 20

#10.
SELECT CONCAT(firstName, ' ', lastName) AS 'NAME' FROM artist;

#11.
SELECT count(*) AS 'Total Works' FROM artPiece;

#12.
SELECT * FROM event WHERE date >= SYSDATE();

#13.

#mysql> CREATE TABLE works(
#    -> entryID INT(6) PRIMARY KEY,
#    -> eventID INT(6),
#    -> empID INT(6)
#   -> );
#
#	How i created the works table, for reference.

SELECT wing FROM event WHERE eventId = X;


#	X here is just an example and can be generalized.


#14.
SELECT empID FROM works WHERE eventID = X;


#15.
#I dont think this query is possible given the current database design

#16.
SELECT empID FROM supervises WHERE wingID = X;

#17.
SELECT * FROM supervises;

#18.
SELECT * FROM attends WHERE eventID = X;

#19.
#How many housekeepers are currently working?
SELECT COUNT(*) FROM housekeeper;
#Information about housekeepers? 
SELECT * FROM housekeepers;
#Information about a specific housekeeper?
SELECT X FROM housekeepers WHERE A = B;

#20.
SELECT * FROM security WHERE shift = 'night';
#OR
SELECT * FROM security WHERE shift = 'day';
