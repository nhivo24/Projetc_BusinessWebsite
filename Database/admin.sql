create database admins;
use admins;
create table admin(
username varchar(250),
password varchar(250)
);
insert into admin(username,password)
values("vothinhi","vothinhi");

create table apply(
id int(20) NOT NULL AUTO_INCREMENT, 
namecv varchar(250),
descrip varchar(250),
requite varchar(250),
amount int(20),
salary decimal,
image varchar(250),
date datetime,
PRIMARY KEY (id)
);

insert into apply(namecv,descrip,requite,amount,salary,image)
    value('Photoshoper','Thiết kế icon, web, apps: phần mềm Photoshop cũng thường được sử dụng để thiết kế các icon đơn giản, thiết kế web, thiết kế giao diện apps dùng cho các thiết bị di động','Đam mê công nghệ,Ham học hỏi, trau dồi kiến thức,Trình độ ngoại ngữ ,Tốt Nghiệp chuyên ngành CNTT',5,1200000,'../Image/bg.jpg'),
       ('Desiger','Thiết kế web, apps. thiết kế giao diện apps dùng cho các thiết bị di động','Đam mê công nghệ,Ham học hỏi, trau dồi kiến thức,Trình độ ngoại ngữ ,Tốt Nghiệp chuyên ngành CNTT',7,1000000,'../Image/designer.jpg'),
	   ('Developer','Thiết kế web, apps,lập trình giao diện apps dùng cho các thiết bị di động','Đam mê công nghệ,Ham học hỏi, trau dồi kiến thức,Trình độ ngoại ngữ ,Tốt Nghiệp chuyên ngành CNTT',5,2500000,'../Image/developer.jpg'),
	   ('Cryptographer','Khôi phục lại thông tin đã được che giấu hay mã hóa','Đam mê công nghệ,Ham học hỏi, trau dồi kiến thức,Trình độ ngoại ngữ ,Tốt Nghiệp chuyên ngành CNTT',10,2000000,'../Image/ptich.jpg'),
		('Tester','Khôi phục lại thông tin đã được che giấu hay mã hóa','Đam mê công nghệ,Ham học hỏi, trau dồi kiến thức,Trình độ ngoại ngữ ,Tốt Nghiệp chuyên ngành CNTT',12,2000000,'../Image/tester.jpg');
 create table leader(
 id int(20) NOT NULL AUTO_INCREMENT, 
 image varchar(250),
 name varchar(250),
 positions varchar(250),
 PRIMARY KEY (id)
 );
 insert into leader(image,name,positions)
 values
 ('vulam.jpg','Vu lam','CEO, Co-Founder'),
 ('josh.jpg','Josh Lieberman','President, Co-Founder'),
 ('kau.jpg','Kaushal Amin','CTO'),
 ('leo.jpg','Leo Tucker','COO');
 
 
 create table information(
 id int(20) NOT NULL auto_increment,
 lastname varchar(250),
 name varchar(250),
 email varchar(250),
 phone int(15),
 gender varchar(20),
 positions varchar(250),
 message varchar(250),
 PRIMARY KEY (id)
 );
 insert into information(lastname,name,email,phone,gender,positions,message)
 values('Nguyen',' Linh','linh.nguyen@gmail.com','096624800','Nữ','designer','Hãy gọi cho tôi'),
	   ('Vo',' Nhi','vothinhi2410@gmail.com','096624800','Nữ','designer','Hãy gọi cho tôi');
 
 