USE `sei`;
CREATE 
     OR REPLACE ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `v_invitados` AS
    SELECT 
        `invitado`.`id_invitado` AS `idInvitado`,
        `eventos`.`evento` AS `nombreEvento`,
        `invitado`.`email` AS `email`,
        `invitado`.`id_evento` AS `idEvento`,
        `invitado`.`nombre_invitado` AS `nombre`,
        DATE_FORMAT(eventos.fecha, '%d-%m-%Y') AS fechaEvento
    FROM
        (`t_invitados` `invitado`
        JOIN `t_eventos` `eventos` ON ((`invitado`.`id_evento` = `eventos`.`id_evento`)));
