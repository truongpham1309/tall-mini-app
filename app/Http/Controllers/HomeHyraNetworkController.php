<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use App\Models\Overview;

class HomeHyraNetworkController extends Controller
{
    public function index () {
        $listNft = Nft::all()->groupBy('row');
        dd($listNft);
        $listOverview = Overview::orderBy('id', 'asc')->get();
        return view('hyra-network/home/page', compact('listNft', 'listOverview'));
    }
}
