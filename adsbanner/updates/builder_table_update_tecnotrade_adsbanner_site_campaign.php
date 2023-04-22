<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerSiteCampaign extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_site_campaign', function($table)
        {
            $table->dropPrimary(['sited_id','campaign_id']);
            $table->renameColumn('sited_id', 'site_id');
            $table->primary(['site_id','campaign_id']);
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_site_campaign', function($table)
        {
            $table->dropPrimary(['site_id','campaign_id']);
            $table->renameColumn('site_id', 'sited_id');
            $table->primary(['sited_id','campaign_id']);
        });
    }
}
