# api-object-filter

## Instalasi

Jalankan perintah di bawah di folder aplikasi:

```
mim app install api-object-filter
```

## Endpoints

### APIHOST/-/object/filter?{type,q,...}

## Timezone Filter

Module ini menambahkan timezone filter dengan query string sebagai berikut:

1. type  Harus selalu `timezone`
1. q  Filter berdasarkan timezone name.
1. what  Filter berdasarkan [group](https://www.php.net/manual/en/class.datetimezone.php).
1. country  Dua karakter nama negara sesuai dengan ISO 3166-1