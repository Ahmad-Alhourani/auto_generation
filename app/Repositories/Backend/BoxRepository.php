<?php
     namespace App\Repositories\Backend;;

    use App\Models\Box;
    use App\Repositories\BaseRepository;
    use Prettus\Repository\Contracts\CacheableInterface;
    use Prettus\Repository\Traits\CacheableRepository;

    class BoxRepository  extends BaseRepository implements CacheableInterface
    {
    use CacheableRepository;

    protected  $defaultOrderBy ='id';
    protected  $defaultSortBy = 'asc';
    
    protected $fieldSearchable  = [
        "name",
        "clickable_radius",
    ];
    

    /**
    * Configure the Model
    **/
    public function model()
    {
      return Box::class;
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