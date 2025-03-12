<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentsCount extends Component
{
    public $studentCount;
    public $note;

    public function submit () {
        Student::create([
            'count' => $this->studentCount,
            'descreption' => $this->note,
        ]);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.students-count');
    }
}
