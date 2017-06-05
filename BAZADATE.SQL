  CREATE TABLE USERSTW
   (	USER_ID NUMBER NOT NULL PRIMARY KEY, 
	USER_PASSWORD VARCHAR2(50) NOT NULL , 
	USER_NAME VARCHAR2(100), 
	MAIL VARCHAR2(100), 
	ROLE VARCHAR2(30), 
	NR_STELUTE )

CREATE TABLE friends(
id_user int REFERENCES userstw(user_id) not null,
id_friend int REFERENCES userstw(user_id) not null,
primary key(id_user,id_friend))

select * from userstw where fobie='height'

create or replace procedure see_friend_exist(idUser int,idFriend int,msg OUT int) as
begin
select count(*)into msg from friends where id_user=idUser and id_friend=idFriend;
end see_friend_exist;


CREATE TABLE fobii_statistici(
provocare_id int REFERENCES provocari_nume(provocare_id) not null,
varsta varchar2(100))



create or replace procedure count_phobi(id_nr int,msg OUT int)as
begin
    select count(*) into msg from fobii_statistici where provocare_id=id_nr;
end count_phobi;

create or replace procedure count_phobi_age(id_nr int,msg1 OUT int,msg2 OUT int,msg3 OUT int)as
begin
    select count(*) into msg1 from fobii_statistici where provocare_id=id_nr and varsta='under 18';
    select count(*) into msg2 from fobii_statistici where provocare_id=id_nr and varsta=' 25 to 30';
    select count(*) into msg3 from fobii_statistici where provocare_id=id_nr and varsta=' 31 to 40';
 

end count_phobi_age;



create or replace procedure inc_like_art(id int) as
nr int;
begin
select nr_reads into nr from myarticles where id_art=id;
nr:=nr+1;
UPDATE MYARTICLES SET NR_READS=nr where id_art=id;
end inc_like_art;


	create table myarticles(
id_art int not null primary key ,
title_art varchar2(200),
img_path varchar2(200),
art_path varchar2(300),
date_art date,
nr_reads int,
resume_art  varchar2(400)
)

CREATE OR REPLACE TRIGGER profile_picture
after insert ON userstw

DECLARE 
   v_poza varchar2(60);
   ultimo_id int;
   TYPE tab1 IS varray(30) of VARCHAR2(30);
   male_pic tab1;
  TYPE tab2 IS varray(30) of VARCHAR2(30);
  female_pic tab2;
   username varchar2(60);
   pozitie int;
   poza varchar2(60);

BEGIN 
    male_pic:=tab1('profile_pic/2.png',
    'profile_pic/4.png',
    'profile_pic/5.png',
    'profile_pic/6.png',
    'profile_pic/8.png',
    'profile_pic/11.png',
    'profile_pic/13.png',
    'profile_pic/14.png');
    
    female_pic:=tab2('profile_pic/1.png',
    'profile_pic/3.png',
    'profile_pic/7.png',
    'profile_pic/9.png',
    'profile_pic/12.png',
    'profile_pic/10.png',
    'profile_pic/15.png');
    
       select * INTO ultimo_id from(SELECT user_id  FROM userstw ORDER BY user_id DESC)where rownum<=1;
       select * INTO username from(SELECT user_name  FROM userstw ORDER BY user_id DESC)where rownum<=1;

    	if(substr(username,LENGTH(username),1)='a')then
	       pozitie:=DBMS_RANDOM.VALUE(1,female_pic.COUNT);
	       poza:=female_pic(pozitie);
         update userstw set profile_pic=poza where user_id=ultimo_id;
      else
          pozitie:=DBMS_RANDOM.VALUE(1,male_pic.COUNT);
	        poza:=male_pic(pozitie);
          update userstw set profile_pic=poza where user_id=ultimo_id;
      end if;


END; 
/ 



UPDATE USERsTW SET profile_pic='profile_pic/1.png'  where user_id=1;
UPDATE USERsTW SET profile_pic='profile_pic/3.png'  where user_id=2;
UPDATE USERsTW SET profile_pic='profile_pic/7.png'  where user_id=3;
UPDATE USERsTW SET profile_pic='profile_pic/9.png'  where user_id=4;
UPDATE USERsTW SET profile_pic='profile_pic/12.png'  where user_id=5;
UPDATE USERsTW SET profile_pic='profile_pic/2.png'  where user_id=6;
UPDATE USERsTW SET profile_pic='profile_pic/4.png'  where user_id=7;
UPDATE USERsTW SET profile_pic='profile_pic/15.png'  where user_id=8;
UPDATE USERsTW SET profile_pic='profile_pic/5.png'  where user_id=9;
UPDATE USERsTW SET profile_pic='profile_pic/8.png'  where user_id=10;
UPDATE USERsTW SET profile_pic='profile_pic/11.png'  where user_id=11;



