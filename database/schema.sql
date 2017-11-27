CREATE TABLE post (
	id INT NOT NULL AUTO_INCREMENT,
	authorId INT NOT NULL,
	content VARCHAR(280),
	votes INT DEFAULT 0,
	age DATE,
	PRIMARY KEY (id)
);

CREATE TABLE author (
	authorId INT NOT NULL,
	rejectedPosts INT NOT NULL DEFAULT 0,
	unban DATE DEFAULT '0000-00-00',
	PRIMARY KEY (authorId)
);

CREATE TABLE polarPopCount (
	id INT,
	value INT,
	PRIMARY KEY (id)
);
