<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Sofa\Eloquence\Eloquence;

    class Product extends Model
    {
        use SoftDeletes;
        use Eloquence;

        protected $fillable = [
            'name', 'price', 'units', 'description', 'image'
        ];

        protected $searchableColumns = ['name', 'price'];

        public function orders(){
            return $this->hasMany(Order::class);
        }

        public function accesorie(){
            return $this->hasMany(Accesorie::class);
        }
    }
