<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // A címke neve, egyedi érték
            $table->timestamps();
        });

        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Job::class, 'job_listing_id')->constrained()->cascadeOnDelete(); // A kapcsolat a munkák táblával; minden címkének több munkája is lehet; hozzon létre egy constraintet, hogy a munkák törlésekor a kapcsolódó címkék is törlődjenek a pivot táblából
            $table->foreignIdFor(\App\Models\Tag::class)->constrained()->cascadeOnDelete(); // A kapcsolat a címkék táblával; minden munkának több címkéje is lehet; hozzon létre egy constraintet, hogy a tag-ek törlésekor a kapcsolódó munkák is törlődjenek a pivot táblából
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('job_tag');
    }
};
