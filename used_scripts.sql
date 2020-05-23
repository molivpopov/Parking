delimiter //

CREATE TRIGGER udt_uuid BEFORE INSERT on vehicles
FOR EACH ROW
BEGIN
	SET NEW.uuid := uuid();
END;//

delimiter ;

DROP TRIGGER IF EXISTS udt_uuid;