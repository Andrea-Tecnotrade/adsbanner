<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerPosition2 extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_position', function($table)
        {
            $table->text('column_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_position', function($table)
        {
            $table->dropColumn('column_description');
        });
    }
}
