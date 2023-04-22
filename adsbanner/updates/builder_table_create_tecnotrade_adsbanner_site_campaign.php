<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTecnotradeAdsbannerSiteCampaign extends Migration
{
    public function up()
    {
        Schema::create('tecnotrade_adsbanner_site_campaign', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('sited_id')->unsigned();
            $table->integer('campaign_id')->unsigned();
            $table->primary(['sited_id','campaign_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tecnotrade_adsbanner_site_campaign');
    }
}
