<?
  class FormEmail
{
 public $fields=array();
 public $processor;
 public $submit;	
 public $Nfields = 0;

 function __construct($processor, $submit)
 {
  $this -> processor = $processor;
  $this -> submit = $submit;	
 }
 function displayForm()
 {
  echo "<form action='{$this->processor}' metod='post'>";
  echo "<table width=100%>";
  for ($j=1; $j<=sizeof($this->fields); $j++)
   {
   echo "<tr><td align=right width=50%>{$this->fields[$j-1]['label']}</td>";
   echo "<td width=50%><input type='{$this->fields[$j-1]['types']}' name='{$this->fields[$j-1]['name']}".$j."'></td></tr>";
   }
  echo "<tr><td></td><td align=left><input class='button' type='submit' value='{$this->submit}'></tr>";
  echo "</table>";
  echo "</form>";
 }
 function addField($name, $label, $types)
 {
  $this->fields[$this->Nfields]['name'] = $name;
  $this->fields[$this->Nfields]['label'] = $label;
  $this->fields[$this->Nfields]['types'] = $types;
  $this->Nfields = $this->Nfields + 1;
 }
}
?>