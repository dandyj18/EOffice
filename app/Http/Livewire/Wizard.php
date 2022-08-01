<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\User;
  
class Wizard extends Component
{
    public $currentStep = 1;
    public $successMessage = '';
  
    /**S
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        $user = User::all()->Where("jabatan_id", 1);

        return view('livewire.wizard', ['user' => $user]);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
  
        $this->currentStep = 3;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        $this->currentStep = 1;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        
    }
}