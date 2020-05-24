delimiter //

CREATE TRIGGER udt_uuid BEFORE INSERT on vehicles
FOR EACH ROW
BEGIN
	SET NEW.uuid := uuid();
END;//

delimiter ;

DROP TRIGGER IF EXISTS udt_uuid;

SELECT sum(vc.places) AS used_places
FROM parkings AS p
JOIN vehicles AS vh ON vh.id = p.vehicle_id
JOIN vclasses AS vc ON vc.id = vh.vclass_id
WHERE p.exit IS NULL;