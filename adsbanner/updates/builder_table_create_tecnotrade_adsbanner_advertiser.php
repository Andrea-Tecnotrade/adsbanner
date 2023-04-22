<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTecnotradeAdsbannerAdvertiser extends Migration
{
    public function up()
    {
        Schema::create('tecnotrade_adsbanner_advertiser', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('ragione_sociale')->nullable();
            $table->string('display_name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('code')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tecnotrade_adsbanner_advertiser');
    }
}
