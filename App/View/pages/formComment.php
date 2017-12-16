<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 14/12/2017
 * Time: 16:42
 */

$form = new App\Form();

$form->input('Pseudo', 'text', 'pseudo');
//$form->input('Commentaire', 'textarea', 'comment');
$form->textarea('Commentaire', 'p');

$form->submit('Envoyer');