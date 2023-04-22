<?php namespace Tecnotrade\Adsbanner\Models;

use Model;

/**
 * Model
 */
class Banner extends Model
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
    public $table = 'tecnotrade_adsbanner_banner';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


 

public $hasMany = [
    'banner_righecampagna' => [
        'Tecnotrade\Adsbanner\Models\Campaignrow',
        'table'=>'tecnotrade_adsbanner_campaign_rows'
        
    ]
];

public $belongsTo = [
    'advertiser' => [
        'Tecnotrade\Adsbanner\Models\Advertiser',
        'table' => 'tecnotrade_adsbanner_advertiser',
    ]
];




}
