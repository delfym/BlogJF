<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 14/12/2017
 * Time: 07:26
 */
namespace App;

class Form
{
    private function label($name)
    {
        return '<label>'. $name . ' : </label>';
    }

    public function input($labName, $inputType, $name, $inputOption=null)

    {
        $input = $this->label($labName);
        $input .= '<input  class = "form-control"  type="'.$inputType .'" name="'.$name . $inputOption.'"<br/><br/>';
        return $input;
    }

    public function submit($value)
    {
        return '<br/><input type="submit" value="'.$value.'" />';
    }

    public function textarea($name,$tag)
    {
        return '<label for"'. $name . '">'.$tag.'</label><br/><textarea name ="'.$name.'" id="'. $name .'"></textarea>';
    }

}
