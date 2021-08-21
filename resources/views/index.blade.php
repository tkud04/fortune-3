<?php
$title = "Welcome";
$pcClass = "";
?>
@extends('layout')


@section('title',"Welcome")


@section('includes')
<link rel="preload" as="image" href="images/Amsive-Hero-02.jpg.webp"   media="(min-width:768px)">
<link rel="preload" as="image" href="images/Amsive-Hero-02-mobile.jpg.webp" media="(max-width:767.98px)">
@stop

@section('bodyClass',"page-home-page noawesome hashero-video hashero")

@section('content')
@include('banner')
@stop
