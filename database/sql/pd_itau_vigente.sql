INSERT INTO `bd_pd_itau_vigente`.`he01_datosdeudor_vigente` ()
SELECT  FROM `BDhelm_2`.`he01_datosdeudor_vigente`;

INSERT INTO `bd_pd_itau_vigente`.`he01_datosdeudor_vigente` ()
SELECT  FROM `BDhelm_2`.`he01_datosdeudor_vigente` WHERE `deleted` = '0';

INSERT INTO `bd_pd_itau_vigente`.`he01_datosdeudor_vigente` ()
SELECT  FROM `BDhelm_2`.`he01_datosdeudor_vigente` WHERE `deleted` = '1';




INSERT INTO `bd_pd_itau_vigente`.`he01_productosdeudor_vigente` ()
SELECT  FROM `BDhelm_2`.`he01_productosdeudor_vigente`;

INSERT INTO `bd_pd_itau_vigente`.`he01_productosdeudor_vigente` ()
SELECT  FROM `BDhelm_2`.`he01_productosdeudor_vigente` WHERE `deleted` = '0';

INSERT INTO `bd_pd_itau_vigente`.`he01_productosdeudor_vigente` ()
SELECT  FROM `BDhelm_2`.`he01_productosdeudor_vigente` WHERE `deleted` = '1';