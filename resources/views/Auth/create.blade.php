@extends('Authlayout')

@section('title', 'User Creation Form')


@section('style')
<style>
body{
    background: indianred;
}
</style>
@endsection


@section('content')
<h1>User Creation Form</h1>
<form action="" method="">

    <div>
        <label for="">Name</label>
        <input type="text">
    </div>
    <br>
    <div>
        <label for="">Roll</label>
        <input type="text">
    </div>
    
</form>
@endsection

@section('script')
<script> 
    alert('This is Creation Page');
</script>
@endsection

