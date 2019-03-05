CREATE TABLE user (
user_id varchar(20) not null,
name varchar(20) not null,
password varchar(20) not null,
create_time timestamp not null default current_timestamp,
visito_cnt INT not null
);

INSERT INTO user (user_id, name, password, visito_cnt) VALUES ("hyun","玄","pass",1);
