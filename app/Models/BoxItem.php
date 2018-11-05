<?php

  namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use App\Models\Traits\Attribute\BoxItemAttribute;
    use App\Models\Auth\User;
    use Illuminate\Support\Collection;
    use Sofa\Eloquence\Eloquence;
    use Sofa\Eloquence\Metable;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class BoxItem extends Model{
        use BoxItemAttribute, Eloquence, Metable, SoftDeletes ;

        

        /**
        * The attributes that are mass assignable.
        *
        * @var array
        */

        protected $fillable = [ 
            "item_id",
            "box_id",
        ];
        
        public $timestamps = false;


        /**
        * Get the key name for route model binding.
        *
        * @return string
        */
        public function getRouteKeyName()
        {
           return 'id';
        }
                
        /* ************************ RELATIONS ************************ */
        

        

        

         
        
           /**
        * Get  the Item that owns the BoxItem.
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
        public function item() {
            return $this->belongsTo(Item::class);
        }
        
           /**
        * Get  the Box that owns the BoxItem.
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
        public function box() {
            return $this->belongsTo(Box::class);
        }
        

        

    }