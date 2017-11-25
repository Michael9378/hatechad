CREATE TABLE post (
	id INT NOT NULL AUTO_INCREMENT,
	authorId INT NOT NULL,
	content VARCHAR(280),
	votes INT,
	age DATE,
	PRIMARY KEY (id)
);

CREATE TABLE author (
	authorId INT NOT NULL,
	rejectedPosts INT NOT NULL DEFAULT 0,
	lastBan DATE,
	PRIMARY KEY (posterId)
);

CREATE TABLE polarPopCount (
	id INT,
	value INT,
	PRIMARY KEY (id)
);