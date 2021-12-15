interface Template
{
public function setVariable($name, $var);
public function getHtml($template);
}

// Implémentation de l'interface
// Ceci va fonctionner
class ClassRooms implements Template
{
private $vars = [
$largeur,
$hauteur,
$profondeur,
$nom,
$quantityMax,
$quantity,
$arrayContent
];

public function setVariable($name, $var)
{
$this->vars[$name] = $var;
}


public function getHtml($template)
{
foreach ($this->vars as $largeur => $value) {
$template = str_replace('{' . $name . '}', $value, $template);
}

return $template;
}
}