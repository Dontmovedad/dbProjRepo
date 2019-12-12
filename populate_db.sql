insert into Champ_Type(Champ_Type_Name) values ('Melee'), ('Ranged');
insert into Item_Type(Item_Type_Name) values ('Attack_Damage'), ('Ability_Power'), ('Attack_Speed'), ('Defense'), ('Movement');
insert into Pos(Pos_Name) values ('Top'), ('Jungle'), ('Mid'), ('Adc'), ('Sup');

insert into Item(Item_Name, Item_Effect, Item_Type_ID) values
('Lichs Bane', 'Additional magic damage on next attack after casting a spell', 2),
('Rapid FireCannon', 'Additional attack range after stacking', 3),
('Spear of Shojin', 'Attack reduces ability cooldown upon casting ult', 1),
('Rabadons Deathcap', '+40% ability power', 1),
('Guardian Angel', 'revive in 4 seconds after taking lethal damage', 1),
('Infinity Edge', '+25% critical damage', 1),
('Rod of Ages', 'Gain additional health, mana and ability power every minute', 2),
('Void Staff', '+40% magic penetration', 2),
('Statikk Shiv', '100 magic damage to 4 units after stacking', 3),
('Warmogs Armor', 'Additional health regen after out of combat', 4),
('Black Cleaver', 'Reduce enemy armor after dealing physical damage', 1),
('Berserkers Greaves', '+35% attack speed', 3),
('Dead Mans Plate', '+60 move speed after stacking', 4),
('Morellonomicon', 'inflict enemy with grievous wounds for 3 seconds after dealing magic damage', 2),
('Trinity Force', 'Additional physical damage on next attack after casting a spell', 1),
('Mejais Soulstealer', 'Additional ability power after getting kills or assists', 2),
('Sunfire Cape', 'Deal magical damage to enemies around you', 4),
('Duskblade of Draktharr', 'slow and deal additional damage to enemy after you cannot be seen for 1 second', 1),
('Ninja Tabi', 'Block 10% damage from basic attacks', 4),
('Thornmail', 'Reflect damage upon being attacked', 4),
('Boots of Swiftness', '+60 move speed and -30% slow effects', 5);

insert into Champion(Champ_Type_ID, Champ_Name, Base_HP, Base_Mana, Base_Attack, Base_AtkSpeed, Base_Armor, Base_Magic_Resist, Base_MoveSpeed) values
(1, 'Fizz', 570, 317.2, 58.04, 0.658, 22.412, 32.1, 335),
(1, 'Talon', 588, 377.2, 68, 0.625, 30, 39, 335),
(2, 'Xerath', 526, 459, 54.7, 0.625, 21.88, 30, 340),
(1, 'Jax', 592.8, 338, 68, 0.638, 36, 32.1, 350),
(1, 'Darius', 582.24, 263, 64, 0.625, 39, 32.1, 340),
(2, 'Graves', 555, 325, 68, 0.49, 33, 30, 340),
(2, 'Jinx', 581, 245, 57, 0.625, 28, 30, 325),
(1, 'Olaf', 597.24, 315.6, 68, 0.694, 35, 32.1, 350),
(1, 'Renekton', 575, 100, 69, 0.665, 35, 32.1, 345),
(1, 'Yasuo', 523, null, 60, 0.67, 30, 30, 345),
(2, 'Xayah', 561, 340, 60, 0.625, 25, 30, 325),
(2, 'Aurelion Sol', 575, 350, 57, 0.625, 19, 30, 325),
(2, 'Ahri', 526, 418, 53.04, 0.668, 20.88, 30, 330),
(2, 'Annie', 524, 418, 50.41, 0.579, 19.22, 30, 335),
(1, 'Blitzcrank', 582.6, 267.2, 61.54, 0.625, 40, 32.1, 325),
(2, 'Cassiopeia', 575, 350, 53, 0.647, 20, 30, 328),
(1, 'Dr. Mundo', 582.52, null, 61.27, 0.625, 36, 32.1, 345),
(2, 'Ezreal', 491, 360.6, 60, 0.625, 22, 30, 325),
(2, 'Draven', 574, 360.56, 60, 0.679, 29, 30, 330),
(1, 'Hecarim', 580, 277.2, 66, 0.67, 36, 32.1, 345),
(1, 'Jayce', 560, 357.2, 54, 0.658, 27, 30, 335),
(2, 'LeBlanc', 528, 334, 54.88, 0.625, 21.88, 30, 340);

