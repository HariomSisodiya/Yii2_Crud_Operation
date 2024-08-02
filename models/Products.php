<?php

    namespace app\models;

    use yii\db\ActiveRecord;

    class Products extends ActiveRecord{

        private $title , $description , $price;

        public function rules()
{
    return [
        [['title', 'description', 'price'], 'required'],
        ['title', 'match', 'pattern' => '/^[a-zA-Z]+$/', 'message' => 'Title can only contain alphabetic characters.'],
        ['description', 'match', 'pattern' => '/^[a-zA-Z0-9 .]+$/', 'message' => 'Description can only contain alphabetic characters and numbers.'],
        ['price', 'match', 'pattern' => '/^\d+(\.\d{1,2})?$/', 'message' => 'Price must be an integer or a decimal number with up to 2 decimal places.'],
    ];
}

        public static function tableName(){
            return "products";
        }
    }
?>