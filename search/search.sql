CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,  
    title VARCHAR(255) NOT NULL,        
    content TEXT NOT NULL,              
    link VARCHAR(255)                   
);


INSERT INTO articles (title, content, link) 
VALUES 
('Introduction to Databases', 'This article explains the basics of databases, including their structure and usage.', 'https://example.com/introduction-to-databases'),
('Introduction to Databases', 'This article explains the basics of databases, including their structure and usage.', 'https://example.com/introduction-to-databases');

