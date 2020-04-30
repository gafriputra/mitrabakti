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
            <div class="card-header">
                <strong>Ubah Transaksi</strong>
                <small>{{ $item->uuid }}</small>
              </div>
              <div class="card-body card-block">
                <form action="{{ route('transactions.update', $item->id) }}" method="POST">
                  @method('PUT')
                  @csrf
                  <div class="form-group">
                    <label for="name" class="form-control-label">Nama Pemesan</label>
                    <input  type="text"
                            name="name"
                            value="{{ old('name') ? old('name') : $item->name }}"
                            class="form-control @error('name') is-invalid @enderror"/>
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                  </div>
                  <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input  type="email"
                            name="email"
                            value="{{ old('email') ? old('email') : $item->email }}"
                            class="form-control @error('email') is-invalid @enderror"/>
                    @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                  </div>
                  <div class="form-group">
                    <label for="number" class="form-control-label">Nomor HP</label>
                    <input  type="text"
                            name="phone"
                            value="{{ old('phone') ? old('phone') : $item->phone }}"
                            class="form-control @error('phone') is-invalid @enderror"/>
                    @error('phone') <div class="text-muted">{{ $message }}</div> @enderror
                  </div>
                  <div class="form-group">
                    <label for="address" class="form-control-label">Alamat Pemesan</label>
                    <input  type="text"
                            name="address"
                            value="{{ old('address') ? old('address') : $item->address }}"
                            class="form-control @error('address') is-invalid @enderror"/>
                    @error('address') <div class="text-muted">{{ $message }}</div> @enderror
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                      Ubah Transaksi
                    </button>
                  </div>
                </form>
              </div>
        </div>
    </div>
</div>
@endsection
