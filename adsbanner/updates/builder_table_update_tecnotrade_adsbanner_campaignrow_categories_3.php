<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerCampaignrowCategories3 extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_campaignrow_categories', function($table)
        {
            $table->dropPrimary(['campaign_rows_id','category_id']);
            $table->renameColumn('campaign_rows_id', 'rows_id');
            $table->primary(['rows_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_campaignrow_categories', function($table)
        {
            $table->dropPrimary(['rows_id','category_id']);
            $table->renameColumn('rows_id', 'campaign_rows_id');
            $table->primary(['campaign_rows_id','category_id']);
        });
    }
}
