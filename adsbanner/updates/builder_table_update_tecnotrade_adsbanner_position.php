<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerPosition extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_position', function($table)
        {
            $table->renameColumn('coulumn_name', 'column_name');
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_position', function($table)
        {
            $table->renameColumn('column_name', 'coulumn_name');
        });
    }
}
