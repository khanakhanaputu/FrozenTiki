<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $produks = [
    1 => [
        'nama' => 'sarimie',
        'jenis' => 'mie',
        'harga' => 2500,
        'url' => 'https://picsum.photos/200'
    ],
    2 => [
        'nama' => 'tehbotol',
        'jenis' => 'minuman',
        'harga' => 3000,
        'url' => 'https://picsum.photos/200'
    ],
    3 => [
        'nama' => 'indomie',
        'jenis' => 'mie',
        'harga' => 3000,
        'url' => 'https://picsum.photos/200'
    ],

    4 => [
        'nama' => 'Aqua Botol 600ml',
        'jenis' => 'minuman',
        'harga' => 3500,

        'url' => 'https://picsum.photos/201' 
    ],
    5 => [
        'nama' => 'Chitato Sapi Panggang',
        'jenis' => 'snack',
        'harga' => 11000,
        'url' => 'https://picsum.photos/202'
    ],
    6 => [
        'nama' => 'Mie Sedap Goreng',
        'jenis' => 'mie',
        'harga' => 2800,
        'url' => 'https://picsum.photos/203'
    ],
    7 => [
        'nama' => 'Pocari Sweat',
        'jenis' => 'minuman',
        'harga' => 7000,
        'url' => 'https://picsum.photos/204'
    ],
    8 => [
        'nama' => 'Taro Net',
        'jenis' => 'snack',
        'harga' => 6000,
        'url' => 'https://picsum.photos/205'
    ],
    9 => [
        'nama' => 'Kopi Kapal Api',
        'jenis' => 'minuman', 
        'harga' => 1500,
        'url' => 'https://picsum.photos/206'
    ],
    10 => [
        'nama' => 'Royco Sapi',
        'jenis' => 'bumbu',
        'harga' => 500,
        'url' => 'https://picsum.photos/207'
    ],
    11 => [
        'nama' => 'Fanta Strawberry',
        'jenis' => 'minuman',
        'harga' => 5500,
        'url' => 'https://picsum.photos/208'
    ],
    12 => [
        'nama' => 'Lays Rumput Laut',
        'jenis' => 'snack',
        'harga' => 10000,
        'url' => 'https://picsum.photos/209'
    ]
];

    public function index()
    {
        $produk = $this->produks;        

        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $jenis)
    {
        $produk = [];
        foreach ($this->produks as $item) {
            if ($jenis === $item['jenis']) {
                $produk[] = $item;
            }
        }
        return view('produk.satuproduk', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
