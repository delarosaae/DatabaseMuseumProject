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
	artistId Integer(4) not null unique,
	wingId Integer(2) not null unique,
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