<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Genteng</title>
</head>
<body>

    <h2>Edit Data Genteng</h2>
    <a href="/genteng">Kembali</a>

    <br/><br/>

    <form action="/genteng/update" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $genteng->ID }}"> <br/>

        Merk Genteng:
        <input type="text" name="merkgenteng" required value="{{ $genteng->merkgenteng }}"> <br/>

        Harga Genteng:
        <input type="number" name="hargagenteng" required value="{{ $genteng->hargagenteng }}"> <br/>

        Tersedia:
        <input type="radio" name="tersedia" value="1" {{ $genteng->tersedia ? 'checked' : '' }}> Ya
        <input type="radio" name="tersedia" value="0" {{ !$genteng->tersedia ? 'checked' : '' }}> Tidak
        <br/>

        Berat (kg):
        <input type="number" step="0.01" name="berat" required value="{{ $genteng->berat }}"> <br/>

        <input type="submit" value="Simpan Data">
    </form>

</body>
</html>
@extends('template')
