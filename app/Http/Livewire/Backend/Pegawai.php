<?php

namespace App\Http\Livewire\Backend;

use App\Csv;
use Livewire\Component;
use App\Models\PegawaiModel;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Pegawai extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $cari, $key, $file, $column;

    public $fieldColumnMap = [
        'nip' => 'nip',
        'nama' => 'nama',
        'alamat' => 'alamat',
        'golongan' => 'golongan',
        'tgl_lahir' => 'tgl_lahir',
        'tempat_lahir' => 'tempat_lahir',
        'jenis_kelamin' => 'jenis_kelamin',
        'agama' => 'agama',
        'telepon' => 'telepon',
        'pendidikan' => 'pendidikan',
        'status_pernikahan' => 'status_pernikahan',
        'tgl_masuk' => 'tgl_masuk',
        'jabatan' => 'jabatan',
        'kantor' => 'kantor',
    ];


    public function batal()
    {
        $this->key = null;
    }

    public function key($key)
    {
        $this->key = $key;
    }

    public function hapus()
	{
        PegawaiModel::findOrFail($this->key)->delete();
        $this->key = null;
	}

    public function resetFile()
    {
        $this->file = null;
    }

    public function submit()
    {
        $this->validate([
            'file' => 'required|mimes:csv'
        ]);

        Csv::from($this->file)->eachRow(function ($row)
        {
            if(PegawaiModel::where('nip', $row['nip'])->count() > 0){
                PegawaiModel::where('nip', $row['nip'])->update([
                        'nama' => $row['nama'],
                        'alamat' => $row['alamat'],
                        'golongan' => $row['golongan'],
                        'tgl_lahir' => $row['tgl_lahir'],
                        'tempat_lahir' => $row['tempat_lahir'],
                        'jenis_kelamin' => $row['jenis_kelamin'],
                        'agama' => $row['agama'],
                        'telepon' => $row['telepon'],
                        'pendidikan' => $row['pendidikan'],
                        'status_pernikahan' => $row['status_pernikahan'],
                        'tgl_masuk' => $row['tgl_masuk'],
                        'jabatan' => $row['jabatan'],
                        'kantor' => $row['kantor'],
                    ]);
            }else{
                PegawaiModel::create(
                    $this->extractFieldsFromRow($row)
                );
            }
        });
        $this->reset();
    }


    public function extractFieldsFromRow($row)
    {
        $attributes = collect($this->fieldColumnMap)
            ->filter()
            ->mapWithKeys(function($heading, $field) use ($row) {
                return [$field => $row[$heading]];
            })
            ->toArray();

        return $attributes;
    }

    public function render()
    {
        $data = PegawaiModel::where(fn ($q) => $q->where('nip', 'like', '%'.$this->cari.'%')->orWhere('nama', 'like', '%'.$this->cari.'%'))->paginate(10);
        return view('livewire.backend.pegawai', [
            'data' => $data,
            'no' => ($this->page - 1) * 10,
        ])->extends('layouts.backend');
    }
}
