@extends('template/app')

@section('content')
    <style>
        .card-data {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            background-color: #f9f9f9;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .card-data:hover {
            transform: scale(1.05);
        }

        .card-data .bi {
            font-size: 40px;
            color: #007bff;
        }

        .des {
            font-weight: bold;
            font-size: 16px;
            color: #333;
        }

        .cl {
            font-size: 14px;
            color: #666;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .table {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table-bordered th,
        .table-bordered td {
            border-color: #ddd !important;
        }

        @media (max-width: 992px) {
            .card-data .row {
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .card-data .col-6 {
                flex-basis: 100%;
            }
        }

        .table th,
        .table td {
            text-align: center;
            padding: 8px;
        }

        @media (max-width: 768px) {

            .table th,
            .table td {
                font-size: 12px;
            }

            .table th {
                text-align: left;
            }
        }
    </style>
<div class="row mt-5">
    <div class="col-lg-4">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th class="col-2">Agama</th>
                        <th class="col-4">Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->unique('pekerjaan_id','agama') as $item)
                        <tr>
                            <td>{{$item->agama}}</td>
                            <td>{{ $item->pekerjaan->nama_pekerjaan ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card-data">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="col-6 d-flex flex-column justify-content-center">
                            <div class="des">Jumlah Warga</div>
                            <div class="cl">{{ $data->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card-data">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <i class="bi bi-gender-male"></i>
                        </div>
                        <div class="col-6 d-flex flex-column justify-content-center">
                            <div class="des">Laki-laki</div>
                            <div class="cl">{{ $maleCount }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card-data">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <i class="bi bi-gender-female"></i>
                        </div>
                        <div class="col-6 d-flex flex-column justify-content-center">
                            <div class="des">Perempuan</div>
                            <div class="cl">{{ $femaleCount }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card-data">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="col-6 d-flex flex-column justify-content-center">
                            <div class="des">Guru</div>
                            <div class="cl"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
