<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public function render()
    {

        Carbon::setLocale("fr");

        return view('livewire.utilisateurs.index', [
            "users" => User::paginate(5)
        ])
            ->extends("layouts.main")
            ->section("content");
    }
}
