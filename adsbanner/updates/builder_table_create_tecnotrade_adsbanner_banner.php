<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTecnotradeAdsbannerBanner extends Migration
{
    public function up()
    {
        Schema::create('tecnotrade_adsbanner_banner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('code');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tecnotrade_adsbanner_banner');
    }
}
