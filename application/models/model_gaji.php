<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_gaji extends CI_Model {
    public function nama($nik) {
        if ($nik == '201201321' ) {
            $this->nama = 'Dinda Karina';
        } elseif ($nik == '201201322') {
            $this->nama = 'Nayla Adzkiya';
        } elseif ($nik == '201301402') {
            $this->nama = 'Nurullah Afif';
        } elseif ($nik == '20150903') {
            $this->nama = 'Dania Khusnul';
        } elseif ($nik == '20180105') {
            $this->nama = 'Rasya Agung';
        } else {
            $this->nama = '';
        }

        return $this->nama;
    }

    public function jabatan($id) {
        if ($id == 'J01') {
            $this->jabatan = 'DIREKTUR';
        } elseif ($id == 'J02') {
            $this->jabatan = 'GENERAL MANAGER';
        } elseif ($id == 'J03') {
            $this->jabatan = 'KEPALA DIVISI';
        } elseif ($id == 'J04') {
            $this->jabatan = 'KEPALA DEPARTEMEN';
        } elseif ($id == 'J05') {
            $this->jabatan = 'SUPERVISOR';
        } elseif ($id == 'J06') {
            $this->jabatan = 'STAFF';
        } else {
            $this->jabatan = '';
        }

        return $this->jabatan;
    }

    public function gaji($id) {
        if ($id == 'J01') {
            $this->gaji = '30000000';
        } elseif ($id == 'J02') {
            $this->gaji = '20000000';
        } elseif ($id == 'J03') {
            $this->gaji = '13000000';
        } elseif ($id == 'J04') {
            $this->gaji = '10000000';
        } elseif ($id == 'J05') {
            $this->gaji = '6000000';
        } elseif ($id == 'J06') {
            $this->gaji = '4000000';
        } else {
            $this->gaji = '';
        }

        return $this->gaji;
    }

    public function tun($status, $anak) {
        if ( $status == 'MENIKAH') {
            if ( $anak == 0 ) {
                $this->tunjangan = 100000;
            } elseif ( $anak == 1 ) {
                $this->tunjangan = 150000;
            } elseif ( $anak == 2 ) {
                $this->tunjangan = 200000;
            } elseif ( $anak == 3 ) {
                $this->tunjangan = 250000;
            }

        } else {
            if ( $anak == 0 ) {
                $this->tunjangan = 0;
            } elseif ( $anak == 1 ) {
                $this->tunjangan = 0;
            } elseif ( $anak == 2 ) {
                $this->tunjangan = 0;
            } elseif ( $anak == 3 ) {
                $this->tunjangan = 0;
            }
        }

        return $this->tunjangan;
    }

    public function potongan($data) {
        if ($data == 'J01') {
            $this->gaji = 30000000 * 0.01;
        } elseif ($data == 'J02') {
            $this->gaji = 20000000 * 0.01;
        } elseif ($data == 'J03') {
            $this->gaji = 13000000 * 0.01;
        } elseif ($data == 'J04') {
            $this->gaji = 10000000 * 0.01;
        } elseif ($data == 'J05') {
            $this->gaji = 6000000 * 0.01;
        } elseif ($data == 'J06') {
            $this->gaji = 4000000 * 0.01;
        } else {
            $this->gaji = '';
        }

        return $this->gaji;
    }
}