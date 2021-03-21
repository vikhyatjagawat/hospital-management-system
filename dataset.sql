CREATE TABLE newpatient (
  hid varchar(16) NOT NULL,
  pname varchar(255) NOT NULL,
  gender varchar(255) NOT NULL,
  age int NOT NULL,
  city varchar(255) NOT NULL,
  contact int DEFAULT NULL
) ENGINE=InnoDB;

CREATE TABLE oldpatient (
    hid varchar(16) NOT NULL,
    hospitalname varchar(255) NOT NULL,
    doctorsname varchar(255) NOT NULL,
    problems varchar(255) NOT NULL,
    disease varchar(255) NOT NULL,
    medication varchar(255) NOT NULL,
    dateid varchar(255) NOT NULL 
) ENGINE=InnoDB;