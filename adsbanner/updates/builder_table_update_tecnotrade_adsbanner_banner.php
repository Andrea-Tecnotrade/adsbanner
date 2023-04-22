<?php namespace Tecnotrade\Adsbanner\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTecnotradeAdsbannerBanner extends Migration
{
    public function up()
    {
        Schema::table('tecnotrade_adsbanner_banner', function($table)
        {
            $table->integer('user_id');
            $table->string('link_url')->nullable();
            $table->string('link_target')->nullable();
            $table->text('ads_script')->nullable();
            $table->integer('impressions')->default(0);
            $table->integer('click')->default(0);
            $table->decimal('crt', 8, 3)->nullable()->default(0);
            $table->string('code', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('tecnotrade_adsbanner_banner', function($table)
        {
            $table->dropColumn('user_id');
            $table->dropColumn('link_url');
            $table->dropColumn('link_target');
            $table->dropColumn('ads_script');
            $table->dropColumn('impressions');
            $table->dropColumn('click');
            $table->dropColumn('crt');
            $table->string('code', 255)->nullable(false)->change();
        });
    }
}
