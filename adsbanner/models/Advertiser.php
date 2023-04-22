<?php namespace Tecnotrade\Adsbanner\Models;

use Model;

/**
 * Model
 */
class Advertiser extends Model
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
    public $table = 'tecnotrade_adsbanner_advertiser';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $hasMany = [
        'banner' => [
            'Tecnotrade\Adsbanner\Models\Banner',
            'table'=>'tecnotrade_adsbanner_banner'
            
        ],
        'campaign' => [
            'Tecnotrade\Adsbanner\Models\Campaign',
            'table'=>'tecnotrade_adsbanner_campaign'
            
        ],

    ];
}
