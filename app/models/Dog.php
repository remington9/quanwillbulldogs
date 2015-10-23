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
            'img_url' => 'required|max:3000',
        );

    }