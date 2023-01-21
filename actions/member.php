<?php
date_default_timezone_set("Asia/Jakarta");

function getDataMember()
{
    $members = array(
        array(
            'nim' => '2206130079',
            'name' => 'Leo Ardianto',
            'phone_number' => '083853522799',
            'address' => 'Lumajang',
            'photo_profile' => 'assets/images/photo/user.png',
            'registration_date' => date('d F Y'),
        ),
        array(
            'nim' => '2206130072',
            'name' => 'Zakaria Pranata',
            'phone_number' => '082142494272',
            'address' => 'Malang',
            'photo_profile' => 'assets/images/photo/user.png',
            'registration_date' => date('d F Y'),
        ),
        array(
            'nim' => '2206130090',
            'name' => 'Nahason Umbu Dagha',
            'phone_number' => '085334030103',
            'address' => 'Sumba Tengah',
            'photo_profile' => 'assets/images/photo/user.png',
            'registration_date' => date('d F Y'),
        ),
        array(
            'nim' => '2206130018',
            'name' => 'Iman Krisna Pane',
            'phone_number' => '081358294812',
            'address' => 'Malang',
            'photo_profile' => 'assets/images/photo/user.png',
            'registration_date' => date('d F Y'),
        ),
    );

    return $members;
}

function showMembers($members)
{
    if ($members == null)
    {
        $members = getDataMember();
    }

    $view = include 'members/index.php';
    return $view;
}

function createNewMember()
{
    $view = include 'members/create.php';
    return $view;
}

function storeNewMember()
{
    $members = getDataMember();

    // Check directory is exist
    $directory = "assets/images/photo/";
    if(!is_dir($directory)) {
        mkdir($directory);
    }

    // Upload image
    $fileTempName = $_FILES['photo_profile']['tmp_name'];
    $fileDestination = $directory . basename($_FILES["photo_profile"]["name"]);
    move_uploaded_file($fileTempName, $fileDestination);

    $data = array(
        'name' => $_POST['name'],
        'nim' => $_POST['nim'],
        'phone_number' => $_POST['phone_number'],
        'address' => $_POST['address'],
        'photo_profile' => $fileDestination,
        'registration_date' => date('d F Y')
    );
    
    array_push($members, $data);

    return showMembers($members);
}

function editMember($id)
{
    $members = getDataMember();

    $member = $members[$id];

    $view = include 'members/edit.php';
    return $view;
}

function updateMember($id)
{
    $members = getDataMember();

    // Check directory is exist
    $directory = "assets/images/photo/";
    if(!is_dir($directory)) {
        mkdir($directory);
    }

    // Upload image
    $fileTempName = $_FILES['photo_profile']['tmp_name'];
    $fileDestination = $directory . basename($_FILES["photo_profile"]["name"]);
    move_uploaded_file($fileTempName, $fileDestination);

    $data = array(
        'name' => $_POST['name'],
        'nim' => $_POST['nim'],
        'phone_number' => $_POST['phone_number'],
        'address' => $_POST['address'],
        'photo_profile' => $fileDestination,
        'registration_date' => date('d F Y')
    );
    
    $members[$id] = $data;

    return showMembers($members);
}

function deleteMember($id)
{
    $members = getDataMember();

    \array_splice($members, $id, 1);

    showMembers($members);
}
?>