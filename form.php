<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 01/10/2017
 * Time: 14:46
 */

$form = new Form;
echo '<form class="form-control" action="#" method = post>';
$form->input('password');
$form->input('pseudo');
$form->submit();