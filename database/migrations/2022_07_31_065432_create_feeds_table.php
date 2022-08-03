<?php

use App\Models\FeedCategory;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeds', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('international_feed_number', 8)->nullable();
            $table->string('energy_equation_class', 255)->nullable();
            $table->string('forage_description', 255)->nullable();
            $table->double('tdn')->nullable();
            $table->double('de')->nullable();
            $table->double('dry_matter')->nullable();
            $table->double('ndf')->nullable();
            $table->double('adf')->nullable();
            $table->double('lignin')->nullable();
            $table->double('cp')->nullable();
            $table->double('ndfip')->nullable();
            $table->double('adfip')->nullable();
            $table->double('protein_a')->nullable();
            $table->double('protein_b')->nullable();
            $table->double('protein_c')->nullable();
            $table->double('protein_digestion_rate')->nullable();
            $table->double('rup_digest')->nullable();
            $table->double('fat')->nullable();
            $table->double('ash')->nullable();
            $table->double('cp_digestibility')->nullable();
            $table->double('ndf_digestibility')->nullable();
            $table->double('calcium')->nullable();
            $table->double('phosphorus')->nullable();
            $table->double('magnesium')->nullable();
            $table->double('chlorine')->nullable();
            $table->double('potassium')->nullable();
            $table->double('sodium')->nullable();
            $table->double('sulfur')->nullable();
            $table->double('cobalt')->nullable();
            $table->double('copper')->nullable();
            $table->double('iodine')->nullable();
            $table->double('iron')->nullable();
            $table->double('manganese')->nullable();
            $table->double('selenium')->nullable();
            $table->double('zinc')->nullable();
            $table->double('vit_a')->nullable();
            $table->double('vit_d')->nullable();
            $table->double('vit_e')->nullable();
            $table->double('arginine')->nullable();
            $table->double('histidine')->nullable();
            $table->double('isoleucine')->nullable();
            $table->double('leucine')->nullable();
            $table->double('lysine')->nullable();
            $table->double('methionine')->nullable();
            $table->double('pyhenylalanine')->nullable();
            $table->double('threonine')->nullable();
            $table->double('tryptophan')->nullable();
            $table->double('valine')->nullable();
            $table->double('ca_bioavailability')->nullable();
            $table->double('p_bioavailability')->nullable();
            $table->double('mg_bioavailability')->nullable();
            $table->double('cl_bioavailability')->nullable();
            $table->double('k_bioavailability')->nullable();
            $table->double('na_bioavailability')->nullable();
            $table->double('s_bioavailability')->nullable();
            $table->double('co_bioavailability')->nullable();
            $table->double('cu_bioavailability')->nullable();
            $table->double('i_bioavailability')->nullable();
            $table->double('fe_bioavailability')->nullable();
            $table->double('mn_bioavailability')->nullable();
            $table->double('se_bioavailability')->nullable();
            $table->double('zn_bioavailability')->nullable();
            $table->boolean('is_coarse_fodder')->nullable();

            $table->timestamps();

            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(FeedCategory::class, 'category_id')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feeds');
    }
};
