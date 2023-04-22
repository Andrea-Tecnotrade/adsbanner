<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerCampaignRows extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_campaign_rows', function($table)
        {
            $table->integer('banner_id');
            $table->integer('position_id');
            $table->dropColumn('adsbanner_id');
            $table->dropColumn('adsposition_id');
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_campaign_rows', function($table)
        {
            $table->dropColumn('banner_id');
            $table->dropColumn('position_id');
            $table->integer('adsbanner_id');
            $table->integer('adsposition_id');
        });
    }
}
