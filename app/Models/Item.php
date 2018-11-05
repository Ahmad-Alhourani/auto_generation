<?php

  namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use App\Models\Traits\Attribute\ItemAttribute;
    use App\Models\Auth\User;
    use Illuminate\Support\Collection;
    use Sofa\Eloquence\Eloquence;
    use Sofa\Eloquence\Metable;
    use Spatie\Sluggable\HasSlug;
    use Spatie\Sluggable\SlugOptions;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Item extends Model{
        use ItemAttribute, Eloquence, Metable, SoftDeletes , HasSlug ;

        
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
        * Get all the boxes for the Item.
        * @return \Illuminate\Database\Eloquent\Relations\HasMany
        */
        public function boxes() {
            return $this->belongsToMany(Box::class);
        }
        

        

         

        

    }