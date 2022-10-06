function dataSiswa() {
    //tangkap id form
    let forms = document.getElementById('frm');
    let nama = forms.nama.value;
    let profesi = forms.pekerjaan.value;
    let hb = forms.hobby.value;
    let data = `Data Siswa:
    <br/>Nama: ${nama}
    <br/>Pekerjaan: ${profesi} 
    <br/>Hobby: ${hb}`;
    document.getElementById('isi').innerHTML = data;
}    