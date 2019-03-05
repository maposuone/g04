CREATE TABLE comment (
c_id INT not null ,
t_id INT not null,
name varchar(20) not null,
score INT NOT NULL,
comment varchar(200)  not null,
input_time timestamp not null default current_timestamp,
title  varchar(50)  not null,
user_id varchar(20) not null
);

INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,2,"久保田",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,4,"田中",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,6,"岡",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,8,"岡",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,9,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");

INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,2,"久保田",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,4,"岡",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,6,"久保田",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,8,"久保田",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,9,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");

INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,2,"鈴木",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,4,"田中",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,6,"鈴木",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,8,"岡",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,9,"鈴木",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (1,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");



INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,2,"久保田",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,4,"田中",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,6,"岡",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,8,"岡",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,9,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");

INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,2,"久保田",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,4,"岡",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,6,"久保田",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,8,"久保田",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,9,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");

INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,2,"鈴木",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,4,"田中",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,6,"鈴木",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,8,"岡",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,9,"鈴木",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (2,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");



INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,2,"久保田",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,4,"田中",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,6,"岡",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,8,"岡",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,9,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");
3
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,2,"久保田",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,4,"岡",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,6,"久保田",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,8,"久保田",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,9,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");

INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,2,"鈴木",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,4,"田中",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,6,"鈴木",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,8,"岡",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,9,"鈴木",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (3,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");


INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,2,"久保田",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,4,"田中",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,6,"岡",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,8,"岡",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,9,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,2,"久保田",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,4,"岡",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,6,"久保田",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,8,"久保田",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,9,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,2,"鈴木",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,4,"田中",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,6,"鈴木",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,8,"岡",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,9,"鈴木",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (4,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,2,"久保田",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,4,"田中",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,6,"岡",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,8,"岡",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,9,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,2,"久保田",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,4,"岡",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,6,"久保田",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,8,"久保田",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,9,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,1,"玄",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,2,"鈴木",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,3,"石井",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,4,"田中",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,5,"鈴木",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,6,"鈴木",2,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,7,"田中",3,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,8,"岡",4,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,9,"鈴木",5,"いいもの買いたい。","NO.1", "hyun");
INSERT INTO comment (c_id ,t_id ,name ,score,comment ,title, user_id) VALUES (5,10,"久保田",5,"キャンプに行きたい。","NO.1", "hyun");
