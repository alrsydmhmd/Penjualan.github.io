<?php
    if($aksi=='index')
    {
        $data['distri']=$db->query($connect, "SELECT * FROM tdistributor");
        $helpers->load_view('Distributor/listdistributor.php', $data);
    }
    if($aksi=='create')
    {
        $helpers->load_view('Distributor/adddistributor.php');
    }
    if($aksi=='save')
    {
        $nmdist=$_POST['nmdist'];
        $alamat=$_POST['alamat'];
        $notelp=$_POST['notelp'];
        $simpan=$db->qry($connect, "INSERT INTO tdistributor VALUES('', '$nmdist', '$alamat', '$notelp')");
        if($simpan)
        header('location:'.$base_url.'distributor');
        else{
            header('location:'.$base_url.'distributor/create');
        }
    }
    if ($aksi=='edit') 
    {
        $iddist=$uri[4];
        $data['distri']=$db->query($connect,"SELECT * FROM tdistributor WHERE iddist=$iddist");
        $helpers->load_view('Distributor/editdistributor.php',$data);
    }
    if ($aksi=='update') 
    {
        # code...
        $iddist=$uri[4];
        $nmdist=$_POST['nmdist'];
        $alamat=$_POST['alamat'];
        $notelp=$_POST['notelp'];
        $update=$db->qry($connect,"UPDATE tdistributor SET nmdist='$nmdist', alamat='$alamat', notelp='$notelp' WHERE iddist='$iddist' ");
        if ($update) 
        {
            # code...
            header('location:'.$base_url.'distributor');
        }
        else 
        {
            header('location:'.$base_url.'distributor/edit/');
        }
    }
    if ($aksi=='delete') 
    {
        # code...
        $iddist=$uri[4];
        $delete=$db->qry($connect,"DELETE FROM tdistributor WHERE iddist='$iddist'");
        if ($delete) 
        {
            # code...
            header('location:'.$base_url.'distributor');
        }
        else 
        {
            header('location:'.$base_url.'distributor/delete/');
        }
    }
