<?php

namespace App\Http\Livewire;

use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use Livewire\Component;

class Select extends Component
{
    public $provinsi;
    public $kota;
    public $kecamatan;
    public $kelurahan;
    public $rw;

    public $selectedState = NULL;
    public $selectedState2 = NULL;
    public $selectedState3 = NULL;
    public $selectedState4 = NULL;
    public $selectedState5 = NULL;

    public function mount($selectedState5 = null)
    {
        $this->provinsi = Provinsi::all();
        $this->kota = collect();
        $this->kecamatan = collect();
        $this->kelurahan = collect();
        $this->rw = collect();
        $this->selectedState5 = $selectedState5;

        if (!is_null($selectedState5)) {
            $rw = Rw::with('kelurahan.kecamatan.kota.provinsi')->find($selectedState5);
            if ($rw) {
                $this->rw = Rw::where('id_kelurahan', $rw->id_kelurahan)->get();
                $this->kelurahan = Kelurahan::where('id_kecamatan', $rw->kelurahan->id_kecamatan)->get();
                $this->kecamatan = Kecamatan::where('id_kota', $rw->kelurahan->kecamatan->id_kota)->get();
                $this->kota = Kota::where('id_provinsi', $rw->kelurahan->kecamatan->kota->id_provinsi)->get();
                
                $this->selectedState = $rw->kelurahan->kecamatan->kota->id_provinsi;
                $this->selectedState2 = $rw->kelurahan->kecamatan->id_kota;
                $this->selectedState3 = $rw->kelurahan->id_kecamatan;
                $this->selectedState4 = $rw->id_kelurahan;
            }
        }
    }

    public function render()
    {
        return view('livewire.select');
    }

    public function updatedSelectedState($provinsi)
    {
        if (!is_null($provinsi)) {
            $this->kota = Kota::where('id_provinsi', $provinsi)->get();
        }
    }

    public function updatedSelectedState2($kota)
    {
        if (!is_null($kota)) {
            $this->kecamatan = Kecamatan::where('id_kota', $kota)->get();
        }
    }

    public function updatedSelectedState3($kecamatan)
    {
        if (!is_null($kecamatan)) {
            $this->kelurahan = Kelurahan::where('id_kecamatan', $kecamatan)->get();
        }
    }

    public function updatedSelectedState4($kelurahan)
    {
        if (!is_null($kelurahan)) {
            $this->rw = Rw::where('id_kelurahan', $kelurahan)->get();
        }
    }
}
