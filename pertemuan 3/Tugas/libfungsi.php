<?php

function hitungRerata($nilai_uts, $nilai_uas, $nilai_tugas) {
    return ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
}

function tentukanGrade($rerata) {
    if ($rerata >= 80) return 'A';
    else if ($rerata >= 70) return 'B';
    else if ($rerata >= 60) return 'C';
    else if ($rerata >= 50) return 'D';
    else return 'E';
}

function tentukanPredikat($grade) {
    switch ($grade) {
        case 'A':
            return 'Sangat Memuaskan';
        case 'B':
            return 'Memuaskan';
        case 'C':
            return 'Cukup';
        case 'D':
            return 'Kurang';
        case 'E':
            return 'Sangat Kurang';
        default:
            return 'Tidak Valid';
    }
}

function tentukanKeterangan($grade) {
    if ($grade == 'A' || $grade == 'B' || $grade == 'C') {
        return 'Lulus';
    } else {
        return 'Tidak Lulus';
    }
}
?>
