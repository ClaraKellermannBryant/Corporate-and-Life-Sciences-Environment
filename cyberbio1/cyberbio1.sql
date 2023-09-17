CREATE TABLE drugs (
    name VARCHAR(255),
    type VARCHAR(255),
    effects VARCHAR(255),
    class VARCHAR(255),
    chembreakdown VARCHAR(255),
    price INT
);


INSERT INTO drugs(name, type, effects, class, chembreakdown, price)
VALUES('Acolyte', 'pharmaceutical', 'nausea', 'A', '2 phosphates', '250');

UPDATE drugs
SET person = 'misuser'
WHERE name = 'Acolyte';

UPDATE drugs
SET benefits = 'makes you happy'
WHERE effects = 'nausea';

UPDATE drugs
SET chembreakup = 'Demon Syndrome'
WHERE chembreakdown = '2 phosphates';
