<?php

  namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use App\Models\Traits\Attribute\BoxSightingAttribute;
    use App\Models\Auth\User;
    use Illuminate\Support\Collection;
    use Sofa\Eloquence\Eloquence;
    use Sofa\Eloquence\Metable;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class BoxSighting extends Model{
        use BoxSightingAttribute, Eloquence, Metable, SoftDeletes ;

        

        /**
        * The attributes that are mass assignable.
        *
        * @var array
        */

        protected $fillable = [ 
            "player_id",
            "box_id",
            "lat",
            "lng",
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
        * Get  the Player that owns the BoxSighting.
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
        public function player() {
            return $this->belongsTo(Player::class);
        }
        
           /**
        * Get  the Box that owns the BoxSighting.
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
        public function box() {
            return $this->belongsTo(Box::class);
        }
        

        

    }