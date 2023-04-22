<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerBanner3 extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_banner', function($table)
        {
            $table->string('main_image');
            $table->string('tablet_image')->nullable();
            $table->string('mobile_image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_banner', function($table)
        {
            $table->dropColumn('main_image');
            $table->dropColumn('tablet_image');
            $table->dropColumn('mobile_image');
        });
    }
}
