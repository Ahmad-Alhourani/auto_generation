<?php

  namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use App\Models\Traits\Attribute\BoxAttribute;
    use App\Models\Auth\User;
    use Illuminate\Support\Collection;
    use Sofa\Eloquence\Eloquence;
    use Sofa\Eloquence\Metable;
    use Spatie\Sluggable\HasSlug;
    use Spatie\Sluggable\SlugOptions;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Box extends Model{
        use BoxAttribute, Eloquence, Metable, SoftDeletes , HasSlug ;

        
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
            "clickable_radius",
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
        * Get all the gems for the Box.
        * @return \Illuminate\Database\Eloquent\Relations\HasMany
        */
        public function gems() {
            return $this->belongsToMany(Gem::class);
        }
        
        /**
        * Get all the players for the Box.
        * @return \Illuminate\Database\Eloquent\Relations\HasMany
        */
        public function players() {
            return $this->belongsToMany(Player::class);
        }
        
        /**
        * Get all the items for the Box.
        * @return \Illuminate\Database\Eloquent\Relations\HasMany
        */
        public function items() {
            return $this->belongsToMany(Items::class);
        }
        

        

         

        

    }