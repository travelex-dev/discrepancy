<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorDetailsInfoView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        SET search_path TO public;

        CREATE VIEW error_details_info AS (
            SELECT
            ed.id AS error_detail_id,
            e.id AS error_id,
            case when quantity < 0 then \'SHORT\' else \'OVER\' end as type,
            ed.quantity,
            vi.product_code,
            vi.currency_code,
            vi.denom_value,
            vi.product_code ||\'-\'|| vi.currency_code ||\'-\'|| vi.denom_value as denomination,
            ((ed.quantity * vi.denom_value) * ed.exchange_rate) AS discrepancy_cost
            FROM error_details as ed
            INNER JOIN errors as e on (ed.error_id = e.id)
            INNER JOIN value_items as vi on (ed.value_item_id = vi.id)
        );

      ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
        SET search_path TO public;

        DROP VIEW IF EXISTS stock_positions_info;

      ');
    }
}
