drop database if exists zavrsnirad;
create database zavrsnirad default character set utf8;
#c:\xampp\mysql\bin\mysql.exe -uedunova -pedunova --default_character_set=utf8 < D:\PP20\zavrsnirad.edunova.hr\zavrsnirad.sql
use zavrsnirad;

create table shopkeeper(
shopkeeper_id          int not null primary key auto_increment,
First_name             varchar(50) not null,
Last_Name              varchar(50) not null,
Race                   varchar(20) not null,
Bussiness              varchar(20) not null,
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

create table admin(
user_id         int not null primary key auto_increment,
username        varchar(50) not null,
userpassword    char(60) not null,
usermail        varchar(100) not null,
role            varchar(20)
);

alter table shop add foreign key(shopkeeper) references shopkeeper(shopkeeper_id);

alter table generated add foreign key(shop) references shop(shop_id);
alter table generated add foreign key(item) references item(item_id);

insert into admin (user_id,username,userpassword,usermail,role) values 
(null, 'Admin', '$2y$10$YhUXusAzdGHCFpcU/WVEY.1fzYUWCeeffaWqlgI8o/QTnJYMO/bNC', 'spoljo1122@gmail.com','admin');

insert into shopkeeper (shopkeeper_id,First_name,Last_Name,Race,Bussiness,Age,Description) values 
(null,'Garmek','Runehammer','Dwarf','Blacksmith','135','Beefy dwarf with a stout and firm body, giant nose,black hair, a black beard that goes all the way to his pants. Dressed in a black leather apron,holding a hammer in his hand'),
(null,'Ermrik','Stonethrower','Dwarf','Blacksmith','193','Rugged dwarf, with a cold face that doesnt show too much emotions. Unusualy for a dwarf,he is clean shawed and dressed in common clothes. The shirt is dyed in a maroon color and the pants are a dirty white'),
(null,'Gernur','Runewriter','Dwarf','Blacksmith','178','Perky dwarf with an abundance of energy that seemingly cant be calm and never stops. Has bright red hair and beard thats almost swallowing his whole face. The clothes he has on himself arent anything special'),
(null,'Meldohr','Potforger','Dwarf','Blacksmith','247','Strong dwarf with a long beard tied in long braid. Has a couple of little scars on his face. Wears an blacksmith leather appron.'),
(null,'Gralmar','Gingerbeard','Dwarf','Blacksmith','138','Dwarf with a visibly identifying feature in his yellow gingerlike beard. Almost always has a smile plastered on his face while he works, and happily sells his crafts.'),
(null,'Thornus','Birdchaser','Dwarf','Blacksmith','167','A smaller than usual dwarf that from afar looks like a little walking fortress, with all the plate mail that he likes to wear. Has a little of a bald space on his head that he doesnt want to admit is there.'),
(null,'Torbelle','Scythemaker','Dwarf','Blacksmith','126','A female dwarf that inherited her workshop and made a name for herself with her good work. Has a bright face that is sometimes covered with her brown hair.'),
(null,'Jenlinn','Bulwark','Dwarf','Blacksmith','205','A female dwarf who was accepted in a blacksmith shop due to her innate talent from small age. Has a little smudge on her face due to constantly working in the forge. Although she wears blacksmith clothes you can still see her well developed figure underneath.'),
(null,'Kathra','Strakheln','Dwarf','Blacksmith','299','Female dwarf with a good looking face. Has a little nick under her left eye that looks more like a mark made with a pen than a scar. Wears common clothes over the day and forges her stock over the night.'),
(null,'Helja','Fireforge','Dwarf','Blacksmith','147','Female dwarf with a buff body, has a tomboyish face and could be mistaken for a male dwarf. Hates when she is mistaken for it and shooes away customers that assume she is a male.'),
(null,'Vistra ','Brawnanvil','Dwarf','Blacksmith','327','Female dwarf with a weathered face. Has the look of a person who has gotten through a lot of shit in her life. Wears a thick white leather appron. Her black hair falls on her shoulders and dances in the air while she hammers on the anvil.'),
(null,'Folre','Sarbanise','Elf','Blacksmith','350','A sleek and tall elf, around the height of 189cm, wearing the blacksmiths appron arraning the merchandise on the display. Has blonde hair and deep blue eyes that look like they pierce you while he is looking at you.'),
(null,'Elandorr','Olaris','Elf','Blacksmith','362','Elf dressed in a set of expensive clothes managing the shop. Has a tall and slender figure, with his hair going almost to his hip. Gracefully moves around the shop and cleans the dust from the merchandise.'),
(null,'Rydel','Presna','Elf','Blacksmith','264','Elf male working in the shop. Has a short blonde hair that looks like a straw bundle. Has an appron on himself and is holding a hammer in his right hand.'),
(null,'Adamar','Lurie','Elf','Blacksmith','401','Elf male with a long pointy nose. Wears glasses that pronounce the nose even more. Despite the long nose and the comical looks, has the demeanor of a true blacksmith and knowledge to go with it.'),
(null,'Vulre','Neriren','Elf','Blacksmith','383','Male elf, wearing a set of common clothes. Typical elven height and blonde hair. Also has a little monocle on his left eye that he uses to inspect weapons and armor people bring to him.'),
(null,'Laiex','Inanan','Elf','Blacksmith','500','Male elf,has a serious face full of wrinkles. His age is obvious on his face and his behaviour. Considers himself the smartest person around. Likes to haggle for prices and always tries to undercut the sellers.'),
(null,'Glim','Burez','Human','Blacksmith','51','Human male with an eyepatch over his left eye. Has strong arms beffiting a blacksmith and carries a heavy hammer with himself. Has a dark brown hair and a well kept moustache on his face.'),
(null,'Steth','Threewood','Human','Blacksmith','44','Human male wearing a brown leather appron thats smeared all over with coal. Brawny type of body with a height of 179cm.Has a square chin and a little beard growing.'),
(null,'','','','Blacksmith','',''),
(null,'','','','Blacksmith','',''),
(null,'','','','Blacksmith','','');