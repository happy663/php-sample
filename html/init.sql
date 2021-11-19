

create table users (id int AUTO_INCREMENT,name varchar(30),mail varchar(30),password varchar(60),PRIMARY KEY (id));
insert into users (name,mail,password) VALUES('happy',"hoge@hoge",'hogehoge');




create table events (event_id int AUTO_INCREMENT,contents varchar(30),start_datetime datetime,end_datetime datetime,place varchar(30),user_id int,PRIMARY KEY (event_id));
insert into events (contents,start_datetime,end_datetime,place,user_id) VALUES ("go to out","2019-05-02 12:48:35","97-12-24 08:12:13","nagoya",1);
insert into events (contents,start_datetime,end_datetime,place,user_id) VALUES ("go to oosaka","2019-05-02 12:48:35","97-12-24 08:12:13","ooaka",1);

