Create data base apiSena;
create table ROLE(
    Role_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Role_name VARCHAR (20) NOT NULL,
    Role_description VARCHAR(100)NULL
);
create table User_status(
    Role_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Role_name VARCHAR (20) NOT NULL,
    Role_description VARCHAR(100)NULL
);
create table User(
    User_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_user VARCHAR (20) NOT NULL,
    user_password VARCHAR(100)NULL,
    user_status_id INT(11) NOT NULL,
    Role_id INT(11) NOT NULL,
    FOREIGN KEY (user_status_id) REFERENCES user_status(user_status_id),
    FOREIGN KEY (Role_id) REFERENCES user_status(user_status_id),
);
