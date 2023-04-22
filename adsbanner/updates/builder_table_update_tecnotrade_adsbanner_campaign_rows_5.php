<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerCampaignRows5 extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_campaign_rows', function($table)
        {
            $table->boolean('is_home')->nullable()->default(false);
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_campaign_rows', function($table)
        {
            $table->dropColumn('is_home');
        });
    }
}
