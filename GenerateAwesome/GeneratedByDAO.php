<?php

class GenerateByDAO {

  //Create the table
  public static function install() {
    global $prefixeTable;
    $query = '
  		CREATE TABLE IF NOT EXISTS '.$prefixeTable.'image_generated_by (
  			gb_id int(11) NOT NULL AUTO_INCREMENT,
        image_id int(11) NOT NULL,
  			text varchar(255) NOT NULL,
  			PRIMARY KEY (gb_id)
  		) ENGINE=MyISAM DEFAULT CHARACTER SET utf8
  		;';
    pwg_query($query);
  }

  //Delete the table
  public static function uninstall() {
    global $prefixeTable;
    $query = '
    DROP TABLE '.$prefixeTable.'image_generated_by
    ;';
    pwg_query($query);
  }

  //Insert a new generated by for an image
  public static function insert($text, $imageId) {
    global $prefixeTable;
    $query = '
    INSERT INTO '.$prefixeTable.'image_generated_by values(null,'.$imageId.',"'.$text.'")
    ;';
    pwg_query($query);
  }

  //Get the actual generated by for an image
  public static function getGB($id_image) {
    global $prefixeTable;
    $query = sprintf('
						SELECT text
						FROM '.$prefixeTable.'image_generated_by
            WHERE image_id = %s
						;', $id_image);
    $row = pwg_db_fetch_assoc(pwg_query($query));
    if (count($row) > 0)
      return $row["text"];
		else
      return "";
  }

  //Delete all the generated by for an image
  public static function delete($imageId) {

    global $prefixeTable;
    $query = '
    DELETE FROM '.$prefixeTable.'image_generated_by WHERE image_id = '.$imageId.'
    ;';
    pwg_query($query);
  }

}

?>