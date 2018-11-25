<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;


    class Product extends Model
    {
        use SoftDeletes;


        protected $fillable = [
            'name', 'price', 'units', 'description', 'images'
        ];

         protected $dates = ['deleted_at'];


        protected $searchableColumns = ['name', 'price'];

        public function orders(){
            return $this->hasMany(Order::class);
        }

        public function accesorie(){
            return $this->hasMany(Accesorie::class);
        }
    }
