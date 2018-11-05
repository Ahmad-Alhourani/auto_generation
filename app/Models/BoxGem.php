<?php

  namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use App\Models\Traits\Attribute\BoxGemAttribute;
    use App\Models\Auth\User;
    use Illuminate\Support\Collection;
    use Sofa\Eloquence\Eloquence;
    use Sofa\Eloquence\Metable;
    use Spatie\Sluggable\HasSlug;
    use Spatie\Sluggable\SlugOptions;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class BoxGem extends Model{
        use BoxGemAttribute, Eloquence, Metable, SoftDeletes , HasSlug ;

        
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
            "gem_id",
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
        * Get  the Gem that owns the BoxGem.
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
        public function gem() {
            return $this->belongsTo(Gem::class);
        }
        
           /**
        * Get  the Box that owns the BoxGem.
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
        public function box() {
            return $this->belongsTo(Box::class);
        }
        

        

    }