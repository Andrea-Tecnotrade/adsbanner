<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerCampaignRows4 extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_campaign_rows', function($table)
        {
            $table->integer('banner_weigh')->nullable()->default(100);
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_campaign_rows', function($table)
        {
            $table->dropColumn('banner_weigh');
        });
    }
}
