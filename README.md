tema TKI web tenaga kerja

pendaftran/pendataan tki 

"Sepertinya klo tema nya pendaftran/pendataan tki aja mba"

"Ama mba soalnya kan saya kerja nya di balai latihan tki jadi aman bisa lah ini"

"Ada mba kan per tki ada tabungan  nah tabungan itu dikasih dari 
pt yang proses sejumlah 3jt nah itu bisa diambil oleh tki 3x diambil 
1jt dan selama dia proses sampai dengan terbang"

"Jadi tki yang daftar ke Pt dan sudah proses pelatihan akan 
dapat uang saku/tabungan dari pihak pt sejumlah 3jt dan bisa 
diambil bertahap 3x perbulan nya selama tki masih di pelatihan"

"Gak bisa 2 pt soalnya kan tki nanti di buatkan 
id dari disnaker daerah masing2 dari tki,
nah id ini tuh sebagai tanda bahwa ini tki 
sudah terdaftar di pt ini dan tidak bisa ke 2 pt 
sekaligus id ini online programnya pemerintah"

=================================================================
tema - pendataan / pendaftaran TKI (Sistem informasi)

sistem aplikasinya (fokus di 1 PT)

core :
 a. login/register
 b. dashboard
 c. data master (CRUD)
 d. data transaksi
 e. laporan


"loker bisa dilihat, tapi untuk daftar ke loker perlu akun
member"

flow dapat uang saku :
1. User daftar (singkat), email dan password
2. Status User menjadi member
3. member daftar ke Loker kerja yang open dan status (review) -> 
check isi lengkap biodata jika belum lengkap 
4. jika statusnya (approve) maka akan mendapat saldo 3jt dari PT
5. saldo ini bisa di tarik maximal 1jt per bulan. selama 3x	

kesimpulannya "kuota loker berdasarkan saldo pt yang diberikan,
jika 1 orang max 3jt. maka jika saldo 30jt/pt akan didapat
kuota TKI sebanyak 10 org"

"1 orang hanya bisa daftar di satu PT, ketika berhasil daftar
maka akan mendpat ID dari Disnaker daerah (Non Integrasi,
manual Input), Input Manual Update ID disnaker" 

==================================================================

daftar -> approve -> ujian -> lolos -> terbang -> sampai negara tsb

User
- user_id
- uniqid_user
- nama
- email
- handphone
- alamat
- role
- status
- update_by
- create_at
- update_at

data master
- perusahaan (master)
  - id
  - uniqid_perusahaan
  - nama_perusahaan
  - alamat_perusahaan
  - negara_perusahaan
  - deskripsi_perusahaan
  - foto perusahaan / banner
  - uniqid_keuangan_perusahaan

- saldo_perusahaan
  - uniqid_keuangan_perusahaan
  - uniqid_perusahaan
  - nama_perusahaan
  - debit_saldo (pengurangan)
  - kredit_saldo (penambahan)
  - update_at

- saldo_tki
  - uniqid_keuangan_tki
  - nama_perusahaan
  - debit_saldo (pengurangan)
  - kredit_saldo (penambahan)
  - update_at

- loker (master)
  - id
  - uniqid_loker
  - status (open/close)
  - nama_posisi
  - jobdesk_deskription (text)
  - kualifikasi_deskription (text)
  - update_at

- data_terbang
  - id
  - uniqid
  - uniqid_user
  - nama
  - tujuan_negara
  - tgl_masuk
  - tgl_terbang
  - create_at
  - update_at

- data_ujian (lolos approve)