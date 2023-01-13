-- CREATE DATABASE techmsaf_demo;
-- use techmsaf_demo;

CREATE TABLE post(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE post;
