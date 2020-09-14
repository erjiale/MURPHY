CREATE DATABASE MURPHY;

CREATE TABLE users
(
    user_id SERIAL PRIMARY KEY,
    user_email VARCHAR
    (255) NOT NULL,
    user_name VARCHAR
    (60) NOT NULL,
    user_pwd VARCHAR
    (255) NOT NULL,
    user_fname VARCHAR
    (60) NOT NULL,
    user_lname VARCHAR
    (60) NOT NULL,
    user_date DATE NOT NULL,
    user_type ENUM('admin', 'user')
);

CREATE TABLE products
(
    product_id SERIAL PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    product_price FLOAT NOT NULL,
    product_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    product_image VARCHAR(100) NOT NULL
);

CREATE TABLE product_categories
(
    category_id SERIAL PRIMARY KEY,
    category_name VARCHAR(60) NOT NULL,
    product_id INT REFERENCES products(product_id)
);

CREATE TABLE carts
(
    cart_id SERIAL PRIMARY KEY,
    cart_quantity SMALLINT DEFAULT 1,
    user_id INT REFERENCES users(user_id),
    product_id INT REFERENCES products(product_id)
);