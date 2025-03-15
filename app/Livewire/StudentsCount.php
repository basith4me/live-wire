<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Component;

class StudentsCount extends Component
{
    #[Validate('required|integer')]
    public int $studentCount;

    #[Validate('required|string')]
    public string $note;

    public function submit()
    {
        $this->validate();

        Student::create([
            'count' => $this->studentCount,
            'descreption' => $this->note,
        ]);
        $this->reset();

    }
    public function deleteStudent($id)
    {
        Student::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.students-count', [
            'entries' => Student::all(),
        ]);
    }
}
