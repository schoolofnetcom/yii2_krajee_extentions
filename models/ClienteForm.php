<?php
/**
 * Created by PhpStorm.
 * User: gilso_nb9zlec
 * Date: 01/05/2018
 * Time: 13:04
 */

namespace app\models;

use kartik\builder\Form;
use yii\base\Model;

class ClienteForm extends Model
{
    public $nome;
    public $email;
    public $telefone;
    public $cidade;
    public $renda;
    public $status;

    public function rules()
    {
        return parent::rules();
    }

    public function formAttributes()
    {
        return [
            'nome' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => "Inform seu nome .."]],
            'email' => ['type' => Form::INPUT_TEXT],
            'telefone' => ['type' => Form::INPUT_TEXT],
            'cidade' => ['type' => Form::INPUT_DROPDOWN_LIST, 'items' => [
                '1' => "Curitiba",
                '2' => "São Paulo",
                '3' => "Belo Horizonte",
                '4' => "Porto Alegre"
            ]],
        ];
    }



}