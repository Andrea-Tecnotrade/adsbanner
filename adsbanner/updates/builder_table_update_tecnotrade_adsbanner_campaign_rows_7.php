<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerCampaignRows7 extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_campaign_rows', function($table)
        {
            $table->renameColumn('banner_weigh', 'banner_weight');
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_campaign_rows', function($table)
        {
            $table->renameColumn('banner_weight', 'banner_weigh');
        });
    }
}
