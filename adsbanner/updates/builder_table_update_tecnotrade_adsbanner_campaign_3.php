<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerCampaign3 extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_campaign', function($table)
        {
            $table->integer('advertiser_id');
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_campaign', function($table)
        {
            $table->dropColumn('advertiser_id');
        });
    }
}
