    <?php
    class pegawai
    {
        var $nip;
        var $nama;
        var $jabatan;
        var $agama;
        var $status;

        const perusahaan = 'Rindang Fundation';
        static $no = 1;

        function __construct($nip, $nama, $jabatan, $agama, $status)
        {
            $this->nip = $nip;
            $this->nama = $nama;
            $this->jabatan = $jabatan;
            $this->agama = $agama;
            $this->status = $status;
        }
        public function gaji()
        {
            switch ($this->jabatan) {
                case 'manager':
                    $gapok = 15000000;
                    break;
                case 'asisten manager':
                    $gapok = 10000000;
                    break;
                case 'kepala bagian':
                    $gapok = 7000000;
                    break;
                case 'staff':
                    $gapok = 4000000;
                    break;

                default:

                    break;
            }
            return $gapok;
        }
        public function Tunjab()
        {
            $tunjab = $this->gaji() * 0.2;
            return $tunjab;
        }

        public function Tunkel()
        {
            $tunkel = ($this->status == "menikah") ? $this->gaji() * 0.1 : 0;
            return $tunkel;
        }
        public function gator()
        {
            $gator = $this->gaji() + $this->Tunjab() + $this->Tunkel();
            return $gator;
        }

        public function zakat()
        {
            $zakat = ($this->agama == "islam" && $this->gator() >= 6000000) ? $this->gator() * 0.025 : 0;
            return $zakat;
        }

        public function TakeHomePay()
        {
            $thp = $this->Gator() - $this->zakat();
            return $thp;
        }

        public function Gaber()
        {
            $gaber = $this->Gator() - $this->zakat();
            return $gaber;
        }

        public function mencetak()
        {
            echo "
        <tr>
                <td>" . self::$no++ . "</td>
                <td>" . $this->nip . "</td>
                <td>" . $this->nama . "</td>
                <td>" . $this->agama . "</td>
                <td>" . $this->jabatan . "</td>
                <td>" . $this->status . "</td>
                <td>" . $this->gaji() . "</td>
                <td>" . $this->Tunjab() . "</td>
                <td>" . $this->Tunkel() . "</td>
                <td>" . $this->zakat() . "</td>
                <td>" . $this->Gator() . "</td>
                <td>" . $this->Gaber() . "</td>
            </tr>
        ";
        }
    }