insert into Champ_Pos(Champ_ID, Pos_ID) values 
(1, 3), (2, 3), (3, 3), (4, 2), (4, 1), (5, 1), (6, 2),
(7, 4), (8, 1), (8, 2), (9, 1), (10, 3), (11, 4), (12, 3),
(13, 3), (14, 3), (15, 5), (16, 3), (17, 1), (17, 2), (18, 4),
(18, 3), (19, 4), (20, 1), (20, 2), (21, 1), (21, 3), (22, 3);

insert into Area(Area_Name) values ('LCS_NA'), ('LCS_EU'), ('LPL'), ('LCK'), ('LMS');
insert into Country(Area_ID, Country_Name) values (1, 'U.S.'), (2, 'Germany'), (3, 'China'), (4, 'Korea'), (5, 'Japan');

insert into Team(Area_ID, Team_Name) values
(1, 'Team Liquid'), (1, 'Cloud 9'), (1, 'Team SoloMid'), (1, 'Clutch Gaming'), (2, 'G2 Esports'), 
(2, 'Fnatic'), (2, 'Splyce'), (3, 'Invictus Gaming'), (3, 'Fun Plus Pheonix'), (3, 'Royal Never Give Up'),
(3, 'Edward Gaming'), (3, 'LGD Gaming'), (3, 'Bilibili Gaming'), (4, 'KT Rolster'), (4, 'Gen G'),
(4, 'SK Telecom T1'), (4, 'Griffin'), (4, 'Damwon Gaming'), (5, 'AHQ Gaming'), (5, 'Flash Wolves');

insert into Pro_Player(Team_ID, Main_Pos, Player_Name, Game_ID) values
(1, 4, 'Yiliang Peng', 'Doublelift'), (1, 3, 'Nicolaj Jensen', 'Jensen'), (1, 5, 'Jo Yong-in', 'CoreJJ'),
(5, 3, 'Luka Perković', 'Perkz'), (5, 3, 'Rasmus Borregaard Winther', 'Caps'), (5, 2, 'Marcin Jankowski', 'Jankos'),
(6, 1, 'Gabriël Rau', 'Bwipo'), (6, 2, 'Mads Brock-Pedersen', 'Broxah'), (6, 4, 'Martin Larsson', 'Rekkles'),
(6, 5, 'Zdravets Iliev Galabov', 'Hylissang'), (8, 1, 'Kang Seung-lok', 'TheShy'), (8, 2, 'Gao Zhen-Ning', 'Ning'),
(8, 3, 'Song Eui-jin', 'Rookie'), (8, 4, 'Yu Wen-Bo', 'JackeyLove'), (8, 5, 'Wang Liu-Yi', 'Baolan'),
(9, 1, 'Kim Han-saem', 'GimGoon'), (9, 2, 'Gao Tian-Liang', 'Tian'), (9, 3, 'Kim Tae-sang', 'Doinb'),
(9, 4, 'Lin Wei-Xiang', 'Lwx'), (9, 5, 'Liu Qing-Song', 'Crisp'), (10, 4, 'Jian Zi-Hao', 'Uzi');

insert into PlayerGoodAt(Player_ID, Champ_ID) values
(1, 11), (2, 22), (3, 15), (4, 22), (5, 10), (6, 4), (7, 5), (8, 17), (9, 11),
(10, 15), (11, 21), (12, 8), (13, 22), (14, 7), (15, 15), (16, 9), (17, 20), (18, 16),
(19, 18), (20, 15), (21, 11);