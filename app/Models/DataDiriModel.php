<?php

namespace App\Models;

use CodeIgniter\Model;

class DataDiriModel extends Model
{
    protected $table = 'datadiri';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nim', 'nama', 'alamat', 'bahasa', 'database_penguasaan', 'project_konsep'];
}
