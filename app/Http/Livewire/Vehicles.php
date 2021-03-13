<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Vehicle;

class Vehicles extends Component
{
    public $vehicles, $name, $vehicle_id;
    public $updateMode = false;

    public function render()
    {
        $this->vehicles = Vehicle::all();
        return view('livewire.vehicles');
    }

    private function resetInputFields(){
        $this->name = '';
        
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            
        ]);

        Vehicle::create($validatedDate);

        session()->flash('message', 'Vehicle Created Successfully.');

        $this->resetInputFields();

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $vehicle = Vehicle::where('id',$id)->first();
        $this->vehicle_id = $id;
        $this->name = $vehicle->name;
        
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            
        ]);

        if ($this->vehicle_id) {
            $vehicle = Vehicle::find($this->vehicle_id);
            $vehicle->update([
                'name' => $this->name,
                
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Vehicle Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            Vehicle::where('id',$id)->delete();
            session()->flash('message', 'Vehicle Deleted Successfully.');
        }
    }
}