CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    link VARCHAR(255)
);
INSERT INTO articles (title, content, link)
VALUES (
        'Home',
        "pupsj-motto Since 2008, PUP San Juan Campus is a catalyst for progress, empowering students to become transformative leaders. Through quality education, innovation, and social engagement, we equip individuals with the skills and values needed to create a sustainable future for the nation.
pupsj-banner director's photo Director's Message Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam eveniet enim laboriosam, dolorem voluptates iusto, illum ratione quibusdam repellendus non, assumenda dolore possimus vel ea. Vel vero sit iure ipsam!
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam eveniet enim laboriosam, dolorem voluptates iusto, illum ratione quibusdam repellendus non, assumenda dolore possimus vel ea. Vel vero sit iure ipsam!
",
        '../index.php'
    ),
    (
        'Introduction to Databases',
        'This article explains the basics of databases, including their structure and usage.',
        'https://example.com/introduction-to-databases'
    );