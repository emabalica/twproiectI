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

INSERT INTO MYPHOBIAS VALUES(1,'Performance Anxiety','photos/speakingFear.png','http://localhost/siteFinal/fears/fear1.php','14-MAR-2017',14,
'The fear of performing or speaking in front of an audience is the most common phobia, affecting up to 70 percent of the population worldwide. In the context of fear of public speaking, it’s sometimes referred to as glossophobia. It’s a complex fear and can involve any one or all of the following components:Fear of being judged as awkward ,fear of underperforming as in a musical recital ');

INSERT INTO MYPHOBIAS VALUES(2,'Fear of Flying','photos/1.png','http://localhost/siteFinal/fears/fear2.php','15-APR-2017',14,
'Fear of flying is the second most common phobia (after fear of public speaking) and affects about 20 percent of the population, who either avoid flying or do so with discomfort. It can cripple a person’s life in major ways, such as avoiding desirable jobs that require flying or going on vacations to visit family and friends. requently, the fear of flying overlaps with other phobias');

INSERT INTO MYPHOBIAS VALUES(3,'Claustrophobia','photos/Claustrophobia.png','http://localhost/siteFinal/fears/fear3.php','16-OCT-2016',14,
'Most people know that claustrophobia refers to a fear of being closed in and having no escape.It can take a variety of forms, including fear of small and/or crowded rooms, fear of being stuck in traffic, fear of tunnels, fear of subways, fear of being stuck waiting in line, or fear of sitting in a chair while receiving a procedure. Many people who fear flying are afraid of confinement');



INSERT INTO MYPHOBIAS VALUES(4,'Hypochondria','photos/Hypochondria.png','http://localhost/siteFinal/fears/fear4.php','18-JAN-2016',14,
'Hypochondria is defined as excessive worry about having a serious disease, even after medical reassurance. Often a particular symptom, such as gastric discomfort, chronic headaches is taken to be evidence of a life-threatening disease. Having a bad headache might be taken as evidence of a brain tumor, or a chronic cough as evidence for cancer. Some people continuously seek out  doctors ');


INSERT INTO MYPHOBIAS VALUES(5,'Dental Phobia','photos/DentalPhobia.png','http://localhost/siteFinal/fears/fear5.php','19-JUL-2016',14,
'Dental phobia can involve fear and avoidance of dentistry in general, or a more specific fear about having a particular dental procedure. In some cases, it appears that the problem is not a phobia at all but symptoms of post-traumatic stress disorder in response to a previous, traumatic dental experience. More than half of adults in America experience anxiety about going to the dentist');


INSERT INTO MYPHOBIAS VALUES(6,'Blood/Injection Phobia','photos/InjectionPhobia.png','http://localhost/siteFinal/fears/fear6.php','20-MAR-2017',14,
'Fears of blood, injuries associated with blood, and injections often go together.  About 70 percent of people who are phobic of blood also have a phobia of injections.  On the other hand, only about 30 percent of injection/needle phobics have fears of blood and injury. A phobia of injections can have very serious health consequences , if you refuse to receive blood tests ');


INSERT INTO MYPHOBIAS VALUES(7,'Fear of Heights','photos/3.png','http://localhost/siteFinal/fears/fear7.php','24-DEC-2017',14,
'he fear of heights, or acrophobia, is another very common phobia. Frequently, it combines with other phobias, such as the fear of flying, fear of riding elevators, or fear of driving over a high bridge. The most frequent form of the fear is being high up in a building.
Sometimes the fear of heights is confused with vertigo. Vertigo is a sensation of spinning caused by a medical condition');


INSERT INTO MYPHOBIAS VALUES(8,'Animal and Insect Phobias','photos/AnimalandInsectPhobias.png','http://localhost/siteFinal/fears/fear8.php','14-APR-2017',14,
'Phobias of specific types of animals or insects abound. The fear can be of snakes, mice, dogs, cats, certain birds, spiders, bees or cockroaches, to name some of the most common examples. People with this type of phobia avoid not only a particular animal/insect but areas where they believe they might be exposed to the feared creature.Even seeing a picture will lead to a panic attack.');


INSERT INTO MYPHOBIAS VALUES(9,'Fear of Death','photos/FearofDeath.png','http://localhost/siteFinal/fears/fear9.php','15-JUN-2017',14,
'Death anxiety is the morbid, abnormal, or persistent fear of one s own death. One source defines death anxiety as a "feeling of dread, apprehension or solicitude (anxiety) when one thinks of the process of dying, or ceasing to ‘be’".It is also referred to as thanatophobia (fear of death), and is distinguished from necrophobia, which is a specific fear of dead or dying persons or things ');

INSERT INTO MYPHOBIAS VALUES(10,'Fear of Snakes','photos/snake.png','http://localhost/siteFinal/fears/fear10.php','20-MAR-2017',14,
'The fear of snakes or Ophidiophobia is the second most common phobia in the world. Nearly 1/3rd of adult humans are believed to have an intense fear of snakes.Most people with Ophidiophobia can lead normal lives as they do not have to confront the object of their fears under normal circumstances. However, for people with severe Ophidiophobia,the mere mention can lead to an intense fear ');


