<?php

namespace App\Imports;

use App\Models\KdcDaily0301;
use App\Imports\FirstSheetImport;
use App\Imports\SecondSheetImport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;


class KdcDaily0301Import implements ToModel, WithStartRow, WithCalculatedFormulas
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    use Importable;

    public function transformDate($value, $format = 'Y-m-d')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }
    public function model(array $row)
    {
        for ($i = 1; $i < 43; $i++) {

            // return new KdcDaily0301([
            return KdcDaily0301::updateOrCreate(
                ['ticket_number' => $row[25]],
                [
                    'ticket_number' => $row[0],
                    'brand' => $row[1],
                    'silo' => $row[2],
                    'date_time' => $row[3],
                    'tractor' => $row[4],
                    'driver' => $row[5],
                    'vessel1' => $row[6],
                    'vessel2' => $row[7],
                    'capa1' => $row[8],
                    'capa2' => $row[9],
                    'company' => $row[10],
                    'silo_2' => $row[11],
                    'tgl_rfid' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[12]),
                    'jam' => $row[13],
                    'shift' => $row[14],
                    'ton' => $row[15],
                    'group' => $row[16],
                    'tgl_tmst' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[17]),
                    'silodatang' => $row[18],
                    'silokeluar' => $row[19],
                    'tmctdatang' => $row[20],
                    'tmctkeluar' => $row[21],
                    'stdload' => $row[22],
                    'silotunggu' => $row[23],
                    'silotmct' => $row[24],
                    'p2hstart' => $row[25],
                    'p2hmulai' => $row[26],
                    'refuelingstart' => $row[27],
                    'refuelingmulai' => $row[28],
                    'ishomanstart' => $row[29],
                    'ishomanmulai' => $row[30],
                    'p5mstart' => $row[31],
                    'p5mmulai' => $row[32],
                    'p2h' => $row[33],
                    'reff' => $row[34],
                    'ishoman' => $row[35],
                    'p5m' => $row[36],
                    'idle' => $row[37],
                    'delay' => $row[38],
                    'ttlstbb' => $row[39],
                    'qtyvessel1' => $row[40],
                    'qtyvessel2' => $row[41],
                    'totalqty' => $row[42],
                    'linkbd' => $row[43]
                ]
            );
            # code...
        }
    }

    public function startRow(): int
    {
        return 2;
    }
}
