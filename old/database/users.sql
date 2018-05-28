CREATE TABLE users (
  id bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
  login varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  type int NOT NULL REFERENCES users_type(id),
  assecc varchar(255) NOT NULL
);

CREATE TABLE users_type (
id mediumint NOT NULL AUTO_INCREMENT PRIMARY KEY,
value varchar(50) NOT NULL
);

INSERT INTO users_type (value)
VALUES 
('admin'),
('moderator'),
('user');