<?php namespace Tecnotrade\Adsbanner\Models;

use Model;

/**
 * Model
 */
class Position extends Model
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
    public $table = 'tecnotrade_adsbanner_position';

    /**
     * @var array Validation rules
     */
    
    
    
    
    
    
    
    
     public $rules = [
    ];

    

    public $hasMany = [
        'position_righecampagna' => [
            'Tecnotrade\Adsbanner\Models\Campaignrow',
            'table'=>'tecnotrade_adsbanner_campaign_rows'
            
        ]
    ];

}