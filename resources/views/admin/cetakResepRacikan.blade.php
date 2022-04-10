<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resep</title>
</head>
<body>
    <div>
        <center><h1>E-Prescription</h1></center>
    </div>
    <div>
        <center><h2>Resep Racikan {{$resep->nama_resep}}</h2></center>
    </div>
    <hr>
    <div>
        <div class="tes" style="font-family: sans-serif; color: #232323;">
            
            <h3>Keterangan</h3>
            <div style="margin-left: 30px">

                <p style="font-weight: bold; line-height: 0.5">Kode Resep</p>
                <p style="margin-left: 30px; line-height: 0.5">{{$resep->kode_resep}}</p>
                
                <p style="font-weight: bold; line-height: 0.5">Nama Resep</p>
                <p style="margin-left: 30px; line-height: 0.5">{{$resep->nama_resep}}</p>

                <p style="font-weight: bold; line-height: 0.5">Aturan Pakai</p>
                <p style="margin-left: 30px; line-height: 0.5">{{$resep->signas->signa_nama}}</p>
                
                <p style="font-weight: bold; line-height: 0.5">Resep Racikan</p>
                <p style="margin-left: 30px; line-height: 0.5">- {{$resep->obats1->obatalkes_nama}} ({{$resep->qty_obat_1}})</p>
                <p style="margin-left: 30px; line-height: 0.5">- {{$resep->obats2->obatalkes_nama}} ({{$resep->qty_obat_2}})</p>
                {{-- <p style="margin-left: 30px; line-height: 0.5">- {{$resep->obats3->obatalkes_nama}} ({{$resep->qty_obat_3}})</p> --}}
                @if ($resep->obats3 != NULL)
                    <p style="margin-left: 30px; line-height: 0.5">- {{$resep->obats3->obatalkes_nama}} ({{$resep->qty_obat_3}})</p>
                @else
                    <p></p>
                @endif
                
            </div>
        </div>
    </div>
</body>
</html>