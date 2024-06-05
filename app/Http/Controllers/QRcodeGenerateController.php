<?php

namespace App\Http\Controllers;


use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRcodeGenerateController extends Controller
{
    // QR code generation
    public function qrcode()
    {
        $qrCodes = [];

        $qrCodes['styleRound']    = QrCode::size(150)->style('round')->generate('https://minhazulmin.github.io/');

        return view('admin.qrcode', $qrCodes);
    }
}