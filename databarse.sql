create DATABASE RankStat;
use RankStat;

create table player
(
    idUser int(11) auto_increment primary key not null,
    pseudo varchar(255) not null,
    tankWin   int(11) not null default 0,
    dpsWin    int(11) not null default 0,
    healWin int(11) not null default 0,
    tankLose   int(11) not null default 0,
    dpsLose    int(11) not null default 0,
    healLose int(11) not null default 0
)
