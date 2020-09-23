<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bidcube</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
    


</head>
<body>

<nav class="navbar navbar-expand-md fixed-top-sm justify-content-start flex-nowrap bg-dark navbar-dark">
    <a href="/" class="navbar-brand">Bidcube</a>
    <ul class="navbar-nav flex-row">
        <li class="nav-item active">
            <a class="nav-link px-2" href="#">Active project : 



<?php 
                  
                $indexNumber = 0;

                if ($this->session->userdata('projectnumber'))/*isset($_SESSION['projectnumber']*/
                    $indexNumber = $this->session->userdata('projectnumber');



                $submit = array('class' => 'btn btn-info');
                $hidden = array('username' => 'joe');
                echo form_open('', '', $hidden);
                echo form_dropdown('project_number', $projects_list, set_value('project_number' , $indexNumber), 'class="form-control-sm"');
                echo form_submit('submit', 'Submit', $submit);
                echo form_close();



                if (isset($_POST["project_number"])) {

                    $indexNumber = $this->input->post('project_number');
                    $this->session->set_userdata('projectnumber', $indexNumber);
  
                }

                // $activeURL = $_SERVER['REQUEST_URI'];
                // $active = substr($activeURL, -7);

?>




            </a>
        </li>
    </ul>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>



<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <!-- <a href="#" class="navbar-brand">Brand</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        -->

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?= site_url('project')?>">Project Details</a>
                <a class="nav-item nav-link" href="<?= site_url('price_list')?>">Price List</a>
                <a class="nav-item nav-link" href="<?= site_url('schema')?>">Schema</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Management</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Product list</a>
                        <a href="<?= site_url('cubes_details')?>" class="dropdown-item">Cubes details</a>
                        <a href="<?= site_url('kg_explosives_table')?>" class="dropdown-item">Kg explosives/m</a>
                        <a href="<?= site_url('page_test')?>" class="dropdown-item">Test</a>
                        <a href="#" class="dropdown-item">other</a>
                    </div>
                </div>
            </div>
            <!--
            <form class="form-inline">
                <div class="input-group">                    
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
            -->
            <div class="navbar-nav">
                <a href="<?= site_url('project/logout')?>" class="nav-item nav-link">Logout</a>
            </div>
        </div>
    </nav>
</div>

