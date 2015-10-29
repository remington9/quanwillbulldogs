<?php

    class Dog extends Eloquent
    {
        protected $table = 'dogs';
        public function user()
        {
            return $this->belongsTo('User');
        }

        public static $rules = array(
            'name' => 'required|max:100',
            'gender' => 'required|max:10',
            'img_url' => 'required|max:3000',
        );

        public static $editRules = array(
            'name' => 'required|max:100',
            'gender' => 'required|max:10',
        );

    }