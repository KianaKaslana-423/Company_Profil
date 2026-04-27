<?php

namespace App\Controllers;

use App\Models\UsersModel; // Pastikan model dipanggil

class ProfileController extends BaseController
{
    /**
     * Menangani unggahan foto profil baru
     */
    public function updateFoto()
{
    // Ambil file dari input
    $file = $this->request->getFile('foto_profil');

    // CEK: Apakah ada file yang dipilih?
    if ($file === null || $file->getError() == 4) {
        return redirect()->back()->with('error', 'Silakan pilih foto terlebih dahulu.');
    }

    // Validasi file
    if ($file->isValid() && !$file->hasMoved()) {
        $newName = $file->getRandomName();
        
        // Pindahkan ke folder tujuan
        if ($file->move('assets/img/profile/', $newName)) {
            
            $model = new \App\Models\UsersModel();
            $userId = session()->get('user_id');

            // Update database
            $model->update($userId, ['foto_profil' => $newName]);

            // Update session agar navbar berubah
            session()->set('foto_profil', $newName);

            return redirect()->back()->with('msg', 'Foto berhasil diperbarui!');
        }
    }

    return redirect()->back()->with('error', 'Terjadi kesalahan saat mengunggah file.');
}
}