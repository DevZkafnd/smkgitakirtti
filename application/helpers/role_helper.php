<?php
function getRole($level)
{
    switch ($level) {
        case 1:
            return 'Admin';
        case 2:
            return 'Siswa';
        default:
            return 'Tidak Diketahui';
    }
}
