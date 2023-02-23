create DATABASE hebdowin;
use hebdowin;

create table player
(
    idUser int(11) auto_increment primary key not null,
    pseudo varchar(255) not null,
    tankData   int(11) not null,
    dpsData    int(11) not null,
    healData int(11) not null
)

use hebdowin;
drop table player;
