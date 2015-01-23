<?php
session_start();
use PFBC\Form;
use PFBC\Element;
 
//$options = array("Option #1", "Option #2", "Option #3");

//include("propelf/Eintrag.php");
//include("propelf/EintragQuery.php");

include("PFBC/Form.php");

$form = new Form("eintrag");

$form->configure(array(
    "prevent" => array("jQuery")
));

$form->addElement(new Element\Hidden("form", "form-elements"));
$form->addElement(new Element\HTML('<legend>G&auml;stebuch</legend>'));
$form->addElement(new Element\Textbox("Name:", "name"));
$form->addElement(new Element\Textarea("Text:", "text"));
$form->addElement(new Element\Button);
$form->addElement(new Element\Button("Cancel", "button", array(
    "onclick" => "history.go(-1);"
)));
$form->render();
?>
