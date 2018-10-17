ALTER TABLE `bd_az_framework`.`az_sub_menu_crud`
	ADD CONSTRAINT `az_sub_menu_ibfk_1`
		FOREIGN KEY (`v_id_az_menu_crud`)
		REFERENCES `bd_az_framework`.`az_menu_crud`(`id_az_menu_crud`)
			ON UPDATE CASCADE
			ON DELETE SET NULL,
	ADD CONSTRAINT `az_sub_menu_ibfk_2`
		FOREIGN KEY (`v_id_az_sub_under`)
		REFERENCES `bd_az_framework`.`az_menu_crud`(`id_az_menu_crud`)
			ON UPDATE CASCADE
			ON DELETE SET NULL;