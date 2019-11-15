use DatabaseProject;

create table Employee(
	empId Integer(3) not null unique , 
    last_name varchar(20) not null,
    first_name varchar(20) not null,
    DOB date not null, 
    phone_number Integer(10) not null,
    primary key(empId)
);

create table Housekeeper(
	empId Integer(3) not null unique,
    hours Integer(3),
    pay_rate Decimal(5,2),
    primary key(empId),
    foreign key(empId) references Employee(empId)
);

create table Curator(
	empId Integer(3) not null unique,
    salary decimal(8,2) not null,
    primary key(empId),
    foreign key(empId) references Employee(empId)
);

create table Security(
	empId Integer(3) not null unique,
    salary decimal(8,2) not null,
    shift Integer(2),
    primary key(empId),
    foreign key(empId) references Employee(empId)
);

create table Artist(
	artistId Integer(4) not null unique,
    last_name varchar(20) not null,
	first_name varchar(20) not null,
	nationality varchar(20) not null,
    speciality varchar(20) not null,
    primary key(artistId)
);

create table Wing(
    wingId Integer(2) not null unique,
    wing_Name varchar(20) not null,
    works_displayed Integer(3) not null,
    total_works_space Integer(3) not null,
    primary key(wingId)
);

create table ArtPiece(
	artId Integer(4) not null unique,
    artMedium varchar(20) not null,
	artistId Integer(4) not null,
	wingId Integer(2) not null,
    title varchar(20) not null,
    primary key(artistId),
    foreign key(wingId) references Wing(wingId), 
	foreign key(artistId) references Artist(artistId)
);

create table Event(
	eventId Integer(3) not null unique,
    event_Title varchar(20) not null,
    wingId Integer(3) not null, 
    public TinyInt(1) not null, 
    primary key(eventId)
);

create table Guest(
	guestId Integer(3) not null unique,
    last_name varchar(20) not null,
	first_name varchar(20) not null,
    email varchar(30) not null unique,
    status tinyint(1) not null, 
    primary key(guestId)
);

INSERT INTO Employee (empId, last_name, first_name, phone_number) VALUES (1, 'Smith', 'John', '8043334421');
INSERT INTO Housekeeper (empId, hours, pay_rate) VALUES (1, 40, 14.00);
INSERT INTO Housekeeper (empId, hours, pay_rate) VALUES (2, 30, 15.00);
INSERT INTO Curator (empId, salary) VALUES (3, 60000); 
INSERT INTO Security (empId, salary, Shift) VALUES (4, 40000, 'Night'); 
INSERT INTO Employee (empId, last_name, first_name, phone_number) VALUES (5, 'Howard', 'Dwight', '5159901234');
INSERT INTO Security (empId, salary, Shift) VALUES (5, 50000, 'Night'); 


insert into Event values(1, 'Cancer Fundraiser', 2, 1);
insert into Event values(2, 'Bob Wedding', 3, 0);
insert into Event values(3, 'Special Display', 4, 1);
