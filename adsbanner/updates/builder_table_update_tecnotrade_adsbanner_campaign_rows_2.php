<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerCampaignRows2 extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_campaign_rows', function($table)
        {
            $table->integer('campaign_id');
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_campaign_rows', function($table)
        {
            $table->dropColumn('campaign_id');
        });
    }
}
