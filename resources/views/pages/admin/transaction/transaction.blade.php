@extends('layouts.admin')
@section('title','Produk')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                </i>
            </div>
            <div>Produk
                <div class="page-title-subheading">List Produk
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            {{-- <button type="button" data-toggle="tooltip" title="Example Tooltip"
                data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button> --}}
            <div class="d-inline-block dropdown">
                <a href="{{route('form-produk')}}" class="btn btn-outline-primary"> <i class="pe-7s-plus"></i> Tambah Produk</a>
                <button type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Filter
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true"
                    class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span>
                                    Inbox
                                </span>
                                <div class="ml-auto badge badge-pill badge-secondary">86</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span>
                                    Book
                                </span>
                                <div class="ml-auto badge badge-pill badge-danger">5</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span>
                                    Picture
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a disabled href="javascript:void(0);" class="nav-link disabled">
                                <i class="nav-link-icon lnr-file-empty"></i>
                                <span>
                                    File Disabled
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h4 class="box-title">Daftar Transaksi Barang</h4>
                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="serial">#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomer</th>
                                <th>Total Transaksi</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td class="serial">1.</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>Rp. {{$item->transaction_total}}</td>
                                <td>
                                    @if($item->transaction_status == 'PENDING')
                                        <span class="badge badge-primary">
                                    @elseif($item->transaction_status == 'SUCCESS')
                                        <span class="badge badge-warning">
                                    @elseif($item->transaction_status == 'FAILED')
                                        <span class="badge badge-danger">
                                    @else
                                        <span>
                                    @endif
                                        {{$item->transaction_status}}
                                        </span>
                                </td>
                                <td>
                                    @if($item->transaction_status == 'PENDING')
                                        <a href="{{route('transactions.status', $item->id)}}?status=SUCCESS" class="btn btn-warning btn-sm">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{route('transactions.status', $item->id)}}?status=FAILED" class="btn btn-danger btn-sm">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>
                                    @endif
                                    <a href="#mymodal"
                                        data-remote="{{ route('transactions.show', $item->id) }}"
                                        data-toggle="modal"
                                        data-target="#mymodal"
                                        data-title="Detail Transaksi {{ $item->uuid }}"
                                        class="btn btn-info btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('transactions.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                      </a>
                                    <form action="{{route('transactions.destroy',$item->id)}}" method="POST"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center p-5">Data Kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
