<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerCampaignrowCategories extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_campaignrow_categories', function($table)
        {
            $table->dropPrimary(['campaignrows_id','category_id']);
            $table->renameColumn('campaignrows_id', 'campaign_row_id');
            $table->primary(['campaign_row_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_campaignrow_categories', function($table)
        {
            $table->dropPrimary(['campaign_row_id','category_id']);
            $table->renameColumn('campaign_row_id', 'campaignrows_id');
            $table->primary(['campaignrows_id','category_id']);
        });
    }
}
