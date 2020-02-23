<?php

namespace App\Export;

use App\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * @return Collection
     */
    public function collection()
    {
        $user = $this->user;

        return User::where('id', '=', $user->id)->get();
    }
}