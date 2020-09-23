CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `root`@`localhost` 
    SQL SECURITY DEFINER
VIEW `bidcube`.`view_schemas` AS
    SELECT 
        `ms`.`schema_key` AS `Schema key`,
        `ms`.`schema_name` AS `Schema name`,
        `c`.`cube_name` AS `Cube`,
        `hs`.`hole_spacing_measure` AS `Spacing`,
        `chs`.`chs_holes` AS `Holes`,
        `p`.`product_name` AS `Hole filling`
    FROM
        `bidcube`.`my_schemas` `ms`
        LEFT JOIN `bidcube`.`schemas_cubes` `sc`            ON `sc`.`sc_my_schema` = `ms`.`schema_key`
        LEFT JOIN `bidcube`.`cubes_hole_spacing` `chs`      ON `chs`.`chs_key` = `sc`.`sc_chs`
        LEFT JOIN `bidcube`.`cubes` `c`                     ON `c`.`cube_key` = `chs`.`chs_cube_ref`
        LEFT JOIN `bidcube`.`hole_spacing` `hs`             ON `hs`.`hole_spacing_key` = `chs`.`chs_spacing_ref`
        LEFT JOIN `bidcube`.`schemas_hole_fillings` `shf`   ON `shf`.`shf_sc_key` = `sc`.`sc_my_schema`
        LEFT JOIN `bidcube`.`products` `p`                  ON `p`.`product_code` = `shf`.`shf_hole_filling`







        LEFT JOIN `bidcube`.`cubes_hole_spacing` `chs`      ON `chs`.`chs_key` = `c`.`cube`


LEFT JOIN `bidcube`.`cubes` `c`                     ON `c`.`cube_key` = `sc`.`sc_cube`


        LEFT JOIN `bidcube`.`schemas_hole_fillings` `shf`   ON `shf`.`shf_key` = `sc`.`sc_cube`
        LEFT JOIN `bidcube`.`cubes_hole_spacing` `chs`      ON `chs`.`chs_key` = `c`.`cube`



        LEFT JOIN `bidcube`.`cubes_hole_spacing` `chs`      ON `chs`.`chs_cube_ref` = `c`.`cube_key`




        LEFT JOIN `bidcube`.`schema_details` `sd`           ON `sd`.`schema_detail_schema` = `ms`.`schema_key`
        LEFT JOIN `bidcube`.`cubes_hole_spacing` `chs`      ON `chs`.`chs_key` = `sd`.`schema_detail_chs`
        LEFT JOIN `bidcube`.`cubes` `c`                     ON `c`.`cube_key` = `chs`.`chs_cube_ref`
        LEFT JOIN `bidcube`.`hole_spacing` `hs`             ON `hs`.`hole_spacing_key` = `chs`.`chs_spacing_ref`
        LEFT JOIN `bidcube`.`price_lists` `pl`              ON `pl`.`price_list_key` = `ms`.`schema_key`
        LEFT JOIN `bidcube`.`schemas_cubes` `sc`            ON `sc`.`sc_my_schema` = `ms`.`schema_key`
        LEFT JOIN `bidcube`.`schemas_hole_fillings` `shf`   ON `shf`.`shf_schemas_cube` = `sc`.`sc_my_schema`
        LEFT JOIN `bidcube`.`products` `p`                  ON `p`.`product_code` = `shf`.`shf_hole_filling`
