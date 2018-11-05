<?php

  namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use App\Models\Traits\Attribute\LevelGemAttribute;
    use App\Models\Auth\User;
    use Illuminate\Support\Collection;
    use Sofa\Eloquence\Eloquence;
    use Sofa\Eloquence\Metable;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class LevelGem extends Model{
        use LevelGemAttribute, Eloquence, Metable, SoftDeletes ;

        

        /**
        * The attributes that are mass assignable.
        *
        * @var array
        */

        protected $fillable = [ 
            "gem_id",
            "level_id",
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
        * Get  the Gem that owns the LevelGem.
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
        public function gem() {
            return $this->belongsTo(Gem::class);
        }
        
           /**
        * Get  the Level that owns the LevelGem.
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
        public function level() {
            return $this->belongsTo(Level::class);
        }
        

        

    }