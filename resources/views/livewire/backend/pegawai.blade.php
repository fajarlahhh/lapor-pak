<div>
    <div class="intro-y box mt-5">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
            <a href="javascript:;" data-toggle="modal" data-target="#basic-modal-preview" class="btn btn-primary">Upload</a>
            <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                <input type="text" class="form-control" placeholder="Cari" wire:model="cari">
            </div>
        </div>
        <div class="p-5" id="responsive-table">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">NIP</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Nama</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Alamat</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Golongan</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Tgl. Lahir</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Tempat Lahir</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Jenis Kelamin</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Telepon</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Agama</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Pendidikan</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Status Pernikahan</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Tgl Masuk</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Jabatan</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Kantor</th>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <td class="border-b whitespace-nowrap">{{ ++$no }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->nip }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->nama }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->alamat }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->golongan }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->tgl_lahir }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->tempat_lahir }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->jenis_kelamin }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->agama }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->telepon }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->pendidikan }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->status_pernikahan }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->tgl_masuk }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->jabatan }}</td>
                            <td class="border-b whitespace-nowrap">{{ $row->kantor }}</td>
                            <td class="border-b whitespace-nowrap">
                            @if($key==$row->getKey())
                                <a href="javascript:;" wire:click="hapus()" class="btn btn-danger">Ya, Hapus </a>
                                <a wire:click="batal()" href="javascript:;" class="btn btn-success">Batal</a>
                            @else
                                <a href="javascript:;" wire:click="key({{ $row->getKey() }})" class="btn btn-danger">Hapus</a>
                            @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $data->links() }}
        </div>
    </div>
    <div id="basic-modal-preview" wire:ignore.self class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form wire:submit.prevent="submit">
                    <div class="modal-body">
                        <div>
                            <label for="File" class="form-label">File</label>
                            <input type="file" name="file" class="form-control" wire:model="file" required accept=".csv">
                            @error('file')
                            <div class="text-theme-6 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="resetFile" class="btn btn-warning">Reset</button>
                        <input type="submit" class="btn btn-success" value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
