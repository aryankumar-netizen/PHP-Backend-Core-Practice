CREATE Database users_2601;

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255),
    hash_pass VARCHAR(255),
    role Varchar(100) DEFAULT 'user'
);

SELECT * from users;



INSERT INTO users(name, email, password, hash_pass )
VALUES ('Ali', 'alikhan@gmail.com', '123', '123')

SELECT * from users;
