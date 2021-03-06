<?php

namespace App\Imports;

use App\Models\Kdcsims0305;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class KdcSims0305Import implements ToModel, WithStartRow, WithCalculatedFormulas
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return KdcSIms0305::updateOrCreate(
            ['ticket_no' => $row[0]],
            [
                'ticket_no' => $row[0],
                'company' => $row[1],
                'room' => $row[2],
                'date_time' => $row[3],
                'dump_truck' => $row[4],
                'pit' => $row[5],
                'area' => $row[6],
                'seam' => $row[7],
                'excavator' => $row[8],
                'capacity' => $row[9],
                'coal_brand' => $row[10],
                'penalty' => $row[11],
                'tanggal' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[12]),
                'shift' => $row[13],
                'jam' => $row[14]
                // 'date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]),
                // 'nama' => $row[1],
                // 'jabatan' => $row[2],
                // 'unit' => $row[3],
                // 'roster' => $row[4],
                // 'attdn' => $row[5],
                // 'buang_awal_shift' => $row[6],
                // 'gantung_akhir_shift' => $row[7],
                // 'rit_by_manual' => $row[8],
                // 'rit_by_rfid' => $row[9],
                // 'ritase_actual' => $row[10],
                // 'tonase' => $row[11],
                // 'lokasi_exa' => $row[12],
                // 'jarak' => $row[13],
                // 'hm_awal' => $row[14],
                // 'hm_akhir' => $row[15],
                // 'total_hm' => $row[16],
                // 'non_prod' => $row[17],
                // 'total_jam' => $row[18],
                // 'km_awal' => $row[19],
                // 'km_akhir' => $row[20],
                // 'total_km' => $row[21],
                // 'keterangan' => $row[22],
                // 'code' => $row[23],
                // 'absen' => $row[24],
                // 'att' => $row[25],
                // 'rit_rfid' => $row[26],
                // 'selisih' => $row[27],
                // 'code2' => $row[28],

            ]
        );
    }

    public function startRow(): int
    {
        return 2;
    }
}
