<?php
class Theme extends AppModel{
	public $validate = array(
       'theme_name' => array(
           'rule' => 'notBlank'
       )
   	);

   	public $hasOne = array(
        'Post' => array(
            'className'  => 'Post',
        )
    );
}
?>