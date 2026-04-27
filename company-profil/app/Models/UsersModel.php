<?php namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model {
    protected $table      = 'users';
    protected $primaryKey = 'id';

    // WAJIB: Tambahkan 'foto_profil' di sini agar bisa di-update
    protected $allowedFields = ['email', 'password', 'name', 'role', 'foto_profil'];

    protected $useTimestamps = true;
}