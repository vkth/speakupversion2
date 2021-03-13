<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadCsv extends Component
{
    use WithFileUploads;

    public $upload;

    public $description;

    public $sample = [];

    public $rules = [
        'upload' => 'required|mimes:csv,txt|size:1024',
        'description' => 'required'
    ];

    public function save()
    {
        $this->validate();

        // store the csv under the local filesytem, defined in config/filesystems.php
        $this->upload->store('csv', 'local');
    }

    public function render()
    {
        return view('livewire.upload-csv');
    }
}
