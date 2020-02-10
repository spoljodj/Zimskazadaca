drop database if exists zavrsnirad;
create database zavrsnirad default character set utf8;
#c:\xampp\mysql\bin\mysql.exe -uedunova -pedunova --default_character_set=utf8 < d:\zavrsnirad.sql
use zavrsnirad;

create table shopkeeper(
shopkeeper_id          int not null primary key auto_increment,
First_name             varchar(50) not null,
Last_Name              varchar(50) not null,
Race                   varchar(20) not null,
Age                    varchar(10),
Description            text
);

create table item(
item_id         int not null primary key auto_increment,
Name            varchar(255) not null,
Type            varchar(50) not null,
Cost            decimal(18,2) not null,
Description     text not null,
Rarity          varchar(20) not null
);


create table shop(
shop_id         int not null primary key auto_increment,
S_name          varchar(50) not null,
Type            varchar(50) not null,
S_size          varchar(20)not null,
S_description   text not null,
shopkeeper      int not null
);

create table generated(
shop        int not null,
item        int not null
);

create table user(
user_id         int not null primary key auto_increment,
username        varchar(50) not null,
userpassword    char(60) not null,
usermail        varchar(100) not null,
uloga           varchar(20)
);

alter table shop add foreign key(shopkeeper) references shopkeeper(shopkeeper_id);

alter table generated add foreign key(shop) references shop(shop_id);
alter table generated add foreign key(item) references item(item_id);

insert into user(user_id,username,userpassword,usermail,uloga) values 
(null, 'Admin', '$2y$10$0S/VRaXh173HFC73OMpGeOrT8V4xu6MqO7P1B5edFr3loiSyd83Q6', 'spoljo1122@gmail.com','admin'),
(null, 'Operator', '$2y$10$0S/VRaXh173HFC73OMpGeOrT8V4xu6MqO7P1B5edFr3loiSyd83Q6', 'matrix200@net.hr','operater');
