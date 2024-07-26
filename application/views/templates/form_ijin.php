<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM IJIN </title>
    <link rel="icon" href="<?= base_url('assets/img/xto.ico'); ?>">


    <style>
        @page {
            size: auto;
            /* auto is the initial value */
            margin: 0mm;
            /* this affects the margin in the printer settings */
        }


        @media print {

            body {
                margin: 20mm 15mm;
                /* Atur margin halaman cetak */

                -webkit-print-color-adjust: exact;
            }

            .content {
                page-break-inside: avoid;
                text-align: justify;
                margin-top: 90px;
                page-break-inside: avoid;
                /* Hindari memecah konten di tengah halaman */
            }

            /* Atur halaman baru sebelum dan setelah elemen dengan class .page-break */
            .page-break {
                page-break-before: always;
                page-break-after: always;
            }
        }





        /* Atur halaman baru sebelum dan setelah elemen dengan class .page-break */
        .page-break {
            page-break-before: always;
            page-break-after: always;
        }



        body {
            margin: 20px;
            padding: 0;
            background-color: #FAFAFA;
            font: 10pt "Times New Roman";
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
    </style>
</head>

<body>
    <h2 style="text-align: left;">PT. AKT INDONESIA</h2>
    <h2 style="background: #c1e2b9;text-align: left; margin: 0;">FORM KETIDAKHADIRAN / ABSEN / IJIN / TELAT / PULANG AWAL</h2>
    <H4 style="color: red; margin-top: 0px;margin-bottom: 0px;">(BUKAN FORM CUTI)</H4>
    Tgl. Pengajuan / Date Requesting : ............................................
    <table  style="border: 1px solid black; text-align: center; border-collapse: collapse ;">
        <tr>
            <td style="width: 700px;">
                <table>
                    <tr>
                        <td>Nama / Name</td>
                        <td>:</td>
                        <td>........................................................................................</td>
                        <td>Dept.Bag</td>
                        <td>:</td>
                        <td>..........................................................</td>


                    </tr>
                    <tr>
                        <td>NIK / ID</td>
                        <td>:</td>
                        <td>........................................................................................</td>


                        <td>Position</td>
                        <td>:</td>
                        <td>..........................................................</td>



                    </tr>

                </table>

            </td>
        </tr>
        <tr>
            <td>
                
                <table border="1"  style="border: 1px solid black; text-align: center; border-collapse: collapse ;">
                <tr>
                    <tr>
                        <td style="width: 350px;"><h4 style="margin: 0; text-align: left;">Waktu KetidakHadiran</h4>
                        <table border="0">
                                <tr>
                                    <td>Hari</td>
                                    <td>:</td>
                                </tr>
                                <tr>
                                    <td>Tgl</td>
                                    <td>:</td>
                                    <td style="width:60px;"></td>
                                    <td>Bulan :</td>
                                    <td style="width:60px;"></td>
                                    <td>Tahun :</td>
                                    <td style="width:60px;"></td>
                                </tr>
                                <tr>
                                    <td>Jam</td>
                                    <td>:</td>
                                    <td></td>
                                    <td colspan="2" style="text-align: center;">s/d</td>
                                    <td></td>

                                </tr>
                            </table>
                        </td>
                        <td style="width: 350px;"><h4 style="margin: 0; text-align: left;">Alasan (Centang)</h4>
                        <table style="text-align: left;">
                                <tr>
                                    
                                    <td> <input type="checkbox"></td>
                                    <td>Alpha</td>
                                    <td style="width: 50px;"></td>
                                    <td> <input type="checkbox"></td>
                                    <td>Sakit</td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox"></td>
                                    <td>Terlambat Masuk</td>
                                    <td style="width: 50px;"></td>

                                    <td> <input type="checkbox"></td>
                                    <td>Dinas Luar</td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox"></td>
                                    <td>Ijin Pulang</td>
                                    <td style="width: 50px;"></td>

                                    <td> <input type="checkbox"></td>
                                    <td>Ijin (............Hari)</td>
                                </tr>
                               
                            </table>
                        </td>

                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <h4 style="margin: 0; text-align: left;">Keterangan :</h4><br>
                <table style="text-align: left;">
                    <tr>
                        <td>................................................................................................................................................................................................</td>
                    </tr>
                    <tr>
                        <td>................................................................................................................................................................................................</td>

                    </tr>

                </table>
            </td>
        </tr>
        <tr>
            <td>
                <CENter>
                    <table border="1" style="border: 1px solid black; text-align: center; border-collapse: collapse ;">
                        <tr>
                            <td style="width: 200px;text-align: center;"><u>APPLICANT</u> <br> Pemohon</td>
                            <td colspan="2" style="width: 300px;text-align: center;"><u>APPROVAL</u> <br>Persetujuan</td>
                            <td style="width: 200px;text-align: center;"><u>ACKNOWLEDGE</u> <br>Mengetahui</td>

                        </tr>
                        <tr>
                            <td style="height: 70px;"></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td style="text-align: center;">Karyawan (Nama & TTD)</td>
                            <td style="text-align: center;">Supervisor</td>
                            <td style="text-align: center;">Pimpinan</td>
                            <td style="text-align: center;">Personalia HRD</td>


                        </tr>
                    </table>
                </CENter>
            </td>
        </tr>
    </table>
    <h4 style="color: red; margin: 5px;">FORM DISERAHKAN KE SECURITY SETELAH DITANDATANGANI HRD DAN SCAN ABSENSI</h4><br><br>
    <hr>

    <h2 style="text-align: left;">PT. AKT INDONESIA</h2>
    <h2 style="background: #c1e2b9;text-align: left; margin: 0;">FORM KETIDAKHADIRAN / ABSEN / IJIN / TELAT / PULANG AWAL</h2>
    <H4 style="color: red; margin-top: 0px;margin-bottom: 0px;">(BUKAN FORM CUTI)</H4>
    Tgl. Pengajuan / Date Requesting : ............................................
    <table  style="border: 1px solid black; text-align: center; border-collapse: collapse ;">
        <tr>
            <td style="width: 700px;">
                <table>
                    <tr>
                        <td>Nama / Name</td>
                        <td>:</td>
                        <td>........................................................................................</td>
                        <td>Dept.Bag</td>
                        <td>:</td>
                        <td>..........................................................</td>


                    </tr>
                    <tr>
                        <td>NIK / ID</td>
                        <td>:</td>
                        <td>........................................................................................</td>


                        <td>Position</td>
                        <td>:</td>
                        <td>..........................................................</td>



                    </tr>

                </table>

            </td>
        </tr>
        <tr>
            <td>
                
                <table border="1"  style="border: 1px solid black; text-align: center; border-collapse: collapse ;">
                <tr>
                    <tr>
                        <td style="width: 350px;"><h4 style="margin: 0; text-align: left;">Waktu KetidakHadiran</h4>
                            <table border="0">
                                <tr>
                                    <td>Hari</td>
                                    <td>:</td>
                                </tr>
                                <tr>
                                    <td>Tgl</td>
                                    <td>:</td>
                                    <td style="width:60px;"></td>
                                    <td>Bulan :</td>
                                    <td style="width:60px;"></td>
                                    <td>Tahun :</td>
                                    <td style="width:60px;"></td>
                                </tr>
                                <tr>
                                    <td>Jam</td>
                                    <td>:</td>
                                    <td></td>
                                    <td colspan="2" style="text-align: center;">s/d</td>
                                    <td></td>

                                </tr>
                            </table>
                        </td>
                        <td style="width: 350px;"><h4 style="margin: 0; text-align: left;">Alasan (Centang)</h4>
                        <table style="text-align: left;">
                                <tr>
                                    
                                    <td> <input type="checkbox"></td>
                                    <td>Alpha</td>
                                    <td style="width: 50px;"></td>
                                    <td> <input type="checkbox"></td>
                                    <td>Sakit</td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox"></td>
                                    <td>Terlambat Masuk</td>
                                    <td style="width: 50px;"></td>

                                    <td> <input type="checkbox"></td>
                                    <td>Dinas Luar</td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox"></td>
                                    <td>Ijin Pulang</td>
                                    <td style="width: 50px;"></td>

                                    <td> <input type="checkbox"></td>
                                    <td>Ijin (............Hari)</td>
                                </tr>
                               
                            </table>
                        </td>

                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <h4 style="margin: 0; text-align: left;">Keterangan :</h4><br>
                <table style="text-align: left;">
                    <tr>
                        <td>................................................................................................................................................................................................</td>
                    </tr>
                    <tr>
                        <td>................................................................................................................................................................................................</td>

                    </tr>

                </table>
            </td>
        </tr>
        <tr>
            <td>
                <CENter>
                    <table border="1" style="border: 1px solid black; text-align: center; border-collapse: collapse ;">
                        <tr>
                            <td style="width: 200px;text-align: center;"><u>APPLICANT</u> <br> Pemohon</td>
                            <td colspan="2" style="width: 300px;text-align: center;"><u>APPROVAL</u> <br>Persetujuan</td>
                            <td style="width: 200px;text-align: center;"><u>ACKNOWLEDGE</u> <br>Mengetahui</td>

                        </tr>
                        <tr>
                            <td style="height: 70px;"></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td style="text-align: center;">Karyawan (Nama & TTD)</td>
                            <td style="text-align: center;">Supervisor</td>
                            <td style="text-align: center;">Pimpinan</td>
                            <td style="text-align: center;">Personalia HRD</td>


                        </tr>
                    </table>
                </CENter>
            </td>
        </tr>
    </table>
    <h4 style="color: red; margin: 5px;">FORM DISERAHKAN KE SECURITY SETELAH DITANDATANGANI HRD DAN SCAN ABSENSI</h4><br><br>

</body>

</html>
<script>
    window.print();
</script>