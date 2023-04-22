<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTecnotradeAdsbannerPosition extends Migration
{
    public function up()
    {
        Schema::create('tecnotrade_adsbanner_position', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('coulumn_name');
            $table->string('column_code');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tecnotrade_adsbanner_position');
    }
}
