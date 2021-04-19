@extends('Authlayout')

@section('title', 'User Update Form')

@section('style')
<style>
body{
    background: green;
}
</style>
@endsection

@section('content')
<h1>User Update Form</h1>
<form action="" method="">

    <div>
        <label for="">Name</label>
        <input type="text">
    </div>

    <div>
        <label for="">Roll</label>
        <input type="text">
    </div>
    
</form>
@endsection

@section('script')
<script> 
    alert('This is Update Page');
</script>
@endsection