create or replace procedure nr_art(nr OUT int)as
 begin
 select count(*) into nr from myarticles;
 nr:=nr+1;
 end nr_art;
 
  create or replace procedure user_role(v_role OUT varchar,id int)as
 begin
 select role into v_role from userstw where user_id=id;
 end user_role;
 
 
insert into myarticles values(

1,'Phisical Exercise','photos/articol1.png','http://localhost/site/articol1.php','04-MAY-17',
12,
'One of the most powerful and effective methods for reducing generalized anxiety and overcoming a predisposition to panic attacks is a program of regular, vigorous exercise. You have panic attacks when your body’s natural fight-or-flight reaction—the sudden surge of adrenaline you experience in response to a realistic threat—becomes excessive or occurs out of context.');

insert into myarticles values(

2,'Relaxation','photos/articol2.png','http://localhost/site/articol2.php','11-APR-17',
17,'The capacity to relax is at the very foundation of any program undertaken to overcome anxiety, phobias,or panic attacks. Many of the other skills described in this site,such as desensitization, visualization,and changing negative self-talk.Relaxation is more than unwinding in front of the TV set or in the bathtub at the end of the day—though,without doubt can be good');


insert into myarticles values(
3,'Nutrition','photos/articol3.png','http://localhost/site/articol3.php','02-MAY-17',15,
'Relatively little has been written on the subject of nutrition and anxiety disorders. Yet if it is assumed that there is at least some biological basis for panic attacks and anxiety, the subject of nutrition becomes important . What you eat has a very direct and significant impact on your physiology and biochemistry.In the last twenty years, the relationship between');


insert into myarticles values(
4,'Medication for Anxiety','photos/articol4.png','http://localhost/site/articol4.php','01-MAY-17',14,
'The use of medication is a critical issue among those who struggle with anxiety on a daily basis,as well as for professionals treating anxiety disorders.For many people,medication is a positive turning point along the path to recovery.For others,medication can confuse and complicate the recovery process,when freedom from anxiety is purchased at the cost of long-term addiction to tranquilizers.');

insert into myarticles values(
5,'Coping with Panic Attacks','photos/articol5.png','http://localhost/site/articol5.php','02-JUL-16',23,
'A panic attack is a sudden surge of mounting physiological arousal that can occur "out of the blue" or in response to encountering (or merely thinking about) a phobic situation. Bodily symptoms that occur with the onset of panic can include heart palpitations, tightening in the chest or shortness .');


insert into myarticles values(

6,'Help for Phobias: Exposure','photos/articol6.png','http://localhost/site/articol6.php','13-APR-17',33,
'Having to face a particular situation you have been avoiding for years may at the outset seem an impossible task. Yet this task can be made manageable by breaking it down into sufficiently small steps. Instead of entering a situation all at once, you can do it very gradually.');



insert into myarticles values(
7,'Self-Talk','photos/articol7.png','http://localhost/site/articol7.php','02-APR-17',29,
'The truth is that it’s what we say to ourselves in response to any particular situation that mainly determines our mood and feelings. Often we say it so quickly and automatically that we don’t even notice, and so we get the impression that the external situation “makes” us feel the way we do.');


insert into myarticles values(
8,'Recovery','photos/articol8.png','http://localhost/site/articol5.php','02-JUL-17',23,
'Heredity, physiological imbalances in the brain, childhood deprivation and faulty parenting, and the cumulative effect of stress over time can all work to bring about the onset of panic attacks, agoraphobia, or any of the other anxiety disorders.');


insert into myarticles values(
9,'Mistaken Beliefs','photos/articol9.png','http://localhost/site/articol5.php','02-JUL-17',04,
'By now you may have asked, "Where does negative self-talk come from?"" In most cases, it’s possible to trace negative thinking back to deeper-lying beliefs or assumptions about ourselves, others, and life in general.These basic assumptions have been variously called "scripts" ,"core beliefs" "life decisions"');






create or replace procedure imag_roll(id1 OUT int,id2 OUT int,id3 OUT int,id4 OUT int) as
CURSOR lista_ID IS  SELECT id_art FROM(SELECT id_art FROM myarticles ORDER BY nr_reads desc)WHERE rownum <= 4; 
contor int:=1;
TYPE mytype IS TABLE OF articole.id_art%type index by PLS_INTEGER;
v_lista mytype; 
begin

OPEN lista_ID ; -- aceste valori pot fi calculate de codul PLSQL
    LOOP
        FETCH lista_ID INTO v_lista(contor);
        EXIT WHEN lista_ID%NOTFOUND;
        contor:=contor+1;
    end loop;
  
  id1:=v_lista(1);
  id2:=v_lista(2);
  id3:=v_lista(3);
  id4:=v_lista(4); 
  
end best_read;
