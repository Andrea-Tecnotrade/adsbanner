<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTecnotradeAdsbannerCampaign extends Migration
{
    public function up()
    {
        Schema::create('tecnotrade_adsbanner_campaign', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tecnotrade_adsbanner_campaign');
    }
}
