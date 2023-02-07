@extends('layouts.partials.header')
<!-- begin spinner-->
@extends('layouts.partials.spinner')
<!-- end spinner-->

<div id="main-wrapper">
    <!-- Header start -->
    @extends('layouts.partials.nav-header')
    <!-- Header end ti-comment-alt -->
    <!-- Sidebar start -->
    @extends('layouts.partials.sidebar')
    <!-- Sidebar end -->
</div>
<x-slot name="content">
@extends('layouts.partials.footer')
