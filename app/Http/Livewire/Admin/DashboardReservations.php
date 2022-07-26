<?php

namespace App\Http\Livewire\Admin;

use App\Models\Reservation;
use App\Models\Table;
use Livewire\Component;

class DashboardReservations extends Component
{

    public $reservations;
    public $tables;
    public $showModal = 0;

    public $confirm_res;
    public $confirm_table;
    public $confirm_note;

    protected $listeners = ['update' => 'update'];

    public function update(){
        $this->reservations = Reservation::where('status', '<>', '1')->orderByDesc('id')->get();
    }

    public function mount()
    {
        $this->update();
        $this->tables = Table::all();
    }

    public function render()
    {
        return view('livewire.admin.dashboard-reservations');
    }

    public function ChangeState($id, $state)
    {
        $res = Reservation::find($id);

        if (!$res) {
            echo 'bulunamadı';
            return;
        }

        switch ($state) {
            case "approve":
                $res->status = "1";
                break;
            case "pending":
                $res->status = "0";
                break;
            case "cancel":
                $res->status = "-1";
                break;
        }

        $res->save();
        $this->emit('update');
    }

    public function ResConfirmForm($id)
    {
        $this->confirm_res = Reservation::find($id);
        $this->confirm_table = $this->confirm_res->table;
        $this->confirm_note = $this->confirm_res->store_note;
        $this->showModal = 1;
    }

    public function ResConfirm()
    {
        $this->confirm_res->table = $this->confirm_table;
        $this->confirm_res->store_note = $this->confirm_note;
        $this->confirm_res->status = '1';
        $this->confirm_res->save();
        $this->emit('update');
        $this->showModal = 0;
    }

    public function hideModal()
    {
        $this->showModal = 0;
    }
}
