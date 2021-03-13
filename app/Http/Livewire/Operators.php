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
        
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            
        ]);

        Operator::create($validatedDate);

        session()->flash('message', 'Operator Created Successfully.');

        $this->resetInputFields();

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $operator = Operator::where('id',$id)->first();
        $this->operator_id = $id;
        $this->name = $operator->name;
        
        
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

        if ($this->operator_id) {
            $operator = Operator::find($this->operator_id);
            $operator->update([
                'name' => $this->name,
                
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