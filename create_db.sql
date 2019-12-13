Drop table if exists Champ_Type,
                     Item_Type,
                     Item,
                     Pos,
                     recom,
                     Champion,
                     Champ_Pos,
                     Area,
                     Country,
                     Team,
                     Pro_Player,
                     PlayerGoodAt CASCADE;


create table Champ_Type (Champ_Type_ID SERIAL, Champ_Type_Name varchar(50) not null, primary key (Champ_Type_ID));


create table Item_Type (Item_Type_ID SERIAL, Item_Type_Name varchar(50) not null, primary key (Item_Type_ID));


create table Item (Item_ID SERIAL, Item_Name varchar(50) not null unique, Item_Effect varchar(500), Item_Type_ID int not null, primary key (Item_ID),
                   foreign key (Item_Type_ID) references Item_Type(Item_Type_ID));


create table Pos (Pos_ID SERIAL, Pos_Name varchar(10) not null, primary key (Pos_ID));


create table Champion (Champ_ID SERIAL, Champ_Type_ID int not null, Champ_Name varchar(50) not null unique, Base_HP float not null, Base_Mana float, Base_Attack float not null, Base_AtkSpeed float not null, Base_Armor float not null, Base_Magic_Resist float not null, Base_MoveSpeed float not null, PRIMARY KEY (Champ_ID),
                       foreign key(Champ_Type_ID) references Champ_Type(Champ_Type_ID));


create table Champ_Pos (Champ_ID int not null, Pos_ID int not null,
                        foreign key(Champ_ID) references Champion(Champ_ID),
                        foreign key(Pos_ID) references Pos(Pos_ID));


create table recom (Recom_ID SERIAL, item_name varchar(50) not null, champ_name varchar(50) not null, reason varchar(100) not null,
                    foreign key(item_name) references Item(item_name),
                    foreign key(champ_name) references Champion(champ_name));


create table Area (Area_ID SERIAL, Area_Name varchar(10), primary key(Area_ID));


create table Country (Country_ID SERIAL, Area_ID int not null, Country_Name varchar(50) not null, primary key(Country_ID),
                      foreign key(Area_ID) references Area(Area_ID));


create table Team (Team_ID SERIAL, Area_ID int not null, Team_Name varchar(50), primary key(Team_ID),
                   foreign key (Area_ID) references Area(Area_ID));


create table Pro_Player (Player_ID SERIAL, Team_ID int not null, Main_Pos int not null, Player_Name varchar(50) not null, Game_ID varchar(50) not null, primary key (Player_ID),
                         foreign key (Main_Pos) references Pos(Pos_ID),
                         foreign key (Team_ID) references Team(Team_ID));


create table PlayerGoodAt (Player_ID int not null, Champ_ID int not null,
                           foreign key(Player_ID) references Pro_Player(Player_ID),
                           foreign key(Champ_Id) references Champion(Champ_ID));