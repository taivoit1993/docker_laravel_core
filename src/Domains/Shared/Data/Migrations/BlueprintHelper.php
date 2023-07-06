<?php
namespace Domains\Shared\Data\Migrations;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class BlueprintHelper
{
    static public function commonFields(Blueprint $table)
    {
        $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
        $table->string('created_by', 50)->nullable();
        $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->nullable();
        $table->string('updated_by', 50)->nullable();
        $table->softDeletes();
        $table->string('deleted_by', 50)->nullable();
    }

}
