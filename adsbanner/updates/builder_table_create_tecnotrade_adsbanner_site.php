<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTecnotradeAdsbannerSite extends Migration
{
    public function up()
    {
        Schema::create('tecnotrade_adsbanner_site', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('site_id');
            $table->string('site_code')->nullable();
            $table->string('site_url')->nullable();
            $table->string('site_lang')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tecnotrade_adsbanner_site');
    }
}
