<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Order extends Model
    {
        use SoftDeletes;

        protected $fillable = [
            'product_id', 'user_id', 'quantity', 'address'
        ];

        protected $dates = ['deleted_at'];

        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        public function product()
        {
            return $this->belongsTo(Product::class, 'product_id');
        }

        public function accesorie()
        {
            return $this->belongsTo(Accesorie::class, 'accesorie_id');
        }

    }
