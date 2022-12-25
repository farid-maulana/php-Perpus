<?php
include 'actions/book.php';
include 'actions/member.php';

if (isset($_GET['page']))
{
    switch ($_GET['page'])
    {
        case 'beranda':
            echo "<h1 class='text-center'>Selamat Datang di Sistem Perpustakaan Kota<h1>";
            break;
        case 'daftar-buku':
            showBooks(null);
            break;
        case 'tambah-buku':
            createNewBook();
            break;
        case 'store-buku':
            storeNewBook();
            break;
        case 'edit-buku':
            editBook($_GET['id']);
            break;
        case 'update-buku':
            updateBook($_GET['id']);
            break;
        case 'delete-buku':
            deleteBook($_GET['id']);
            break;
        case 'daftar-anggota':
            showMembers(null);
            break;
        case 'tambah-anggota':
            createNewMember();
            break;
        case 'store-anggota':
            storeNewMember();
            break;
        case 'edit-anggota':
            editMember($_GET['id']);
            break;
        case 'update-anggota':
            updateMember($_GET['id']);
            break;
        case 'delete-anggota':
            deleteMember($_GET['id']);
            break;
        default:
            echo "<h1 class='text-center'>Selamat Datang di Sistem Perpustakaan Kota<h1>";
    }
}
else
{
    echo "<h1 class='text-center'>Selamat Datang di Perpus Kota<h1>";
}