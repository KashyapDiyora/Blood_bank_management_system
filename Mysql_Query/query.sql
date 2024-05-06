 CREATE TABLE login_info(
    id int AUTO_INCREMENT NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(20) NOT NULL,
    entity_type ENUM('user','hospital') NOT NULL
    );


CREATE TABLE hospital (
    id INT NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(20) NOT NULL,
    hName VARCHAR(100),
    hAddress VARCHAR(200),
    hCity VARCHAR(50),
    hState VARCHAR(50),
    ap INT DEFAULT 0,
    an INT DEFAULT 0,
    bp INT DEFAULT 0,
    bn INT DEFAULT 0,
    abp INT DEFAULT 0,
    abn INT DEFAULT 0,
    op INT DEFAULT 0,
    onn INT DEFAULT 0, 
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES login_info(id) ON DELETE CASCADE
);

DELIMITER //
CREATE TRIGGER data_insert AFTER INSERT ON login_info
FOR EACH ROW
BEGIN
    IF NEW.entity_type = 'hospital' THEN
        INSERT INTO hospital (id, username, password)
        VALUES (NEW.id, NEW.username, NEW.password);
    END IF;
END//
DELIMITER ;

UPDATE hospital SET hName = '$hName' , 
    hAddress = '$hAddress' , 
    hCity = '$hCity' , 
    hState = '$hState' 
    WHERE username = '$username' AND password = '$password';

CREATE TABLE slot_book_data(
    name VARCHAR(50) NOT NULL,
    id INT AUTO_INCREMENT PRIMARY KEY,
    age INT NOT NULL,
    weight FLOAT NOT NULL,
    blood_group ENUM('ap','an','bp','bn','abp','abn','op','onn') NOT NULL,
    slot_date DATE NOT NULL,
    email VARCHAR(50) NOT NULL,
    mobile_no VARCHAR(10) NOT NULL,
    city VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL
);
