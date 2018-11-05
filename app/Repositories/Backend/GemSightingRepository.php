<?php
     namespace App\Repositories\Backend;;

    use App\Models\GemSighting;
    use App\Repositories\BaseRepository;
    use Prettus\Repository\Contracts\CacheableInterface;
    use Prettus\Repository\Traits\CacheableRepository;

    class GemSightingRepository  extends BaseRepository implements CacheableInterface
    {
    use CacheableRepository;

    protected  $defaultOrderBy ='id';
    protected  $defaultSortBy = 'asc';
    
    protected $fieldSearchable  = [
        "gem_id",
        "player_id",
        "lat",
        "lng",
    ];
    

    /**
    * Configure the Model
    **/
    public function model()
    {
      return GemSighting::class;
    }

    public function getPaginated($paged = 25,$condions_array=null)
    {
        if($condions_array)
        {
            return $this->model
            ->where($condions_array)
            ->paginate($paged);
        }
        return $this->model
        ->paginate($paged);
    }

 }