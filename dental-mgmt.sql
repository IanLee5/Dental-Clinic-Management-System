USE dental_mgmt;
CREATE TABLE staff (
	staff_id int(20) NOT NULL,
    staff_loginid varchar(20) NOT NULL,
    staff_password varchar(50) NOT NULL,
    staff_name varchar(50) NOT NULL,
    staff_gender char(6) NOT NULL,
    staff_phone int(15) NOT NULL,
    staff_email varchar(255) DEFAULT NULL,
    staff_status int(1) NOT NULL,
    staff_role int(1) NOT NULL,
    PRIMARY KEY(staff_id)
);


CREATE TABLE patient (
	patient_id int(20) NOT NULL,
    patient_loginid varchar(20) NOT NULL,
    patient_password varchar(50) NOT NULL,
    patient_name varchar(50) NOT NULL,
    patient_gender char(6) NOT NULL,
    patient_address varchar(255) NOT NULL,
    patient_phone int(15) NOT NULL,
    patient_email varchar(255) NOT NULL,
    PRIMARY KEY(patient_id)
);


CREATE TABLE appointment (
	patient_id int(20) NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL
);


ALTER TABLE staff AUTO_INCREMENT=10000;


ALTER TABLE patient AUTO_INCREMENT=100;

INSERT INTO staff VALUES
('10001', 'S10001', '81dc9bdb52d04dc20036dbd8313ed055', 'Jamie_Fallon', 'Male', '0192405195', 'jamie@gmail.com', '1', '1');


INSERT INTO patient VALUES
('101', 'P101', '81dc9bdb52d04dc20036dbd8313ed055', 'John Holland', 'Male', ' 73, Jalan SS 15/5a, SS 15, 47500 Subang Jaya, Selangor', '0129801789', 'j_holland@gmail.com');
