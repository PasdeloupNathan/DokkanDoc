DROP DATABASE IF EXISTS user_db;
CREATE DATABASE user_db;
USE user_db;

CREATE TABLE user_info(
    userID INT(10) PRIMARY Key AUTO INCREMENT,
    nickname VARCHAR(15),
    mail VARCHAR(30),
    passwordU VARCHAR(20)
)