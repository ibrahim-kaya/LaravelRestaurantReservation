<?php

namespace App\Http\Livewire\Admin;

use App\Models\Reservation;
use Livewire\Component;

class ReservationList extends Component
{
    public $reservations;

    public $filter_name;
    public $filter_date_start;
    public $filter_date_end;
    public $filter_no;
    public $filter_tel;

    protected $listeners = ['update' => 'update'];

    public function update(){
        $filter = array();
        if ($this->filter_date_start)
        {
            $filter[] = "`date` BETWEEN '" . $this->filter_date_start . "' AND '" . $this->filter_date_end . "'";
        }

        if ($this->filter_name)
        {
            $filter[] = '`name` = ' . $this->filter_name;
        }

        if ($this->filter_no)
        {
            $filter[] = '`unique_id` = ' . $this->filter_no;
        }

        if ($this->filter_tel)
        {
            $filter[] = '`phone` = ' . $this->filter_name;
        }

        dd($this->filter_date_start);


        $this->reservations = Reservation::where('status', '<>', '1')->orderByDesc('id')->get();
    }

    public function render()
    {
        return view('livewire.admin.reservation-list');
    }
}
