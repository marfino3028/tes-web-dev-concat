<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    public function index()
    {
        return view('loop.index');
    }

    public function process(Request $request)
    {
        $n = $request->input('jumlah_perulangan');

        $bageConcatCount = 0;

        for ($i = 1; $i <= $n; $i++) {
            $output = '';

            if ($i % 3 == 0) {
                $output .= 'Bage';
            }

            if ($i % 5 == 0) {
                $output .= 'Concat';
            }

            if ($output == 'BageConcat') {
                $bageConcatCount++;

                if ($bageConcatCount >= 2) {
                    $output = '';
                    $output .= ($i % 3 == 0) ? 'Concat' : '';
                    $output .= ($i % 5 == 0) ? 'Bage' : '';
                }
            }

            echo $output ?: $i;
            echo '<br>';
        }
    }
}
