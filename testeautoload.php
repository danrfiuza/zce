<?php
spl_autoload_register(function ($class)
{
     require $class.'.php';
});


$pessoa = new Pessoa('Daniel',24);
echo $pessoa->saudacao().PHP_EOL;
print_r(get_object_vars('Pessoa'));
print PHP_EOL;
print_r(get_class_methods(get_class($pessoa)));
print PHP_EOL;
print_r(get_object_vars($pessoa));
print PHP_EOL;
print_r(get_object_vars($pessoa));