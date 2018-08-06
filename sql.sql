CREATE TABLE comments (
	cid int(11) not null AUTO_INCREMENT PRIMARY KEY, 
    uid varchar(128) not null, 
    date datetime not null, 
    message TEXT not null 
);

CREATE TABLE user (
	id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    uid varchar(128) not null,
    pwd varchar(128) not null
);

INSERT INTO user (uid, pwd) VALUES ('admin', '123');
INSERT INTO user (uid, pwd) VALUES ('aaron', '123');	