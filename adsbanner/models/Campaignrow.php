<?php namespace Tecnotrade\Adsbanner\Models;

use Model;

/**
 * Model
 */
class Campaignrow extends Model
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
    public $table = 'tecnotrade_adsbanner_campaign_rows';

   /**
     * @var array Validation rules
*/
    public $rules = [
    ];

    public $belongsTo = [
        'banner' => [
            'Tecnotrade\Adsbanner\Models\Banner',
            'table' => 'tecnotrade_adsbanner_banner',
        ],
        'position' => [
            'Tecnotrade\Adsbanner\Models\Position',
            'table' => 'tecnotrade_adsbanner_position',
        ],
        'campaign' => [
            'Tecnotrade\Adsbanner\Models\Campaign',
            'table' => 'tecnotrade_adsbanner_campaign',
        ],
        
    ];
    public $belongsToMany=[
        'category' => [
            'Rainlab\Blog\Models\Category',
            'table' => 'tecnotrade_adsbanner_campaignrow_categories',
            'key' => 'campaignrows_id',
            'otherKey' => 'category_id',
        ]
    ];

}