<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTecnotradeAdsbannerCampaignRows extends Migration
{
    public function up()
    {
        Schema::create('tecnotrade_adsbanner_campaign_rows', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('adsbanner_id');
            $table->integer('adsposition_id');
            $table->boolean('is_active')->default(true);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tecnotrade_adsbanner_campaign_rows');
    }
}
