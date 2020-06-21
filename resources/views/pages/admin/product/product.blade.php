@extends('layouts.admin')
@section('title','Produk')
@section('content')
{{-- @dump($items) --}}
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
                <a href="{{route('products.create')}}" class="btn btn-outline-primary"> <i class="pe-7s-plus"></i> Tambah Produk</a>
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
                <h5 class="card-title">Daftar Produk</h5>
                <table class="mb-0 table table-striped text-center table-responsive-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Gambar</th>
                            <th>Dokumen</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1
                        @endphp
                        @forelse ($items as $item)

                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$item->name}}</td>
                            <td>Rp. {{number_format($item->price, 0, ',', '.')}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>{{$item->productGalleries->count()}} Gambar</td>
                            <td>{{$item->productDocuments->count()}} File</td>
                            <td>
                                @if ($item->status == 1)
                                    <div class="badge badge-warning">ON</div>
                                @else
                                    <div class="badge badge-danger">OFF</div>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('products.edit',$item->id)}}" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Edit Produk">
                                    <i class="pe-7s-pen"></i>
                                </a>
                                <a href="{{route('gallery.show', $item->id)}}" class="btn btn-outline-success" data-toggle="tooltip" data-placement="bottom" title="Gallery Produk">
                                    <i class="pe-7s-photo"></i>
                                </a>
                                <a href="{{route('document.show',$item->id)}}" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="bottom" title="Dokumen Produk">
                                    <i class="pe-7s-note2"></i>
                                </a>
                                <form action="{{route('products.destroy', $item->id)}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus Produk">
                                        <i class="pe-7s-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $i++
                        @endphp
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
