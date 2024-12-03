CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    published_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- isko chalane ke lea tumko   pahle database create karna padega fir uske baad sql me run kar do bus 