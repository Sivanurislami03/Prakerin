<div>
    <div class="form-group">
        <label for="state"><b>Provinsi</b></label>

        <div class="col-md-12">
            <select wire:model="selectedState" class="form-control">
                <option value="" selected>-- Pilih Provinsi --</option>
                @foreach($provinsi as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_provinsi }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectedState))
        <div class="form-group">
            <label for="city"><b>Kota</b></label>

            <div class="col-md-12">
                <select class="form-control" wire:model="selectedState2" name="id_kota">
                    <option value="" selected>-- Pilih Kota --</option>
                    @foreach($kota as $data2)
                        <option value="{{ $data2->id }}">{{ $data2->nama_kota }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif

    @if (!is_null($selectedState2))
        <div class="form-group">
            <label for="city"><b>Kecamatan</b></label>

            <div class="col-md-12">
                <select class="form-control" wire:model="selectedState3" name="id_kecamatan">
                    <option value="" selected>-- Pilih Kecamatan --</option>
                    @foreach($kecamatan as $data3)
                        <option value="{{ $data3->id }}">{{ $data3->nama_kecamatan }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif

    @if (!is_null($selectedState3))
        <div class="form-group">
            <label for="city"><b>Kelurahan</b></label>

            <div class="col-md-12">
                <select class="form-control" wire:model="selectedState4" name="id_kelurahan">
                    <option value="" selected>-- Pilih Kelurahan --</option>
                    @foreach($kelurahan as $data4)
                        <option value="{{ $data4->id }}">{{ $data4->nama_kelurahan }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif

    @if (!is_null($selectedState4))
        <div class="form-group">
            <label for="city"><b>RW</b></label>

            <div class="col-md-12">
                <select class="form-control" wire:model="selectedState5" name="id_rw">
                    <option value="" selected>-- Pilih RW --</option>
                    @foreach($rw as $data5)
                        <option value="{{ $data5->id }}">{{ $data5->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif

</div>
