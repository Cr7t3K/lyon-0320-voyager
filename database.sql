create schema if not exists voyager collate utf8mb4_0900_ai_ci;

create table if not exists faq
(
    id int auto_increment
        primary key,
    question text not null,
    reply text not null
);

create table if not exists planet
(
    id int auto_increment
        primary key,
    title varchar(50) not null,
    content text null,
    img varchar(100) not null,
    link varchar(100) null,
    price int not null,
    available tinyint(1) not null,
    top tinyint(1) not null
);

create table planet
(
    id        int auto_increment
        primary key,
    title     varchar(50)  not null,
    content   text         null,
    img       varchar(100) not null,
    link      varchar(100) null,
    price     int          not null,
    available tinyint(1)   not null,
    top       tinyint(1)   not null
);

INSERT INTO voyager.planet (id, title, content, img, link, price, available, top) VALUES (1, 'Mars', 'Mars est une planète tellurique, comme le sont Mercure, Vénus et la Terre, environ
                    dix fois moins massive que la Terre mais dix fois plus massive que la Lune.', './images/planetes/mars/mars.jpg', 'mars.php', 3, 1, 1);
INSERT INTO voyager.planet (id, title, content, img, link, price, available, top) VALUES (2, 'Coruscant', 'Coruscant est une planète qui fait partie des mondes du noyau. Capitale de la République puis de
                    l''Empire, siège du gouvernement et foyer des Jedi, Coruscant est la plus importante des planètes de
                    la Galaxie.', './images/planetes/coruscant/Coruscant.jpg', 'coruscant.php', 20, 1, 1);
INSERT INTO voyager.planet (id, title, content, img, link, price, available, top) VALUES (3, 'Arrakis', 'Également appelée Dune, c''est une planète-désert entièrement couverte de sable et de roches,
                    parcourue par les immenses Vers des sables.', './images/planetes/arrakis/arrakis_planete.jpg', 'arrakis.php', 25, 1, 1);
INSERT INTO voyager.planet (id, title, content, img, link, price, available, top) VALUES (4, 'Pandora', 'Pandora est une exolune de l''univers Avatar. Il s''agit de l''un des satellites de la géante gazeuse Polyphème qui orbite autour d''Alpha Centauri A.', './images/planetes/Pandora.jpg', null, 25, 0, 0);
INSERT INTO voyager.planet (id, title, content, img, link, price, available, top) VALUES (5, 'Arche', 'Arche de halo', './images/planetes/arch.png', '', 30, 1, 0);
INSERT INTO voyager.planet (id, title, content, img, link, price, available, top) VALUES (6, 'Krypton', 'Krypton a etait detruite en 2025', './images/planetes/krypton.jpg', '', 35, 0, 0);
