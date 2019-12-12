use test;

select * from actor;
select * from actor_awards;
select * from cast;
select * from director;
select * from movie;
select * from movie_review;
select * from running_movie;
select * from screening;
select * from theater;

select * from director;
insert into director values(null,'이남규', '1994-01-01', 'M', '한국');
insert into director values(null,'이전제', '1994-02-02', 'M', '미국');
insert into director values(null,'김민우', '1994-03-03', 'M', '중국');
insert into director values(null,'김병휘', '1994-04-04', 'M', '일본');
insert into director values(null,'박찬욱', '1994-05-05', 'M', '한국');
insert into director values(null,'하정우', '1994-06-06', 'M', '태국');
insert into director values(null,'이시영', '1994-07-07', 'M', '베트남');
insert into director values(null,'하', '1994-06-06', 'M', '국');


set @cnt = 0;
update director set director.d_id = @cnt:= @cnt +1;
alter table director auto_increment=11;

delete from director where name = '김병휘';
select * from director;


select * from movie;
insert into movie values(null,'신의 한수','액션','한국',106, '2019-10-22', 19,1,9.01,28,40.06);
insert into movie values(null,'겨울왕국','애니매이션','미국',96, '2019-12-02', 12,2,10.00,35,82.06);
insert into movie values(null,'아내를 죽였다','스릴러','한국',88, '2019-12-10', 19,3,4.01,22,22.06);
insert into movie values(null,'폴리익스프레스','애니매이션','영국',90, '2016-10-22', 12,4,6.01,25,30.06);


select * from actor;
insert into actor values(null,'정우성','1976-03-22','M', '한국');
insert into actor values(null,'엘샤','2018-12-02','W', '미국');
insert into actor values(null,'이시언','1980-07-10','M', '한국');
insert into actor values(null,'폴리','2006-01-04','M', '영국');

select * from theater;
insert into theater (theater_name, si, gu, phone_number) values('신촌 CGV','서울시','서대문구', '010-1111-1111');
insert into theater (theater_name, si, gu, phone_number) values('신촌 메가박스','서울시','서대문구', '010-2222-2222');
insert into theater (theater_name, si, gu, phone_number) values('영등포 cgv','서울시','영등포구', '010-3333-3333');
insert into theater (theater_name, si, gu, phone_number) values('해운대 cgv','부산시','해운대구', '010-4444-4444');


delete from theater where theater_name = "영등포 롯데시네마";


