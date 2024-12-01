create table search_applicant (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    position VARCHAR (255),
    gender VARCHAR(255),
    age INT,
    email VARCHAR(255),
    contact_number VARCHAR(255),
    address VARCHAR(255),
    hire_date TIMESTAMP DEFAULT CURRENT_DATE,
    added_by INT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified_by INT,
    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
 
CREATE TABLE user_accounts (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    password TEXT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);

INSERT INTO search_applicant 
(first_name, last_name, position, gender, age, email, contact_number, address, hire_date, date_added)
VALUES
('Lorah', 'Hernandez', 'Chief Executive Officer (CEO)', 'Female', 22, 'lorahjynhernandez08@gmail.com', '09608717123', 'Imus Cavite', '2023-03-21', '2024-05-09 22:12:22'),
('Janimah', 'Abdul', 'Chief Financial Officer (CFO)', 'Female', 23, 'janimsabdul@gmail.com', '09778912341', 'Dasmarinas Cavite', '2023-03-30', '2024-06-17 03:17:53'),
('Rojean', 'Untalan', 'Chief Operating Officer (COO)', 'Female', 23, 'genieuntalan@gmail.com', '09881093314', 'Trece Martires Cavite', '2023-03-25', '2024-10-23 19:16:05'),
('Angelique', 'Campo', 'IT Manager', 'Female', 23, 'gelic_campo01@gmail.com', '09027728613', 'Dasmarinas Cavite', '2023-04-12', '2024-09-09 19:48:10'),
('Marithei', 'Villanueva', 'Human Resources Manager', 'Female', 22, 'theivillanueva12@gmail.com', '09015563108', 'Imus Cavite', '2023-04-18', '2024-04-19 19:25:56'),
('Carlos', 'Sainz', 'Front Office Manager', 'Male', 29, 'carlosssainzz@gmail.com', '09715229014', 'Taguig Metro Manila', '2023-04-23', '2024-02-22 02:38:49'),
('Charlotte', 'Sine', 'Sales and Marketing Manager', 'Female', 25, 'charlottesine33@gmail.com', '09706115410', 'Monaco', '2023-05-03', '2024-09-18 22:49:52'),
('Yuki', 'Tsunoda', 'Executive Chef', 'Male', 24, 'yukstsunodaa@gmail.com', '09081302189', 'Tokyo Japan', '2023-05-17', '2024-07-24 22:34:56'),
('Lando', 'Norris', 'Concierge', 'Male', 25, 'lnorris4@gmail.com', '09637813208', 'United Kingdom', '2024-05-28', '2024-01-25 22:26:12'),
('Sophia', 'Grande', 'General Manager', 'Female', 28, 'ari_grandee3@gmail.com', '09118025613', 'New York', '2023-05-31', '2024-01-15 11:59:48'); 

CREATE TABLE activity_logs (
    activity_log_id INT AUTO_INCREMENT PRIMARY KEY,
    operation VARCHAR(255),
    id INT,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    position VARCHAR(255),
    gender VARCHAR(255),
    age INT,
    email VARCHAR(255),
    contact_number VARCHAR(255),
    address VARCHAR(255),
    hire_date TIMESTAMP DEFAULT CURRENT_DATE,
    username VARCHAR(255),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);

CREATE TABLE search_history (
    search_id INT AUTO_INCREMENT PRIMARY KEY,
    keyword VARCHAR(255),
    username VARCHAR(100),
    date_searched TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);
