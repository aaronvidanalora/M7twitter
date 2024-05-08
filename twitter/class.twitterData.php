<?php

include_once("abstract.databoundobject.php");
include_once("class.pdofactory.php");

class TwitterData extends DataBoundObject {

    protected $Information1;
    protected $Information2;
    protected $Information3;
    protected $Photo;

    protected function DefineTableName() {
        return("twitter_data"); 
    }

    protected function DefineRelationMap() {

        return(array(
            "id" => "ID",
            "information1" => "Information1", 
            "information2" => "Information2", 
            "information3" => "Information3", 
            "photo" => "Photo",
        ));
    }
}

?>
