<?php

  namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use App\Models\Traits\Attribute\GemAttribute;
    use App\Models\Auth\User;
    use Illuminate\Support\Collection;
    use Sofa\Eloquence\Eloquence;
    use Sofa\Eloquence\Metable;
    use Spatie\Sluggable\HasSlug;
    use Spatie\Sluggable\SlugOptions;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Gem extends Model{
        use GemAttribute, Eloquence, Metable, SoftDeletes , HasSlug ;

        
        /**
        * Get the options for generating the slug.
        */

        public function getSlugOptions() : SlugOptions
        {
            return SlugOptions::create()
            ->generateSlugsFrom('name ')
            ->saveSlugsTo('slug');
        }
        

        /**
        * The attributes that are mass assignable.
        *
        * @var array
        */

        protected $fillable = [ 
            "name",
            "description",
            "is_deleted",
            "radius",
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
        * Get all the players for the Gem.
        * @return \Illuminate\Database\Eloquent\Relations\HasMany
        */
        public function players() {
            return $this->belongsToMany(Player::class);
        }
        
        /**
        * Get all the levels for the Gem.
        * @return \Illuminate\Database\Eloquent\Relations\HasMany
        */
        public function levels() {
            return $this->belongsToMany(Level::class);
        }
        
        /**
        * Get all the boxes for the Gem.
        * @return \Illuminate\Database\Eloquent\Relations\HasMany
        */
        public function boxes() {
            return $this->belongsToMany(Box::class);
        }
        

        

         

        

    }