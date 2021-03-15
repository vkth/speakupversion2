<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operator;

class Operators extends Component
{
    public $name, $operators, $address, $phone_number;
    public $updateMode = false;

    public function render()
    {
        $this->operators = Operator::all();
        return view('livewire.operators');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->address = '';
        $this->phone_number = '';
        
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            
        ]);

        Operator::create($validatedDate);

        session()->flash('message', 'Operator Created Successfully.');

        $this->resetInputFields();

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $operator = Operator::where('id',$id)->first();
        $this->id = $id;
        $this->name = $operator->name;
        $this->address = $operator->address;
        $this->phone_number = $operator->phone_number;
        
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
             'address' => 'required',
              'phone_number' => 'required',
            
        ]);

        if ($this->id) {
            $operator = Operator::find($this->id);
            $operator->update([
                'name' => $this->name,
                'address' => $this->address,
                'phone_number' => $this->phone_number,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Operator Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            Operator::where('id',$id)->delete();
            session()->flash('message', 'Operator Deleted Successfully.');
        }
    }
}