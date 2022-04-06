<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <title>MitraJamur.id | Admin</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow sticky-top " style="background-color: #519259;">
    <div class="container-fluid" style="margin-left: 20px; margin-right: 10px;">
        <a class="navbar-brand" href="/admin" style="font-size:1.7rem;">MitraJamur.id</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="nav-r gx-6" id="navbarNav">
        <ul class="nav justify-content-end nav-pills nav-justified">
            <li class=" nav-item gx-6">
                <a class="nav-link active rounded" href="#" style="background-color: #519259; font-size:20px;"><i class="bi bi-person" aria-hidden="true"></i> Profile</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
<div class="wrapper">
	
    <nav id="sidebar" style="padding-left: 10px;">
 	    <ul class="lisst-unstyled components">
                <li>
 	 		        <a href="/admin">
                      <i class="bi bi-house-fill" aria-hidden="true"></i>  Home</a>
 	 	        </li>
                <li>
 	 		        <a href="/product">
                      <i class="bi bi-bag-heart-fill" aria-hidden="true"></i>  Product</a>
 	 	        </li>
                <li>
 	 		        <a href="/workshop">
                      <i class="bi bi-book-half" aria-hidden="true"></i>  Workshop</a>
 	 	        </li>
                <li>
 	 		        <a href="/admin">
                      <i class="bi bi-basket-fill" aria-hidden="true"></i>  Pemesanan</a>
 	 	        </li>
                <li>
 	 		        <a href="/admin">
                      <i class="bi bi-calendar3-week-fill" aria-hidden="true"></i>  Laporan</a>
 	 	        </li>  
                <li>
 	 		        <a href="/admin">
                      <i class="bi bi-calendar3" aria-hidden="true"></i>  Jadwal Panen</a>
 	 	        </li>
            <hr class="soft my-1 bg-white">
                <li>
                    <a class="nav-link px-3 fixed-bottom mb-3" href="/">
                        <i class="bi bi-box-arrow-right" aria-hidden="true"></i>  Log Out
                    </a>
 	 	        </li>

 	    </ul>
    </nav>