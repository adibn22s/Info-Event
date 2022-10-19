@extends('layouts.auth')

@section('title', 'Add Events')

@section('content')

     <!-- Form -->
     <div id="form1">
        <br>
        <h1 class="text-4xl text-white "><b>Let's share your Event!</b></h1><br><br>
        <form>
            <label id="label1" class="text-white text-2xl mb-3 "><b>Organizer</b></label>
            <input type="text" class="glassy-text "><br>
            <label id="label1" class="text-white text-2xl mb-3 "><b>Event Title</b></label>
            <input type="text" class="glassy-text "><br>
            <label id="label1" class="text-white text-2xl mb-3 "><b>Event Category</b></label>
            <input type="radio" name="r1">
            <label id="label2" class="text-white ">Webinar</label>
            <input type="radio" name="r1">
            <label id="label2" class="text-white ">Workshop</label>
            <input type="radio" name="r1" class="ml-4">
            <label id="label2" class="text-white ">Job Fair</label><br>
            <label id="label1" class="text-white text-2xl mb-3 "><b>Date and Time</b></label>
            <input type="text" class="glassy-text "><br>
            <label id="label1" class="text-white text-2xl mb-3 "><b>Registration</b></label>
            <input type="radio" name="r2">
            <label id="label2" class="text-white ">Free</label>
            <input type="radio" name="r2">
            <label id="label2" class="text-white ">Paid</label><br>
            <label id="label1" class="text-white text-2xl mb-5 "><b>Location</b></label>
            <input type="text" class="glassy-text "><br>
            <label id="label1" class="text-white text-2xl mb-3 "><b>Event Description</b></label>
            <input type="text" class="glassy-text " style="height:120px; vertical-align:text-top"><br>
            <button id="Button1" class=" text-white text-2xl mb-10 border-2 border-white rounded-xl hover:bg-slate-100 hover:text-sky-900">  Submit Form  </button><br>
        </form>
    </div>

@endsection