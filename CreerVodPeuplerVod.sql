drop database if exists vod ;
create database vod ;
use vod ;

create table Film(
numFilm int not null auto_increment primary key,
titre varchar(100), 
annee varchar(4),
realisateur varchar(100) ) ;

insert into Film values ( 1, 'Blood Brother', '2018', 'John Pogue' ) ;
insert into Film values ( 2, 'Okja', '2017', 'Bong Joon Ho' ) ;
insert into Film values ( 3, 'Invincible', '2014', 'Angelina Jolie' ) ;
insert into Film values ( 4, 'Colombiana', '2011', 'Olivier Megaton' ) ;
insert into Film values ( 5, 'Colombiana', '2011', 'Olivier Megaton' ) ;
