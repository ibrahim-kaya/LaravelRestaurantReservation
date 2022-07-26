<?php

namespace App\Http\Livewire\Admin;

use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Livewire\Component;

class DashboardTodayReservations extends Component
{
    public $reservations;
    public $tables;
    public $ex_reservations;

    protected $listeners = ['update' => 'update'];

    public function update(){
        $this->reservations = Reservation::where('status', '1')->where('date', Carbon::now()->format('Y-m-d'))->where('time', '>', Carbon::now()->format('H:i'))->orderBy('time')->get();
        $this->ex_reservations = Reservation::where('status', '1')->where('date', Carbon::now()->format('Y-m-d'))->where('time', '<', Carbon::now()->format('H:i'))->orderByDesc('time')->get();
    }

    public function mount()
    {
        $this->update();
        $this->tables = Table::all();
    }

    public function render()
    {
        return view('livewire.admin.dashboard-today-reservations');
    }
}
