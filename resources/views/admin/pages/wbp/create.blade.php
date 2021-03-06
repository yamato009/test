@extends('admin.layouts.app_main')

@section('additional_style')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <h4 class="card-header">Tambah WBP</h4>
                <div class="card-body">
                    <form action="{{ route('wbp.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" placeholder="nama" value="{{ old('nama') }}">
                            </div>

                            <label class="col-sm-2 col-form-label">Perkara</label>
                            <div class="col-sm-4">
                                <select class="form-control single-select" name="perkara">
                                    <option value="">Pilih</option>
                                    <option value="Pembunuhan" {{ old('perkara') == 'Pembunuhan' ? 'selected' : '' }}>Pembunuhan</option>
                                    <option value="Pencurian" {{ old('perkara') == 'Pencurian' ? 'selected' : '' }}>Pencurian</option>
                                    <option value="Narkoba" {{ old('perkara') == 'Narkoba' ? 'selected' : '' }}>Narkoba</option>
                                    <option value="Korupsi" {{ old('perkara') == 'Korupsi' ? 'selected' : '' }}>Korupsi</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                            <div class="form-group col-sm-2">
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat lahir" value="{{ old('tempat_lahir') }}">
                            </div>
                            <div class="form-group col-sm-2">
                                <input type="text" class="form-control datepicker" name="tanggal_lahir" placeholder="yyyy-mm-dd" value="{{ old('tanggal_lahir') }}" readonly>
                            </div>
                            <label class="col-sm-2 col-form-label">Jenis Kejahatan</label>
                            <div class="col-sm-4">
                                <select class="form-control single-select" name="jenis_kejahatan">
                                    <option value="">Pilih</option>
                                    <option value="PidSus" {{ old('jenis_kejahatan') == 'PidSus' ? 'selected' : '' }}>PidSus (Pidana Khusus)</option>
                                    <option value="PiDum" {{ old('jenis_kejahatan') == 'PiDum' ? 'selected' : '' }}>PiDum (Pidana Umum)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Agama</label>
                            <div class="form-group col-sm-4">
                                <select class="form-control single-select" name="agama">
                                    <option value="">Pilih</option>
                                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                    <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                    <option value="Koghucu" {{ old('agama') == 'Koghucu' ? 'selected' : '' }}>Koghucu</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">Tanggal Berperkara</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control datepicker" name="tgl_berperkara" placeholder="yyyy-mm-dd" value="{{ old('tgl_berperkara') }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Foto</label>
                            <div class="form-group col-sm-4">
                                <input type="file" class="form-control" name="foto">
                            </div>
                            <label class="col-sm-2 col-form-label">Vonis</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="vonis" placeholder="vonis" value="{{ old('vonis') }}">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-sm float-right"><i class="fa fa-save"></i>&nbsp;Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
