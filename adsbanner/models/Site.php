<?php namespace Tecnotrade\Adsbanner\Models;

use Model;

/**
 * Model
 */
class Site extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'tecnotrade_adsbanner_site';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany=[
        'campaign'=>[
            'Tecnotrade\Adsbanner\Models\Campaign',
            'table'=>'tecnotrade_adsbanner_site_campaign',
            'order'=>'name'
        ]
    ];

}
